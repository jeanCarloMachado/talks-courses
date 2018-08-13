## A progressive 
# [fit] Dependency Injection
## Proposal for GYG


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
$di[UpdateRecommendations::class] = function($di) {
    return new UpdateRecommendations($di['db'], $di['s3Client'])
};

class UpdateRecommendations
{
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

## Is possible to do with none

^ Show only the DI boundry of the microservice

----

## Which Lib?

- zend/service-locator
- pimple/pimple
- thephpleague/container
- phpdi/phpdi

---

## PSR11

^ being PSR11 compabile it actually does not matter much

----

# PHP-DI

 - PSR'11 compatible
 - Support inference
 - Support annotation
 - Support composing SL
 - Support caching of closures

^ Show the first pr commit with the setup
^ Then show the usage examples (last commit)
^ Then show the real example (last commit)

----

# A progressive approach

- Use DI for new code
- SL is still useful
- Instantiate DTOs directly

---

### Even better with


## A little architecture


^ Emphasize that this is optional

---

## (Service, Gateway)


- Interface oriented software development
- Smaller API's ISP
- Test business rules not code!
- Even easier to change parts

^ layered architecture
^ a non-corruption layer
^ Show the microservice again
^ gateway simplifies complex api's, talk the language of the service and do a single simple thing
^ the service contains business rules
^ behind the gateway could be anything
^ this allows true tdd


---

# References

- [PSR11](https://www.php-fig.org/psr/psr-11/meta/)
- [A little architecture](http://blog.cleancoder.com/uncle-bob/2016/01/04/ALittleArchitecture.html)
