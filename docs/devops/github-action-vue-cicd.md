# github action을 사용하여 vue CI/CD 환경 구축

- vue-cli 버전 확인(2.x와 3.x 이상은 create 방식이 다르기 때문)
``` console
$ vue -V
@vue/cli 4.1.2
```

- create vue app
``` console
$ # vue create <APP-NAME>
$ vue create vue-github-action
$ # -- 선택옵션 고르는 화면 스크린샷 첨부 --
```

- github repo와 코드 연동
  1. github에 새 리포지토리 생성
  2. 방금 다운로드 한 vue 코드 올림
  ``` console
  $ # vue create로 생성하면 초기 init이 되어있는 상태로 생성됨
  $ git log
  commit 84b51ac41b19320a32c65d1ea0bd557c938f9414 (HEAD -> master)
  Author: Jeong-Uk Park <dnr1105@gmail.com>
  Date:   Thu Jan 23 21:34:22 2020 +0900
  
  init

  $ git remote -v # remote 값 확인
  $ git remote add origin https://github.com/bin-e/vue-github-action.git
  $ git remote -v
  origin  https://github.com/bin-e/vue-github-action.git (fetch)
  origin  https://github.com/bin-e/vue-github-action.git (push)
  $ git push origin master # 만약 값이 있는 레포에 덮어쓰려면 master 대신 +master
  ```



## REFERENCES
> 간단한 API 하나를 만들어도, 문서화하는데 만든 시간만큼(혹은 그 이상) 시간과 노력이 들어갑니다. 연습은 따라치는것으로 끝났습니다. 이건 github action 기능의 1/10도 되지 않습니다. 더 멋진 flow와 action은 어딨을까요? Docs에 모든것이 있습니다. 저보다 더 훨씬 멋있고 체계적인, 효율적인 배포환경을 구축하시길 바랍니다.
- [GitHub Actions Documentation](https://help.github.com/en/actions)
- [Adding an existing project to GitHub using the command line - in help.github.com](https://help.github.com/en/github/importing-your-projects-to-github/adding-an-existing-project-to-github-using-the-command-line)
- 