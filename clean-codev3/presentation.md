---
title: "Clean Code"
width: 710px
height: 460px
colors:
headerEmphasis: \#fe7c00
---

# Clean Code
## Elevando o nível de desenvolvimento de software
#### Jean Carlo Machado

----

# Sobre

[CompuFácil](http://compufacil.com.br/)

- php-src
- Doctrine
- Zend Framework
- phpunit
- PHPmd
- nfephp

----

![Programming like sex](/home/jean/projects/talks-courses/clean-codev3/programming_like_sex.png)

----

## Sintomas de apodrecimento

Rigidez

Fragilidade

Imobilidade

Viscosidade

Software ruim implica em políticas ruins

----

## Janelas quebradas

---

# O grande redesign

---


![We failed](/home/jean/projects/talks-courses/clean-codev3/burn.jpg)

---

## Clean code

Estilo de desenvolvimento de software focado na leitura e manutenção

> Programming is the art of telling another human what one wants the computer to do Donald Knuth

----

# Por que manutenção?

Ler código é a parte que mais consome tempo em manutenção

Manutenção consome 70% do custo de um software


----

# Skills do Clean Coder

----

![Skills](/home/jean/projects/talks-courses/clean-codev3/clean_coder_mindmap.jpg)

----

# Readability !== Complexity {.fit}

----

# Nomes

Se precisar olhar o código tem que trabalhar nos nomes

"And" ou "Or" comunicam múltiplas responsabilidades

---

![Nomes com sentido](/home/jean/projects/talks-courses/clean-codev3/homeopatic_naming.png)

---

## Evite nomes com

 - Object
 - Thing
 - Manager
 - Component
 - Part
 - Entity
 - Item

----

## Largura

<strike>Código largo é código belo</strike>

100% de correlação inversa com quantidade de símbolos

80 caracteres é o suficiente

Quebre computação em múltiplas linhas

----

```php

$mean = array_sum($dataSet) / count($dataSet);
$varrianceSum = array_reduce($dataSet, function($accumulator, $entry) {
    return $accumulator +  pow($entry - $mean, 2);
}, 0);
$variance =  $varianceSum / count($dataSet);
$standardDeviation =  sqrt($variance);
```

----


# Comentários

Para expressar código

Nomes dos autores

Explicar tradeoffs

----

## Comentários inúteis

```php

/**
 *
 * @param $title The title of the CD
 * @param $author The author of the CD
 * @param $tracks The number of tracks of the CD
 *
 */
public addCd($title, $author, int $tracks);
```

----

## Funções

Argumentos booleanos

Mais de 3 argumentos é difícil justificar

## Classes

Metáfora do artigo

----

## Evite

 - Elses
 - Código de erros
 - Libs desconhecidas
 - Getters e setters (Deméter)
 - Dependências bidirecionais
 - Dados e comportamento
 - Editar modelagem editar diagramas? (DRY)

---

## SOLID

 - Single responsability principle (SRP)
 - Open close principle (OC)
 - Liskov substitution (LS)
 - Interface segregation (ISP)
 - Dependency inversion (DI)

----

[Shapes Bad](https://gist.github.com/jeanCarloMachado/7e0b0bb7719586494c9e65742f6367bc)

[Shapes Good](https://gist.github.com/jeanCarloMachado/d2762883d9804b0688f1c12f5a6bb5a3)

----

## Calisthenics

 - Um nível de indentação
 - Não use o else
 - Guarde primitivas em objetos
 - Uma classe de coleção não deve ter outros atributos
 - Um ponto por linha
 - Sem abreviação
 - 50 linhas por aquivo 10 arquivos por diretórios
 - Nenhuma classe com mais de 2 variáveis de instância
 - Sem getters e setters

---

![Turing](/home/jean/projects/talks-courses/clean-codev3/turing.jpg)

---

# Disciplinas

Review de código

Programação em pares

Test driven development

----

## Testes

TDD é um processo de design

Não se testa código se testa requisitos

Se uma escolha de design torna algo mais difícil de testar está errado

Testes TEM que ser rápidos /  Testes ruins podem te atrasar

----

# Arquitetura === Intenção {.fit}

----

![Arquitetura clean](/home/jean/projects/talks-courses/clean-codev3/clean_coder_architecture.png)

----

# KISS

> Relatively simple things can tolerate a certain level of
disorganization. However, as complexity increases, disorganization becomes suicidal.
> Robert Martin

----

![Overengineered](/home/jean/projects/talks-courses/clean-codev3/overengineered.jpg)

---

## YAGNI

Presumir adiciona complexidade desnecessária

Vai custar muito adicionar depois?

Não inclui o custo de fazer o software mais fácil de modificar

Ultimo momento responsável

----

![Yagni](/home/jean/projects/talks-courses/clean-codev3/yagni.png)

----

### Mais fácil com o tempo

![design stamina](/home/jean/projects/talks-courses/clean-codev3/designStaminaGraph.png)

----

## Conclusão


Focar no 80% que não requer performance

Você é o especialista

Clean code não é sobre perfeição é sobre honestidade

Lei do escoteiro

> Clean Code is a code that is written by someone who cares
> Michael Feathers

----

## Ferramentas

- php styleguides
- phpmd
- phpcs
- codacy
- object-calisthenics/phpcs-calisthenics-rules
- mamuz/php-dependency-analysis
- pdepend
- phpstan
- phan/phan

----

## Literatura

- Clean code: A hand book of Agile Software craftsmanship; Robert C. Martin
- The pragmatical programmer; Andrew Hunt
- Code Complete; Steve McConnell
- Refactoring: Improving the Design of Existing Code;
- Release It!: Design and Deploy Production-Ready Software; Michael T. Nygard

----

# Dúvidas?

Talk link:  https://goo.gl/FKzgqn

Github: https://github.com/jeanCarloMachado

Twitter: https://twitter.com/JeanCarloMachad

E-mail: contato@jeancarlomachado.com.br

