# EC2 설치 삽질 기록
> 이거 다시 정리 해야 함.

## 초기 셋팅
- 설치 과정 자체는 어렵지 않으니까 생략. ~~맨날 만들고 없애고 만들고 없애기만 했기 때문에~~
- 일단은 EC2, AMI2 이미지를 올렸다. (단순히 CentOS가 편하고 AMI가 최적화가 잘 되어있을 것이라 판단.)

## 패키지 설치
- java, php, postgresql은 ALE에 포함되어있어서 바로 설치(래퍼런스 참고)
- node는 돌팔이가 너무많아서 AWS 공식문서랑 nodejs 공식문서 참고해서 설치(래퍼런스 참고)

## REFERENCES
### Setting
1. [AWS 설명서](https://docs.aws.amazon.com/)
2. [Amazon EC2 인스턴스 스토어](https://docs.aws.amazon.com/ko_kr/AWSEC2/latest/UserGuide/InstanceStorage.html)
3. [Amazon Linux 2를 실행하는 EC2 인스턴스의 Extras 라이브러리에서 소프트웨어 패키지를 설치하려면 어떻게 해야 합니까?](https://aws.amazon.com/ko/premiumsupport/knowledge-center/ec2-install-extras-library-software/)
4. [자습서: Amazon EC2 인스턴스에서 Node.js 설정](https://docs.aws.amazon.com/ko_kr/sdk-for-javascript/v2/developer-guide/setting-up-node-on-ec2-instance.html)
5. [Node Version Manager](https://github.com/nvm-sh/nvm/blob/master/README.md#installing-and-updating)
6. [HOW TO CREATE USERS AND GROUPS IN CENTOS7?](https://manage.accuwebhosting.com/knowledgebase/2959/How-to-create-users-and-groups-in-CentOS7.html)
7. [Java version history](https://en.wikipedia.org/wiki/Java_version_history)
8. [PostgreSQL](https://en.wikipedia.org/wiki/PostgreSQL)
9. [CREATE DATABASE](https://www.postgresql.org/docs/10/sql-createdatabase.html)
10. [Nodejs homepage](https://nodejs.org/ko/)
11. [How to Check for Listening Ports in Linux (Ports in use)](https://linuxize.com/post/check-listening-ports-linux/)
12. [NVM, Node Version Manager 소개](https://dgkim5360.tistory.com/entry/node-version-manager-introduction)
13. [nvm: Cannot uninstall currently-active node version](https://stackoverflow.com/questions/38775287/nvm-cannot-uninstall-currently-active-node-version)
14. [How to uninstall nvm?](https://github.com/nvm-sh/nvm/issues/298)
15. [패키지 매니저로 Node.js 설치하기](https://nodejs.org/ko/download/package-manager/#debian-and-ubuntu-based-linux-distributions-enterprise-linux-fedora-and-snap-packages)
16. [NodeSource Node.js Binary Distributions](https://github.com/nodesource/distributions/blob/master/README.md)
17. [PostgreSQL 설치](https://www.lesstif.com/pages/viewpage.action?pageId=31850584)
18. [Setting up PostgreSQL](https://github.com/snowplow/snowplow/wiki/Setting-up-PostgreSQL)
19. [RHEL/CentOS 7 systemctl 사용법](https://www.lesstif.com/pages/viewpage.action?pageId=24445064)
20. [nodejs/help](https://github.com/nodejs/help/wiki/Installation)
21. [CentOS 7에서 포트 열기](https://okky.kr/article/276568)

### Vue
1. [프로덕션 배포 팁](https://kr.vuejs.org/v2/guide/deployment.html)
2. [nuxt.js](https://github.com/nuxt/nuxt.js)
3. [Nuxt.js 개념부터 설치까지 빠르게 배우기](https://kdydesign.github.io/2019/04/10/nuxtjs-tutorial/)
4. [크롬 V8](https://ko.wikipedia.org/wiki/%ED%81%AC%EB%A1%AC_V8)
5. [서버 사이드 렌더링 그리고 클라이언트 사이드 렌더링](https://asfirstalways.tistory.com/244)
6. [배민찬은 Vue를 어떻게 사용하나요?](http://woowabros.github.io/experience/2018/06/07/vue-story-of-baminchan.html?utm_source=gaerae.com&utm_campaign=%EA%B0%9C%EB%B0%9C%EC%9E%90%EC%8A%A4%EB%9F%BD%EB%8B%A4&utm_medium=social&fbclid=IwAR0kxdbbS9Wtqe_iO6SgrlddeMK9Tm3NayExOp_Qqyhvv7H2q4TWbxS2F-8)
7. [서버사이드 렌더링](https://kr.vuejs.org/v2/guide/ssr.html)
8. [vue-cli](https://github.com/vuejs/vue-cli)
9. [프로덕션 배포](https://ko.nuxtjs.org/guide/commands/#%ED%94%84%EB%A1%9C%EB%8D%95%EC%85%98-%EB%B0%B0%ED%8F%AC)

### others
- [자습서: Amazon Linux 2에 LAMP 웹 서버 설치](https://docs.aws.amazon.com/ko_kr/AWSEC2/latest/UserGuide/ec2-lamp-amazon-linux-2.html)
- [해결과제 : 아니 이 에러는 도저히 모르겠다;;](https://stackoverflow.com/questions/31472755/sudo-npm-command-not-found)