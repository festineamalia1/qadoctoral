<?php

class MhsRegulerTest extends WebTestCase
{
	public $fixtures=array(
		'mhsRegulers'=>'MhsReguler',
	);

	public function testShow()
	{
		$this->open('?r=mhsReguler/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=mhsReguler/create');
	}

	public function testUpdate()
	{
		$this->open('?r=mhsReguler/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=mhsReguler/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=mhsReguler/index');
	}

	public function testAdmin()
	{
		$this->open('?r=mhsReguler/admin');
	}
}
