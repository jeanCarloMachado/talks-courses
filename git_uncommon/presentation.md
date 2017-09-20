---
title: "Git: além do básico"
width: 710px
height: 460px
colors:
headerEmphasis: \#fe7c00
---

# Git: além do básico {.fit}

---

# /sobre

---


# Patches

---

## Movendo commits

```sh
git format-patch -2 6b93a -o ../
git checkout milton
git reset --hard 96c8c
git am < ../0001-milton.patch
git apply ../0002-milton-2.patch
ggit add .
git commit --amend
```
---

## Customizando

```sh
git show c0bb3 > ../computers.patch
git show 999bf >> ../computers.patch
git show d2c08 >> ../computers.patch
git apply ../computers.patch
```

----

## Comandos que geram diff

```sh
git show
git diff
git format-patch
```

---


# Procurando

----

## Quando palavra foi introduzida

```sh
git log -S searchTerm
```

---

## Quando uma linha foi introduzida

```sh
git blame -L 2,2 test.txt
```
---

## Últimas alterações em um arquivo

```sh
git log -p --follow -2 foll
```

----

## Procurar modificações em função

```sh
git log -L :try_merge_command:merge.c
```

---

## Procurar modificações em função

```sh
git log -L '/function_name/',/\ \ \ \}/:fileName
```

---

# Reescrevendo histórico

---

## Amend

```sh
git commit --amend
```

---

## Rebase

```sh
git rebase -i  HEAD~3
```

---

## Removendo itens do histórico


```sh
git filter-branch --tree-filter 'rm -rf passwords.txt' HEAD.
```

---

# Recuperando Commits

---

## O que mais?

- Fluxos de trabalho
- Hooks
- Parcial add
- Pumbling
- Git rerere

---

# Obrigado

## Dúvidas?

