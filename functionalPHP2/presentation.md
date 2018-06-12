# Functional PHP

#### Jean Carlo Machado

---

## 1936: Imperative programming

### jumps: GOTO

----

## 1950: Structured programming
# ~~GOTO~~
### subrotines: while, for, if

---

## Funcional Programming
## ~~state change~~
## higher order functions, lazy evaluation

---

### Time

The art of not overriding variables.

----

## Advantages

1. Ultimate Composability
2. Implicit concurrency


----

## Composing

Software is much more flexible (cool) than the real wold.
This is the conundrum at the heart of object decomposition. Every behavior can be re-contextualized by swapping around the subject, verb, and objects. Senders can send messages to Recipients; Messages can send themselves to Recipients; and Recipients can receive messages. - 

----

## Abstraction


When you hide your data behind a class you are force to re implement
basic things that are already available to the language.

Abstractions should proceed experience not preceed it

The only patter that should arise from looking at your  source code is patterns
of your domain.

We only know what's sure in the local level in the real world

----

![inline](ooworldview.png)

----

## Higher order - Functions that take functions

---

## Higher order - Functions that return functions


---

## Lazy Evaluation - currying


---

## Lazy Evaluation - generators

---

## Null

```php
function myfunc() : string?;

//usage
$result = myfunc();
echo sprintf("this value: %s should not be empty", $result);
```

---

## Force Action!

```php
final class Maybe
{
    private function __construct(bool $isJust, $value = null);
    public static function just($a) : self;
    public static function nothing() : self;
    public function isJust() : bool ;
    public function isNothing() : boo;
    public function match( callable $just, callable $nothing) {
        return $this->isJust ? $just($this->value) : $nothing();
    }
}
```

---

While this on other lands:

```hs
type Maybe = Just a | Nothing
```

----


## Use named partial filters instead of foreach

Foreach accepts any size of complexity inside itself.

Named Map, filter, reduce blocks breaking well define api's

---


### Type checking

```php
class Bar {}

function test(Bar ...$values)
{
	print_r($values);
}

test(...[new Bar,new Bar]);
```

---

## Wrapping up:

It was the best of times, it was the worst of times,

Your job is not to solve problems

Your job is to define the problems in a way that they solve themselves

---

## No silver bullet

Functional when possible

Imperative when necessary

---

## References / Recommended reading

- Why functional programming matters
- http://archive.li/uTYWZ#selection-407.912-407.919
- https://medium.com/@jugoncalves/functional-programming-should-be-your-1-priority-for-2015-47dd4641d6b9
- https://blog.inf.ed.ac.uk/sapm/2014/03/06/enemy-of-the-state-or-why-oop-is-not-suited-to-large-scale-software/
- https://www.youtube.com/watch?v=7Zlp9rKHGD4
- https://www.youtube.com/watch?v=q0HRCEKAcas

