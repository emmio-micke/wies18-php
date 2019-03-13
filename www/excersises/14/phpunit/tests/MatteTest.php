<?php

use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';
require 'classes/matte.php';

class MatteTest extends TestCase
{
	public function testAdd()
	{
		$Matte = new Matte();
		$this->assertEquals(7, $Matte->add(3, 4));
		$this->assertFalse($Matte->add(3, 'kalle'));
	}
}

