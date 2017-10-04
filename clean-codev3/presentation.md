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

# Clean code

Estilo de desenvolvimento de software focado na leitura e manutenção

> Programming is the art of telling another human what one wants the computer to do Donald Knuth

----

## Porque importa?


Ler código é a parte que mais consome tempo em manutenção

Manutenção consome 70% do custo de um software

----

## Bom design se paga

![design stamina](/home/jean/projects/talks-courses/clean-codev3/designStaminaGraph.png)

----


# Skills do Clean coder

----

![Skills](/home/jean/projects/talks-courses/clean-codev3/clean_coder_mindmap.png)

----




## Nomes

nomes que comunicam intenção, não maiores

se precisar olhar o código tem que trabalhar nos nomes

"And" ou "Or" comunicam múltiplas responsabilidades


----

## Largura

Código largo é código belo

100% de correlação inversa com quantidade de símbolos

Quebre computação em múltiplas linhas

80 caracteres é o suficiente

----

## Funções

Argumentos booleanos

Mais de 3 argumentos é difícil justificar


----

## Comentários

Nomes dos autores

Explicar tradeoffs

Para expressar código

33% correlação com legibilidade

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

---

## KISS

Simples é diferente de fácil

Se você usar todo seu intelecto pra criar como vai debugar?

> Relatively simple things can tolerate a certain level of
disorganization. However, as complexity increases, disorganization becomes suicidal.  
> Robert Martin


----

## Yagni

 - Presumir adiciona complexidade desnecessária
 - Vai custar muito adicionar depois?
 - Não inclui o custo de fazer o software mais fácil de modificar

----

![Yagni](/home/jean/projects/talks-courses/clean-codev3/yagni.png)

----

## DRY


Editar modelagem e ditar diagramas?

----


## Deméter

Não brinque com os brinquedos de seus brinquedos

Mantenha o mesmo nível de abstração

----

# Reúso

Se você fizer API's adoráveis a programação se torna adorável

Componha ao invés de herdar

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

## Testes

TDD é um processo de design

Se uma escolha de design torna algo mais difícil de testar está errado

----

## Disciplinas

Review de código

Programaćão em pares

Integracao contínua

Testes automatizados


> One of our difficulties will  be the maintenance of an appropriate
> discipline, so that we do not lose track of what we are doing.
> Alan Turing


----

# Arquitetura

----

![Arquitetura clean](/home/jean/projects/talks-courses/clean-codev3/clean_coder_architecture.png)

----

## Ferramentas

- php styleguides
- phpmd
- phpcs
- codacy
- calysthenics rules
- psr's

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

Focar no 80% que não requer performance

Os melhores engenheiros são 28 vezes melhores que os piores

----


# Dúvidas?

E-mail: contato@jeancarlomachado.com.br
IRC: JeanCarloMachado

