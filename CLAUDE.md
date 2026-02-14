# CLAUDE.md

이 파일은 Claude Code (claude.ai/code)가 이 저장소에서 작업할 때 참고하는 가이드입니다.

## 저장소 개요

이 저장소는 TIL(Today I Learned) 문서 저장소입니다. 코드 프로젝트가 아닌 학습 기록용 마크다운 문서 모음입니다.

## 디렉토리 구조

- `/docs/git/` - Git, GitHub 관련
- `/docs/database/` - MySQL, PostgreSQL
- `/docs/devops/` - 인프라, K8s, CI/CD
- `/docs/mac-setup/` - Mac 환경 설정
- `/docs/programming/` - 프로그래밍 언어별 (kotlin, php)
- `/docs/frontend/` - Vue, Jekyll 등
- `/docs/architecture/` - 설계, 코드리뷰
- `/docs/TIL/` - 날짜별 학습 기록 (Today I Learned)
- `/docs/curiosity/` - 호기심, 궁금증을 직접 파헤쳐본 기록
- `/docs/etc/` - 기타 메모 및 기록

## 콘텐츠 가이드라인

- TIL은 "이쁜 정리"보다 "빠르게 기록"하는 것을 우선
- 파일명 규칙:
  - 한글 파일명 허용
  - 공백 대신 대시(-) 사용
  - 특수문자 제거
  - 예: `github-ignore-재설정.md`

## GitHub 템플릿

- Issue 템플릿: Question, Todo 라벨 사용
- PR 템플릿: 제목, 내용, 코드 특이점 섹션 포함

## MkDocs

### 설치

```bash
pip install mkdocs-material
```

### 로컬 서버 실행

```bash
mkdocs serve
```

http://127.0.0.1:8000 접속

### 빌드

```bash
mkdocs build
```

### 배포 (GitHub Pages)

```bash
mkdocs gh-deploy
```
