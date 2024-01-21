# introduction

- 당연히 홈페이지에서 설치해도 되지만, 그럼 brew 명령어로 관리할 수 없음 (삭제, 업데이트)
- brew 명령어로 `brew install node` 할수도 있는데, 그럼 Current (최신) 버전이 설치됨 

# method

- brew 의 다른버전 의존성 확인

<img width="630" alt="image" src="https://github.com/jeongph/TIL/assets/13309303/278b0046-c464-430a-863f-91d775341e73">

- 터미널에서 명령어 실행

``` sh
brew install node@20 # 현재 홈페이지 LTS 가 20.11.0
echo 'export PATH="/opt/homebrew/opt/node@20/bin:$PATH"' >> ~/.zshrc # brew install node 로 설치하면 자동으로 잡아주지만, 버전을 명시해주면 해당 버전을 default 로 지정해줘야 함
source ~/.zshrc # bash 재설정
npm --version # 동작 확인 
```

# References

- https://stackoverflow.com/questions/40000509/how-to-install-lts-version-of-nodejs-via-homebrew
- https://formulae.brew.sh/formula/node
