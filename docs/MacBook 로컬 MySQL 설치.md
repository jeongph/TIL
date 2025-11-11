- MacBook 로컬 MySQL 설치
``` sh
# LTS(8.4)
brew install mysql@8.4
# brew install mysql 로 설치하면 최신(9.x) 버전 설치됨 
```

- 다운로드 완료 후 서비스 시작
- 과거에는 `mysql.server start` 로 썼었는데, `brew services` 를 사용하면 macOS 의 launchd 로 데몬 관리를 함 
``` sh
brew services start mysql@8.4
```

- 초기 보안 셋업 (`mysql_secure_installation` 사용)
- 실행 이후에는 그냥 커맨드라인 따라서 Yes/No 선택하면됨 
``` sh
# 링크가 안되어있어서, brew install 위치에 있는 mysql_secure_installation 를 직접 호출 
"$(brew --prefix mysql@8.4)"/bin/mysql_secure_installation

# 1. Would you like to setup VALIDATE PASSWORD component? -> No (비밀번호 강제 안함)
# 2. 루트 비밀번호 설정 -> my-secret-pw (docker mysql root 초기 비밀번호랑 똑같음)
# 3. Remove anonymous users? -> Yes (익명계정 mysql -u '' 사용안함)
# 4. Disallow root login remotely? -> Yes (루트 계정 remote 접근 제한)
# 5. Remove test database and access to it? -> Yes (test db 삭제)
# 6. Reload privilege tables now? -> Yes (설정을 반영할까요 ?) 
```

