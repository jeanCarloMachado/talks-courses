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
git show c0bb3da3faebb4f138792472bfe7a85dbd783a4e > ../computers.patch
git show 999bf8a9209674de3a08d69f4aa99fa393cdd2fd >> ../computers.patch
git show d2c08f7f55d4dbb568a7eadb2dece68e0fa6c6a8 >> ../computers.patch
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

git commit --amend

# Recuperando Commits

---

# Reescrevendo histórico

---


# Procurar modificações em função

```sh
git log -L '/deleteUserFromClient/',/\ \ \ \}/:\
Backend/module/Application/src/Application/Service/Client/Client.php
```

---

## O que mais?

---


# Obrigado

## Dúvidas

