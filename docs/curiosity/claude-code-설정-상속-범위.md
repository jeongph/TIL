# Claude Code 설정 파일은 하위 프로젝트에 상속될까?

> 2026-02-14 | 직접 테스트로 확인

## 궁금증

워크스페이스 구조가 다음과 같을 때:

```
~/lighthouse/              (git repo, claude 실행 위치)
├── .claude/               (settings, skills, agents, hooks)
├── .mcp.json              (MCP 서버 설정)
└── projects/
    └── handy/             (별도 git repo)
        ├── .claude/
        └── .mcp.json
```

- `lighthouse/.claude/`에 등록한 MCP, 플러그인, 에이전트를 `projects/handy/`에서도 쓸 수 있을까?
- 하위 프로젝트에서 Claude Code를 실행하면 어떤 설정을 참조할까?
- 공식 문서에 이 동작이 명시되어 있을까?

## 조사 과정

### 1단계: 공식 문서 확인

Claude Code 공식 문서의 [Settings - Configuration Scopes](https://docs.anthropic.com/en/docs/claude-code/settings) 에서 4가지 설정 스코프를 설명한다:

| 스코프 | 위치 | 적용 범위 |
|--------|------|----------|
| Managed | `/etc/claude-code/` | 머신 전체 |
| User | `~/.claude/` | 모든 프로젝트 |
| Project | `<git root>/.claude/` | 해당 레포만 |
| Local | `.claude/*.local.*` | 개인 + 해당 레포 |

하지만 **"하위 디렉토리에 별도 git repo가 있을 때 상위 설정이 상속되는지"는 문서에 명시되어 있지 않았다.**

### 2단계: 직접 테스트

#### 테스트 설계

각 레포에 구분용 MCP 서버를 project scope으로 등록하고, 실행 위치에 따라 어떤 MCP가 보이는지 확인한다.

```bash
# lighthouse에 project scope MCP 등록
cd ~/lighthouse
claude mcp add --scope project test-lighthouse echo "lighthouse"
# → lighthouse/.mcp.json 생성

# handy에 project scope MCP 등록
cd ~/lighthouse/projects/handy
claude mcp add --scope project test-handy echo "handy"
# → projects/handy/.mcp.json 생성
```

참고: `claude mcp add --scope project`는 `.claude/` 안이 아니라 **프로젝트 루트에 `.mcp.json`** 파일을 생성한다.

#### 테스트 결과

| 실행 위치 | `/mcp` 에서 보이는 서버 |
|-----------|----------------------|
| `~/lighthouse` | `test-lighthouse` |
| `~/lighthouse/projects/handy` | `test-lighthouse` + `test-handy` (둘 다 보임) |

`~/.claude.json`(User 스코프)에는 두 테스트 서버 모두 등록되지 않은 것을 확인했다. 즉, User 스코프 때문이 아니라 **상위 디렉토리의 `.mcp.json`을 탐색한 결과**다.

## 결론

### `.mcp.json`은 상위 디렉토리로 거슬러 올라가며 합쳐진다

```
projects/handy/.mcp.json  → test-handy 발견
  ↑ 상위 디렉토리 탐색
lighthouse/.mcp.json      → test-lighthouse 발견
```

- git repo 경계와 무관하게 디렉토리 계층을 따라 `.mcp.json`을 찾는다
- 상위에서 찾은 MCP 서버도 함께 로드된다
- 이 동작은 공식 문서에 명시되어 있지 않으며, 직접 테스트로 확인한 내용이다

### 실용적 의미

`~/lighthouse`에서 Claude Code를 실행하는 한, `lighthouse/.claude/`와 `.mcp.json`에 등록한 설정이 하위 프로젝트 파일을 수정할 때도 그대로 적용된다. 별도로 각 하위 레포에 설정을 복사할 필요가 없다.

### 추가 확인 필요

- `.claude/settings.json`, skills, agents, hooks도 동일하게 상위 탐색이 되는지는 미검증
- Claude Code 버전 업데이트에 따라 동작이 바뀔 수 있음
