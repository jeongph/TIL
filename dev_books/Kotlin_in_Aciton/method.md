## 함수의 정의와 호출
### 코틀린 컬렉션(Collection)
- 코틀린의 컬렉션은 표준 자바 컬렉션 라이브러리를 그대로 사용한다.
- 코틀린 컬렉션은 ~Of 키워드를 사용하여 생성한다.

```kotlin
val set = hashSetOf(1, 7, 9)
val list = arrayListOf(1, 5, 7)
val map = hashMapOf(1 to "one", 7 to "seven", 53 to "fifty-three")
val number = setOf(1, 2, 3)
```

### 디폴트 파라미터
- 코틀린에서는 함수 선언에서 파라미터의 디폴트 값을 지정할 수 있다.

```kotlin
fun <T> joinToString(
  collection: Collection<T>,
  separator: String = ", ",
  prefix: String = "", 
  postfix: String = ""
): String
```
- 자바에는 파라미터에 디폴트 값을 지정할 수 없기 때문에 코틀린 코드를 자바로 호출 할 시 `@JvmOverloads` 어노테이션을 이용하여 호환할 수 있다.

### 최상위 함수와 프로퍼티
- 코틀린은 무의미한 클래스의 사용을 줄이고, 함수를 직접 소스 파일의 최상위 수준에 작성할 수 있다.

```kotlin
package strings

fun joinToString( ... ): String{ ... }
```kotlin
- 자바에서 실행 시, 최상위 함수가 들어있던 코틀린 소스파일의 이름과 대응한 클래스를 생성하여 컴파일 한다.

- 함수와 마찬가지로 프로퍼티도 소스 파일의 최상위 수준에 작성할 수 있다.

```kotlin
val UNIX_LINE_SEPARATOR = "\n"
```

### 확장 함수와 확장 프로퍼티
- 어떤 클래스의 멤머 메소드인 것 처럼 호출할 수 있지만 사실은 그 클래스 밖에 선언된 함수나 프로퍼티
- 기존 코드와 코틀린 코트를 자연스럽게 통합하기 위한 방법론이며, 주로 기존의 자바 API를 수정하지 않고 코드 융합을 편리하게 한다.

```kotlin
package strings

fun String.lastChar(): Char = this.get(this.length - 1)
--- 
>>> println("Test".lastChar())
```
- 확장 함수를 만드려면 메소드 앞에 확장할 클래스의 이름인 수신 타입(Receiver type)을 덧붙이고, 이러한 확장 함수는 호출 대상이 되는 수신 객체(Receiver object)를 사용하여 쉽게 사용이 가능하다(코드에 사용된 this).

- 확장 함수는 다른 클래스나 함수와 동일하게 임포트하여 사용할 수 있다.

```kotlin
import strings.lastChar
// import strings.*
// import strings.lastChar as last -> SQL 처럼 as 키워드를 사용해 다른 이름으로 사용할 수 있다.

val c = "Kotlin".lastChar()
```
- 확장 함수는 클래스 네부에서만 사용할 수 있는 private나 protected 멤버는 사용할 수 없으며, 오버라이드할 수 없다. 

### 가변 인자 함수
- 메소드를 호출할 때 원하는 개수만큼 값을 인자로 넘기면 자바 컴파일러가 배열에 그 값들을 넣어주는 기능

- 코틀린에서는 파라미터 앞에 vararg 키워드를 사용하여 사용 가능하다.

```kotlin
// 라이브러리에서 listOf 함수를 확인하면 다음과 같은 구조로 되어있다.
fun listOf<T>(vararg values: T): List<T> {
  // ...
}
```
- 이미 배열에 들어있는 원소를 가변 길이 인자로 넘길 때, 코틀린은 배열을 명시적으로 풀어서 배열의 각 원소가 인자로 전달되게 해야 한다. 이때 스프레드(Spread) 연산자(*) 를 사용한다

```kotlin
fun main(args: Array<String>) {
  val list = listOf("args: ", *args)
  println(list) 
}
```
### 중위 호출
```kotlin
val map = mapOf(1 to "One", 7 to "Seven", 53 to "Fifty-three")
```
- 위 코드에서 키워드 to는 단순한 코틀린 키워드가 아닌, 일반 메소드를 중위 호출(infix call)이라는 방법으로 사용한 것이다.

- 코틀린에선 인자가 하나뿐인 인자가 하나뿐인 확장 함수에 중위 호출을 사용할 수 있으며, 사용 허용을 위해 infix 변경자를 함수 선언 앞에 기재해야 한다.

```kotlin
infix fun Any.to(other: Any): Pair(this, other)
---
1.to("One") // 일반적인 방식의 메소드 호출
1 to "One" // 중위 호출을 사용한 메소드 호출
```

### 구조 분해 선언
- `val (number, name) = 1 to “One”` 처럼 코틀린 표준 라이브러리 클래스 중 Pair을 사용하면, 구조 분해 선언(Destructuring declaration)을 통한 인자 전달을 할 수 있다.

- 동일한 원리로 `listOf`, `mapOf`에도 원하는 개수만큼 인자를 전달할 수 있다.