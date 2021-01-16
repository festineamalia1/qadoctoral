<?php

class MhsNonRegulerTest extends WebTestCase
{
	public $fixtures=array(
		'mhsNonRegulers'=>'MhsNonReguler',
	);

	public function testShow()
	{
		$this->open('?r=mhsNonReguler/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=mhsNonReguler/create');
	}

	public function testUpdate()
	{
		$this->open('?r=mhsNonReguler/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=mhsNonReguler/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=mhsNonReguler/index');
	}

	public function testAdmin()
	{
		$this->open('?r=mhsNonReguler/admin');
	}
}
