# TIL

> TIL means "Today I Learned".

## Role

- TIL은 "이쁜 정리" 보단 "막 쓸 수 있는곳" 에 가까워야 한다
- 당연한거지만 TIL 를 빠르게 노트저럼 작성하는것인데, 이쁘게 정리해서 작성하기가 쉽지않음 -> 그렇다면 정리된것들은 어디로 ?

## Directory Structure

```
/docs
  ├── git/                  # Git, GitHub 관련
  ├── database/             # MySQL, PostgreSQL
  ├── devops/               # 인프라, K8s, CI/CD
  ├── mac-setup/            # Mac 환경 설정
  ├── programming/          # 프로그래밍 언어별
  │   ├── kotlin/
  │   └── php/
  ├── frontend/             # Vue, Jekyll 등
  ├── architecture/         # 설계, 코드리뷰
  ├── TIL/                  # 날짜별 학습 기록
  └── etc/                  # 기타
```

## Process

### If I have a questions?

1. [TIL repository](https://github.com/bin-e/TIL) 의 [Issues](https://github.com/bin-e/TIL/issues) 에 궁금한 내용 등록
2. `다큐먼트` 나 `인터넷` 등을 참조하여 해당 내용을 찾아서 이해
3. 내용을 다듬어서 다음 위치에 정리
    - 언젠가 다시 찾아 볼 것 같다 : 적절한 주제별 폴더에 저장
    - \+ 누군가에게 도움이 될 것 같다 : \+ Blog
    - 언젠가 다시 찾아볼 것 같진 않다 : Just understanding
4. 정리 끝나면 commit 날릴 때 해당 issue close, README에도 찾아가기 쉽도록 정리
5. END

## 파일명 규칙

- 한글 파일명 허용
- 공백 대신 대시(-) 사용
- 특수문자 제거
- 예: `github-ignore-재설정.md`
