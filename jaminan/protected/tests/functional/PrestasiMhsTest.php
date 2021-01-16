<?php

class PrestasiMhsTest extends WebTestCase
{
	public $fixtures=array(
		'prestasiMhs'=>'PrestasiMhs',
	);

	public function testShow()
	{
		$this->open('?r=prestasiMhs/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=prestasiMhs/create');
	}

	public function testUpdate()
	{
		$this->open('?r=prestasiMhs/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=prestasiMhs/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=prestasiMhs/index');
	}

	public function testAdmin()
	{
		$this->open('?r=prestasiMhs/admin');
	}
}
