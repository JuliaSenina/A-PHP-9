<?php

declare(strict_types=1);
require_once("autoload.php");
include("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

class TableWrapperInterfaceGetTest extends TestCase {
  public function testGet(array $expected): void {
    $user = new UserTableWrapper();
    $getResult = $user->get();
    $this->assertEquals($getResult, $expected);
  }

  public function providerGet(): array {
    return [
      'test 1' => [
        [
          ['Виталий', 'Иванов'],
          ['Кирилл', 'Петров'],
          ['Алексей', 'Сидоров']
        ],
        [
          ['Виталий', 'Иванов'],
          ['Кирилл', 'Петров'],
          ['Алексей', 'Сидоров']
        ]
      ]
    ];
  }
}
