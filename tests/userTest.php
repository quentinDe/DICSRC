<?php

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testGetPrenom()
        {
	    $user = new User('Chirac', 'Jacques', 81);
            $this->assertEquals('Jacques', $user->getPrenom());

	}
}
