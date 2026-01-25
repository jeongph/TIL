# 배경
helper 레포에 jekyll 테마 적용하는데 home 제외하고 about, post 페이지들에 css적용이 안됨.

# 경과
1. 일단 테마 적용 완료
2. 적용했더니 메인 페이지는 css 적용이 되지만, 그 외 페이지들이 css 적용이 안됨.
3. ruby, jekyll 관련 코드 작성법 찾아봄
4. 페이지의 최상단의 `layout`에 입력된 테마를 따라가는걸로 확인
5. 해당 파일에 찾아보니 `include head.html` 문법을 보아 `_includes/head.html` 파일 내부의 코드를 따르는것으로 추측
6. `head.html` 내부의 `baseurl` 부분을 처음부터 봤어야 했는데 나중에 확인함
7. `{{}}` 문법으로 홈폴더의 `_config.yml` 내부 `baseurl`과 `url`을 다른 파일에서 이렇게 사용하는걸로 판단
8. 해당 `site.baseurl`을 `site.url`로 변경
9. 정상 동작

# 알아야 했던 것들
- jekyll 기본 문법
- 테마 적용법과 css 적용 우선확인 했어야함
- `config.yml`의 `baseurl`, `url`등 개념을 미리 찾아보고 테마 적용할껄

# 레퍼런스
- https://jekyllthemes.io/free
- https://talk.jekyllrb.com/t/css-style-not-working-in-other-pages/569
- https://stackoverflow.com/questions/33844817/css-not-loading-correctly-on-jekyll-github
- https://velog.io/@shin6403/CSS-%EC%9D%B4%EB%AF%B8%EC%A7%80%EC%A0%88%EB%8C%80%EA%B2%BD%EB%A1%9C-vs-%EC%83%81%EB%8C%80%EA%B2%BD%EB%A1%9C
- https://kairos03.github.io/jekyll/2017/09/11/learing-Up-Confusion-Around-baseurl.html

