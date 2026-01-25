# 깃허브 폴더명 대소문자만 변경하기
- 일단 기본적으로 깃허브는 대\/소문자를 구분하지만, 로컬에서 폴더명만 변경한다고 git에 반영되진 않는다.

## 대소문자를 변경하는 빠른방법
``` sh
$ git mv {pre-file-name} {new-file-name}
$ git add .
$ git commit -n "Chnage file name"
$ git push
```
- 일단 예시로 들긴 했는데, `mv` 옵션에 `--force` 혹은 `-f`를 사용할 수 있다.
  - `-f`: Force renaming or moving of a file even if the target exists
- 종종 단순한 대/소문자 변경의 경우 (e.g. `git mv Posts posts`) `fatal: 'Posts'의 이름 바꾸기가 실패했습니다: Invalid argument` 에러가 발생할 수 있는데, 이때는 그냥 아예 다른 이름으로 변경했다가 다시 원하는 폴더명으로 변경하는 방법으로 해결 가능하다. (e.g. `git mv Posts temp` -> `git mv temp posts`)
