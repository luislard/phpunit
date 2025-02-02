--TEST--
Possibility to migrate XML configuration file from PHPUnit 8.5 format is detected
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--configuration';
$_SERVER['argv'][] = __DIR__ . '/_files/possibility-to-migrate-from-85-is-detected/phpunit.xml';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       PHP %s
Configuration: %sphpunit.xml

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 PHPUnit warning:

1) Your XML configuration validates against a deprecated schema. Migrate your XML configuration using "--migrate-configuration"!

WARNINGS!
Tests: 1, Assertions: 1, Warnings: 1.
