---
title: "PHP funcional além do array_map"
width: 710px
height: 460px
colors:
headerEmphasis: \#fe7c00
---

## Relevância da programação funcional
#### Jean Carlo Machado

----

- Title: Why functional programming matters
- Author:Jhon Hughes, Glasgow
- Year: 1990

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

# 1930 - Lambda

 - Alonzo Church
 - substituição de variáveis
 - funções
 - computação universal

----

# 1936 - Imperativo

 - Alan Turing
 - computação universal
 - Receita
 - assembly
 - Goto
 - side effects

----

## 1950 - Estruturado

- imperativo
- goto
- while, for, if
- reuso
- Edsger W. Dijkstra 
- Agol

----

## 1958 - Processamento de Listas

- declarativo
- lisp

----

## 1960 - Procedural 

- imperativo
- funções
- C, Go

----

## 1970 - Orientação a objetos

- imperativo
- esconde estado e expõe comportamento
- smalltalk, java

----

# Futuro ?

---

![Moore's law](/home/jean/projects/talks-courses/functional_php/moores_law.png)

----

## Programação Funcional

#### <strike> mudança de estado </strike>

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

## Conclusão

Program imperatively when needed, and functionally when possible


----

## Referências

- Why functional programming matters
- https://www.youtube.com/watch?v=7Zlp9rKHGD4
- https://www.youtube.com/watch?v=q0HRCEKAcas
- https://medium.com/@jugoncalves/functional-programming-should-be-your-1-priority-for-2015-47dd4641d6b9
- https://blog.inf.ed.ac.uk/sapm/2014/03/06/enemy-of-the-state-or-why-oop-is-not-suited-to-large-scale-software/

----

# Dúvidas?

Talk link:  https://goo.gl/FKzgqn

Github: https://github.com/jeanCarloMachado

Twitter: https://twitter.com/JeanCarloMachad

E-mail: contato@jeancarlomachado.com.br

