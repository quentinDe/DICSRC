<?php

class ServiceUseUnit extends PHPUnit_Framework_TestCase
{
    protected $mock;

/*
* @cover Service\ServiceUser::fullName()
*/
    public function testFullName()
        {
	    $Service = new Service\ServiceUser($this->mock);
	    $this->assertEquals('John John', $Service->fullName());
	}
}
