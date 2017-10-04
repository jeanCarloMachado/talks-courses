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

# É difícil de escrever bom software

----

## Sintomas de apodrecimento

 - Rigidez -> difícil de resolver problemas simples
 - Fragilidade -> coisas não relacionadas quebram
 - Imobilidade -> mais fácil reescrever uma funcionalidade do que reusar
 - Viscosidade -> é mais fácil ir em modo hacking do que preservando o design

Software ruim implica em políticas ruins

----

## Janelas quebradas

---

# O grande redesign

Falhamos na profissão

---

## Clean code

Estilo de desenvolvimento de software focado na leitura e manutenção

Compartilha muitas características com bom texto em linguagem natural



> Programming is the art of telling another human what one wants the computer to do Donald Knuth

----

# Clean Code


Ler código é a parte que mais consome tempo em manutenção

Manutenção consome 70% do custo de um software


Focar no 80% que não requer performance

----

# Skills do Clean Coder

----

![Skills](/home/jean/projects/talks-courses/clean-codev3/clean_coder_mindmap.png)

----


## Nomes

nomes que comunicam intenção, não maiores

se precisar olhar o código tem que trabalhar nos nomes

"And" ou "Or" comunicam múltiplas responsabilidades

evite redundâncias AcessViolationExceptiion

---

## Evite

 - Object
 - Thing
 - Manager
 - Component
 - Part
 - Entity
 - Item
 - Writer



----

## Largura

<strike>Código largo é código belo</strike>

100% de correlação inversa com quantidade de símbolos

Nomes descritivos

Quebre computação em múltiplas linhas

80 caracteres é o suficiente

----

## Funções

Argumentos booleanos

Mais de 3 argumentos é difícil justificar

Funções puras são mais fáceis de testar e escalar

Currying

Monoids

----

## Comentários

Nomes dos autores

Explicar tradeoffs

Para expressar código

33% correlação com legibilidade

----

```
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

## Classes

Metáfora do jornal

Cabeçalho com overview

Quanto mais o fundo mais detalhes

----

## Evite

 - nulls
 - elses
 - código de erros
 - libs desconhecidas
 - getters e setters
 - dependências bidirecionais

---

# Reúso

APIs bem planejadas são prazerosas de fazer

componha ao invés de herdar

editar modelagem e ditar diagramas? (DRY)

não brinque com os brinquedos de seus brinquedos (Deméter)

---

## SOLID

 - single responsability principle (SRP)
 - open close principle (OC)
 - liskov substitution (LS)
 - interface segregation (ISP)
 - dependency inversion (DI)

----

## Calisthenics

 - Um nível de indentação
 - Não use o else
 - Guarde primitivas em objetos
 - Uma classe de coleção não deve ter outros atributos
 - Um ponto por linha
 - Sem abreviação
 - 50 linhas por aquivo 10 arquivos por diretórios
 - nenhuma class com mais de 2 variáveis de instância
 - sem getters e setters

---

## KISS

Simples é diferente de fácil

Se você usar todo seu intelecto pra criar como vai debugar?

> Relatively simple things can tolerate a certain level of
disorganization. However, as complexity increases, disorganization becomes suicidal.  
> Robert Martin


----

## YAGNI

Presumir adiciona complexidade desnecessária

Vai custar muito adicionar depois?

Não inclui o custo de fazer o software mais fácil de modificar

----

![Yagni](/home/jean/projects/talks-courses/clean-codev3/yagni.png)

----

## Disciplinas

Review de código

Programação em pares

Test driven development

> One of our difficulties will  be the maintenance of an appropriate
> discipline, so that we do not lose track of what we are doing.
> Alan Turing


----

## Testes

TDD é um processo de design

Testes tem que ser rápidos

Não se testa código se testa requisitos

Se uma escolha de design torna algo mais difícil de testar está errado

----


# Arquitetura

Arquitetura é sobre intenção

Ultimo momento responsável

----

![Arquitetura clean](/home/jean/projects/talks-courses/clean-codev3/clean_coder_architecture.png)

----

## Mais fácil com o tempo

![design stamina](/home/jean/projects/talks-courses/clean-codev3/designStaminaGraph.png)

----

## Ferramentas

- php styleguides
- phpmd
- phpcs
- codacy
- object-calisthenics/phpcs-calisthenics-rules
- PSR's
- mamuz/php-dependency-analysis
- pdepend

----

## Literatura

Clean code: A hand book of Agile Software craftsmanship; Robert C. Martin

The pragmatical programmer; Andrew Hunt

Code Complete; Steve McConnell

Refactoring: Improving the Design of Existing Code;

Release It!: Design and Deploy Production-Ready Software; Michael T. Nygard

----

## Conclusão

Clean code não é sobre perfeição é sobre honestidade

Lei do escoteiro

Você é o especialista

> Clean Code is a code that is written by someone who cares
> Michael Feathers

----

# Dúvidas?

E-mail: contato@jeancarlomachado.com.br
IRC: JeanCarloMachado

