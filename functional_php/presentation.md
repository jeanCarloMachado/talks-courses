---
title: "PHP funcional além do array_map"
width: 710px
height: 460px
colors:
headerEmphasis: \#fe7c00
---

## PHP funcional além do array_map
#### Jean Carlo Machado

----

# Sobre

[CompuFácil](http://compufacil.com.br/)

- php-src
- git/git
- torvald/linux
- vim/vim
- Doctrine
- Zend Framework
- phpunit

----

## O que é?

Programação sem mudança de estado

---

## História 

Before OO
1957
memoria era muito cara

---

# Ganhamos mais poder tirando poder?

----

## Programação estruturada

Proposta: tirar o goto

----

## Vantagens

Facilita a modularização
Demora mais pra escrever
o Programa fica menor
concorrência

----

## Na prática

----

## Funções de alta ordem

```php

function(callable $foo) {
    return function() use ($foo) {
        return $foo();
    }
}
```


---

## Fold

```php
$sum = function($a, $b) {
    return $a+$b;
};
$sumList = fold($sum, 0);
$this->assertEquals(21, $sumList([6, 7, 8]));
```
----

```php
function fold($callable, $init) {
    $fold = function($list) use
        ($init, $callable, &$fold) {
        if (empty($list)) {
            return $init;
        }

        $last = array_pop($list);
        return $callable(
            $fold($list),
            $last
        );
    };
    return $fold;
};
```

----

## Currying

---

## Monoid

---

## Preguiça



---

# Além


 - Point-free
 - Category
 - Functor
 - Lift
 - Lambda
 - Monad
 - Morphism
 - lens
 - Tipos algébricos
 - Option

A operação fundamental é a aplicação de funções a argumentos

----

## Ferramentas

- hlstrojny/functional-php
- functional-php/pattern-matching

----

## Referências

- Why functional programming matters
- https://www.youtube.com/watch?v=7Zlp9rKHGD4
- https://www.youtube.com/watch?v=q0HRCEKAcas

----

# Dúvidas?

Talk link:  https://goo.gl/FKzgqn

Github: https://github.com/jeanCarloMachado

Twitter: https://twitter.com/JeanCarloMachad

E-mail: contato@jeancarlomachado.com.br

