![150% original](bg.jpg)
## A Pragmatic
# [fit] Dependency Injection
## Proposal for GYG


#### by Jean Carlo Machado

---

## The big question: How to manage our systems complexity?

---

## One answer: Break down the problem

![](Components.pdf)

---

## But they depend on one another

![](ComponentsRelations.pdf)

---

# What Dependency Injection is?

A type of dependency inversion


![](ComponentsInverted.pdf)


----

# What Dependency Injection is?

Components receive subparts, don't define them


![](ComponentsInjected.pdf)


----

### Case 1 - No inversion of control

```php
class UpdateRecommendations {
    public function process() {
        $files = (new S3Client('mysercret', 'myregion'))->getFiles();
        $db = new Db('myhostname', 'mypassowrd');
        foreach($files as $file) {
            $db->import($file);
        }
    }
}
```

---


### Case 2 - Service Locator

```php
class UpdateRecommendations implements ServiceLocatorAware
{

    public function process() {
        $files = $this->serviceLocator->get('s3Client')->getFiles();
        foreach($files as $file) {
            $this->serviceLocator->get('db')->import($file);
        }
    }

    public function setServiceLocator($serviceLocator) {
        $this->serviceLocator = $serviceLocator;
    }
}
```

----


#### Case 3 - Dependency Injection

```php
return [
    UpdateRecommendations::class => function ($diComponent) {
        return new UpdateRecommendations($diComponent->get('s3'))
    }
    's3' => function($diComponent) {
        return new S3Client('my secret', 'my region');
    }
];
class UpdateRecommendations {
    public function __construct($db, $s3Client) {
        $this->db = $db;
        $this->s3Client = $s3Client;
    }

    public function process() {
        $files = $this->s3Client->getFiles();
    }
}
```

---

## Benefits

- Massive improve in reuse

- Reduces the refactoring cascade

- Better testability, much faster tests

- Single entry point for complexity

---

## Drawbacks

- Layer outside unit test
- Possibly a looser typed

----


## How to? Which lib?

- symfony/dependency-injection
- pimple/pimple
- phpdi/phpdi
- thephpleague/container
- zend/service-locator

----

### [Is possible to do with none](https://github.com/getyourguide/fishfarm/blob/ae59dad2a342a81d4746f6e253ebfd35dbf01fac/gyg/customer/src/DesktopBundle/Activity/Recommendations/Recommendations.php#L15)

----

## How to? Which Lib?

[Follow the principle](https://github.com/getyourguide/fishfarm/pull/11884/commits/88cdccd6e5a55346f7d3f60f7c8e55309434bcab), stick  with [PSR11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md)

[PHP-Di works well below the surface](https://github.com/getyourguide/fishfarm/pull/11880/commits/c0cf0b91e1cd7d787461b25995bfb2d353b6c7dd)

Possibly extending to other modules [1](https://github.com/getyourguide/fishfarm/pull/11880/commits/cc335f0f10cf885741c824568d8019f6e02f95ac), [2](https://github.com/getyourguide/fishfarm/pull/11884/commits/1b2c07912295330edc921b16eb49b23a077d67f2)

Go [crazy](https://github.com/getyourguide/fishfarm/pull/11884/commits/1ea17ec00a2a6daf2e5937e9bc9ac5297227ee2f) with DI

----

# A pragmatical approach

- Use DI for new code
- SL is still useful
- Instantiate DTOs directly

---

### Even better with

## [A little architecture](http://blog.cleancoder.com/uncle-bob/2016/01/04/ALittleArchitecture.html)

---

## [(Service, Gateway)](https://github.com/getyourguide/fishfarm/tree/master/gyg/customer/src/DesktopBundle/Activity/Recommendations)

- Layered architecture
- Smaller API's (ISP)
- [Test business rules not code!](https://github.com/getyourguide/fishfarm/blob/ae59dad2a342a81d4746f6e253ebfd35dbf01fac/gyg/customer/tests/Unit/DesktopBundle/Activity/Recommendations/RecommendationsTest.php#L33)


----

## Next Steps

 - Add your thoughts to the [PR](https://github.com/getyourguide/fishfarm/pull/11880/files)
 - Merge it

---


![150% original](bg.jpg)
# Questions?


