<?php

declare(strict_types=1);
require_once("autoload.php");
include("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

class TableWrapperInterfaceUpdateTest extends TestCase {
  public function testUpdate(int $id, array $values, array $expected): void {
    $user = new UserTableWrapper();
    $updateResult = $user->update($id, $values);
    $this->assertEquals($updateResult, $expected);
  }

  public function providerUpdate(): array {
    return [
      'test 1' => [
        1,
        ['name' => 'Павел'],
        ['name' => 'Павел']
      ],'test 2' => [
        2,
        ['name' => 'Марина'],
        ['name' => 'Марина']
      ]
    ];
  }
}