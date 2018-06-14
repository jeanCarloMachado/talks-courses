build-lists: true
autoscale: true
slidenumbers: true

# Getting practical with FP in PHP

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

----

## Why state is bad ?

----

## Why OO is not the answer

Emulating the real world is limiting (in objects).

Software is much more flexible (and cool) than the real wold.

^Every behavior can be re-contextualized by swapping around the subject, verb, and objects. Senders can send messages to Recipients; Messages can send themselves to Recipients; and Recipients can receive messages.

----

![inline](ooworldview.png)

----

## Abstraction

When you hide your data behind a class you are force to re implement
basic things that are already available to the language.

Abstractions should proceed experience not preceed it

The only patter that should arise from looking at your  source code is patterns
of your domain.

We only know what's sure in the local level in the real world

----

## Higher order - Functions that take functions

```php
class Uuid {
    public function generate(callable $alreadyExists) : string {
        do {
            $generatedCode = $this->generateRandomId()
        } while ($alreadyExists($generatedCode));

        return $generatedCode;
    }
    private function generateRandomId() : string;
}
```

---

## Higher order - Functions that return functions


```php
private function memoizedDisplaySettings() : string {
    return function () {
        $cacheHandler = getGYGDIContainer()
            ->getCache()
            ->getHandle(
                __CLASS__,
                [\GYG\Caching\CacheInterface::MEMCACHED],
                $ttl = 3600
            );

        $cacheKey = $cacheHandler->createKey('collections_display_configuration');
        $result = $cacheHandler->get($cacheKey);

        if (!$result) {
            $result = $this->getDisplaySettings();
            $cacheHandler->set($cacheKey, $result);
        }

        return $result;
    };
}
```
---

## Lazy Evaluation - currying

No native way of doing in PHP

Makes functions behave classy.

```php
function partial(callable $callable, ...$args)
{
    $arity = (new \ReflectionFunction($callable))->getNumberOfRequiredParameters();

    return $args[$arity - 1] ?? false
        ? $callable(...$args)
        : function (...$passedArgs) use ($callable, $args) {
            return partial($callable, ...array_merge($args, $passedArgs));
        };
}
```



---

## Lazy Evaluation - generators

Never more mix infrastructure with domain:

```php
class MyRepository {

    public function getEntities() {
        for ($i = 0 ; $i < BATCH_SIZE; $i++) {
            $result  = $this->query('SELECT ... LIMIT 100');
            foreach ($result as $entry) {
                yield $entry;
            }
        }

    }
}

class MyBusinessLogic() {

    public function doX() {
        foreach($this->repository->getEnties() as $entry) {
            $this->process($entry);
        }
    }
}
```

---

## Null

```php
function myfunc() : string?;

$result = myfunc();
//sprintf's argument accepts null and fails silently
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

PIPE method

psr

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

## Serves well with

* command bus
* cqrs


---
[.build-lists: false]
## References / Recommended reading

- Why functional programming matters
- http://archive.li/uTYWZ#selection-407.912-407.919
- https://medium.com/@jugoncalves/functional-programming-should-be-your-1-priority-for-2015-47dd4641d6b9
- https://blog.inf.ed.ac.uk/sapm/2014/03/06/enemy-of-the-state-or-why-oop-is-not-suited-to-large-scale-software/
- https://www.youtube.com/watch?v=7Zlp9rKHGD4
- https://www.youtube.com/watch?v=q0HRCEKAcas

