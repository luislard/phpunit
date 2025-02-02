--TEST--
phpunit ../_files/DoesNotPerformAssertionsButPerformingAssertionsTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = __DIR__ . '/../../_files/DoesNotPerformAssertionsButPerformingAssertionsTest.php';

require_once __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime: %s

R                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 risky test:

1) PHPUnit\TestFixture\DoesNotPerformAssertionsButPerformingAssertionsTest::testFalseAndTrueAreStillFine
This test is not expected to perform assertions but performed 2 assertions

%s:%d

OK, but some tests have issues!
Tests: 1, Assertions: 2, Risky: 1.
