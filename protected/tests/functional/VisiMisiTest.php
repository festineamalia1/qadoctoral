<?php

class VisiMisiTest extends WebTestCase
{
	public $fixtures=array(
		'visiMisis'=>'VisiMisi',
	);

	public function testShow()
	{
		$this->open('?r=visiMisi/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=visiMisi/create');
	}

	public function testUpdate()
	{
		$this->open('?r=visiMisi/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=visiMisi/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=visiMisi/index');
	}

	public function testAdmin()
	{
		$this->open('?r=visiMisi/admin');
	}
}
