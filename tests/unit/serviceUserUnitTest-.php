<?php

class ServiceUseUnit extends PHPUnit_Framework_TestCase
{

	public $user;
	public $service;

    public function __construct()
	{
             $user = new Entity\User('Chirac', 'Jacques', 90);
	     $Service = new Service\ServiceUser('Cyprien');
	}

    public function testFullName()
        {
	    $this->assertEquals('Chirac', $user->getfullName());
	}

    public function testGetUSer()
        {
	    $this->assertEquals('Jacques', $user->getUser());    
	}

    public function testBirthYear()
        {
	    $this->assertEquals('Chirac', $user->getBirthYear());    
	}
}