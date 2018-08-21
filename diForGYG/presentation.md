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

----

## [Is possible to do with none](https://github.com/getyourguide/fishfarm/pull/11029/files#diff-e4a1d123347a52b3c4110af23cba461c)

^ Show only the DI boundry of the microservice

----

## Which Lib?

- zend/service-locator
- pimple/pimple
- thephpleague/container
- phpdi/phpdi
- symfony/dependency-injection

----


## Why not symphony's?

Too verbose

Hard to add simple callable's

Binds you to it

----

## Symfony 's way

```sh
$container->register(NewsletterManager::class)
->addArgument(new Reference('templating'))
->setFactory(array(
    new Reference(NewsletterManagerFactory::class),
    'createNewsletterManager',
));
```
----

## Sanity's way

```sh
NewsletterManager::class => function($c) {
    return new Reference($c->get('templating'), $c->get('previous_user_count') + 1 );
}
```



----

## A suggestion: PHP-DI

 - PSR'11 compatible
 - Support inference
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

