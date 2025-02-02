--TEST--
#2137: Error message for invalid dataprovider
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = __DIR__ . '/2137/Issue2137Test.php';

require_once __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime: %s

There were 2 PHPUnit errors:

1) PHPUnit\TestFixture\Issue2137Test::testBrandService
The data provider specified for PHPUnit\TestFixture\Issue2137Test::testBrandService is invalid
Data set #0 is invalid

%s:%d

2) PHPUnit\TestFixture\Issue2137Test::testSomethingElseInvalid
The data provider specified for PHPUnit\TestFixture\Issue2137Test::testSomethingElseInvalid is invalid
Data set #0 is invalid

%s:%d

--

There was 1 PHPUnit warning:

1) No tests found in class "PHPUnit\TestFixture\Issue2137Test".

No tests executed!
