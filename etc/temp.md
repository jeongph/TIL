# 마크다운이 나온김에 정리 해 보는 마크다운 사용법
마크다운(Markdown)은 "쉽게 쓰고 쉽게 읽히기"를 지향한다고 합니다. 이젠 생소한 언어가 아니고, 실제로 Github README나 Tello처럼 주변에서 쉽게 ".md"파일 형식을 볼 수 있습니다.
반갑게 Tistory에서도 본격적으로 마크다운 형식으로 글쓰기 지원을 시작 했습니다. 그래서 다시 한번 복습도 해볼 겸 간단한 마크다운 사용법을 적어볼까 합니다.

- - -
# 0. 기본
기본적으로 마크다운에서 1번의 "\n"(개행)은 의미가 없습니다. 다음 줄까지 함께 인식 합니다. 단, 2번 개행하면 문장이 바뀐것으로 인식하여 기존의 문장 형식을 따라가지 않습니다.

> 입력

<pre><code>안녕
하세요</code></pre>

>출력

안녕
하세요

## 0-1. 개행
기본적으로 개행을 나타내기 위해선 2번을 띄워쓰면 가능 합니다.

> 입력

<pre><code>안녕  하세요.</code></pre>

>출력

안녕  하세요.

- - -
# 1. 제목(Headers)
기본적으로 마크다운은 HTML로 재변환을 가능하게 하기때문에 HTML태그가 인식되기도하고, HTML에 자주 사용되는 태그와 매칭되는 기능들을 볼 수 있습니다.
기본적으로 \<h1>~\<h6>같은 헤더는 다음과 같이 \#으로 사용 합니다.

> 입력

<pre><code># Header 1
## Header 2
### Header 3
#### Header 4
##### Header 5
###### Header 6 ######
(잘 알려주진 않지만 Header 6 처럼 사용하면 HTML과 비슷하게 OPEN 태그와 CLOSE 태그를 둘다 쓸 수 있습니다.)
</code></pre>

> 출력

# Header 1 #
## Header 2 ##
### Header 3 ###
#### Header 4 ####
##### Header 5 #####
###### Header 6 ######

- - -
# 2. 인용(blockquoting)
인용은 말그대로 다른 문장등을 인용(가져다가 쓸 때 사용합니다.)

> 입력
<pre><code>> 인용문
>> 2중인용문
>
> 이어서 사용하는 인용문
</code></pre>

> 출력

> 인용문
>> 2중인용문
>
> 이어서 사용하는 인용문

- - -
# 3.목록(Lists)
목록은 \*, +, -의 기호를 사용하여 Unordered List를, 숫자를 사용하여 Ordered List를 만들 수 있습니다.

## Unordered List
>입력

<pre><code>- 수준 1
    * 수준 2
        + 수준 3
        - 수준 3
</code></pre>

>출력

- 수준 1
    * 수준 2
        + 수준 3
        - 수준 3

## Ordered List
> 입력

<pre><code>1.  테스트
2.  테스트
3.  테스트
8.  테스트
(숫자를 갑자기 높게 수정해도 차례대로 출력됩니다.)
</code></pre>

> 출력

1.  테스트
2.  테스트
3.  테스트
8.  테스트

- - -
# 4. 소스코드(Code blocks)
코드 자체를 인식하게 할 수 있습니다. 코드 자체는 " **\`** (역따옴표) "기호를 많이 사용하지만 필자는 HTML과 동일하게 \<pre>와 \<code> 태그를 사용한 코드 출력을 사용한다.

> 입력

\<pre>\<code>
functions test()
{
    echo "테스트 출력";
}
\</code>\</pre>

> 출력

<pre><code>functions test()
{
    echo "테스트 출력";
}
</code></pre>

- - -
# 5. 가로선(Horizontal rules)
HTML에서 사용하는 \<hr />태그와 동일하게 가로선을 그어서 문장을 분할 할 수 있습니다.

> 입력

<pre><code>* * *
***
*****
- - -
---------------------
</code></pre>

> 출력

* * *
***
*****
- - -
---------------------

# 6. 링크(Links)
HTML의 \<a> 태그처럼 특정 주소로 링킹 할 수 있습니다.

> 입력

<pre><code>[이 글씨로 하이퍼링크](옮길 주소)  
혹은 이렇게 글씨를 쓰다가 [이곳](https://bin-e.tistory.com/27)으로 갈 수 있습니다.
</code></pre>

> 출력

[이 글씨로 하이퍼링크](https://bin-e.tistory.com/27)  
혹은 이렇게 글씨를 쓰다가 [이곳](https://bin-e.tistory.com/27)으로 갈 수 있습니다.

## 6-1. 참조 링크(Reference)
특이하게 기본적인 링크 이외에도 레퍼런스 기능(논문에 사용하는 그 레퍼런스 맞습니다.)을 제공하고 있습니다.

> 입력

<pre><code>[이 글씨로][레퍼런스 ID]의 글을 참조 했습니다.  
EX> 이렇게 글씨를 쓰다가 [이곳][bin]으로 갈 수 있습니다.

[bin] : https://bin-e.tistory.com/27 "Title"
(다른 문장으로 인식되도록 중간에 개행을 반드시 해야하고, 마우스를 올리면 "Title"이 나옵니다.)
</code></pre>

> 출력

[이 글씨로][레퍼런스 ID]의 글을 참조 했습니다.  
EX> 이렇게 글씨를 쓰다가 [이곳][bin]으로 갈 수 있습니다.

[bin]: https://bin-e.tistory.com/27 "Title"

- - -
# 7. 강조(Emphasis)
기본적으로 \*(별)표시와 \_(언더바)로 강조를 표기 합니다.

> 입력

<pre><code>이 문장을 *기울여 강조* 합니다.  
이 문장도 _기울여 강조_ 합니다.
 
이 문장을 **두껍게 강조** 합니다.  
이 문장도 __두껍게 강조__ 합니다.
</code></pre>
(기본적으로 *나 _ 1개는 HTML의 \<em> 태그에, **나 __의 2개는 \<strong> 태그에 해당합니다.

> 출력

이 문장을 *기울여 강조* 합니다.  
이 문장도 _기울여 강조_ 합니다.
  
이 문장을 **두껍게 강조** 합니다.  
이 문장도 __두껍게 강조__ 합니다.

- - -
# 8. 단일 코드(Code)
코드 단일 첨부의 경우 \<code> 태그로 어렵게 사용하지 않아도 위에 언급 한 것 처럼 \`(역따옴표) 표현 가능 합니다.

> 입력

<pre><code>이것을 출력문(`printf()`)이라고 합니다.  
``단일 행 코드를 표현하려면 2개를 사용합니다.``</code></pre>

> 출력

이것을 출력문(`printf()`)이라고 합니다.  
``단일 행 코드를 표현하려면 2개를 사용합니다.``

- - -
# 9. 이미지 첨부(Images)
링크를 조금 응용하여 앞에 !(느낌표)를 사용하면 외부 이미지를 첨부 할 수 있습니다.

> 입력

<pre><code>![마크다운 이미지](https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Markdown-mark.svg/220px-Markdown-mark.svg.png)</code></pre>

> 출력

![마크다운 이미지](https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Markdown-mark.svg/220px-Markdown-mark.svg.png)

# 10. 기타

> 태그 기호를 그대로 출력하기
<pre><code> 앞에 이 녀석들을 붙이면 그대로 출력
\   backslash
`   backtick
*   asterisk
_   underscore
{}  curly braces
[]  square brackets
()  parentheses
#   hash mark
+   plus sign
-   minus sign (hyphen)
.   dot
!   exclamation mark
</code></pre>

> 링크 바로 만들기
<pre><code>화살괄호를 사용하면 바로 링크 생성</code></pre>
`<https://bin-e.tistory.com/27>`  
``<dnr1105@gmail.com>``

<https://bin-e.tistory.com/27>

<dnr1105@gmail.com>

# References
\[1] : [마크다운 공식 사이트][1]  
\[2] : [마크다운 위키백과][2]

[1]: https://daringfireball.net/projects/markdown/ "Markdown 공식 사이트"
[2]: https://ko.wikipedia.org/wiki/%EB%A7%88%ED%81%AC%EB%8B%A4%EC%9A%B4 "Markdown wiki"