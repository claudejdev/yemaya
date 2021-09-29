# Yemaya
Déesse mère de tous les esprits.

- [Yemaya](#yemaya)
  - [Intent](#intent)
  - [HowTo](#howto)
  - [Features](#features)
  - [Appendix](#appendix)
    - [VS Code Extensions](#vs-code-extensions)
    - [Tools](#tools)
    - [Sources](#sources)
  - [Todo](#todo)
## Intent

Un template de site en PHP selon l'architecture MVC et avec le framework CSS Bootstrap (5.1.1 en CDN).

## HowTo
 WIP
## Features
 WIP
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

## Appendix
### VS Code Extensions
    Extensions Added:
  - [php-cs-fixer, by Frank Terragna](https://marketplace.visualstudio.com/items?itemName=fterrag.vscode-php-cs-fixer)
  - [PHP Namespace Resolver, by Mehedi Hassan](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)
  - [PHP Extension Pack, by Felix Becker](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack) (Includes [PHP Debug](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug) & [PHP IntelliSense](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-intellisense))
  - [PHP Phan (Analyzer), by tyson andre](https://marketplace.visualstudio.com/items?itemName=TysonAndre.php-phan)
  - [PHP Symbols, by lin yang](https://marketplace.visualstudio.com/items?itemName=linyang95.php-symbols)
  - [PHPStan, by swordev](https://marketplace.visualstudio.com/items?itemName=swordev.phpstan)
  - [PHP Snippets, by VSCSnippets](https://marketplace.visualstudio.com/items?itemName=vsc-snippets.vsc-php-snippets)
  - [PHP Intelephense, by Ben Mewburn](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)

### Tools
- [Bootstrap](https://getbootstrap.com/)
- [GitKraken](https://www.gitkraken.com/)

### Sources
- [L'architecture MVC | Ecole H2PROG](https://ecole.h2prog.com/courses/846335/lectures/15448687)
- [*PHP 7 avancé*, Eyrolles, 2016](https://www.eyrolles.com/Informatique/Livre/php-7-avance-9782212677201/)
- [PHP: Classes and Objects - Manual](https://www.php.net/manual/en/language.oop5.php/)
- *PHP – La suite*, Technobel / BStorm
  
## Todo
- populate the How To section
- refactor the code, cf. PHP Mess Detector
 use PHP Mess Detector on my Laravel controller 
Reference: https://phpmd.org/rules/cleancode.html#staticaccess
- better understand how the htaccess works