---
title: "Git: avançado"
width: 710px
height: 460px
colors:
headerEmphasis: \#fe7c00
---

## Git Avançado

#### Jean Carlo Machado

---

# Sobre

[CompuFácil](http://compufacil.com.br/)

- php-src
- git/git
- torvald/linux
- vim/vim
- Doctrine
- Zend Framework
- phpunit

---

# Git básico

```sh
git pull
kit add .
git commit -m ""
git push
```

----

## Além

```sh
ls /usr/lib/git-core/ | wc -l
173
```
---

# Patches

- Extrair
- Importar
- Alterar
- Usar para deploys

----

## Comandos que geram diff

```sh
git show
git diff
git format-patch
git log
```

---

# Reescrita

---

# Bisect

---

## Rerere

#### reuse recorded resolution

----

## Código movido


---

## Pumbling

---

#### Blob



```php
$content = "hi there";
$header = "blob ".strlen($content)."\0";
$store =  $header.$content;
$sha1 = sha1($store);
$path = '.git/objects/'
    .substr($sha1, 0, 2)
    .'/'.substr($sha1, 2);
$compressedContent = gzcompress($store);
if (!file_exists(dirname($path))) {
    mkdir(dirname($path));
}
file_put_contents($path, $compressedContent);
```

---

![](/home/jean/projects/talks-courses/git_advanced/direct-acyclic-graph.svg)

---

![](/home/jean/projects/talks-courses/git_advanced/internal-structure.svg)

---


# Dúvidas?

Github: https://github.com/jeanCarloMachado

Twitter: https://twitter.com/JeanCarloMachad

E-mail: contato@jeancarlomachado.com.br

