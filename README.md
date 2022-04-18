# Blitz-PHP Coding Standard

[![Unit Tests](https://github.com/blitz-php/coding-standard/actions/workflows/test-phpunit.yml/badge.svg)](https://github.com/blitz-php/coding-standard/actions/workflows/test-phpunit.yml)
[![Coding Standards](https://github.com/blitz-php/coding-standard/actions/workflows/test-coding-standards.yml/badge.svg)](https://github.com/blitz-php/coding-standard/actions/workflows/test-coding-standards.yml)
[![PHPStan Static Analysis](https://github.com/blitz-php/coding-standard/actions/workflows/test-phpstan.yml/badge.svg)](https://github.com/blitz-php/coding-standard/actions/workflows/test-phpstan.yml)
[![PHPStan level](https://img.shields.io/badge/PHPStan-max%20level-brightgreen)](phpstan.neon.dist)
[![Coverage Status](https://coveralls.io/repos/github/blitz-php/coding-standard/badge.svg?branch=develop)](https://coveralls.io/github/blitz-php/coding-standard?branch=develop)
[![Latest Stable Version](http://poser.pugx.org/blitz-php/coding-standard/v)](https://packagist.org/packages/blitz-php/coding-standard)
[![License](https://img.shields.io/github/license/blitz-php/coding-standard)](LICENSE)
[![Total Downloads](http://poser.pugx.org/blitz-php/coding-standard/downloads)](https://packagist.org/packages/blitz-php/coding-standard)

Cette bibliothèque contient les normes de codage officielles de Blitz-PHP basées sur [PHP CS Fixer][1] et alimenté par [Nexus CS Config][2]. Les règles sont inspirées de celles de [CodeIgniter](https://github.com/CodeIgniter/coding-standard)

## Installation

Vous pouvez ajouter cette bibliothèque en tant que dépendance locale par projet à votre projet en utilisant [Composer](https://getcomposer.org/):

    composer require blitz-php/coding-standard

Si vous n'avez besoin de cette bibliothèque que pendant le développement, par exemple pour exécuter la suite de tests de votre projet, alors vous devez l'ajouter en tant que dépendance de développement:

    composer require --dev blitz-php/coding-standard

## Configuration

Pour commencer, créons un fichier `.php-cs-fixer.dist.php` à la racine de votre projet.

```php
<?php

use BlitzPHP\CodingStandard\Blitz;
use Nexus\CsConfig\Factory;

return Factory::create(new Blitz())->forProjects();

```

Cette configuration minimale renverra une instance par défaut de `PhpCsFixer\Config` contenant toutes les règles applicables pour Blitz.
Ensuite, dans votre terminal, lancez la commande suivante :

```console
$ vendor/bin/php-cs-fixer fix --verbose
```

## Ajout d'en-têtes de licence

La configuration par défaut ne configurera pas d'en-tête de licence dans les fichiers. Les en-têtes de licence peuvent être particulièrement utiles aux auteurs de la bibliothèque de faire valoir le droit d'auteur. Pour ajouter des en-têtes de licence dans vos fichiers PHP, vous pouvez simplement fournir votre nom et le nom de la bibliothèque. En option, vous pouvez également fournir votre adresse e-mail et l'année de licence de départ.

```diff
 <?php

 use BlitzPHP\CodingStandard\Blitz;
 use Nexus\CsConfig\Factory;

-return Factory::create(new Blitz())->forProjects();
+return Factory::create(new Blitz())->forLibrary(
+    'Blitz-PHP framework',
+    'Blitz-PHP Foundation',
+    'contact@blitz-php.com',
+    2022,
+);

```

## Fournir des règles et des options prioritaires

La liste des règles activées se trouve dans la classe [`BlitzPHP\CodingStandard\Blitz`][3]. Si vous pensez que la règle ne s'applique pas à vous ou que vous souhaitez la modifier, vous pouvez le faire en fournissant un tableau des nouvelles règles via le second paramètre de `Factory::create()`.

De même, vous pouvez modifier davantage l'instance `PhpCsFixer\Config` renvoyée en utilisant les options disponibles.
Toutes les options disponibles sont entièrement prises en charge par [Nexus CS Config][2] et résumées en fournissant simplement un tableau de paires clé-valeur dans le troisième paramètre de `Factory::create()`.

```diff
 <?php

 use BlitzPHP\CodingStandard\Blitz;
 use Nexus\CsConfig\Factory;

-return Factory::create(new Blitz())->forProjects();
+return Factory::create(new Blitz(), [], [
+    'usingCache' => false,
+])->forProjects();

```

Vous pouvez consulter le propre [`.php-cs-fixer.dist.php`][4] de cette bibliothèque pour vous inspirer de la façon dont cela est fait.
Pour une documentation plus détaillée sur toutes les options disponibles, vous pouvez consulter [ici][2].

## Contribution

Toutes les formes de contributions sont les bienvenues !

Étant donné que les règles ici seront propagées et utilisées au sein de l'organisation Blitz-PHP, toutes les règles proposées et les modifications apportées aux règles existantes doivent faire l'objet d'une PR de preuve de concept (POC) envoyé en premier au référentiel de [Blitz-PHP][5] avec les modifications possibles des styles de code qui y sont appliqués. Une fois accepté là, vous pouvez envoyer un PR ici pour appliquer ces règles.

## Licence

Ce travail est open-source sous la licence MIT.

[1]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
[2]: https://github.com/NexusPHP/cs-config
[3]: src/Blitz.php
[4]: .php-cs-fixer.dist.php
[5]: https://github.com/blitz-php/framework
