## A Pragmatic
# [fit] Dependency Injection
## Proposal for GYG


#### by Jean Machado


^ collect feedback at this point
^ a way of moving forward without redoing everything

---

# What DI is?

A form of inversion of control

The code receives dependencies, does not define or find them

Composition to the next level

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
    UpdateRecommendations::class => function($di) { //build recommendations here }
];

class UpdateRecommendations {
    public function __construct($db, $s3Client) {
        $this->db = $db;
        $this->s3Client = $s3Client;
    }

    public function process() {
        $files = $this->s3Client->getFiles();
        foreach($files as $file) {
            $this->db->import($file);
        }
    }
}
```

---

## Benefits

- Single entry point for complexity

- Is obvious when something needs to be refactored

- Better testability

- Easy to change software parts

^ Is a gateway for other practices
^ it's is also obvious when some class cannot accept more behavior

----


## Which Lib?

- zend/service-locator
- pimple/pimple
- thephpleague/container
- phpdi/phpdi
- symfony/dependency-injection

----

## [Is possible to do with none](https://github.com/getyourguide/fishfarm/pull/11029/files#diff-e4a1d123347a52b3c4110af23cba461c)

^ Show only the DI boundry of the microservice

----

## Why not symphony's?

Too verbose

Hard to add simple callable's

Binds you to it

----

## A suggestion: [PHP-DI](https://github.com/getyourguide/fishfarm/pull/10867/commits/2567835a7a511fe4b43fefe15e81d7c61e209863)

 - [PSR'11 compatible](https://github.com/getyourguide/fishfarm/pull/10867/commits/a9ae2e17d2a7ede7b14528aa739fdd50aeadc147)
 - [Support inference](https://github.com/getyourguide/fishfarm/pull/10867/commits/1a54b2cf25e04797b165b8c06caad3f92d4cd524)
 - Support annotation
 - Support composing SL
 - Support caching of closures

^ Show the first pr commit with the setup
^ Then show the usage examples (last commit)
^ Then show the real example (last commit)

----

# A pragmatical approach

- Use DI for new code
- SL is still useful
- Instantiate DTOs directly

---

### Even better with


## A little architecture


^ Emphasize that this is optional

---

## ([Service](https://github.com/getyourguide/fishfarm/pull/11029/files#diff-e4a1d123347a52b3c4110af23cba461c), [Gateway](https://github.com/getyourguide/fishfarm/pull/11029/files#diff-d2287a4a507015ac44fc1244c93b4bd1))


- Interface oriented software development
- Smaller API's ISP
- [Test business rules not code!](https://github.com/getyourguide/fishfarm/pull/11029/files#diff-1699622f112e4a5ae27328916cf8b027)
- Even easier to change parts

^ layered architecture
^ a non-corruption layer
^ Show the microservice again
^ gateway simplifies complex api's, talk the language of the service and do a single simple thing
^ the service contains business rules
^ behind the gateway could be anything
^ this allows true TDD

----

## Next Steps

 - Merge my PR
 - A training?
 - Start playing

---

# References

- [PSR11](https://www.php-fig.org/psr/psr-11/meta/)
- [A little architecture](http://blog.cleancoder.com/uncle-bob/2016/01/04/ALittleArchitecture.html)

