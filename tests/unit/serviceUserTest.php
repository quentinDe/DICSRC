<?php

class ServiceUserTest extends PHPUnit_Framework_TestCase
{

    function __construct()
    {
	$user = $this->getMockBuilder("Entity\User")->disableOriginalConstructor()->getMock();
        $user->method("getPrenom")->will($this->returnValue("Jacques"));
	$user->method("getNom")->will($this->returnValue("Chirac"));
	$user->method("getAge")->will($this->returnValue(81));

	$this->dao = $this->getMockBuilder("DAO\DAOUserSession")->disableOriginalConstructor()->getMock();
	$this->dao->method("get")->will($this->returnValue($user->getAge()));
	$this->dao->method("getUser")->will($this->returnValue($user));	
	$this->dao->method("register")->will($this->returnValue(true));	

    }

/*
*@cover Service\ServiceUser::fullName()
*/
    public function testFullName()
        {
	    $service = new Service\ServiceUser($this->dao);
	    $this->assertEquals("Jacques Chirac", $service->fullName());
	}

    public function testBirthYear()
        {
	    $service = new Service\ServiceUser($this->dao);
	    $this->assertEquals(1933, $service->birthYear());
	}

    public function testRegister()
        {
	    $service = new Service\ServiceUser($this->dao);
	    $this->assertTrue($service->register("Sans nom", "Sans prenom", 0));
	}
}
