# Yemaya
Déesse mère, la mère de tous les esprits.
## Intent

Un template de site en PHP selon l'architecture MVC et avec le framework CSS Bootstrap (5.1.1 en CDN).

**HowTo**

**Features**

_Convention d'écriture_ :
- [Symfony](https://symfony.com/doc/current/contributing/code/standards.html), [Yoda style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html)
- Le nom des fichiers qui sont des classes prennent une majuscule à la première lettre


    Note : Les *Symfony Coding Standards* sont basés sur le [PSR-12](https://www.php-fig.org/psr/psr-12/). Le Yoda style force une erreur de syntaxe lorsque l'on utilise, à tort, l'opérateur d'assignation (=) à la place de l'opérateur de comparaison (==).
    Cf. [Yoda Conditions: To Yoda or Not to Yoda](https://knowthecode.io/yoda-conditions-yoda-not-yoda "Yoda Conditions: To Yoda or Not to Yoda by Tonya Mork")


_URL complète_
Cf. [Get the full URL in PHP](https://www.geeksforgeeks.org/get-the-full-url-in-php/ "Get the full URL in PHP - GeeksforGeeks")

permet de s'assurer que le chemin part toujours de la racine du site, même avec un niveau supplémentaire.
Défini dans index.php
Utilisé dans les views/common
    href="<?php echo URL; ?>
    src="<?php echo URL; ?>


_Alertes multiples_

<!-- l'alerte est affichée si elle n'est pas vide dans la variable de session -->

Défini dans template.php
Utilisé dans mainController.controller.php, par une fonction stockée dans toolbox.class.php

## Extensions VS Code

## Outils

[Bootstrap](https://getbootstrap.com/)
[GitKraken](https://www.gitkraken.com/)