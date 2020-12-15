## 공통
- 코틀린은 var x = 1로 작성 가능하지만 자바와 마찬가지로 정적 타입(statically typed) 지정 언어이다. 
- 다만 위와 같은 문법이 가능한 이유는, 변수를 정의할 때 코틀린이 이 변수의 타입이 Int임을 문맥을 고려해 자동으로 결정하기 때문인데, 이 기능을 코틀린 타입 추론(type inference)라고 한다.
- 코틀린은 객체지향과 함수형 프로그래밍 스타일을 모두 지원한다.
- 코틀린은 무료이며, 오픈소스다.

## 함수(Function) 기초
```kotlin
fun main( args: Array<String> ) {
  println("Hello, Kotlin")
}
```
- 함수를 선언할 때 fun 키워드를 사용한다.
- 파라미터 이름 뒤에 그 타입을 쓴다. ex> args: Array<String>
- 함수를 단독으로 클래스 밖에 (최상위 수준에) 정의할 수 있다.

## 식(Expression)
- 자바의 if문은 아무런 값을 만들어내지 않는 “문”이지만, 코틀린에서 if는 다른 식의 하위 요소로 계산에 참여할 수 있는 “식”으로 사용된다.
- 따라서 코틀린의 if는 반환값이 존재하고 자바의 “3항 연산자”와 비슷한 로직으로 동작한다
```kotlin
Java: (a > b) ? a : b
Kotlin: if( a > b ) a else b // 둘다 동일한 결과
```
- 어떤 함수의 본문이 중괄호로 둘러싸인 함수를 블록이 본문인 함수라고 하고, 등호와 식으로 이뤄진 함수를 식이 본문인 함수라고 한다.

```
// 1. 블록이 본문인 함수
fun max(a: Int, b: Int): Int {
  return if(a > b) a else b
}

// 2. 식이 본문인 함수
fun max(a: Int, b: Int): Int = if(a > b) a else b // 이런식으로 if식으로 축약 가능
=> fun max(a: Int, b: Int) = if(a > b) a else b // 코틀린의 특징인 타입추론으로 한번더 축약 가능
```
- if 이외에도 코틀린에서 루프를 제외한 대부분의 제어 구조는 반환값을 가지는 “식”으로 존재하며 이 특성을 이용하여 아주 간결한 표현을 구현할 수 있다.

## 변수(Variable)
```kotlin
val sum = 42
var sum = 42
val str1: String? = null
val str2: String = ""
```
- 초기화와 동시에 선언 한 경우, 코틀린이 자동으로 타입추론하여 알맞는 타입으로 지정해준다.
- val(value)는 변경이 불가능한 참조를 저장하며, 초기화하면 변경이 불가능하다. (자바의 final 변수와 동일)
- var(variable)은 변경이 가능한 참조를 저장하며, 일반적인 변수로 사용 가능하다.
- 코틀린은 기본적으로 null이 될 수 없는 값을 추적하며, 변수 타입이 null을 허용하게 하려면 line3처럼 ? 키워드를 추가해야 한다.

## 문자열 템플릿
```kotlin
fun main( args: Array<String> ) {
  val name = "Kotlin"
  println("Hello, ${name}")
  println("Hello, ${if(args.size > 0) args[0] else "someone"} !")
}
```
- 코틀린은 문자열 리터럴(““) 안에서 변수를 사용할 수 있다.
- 기본적으로, `$`문자를 앞에 추가하여 해당 위치에 다른 문자열을 치환할 수 있으며, 중괄호({})로 둘러싸서 문자열 템플릿 안에 복잡한 식도 넣을 수 있다.

## 클래스(Class)
```kotlin
/** Java */
public class Person {
  private final String name;
  
  public Person(String name) {
    this.name = name;
  }
  
  public String getName() {
    return this.name;
  }
}
```
- 위와 같은 자바 코드를 아래처럼 간략한 코틀린 클래스로 표현할 수 있다.
```kotlin
/** Kotlin */
class Person(
  val name: String
)
```
- 코틀린에서 “코드가 없이 데이터만 저장하는 클래스”를 값 객체(value object)라 부른다.
- 코틀린은 기본 접근 지정자(가시성 변경자)가 public이므로, public로 선언해야 하는경우 생략이 가능하다.

## 프로퍼티(Property)
> Tip. 자바에서는 데이터를 클래스상단의 필드(field)에 저장하며, 데이터에 접근하도록할 수 있는 접근자 메소드(accessor method)를 제공하는데, 보통 필드값을 읽기위한 게터(Getter)와 필드값을 변경하기 위한 세터(Setter)로 이루어진다. 여기서 필드(field)와 접근자 메소드들(Getter & Setter)을 묶어 프로퍼티(property)라고 부른다.

```kotlin
class Person( 
  val name: String,
  var isMarried: Boolean
)
```
- 코틀린은 프로퍼티를 언어 기본 기능으로 내장하여 제공한다.
- 코틀린에서 val로 선언한 프로퍼티는 읽기 전용으로 Getter만을 내장(굳이 따로 선언하지 않아도 사용할 수 있도록)하며, var로 선언한 프로퍼티는 변경 가능으로 Getter와 Setter를 모두 내장하여 지원한다.

```kotlin
fun main( args: Array<String> ) {
  var person = Person("test", true)
  person.name = "test2"
  println(person.name) // "test2"가 출력
  person.isMarried = false
  println(person.isMarried) // "false"가 출력
}
```

- 프로퍼티 앞에 get이나 set 키워드를 사용하지 않아도 코틀린이 자동으로 게터와 세터를 호출해준다.
- 코틀린의 객체 생성시 자바에서 사용하던 new 키워드를 사용하지 않는다.
- 프로퍼티의 바로 하단에 get이나 set 키워드를 선언하여 게터와 세터의 커스터마이징이 가능하다.

## enum과 when
```kotlin
enum class Color(
  val r: Int,
  val g: Int,
  val b: Int
) {
  RED(255, 0, 0), ORANGE(255, 165, 0), YELLOW(255, 255, 0), GREEN(0, 255, 0),
  BLUE(0, 0, 255), INDIGO(75, 0, 130), VIOLET(238, 130, 238)
  ;
  
  fun rgb() = (r * 256 + g) * 256 + b
}
```

- 코틀린에서 enum은 자바의 열거형과 다르게 프로퍼티나 메소드를 정의할 수 있으며, 따라서 class 키워드를 사용한다.
- Line 8에서 주의 할 점은, 코틀린 열거형 뒤에 함수(메소드)를 정의 할 경우 상수와 메소드 사이에 반드시 세미콜론(;)을 넣어야 한다.
```kotlin
fun getWarmth(color: Color) = when(color) {
  Color.RED, Color.ORANGE, Color.YELLOW -> "warm"
  Color.GREEN -> "neutral"
  Color.Blue, Color.INDIGO, Color.VIOLET -> "cold"
}
```

- 코틀린의 when 문법은 자바의 switch와 비슷하나, 조건에 상수만 사용할 수 있는 Java와 다르게 객체를 사용할 수 있기때문에 더 효과적이다. 
- 분기 조건에 상수(리터럴)만 사용할 수 있는 자바 switch와 달리, 코틀린 when은 임의의 객체를 사용할 수 있다.
```kotlin
fun mix(c1: Color, c2: Color) = when (setOf(c1, c2)) {
  setOf(RED, YELLOW) -> ORANGE
  setOf(YELLOWBLUE) -> GREEN
  setOf(BLUE, VIOLET) -> INDIGO
  else -> throw Exception("Dirty color")
}
```
- when은 인자 없이 사용이 가능하다
```kotlin
fun mixOptimized(c1: Color, c2: Color) = when{
  (c1 == RED && c2 == YELLOW) || (c1 == YELLOW && c2 == RED) -> ORANGE
  (c1 == YELLOW && c2 == BLUE) || (c1 == BLUE && c2 == YELLOW) -> GREEN
  else -> throw Exception("Dirty color")
}
```

## 스마트 캐스트(Smart casting)
- 코틀린은 어떤 변수가 원하는 타입인지 검사하고 나면 굳이 변수를 원하는 타입으로 캐스팅하지 않아도 원하는 타입으로 사용할 수 있도록 컴파일러가 알아서 캐스팅 해주는데, 이를 스마트 캐스트(smart cast)라 한다.
- 코틀린에선 is를 사용해 변수 타입을 검사한다.
```kotlin
interface Expr
class Num(val value: Int) : Expr
class Sum(val left: Expr, val right: Expr) : Expr
---

fun eval(e: Expr): Int {
  if( e is Sum ) {
    return eval(e.right) + eval(e.left) // 별도의 캐스팅을 하지 않았지만, e 변수를 바로 Sum 타입으로 사용 가능하다
  }
}
```

## 이터레이션(Iteration)

- 코틀린에서 for는 자바의 for-each루프에 해당하는 형태만 존재한다 → 코틀린의 for는 C#의 foreach과 마찬가지로 for (item in collection){ }의 형태를 취한다.
```kotlin
for (item in collection){
  print(item)
}
```
- 코틀린에서의 while은 Java의 while과 동일하다.
- for 루프가 없기 때문에 기존의 초기화, 조건문, 증감식을 대신하여 범위(range)라는 개념을 사용한다.
- 범위는 기본적으로 두 값으로 이뤄진 구간이며, .. 연산자로 시작 값과 끝 값을 연결하여 만든다.
```kotlin
val oneToTen = 1..10
val aToZ = 'a'..'z' // 문자에도 사용할 수 있다
```

- `..` 연산자는 기본적으로 시작값과 끝값을 모두 포함하는 “닫힌 범위”이기 때문에, 마지막 값을 포함하지 않는 “반-폐구간”에 대하여 이터레이션 할 경우 until 함수를 사용할 수 있다.
```kotlin
for(x in 0..size-1) // 이 경우를
for(x in 0 untile size) // 이렇게 사용 가능
```

-어떤 범위에 속한 값을 일정한 순서로 이터레이션 하는 경우를 수열(progression)이라고 한다.
- 순열을 사용하지 않을 경우, downTo, step 등의 키워드를 사용하여 역방향 수열이나 증감식을 추가할 수 있다.
- 
```kotlin
for(i in 1..10 step 2){} // 2의 증가값을 가지는 for loop
for(x in 100 downTo 1){} // 100에서 1까지 역방향을 가지는 역방향 수열
```

- 컬렉션 객체인 맵(map)에 대한 이터레이션을 효율적으로 사용할 수 있다.

```kotlin
val binaryReps = TreeMap<Char, String>()
for((letter, binary) in binaryReps) { // binaryReps 객체의 key/value가 letter/binary에 쌍으로 각각 대입된다
  println("$letter = $binary")  
}
```

- in 연산자를 사용하여 어떤 값이 범위 내에 속해있는지 검사할 수 있다.
```kotlin
fun isDigit(c: Char) = c in '0'..'9'
>>> println(isDigit('1')) // true
```

## 예외처리(Exception)

- 코틀린의 예외(Exception)도 자바의 처리방법과 비슷하게, 던지(throw)거나 잡아(catch)서 처리할 수 있다.
- 자바와 다르게, 코틀린의 throw는 “문”이 아니고 “식”이라 리턴값이 존재하며 다른 식에 포함될 수 있다.
```kotlin
val percentage = if(number in 0..100) number
  else throw IllegalArgumentException("A percentage value must be between 0 and 100: $number")

try, catch, finally를 사용하여 자바의 방식과 동일하게 예외를 처리할 수 있다.

fun readNumber(reader: BufferedReader): Int? { // No need to write "throws IOException"
  try {
    val line = reader.readLine()
    return Integer.parsent(line)
  } catch(e: NumberFormatException) {
    return null
  } finally {
    reader.close()
  }
}
```

-미묘한 차이점은 체크 예외(발생할 수 있는 예외)를 명시적으로 모두 처리해야 하는 자바와 다르게, 코틀린은 체크 예외(checked exception)와 언체크 예외(unchecked exception)를 구별하지 않는다. → 잡아내도 되고 그렇지 않아도 된다.
- 코틀린의 try나 catch 또한 if나 when 처럼 “식”이기 때문에 리턴값이 존재하고, 다른 변수에 대입하거나 식에 포함할 수 있다.

```kotlin
val number = try {
  Integer.parseInt(reader.readLine())
} catch(e: NumberFormatException) {
  null
}
```