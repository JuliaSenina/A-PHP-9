<?php

declare(strict_types=1);
require_once("autoload.php");
include("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

class TableWrapperInterfaceInsertTest extends TestCase {
  public function testInsert(array $values, mixed $expected): void {
    $user = new UserTableWrapper();
    $insertResult = $user->insert($values);
    $this->assertEquals($expected, $insertResult);
  }

  public function providerInsert(): array {
    return [
      'test 1' => [
        ['Инна', 'Золотова'],
        null
      ]
    ];
  }
}