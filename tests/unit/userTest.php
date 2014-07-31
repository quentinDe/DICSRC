<?php



class UserTest extends PHPUnit_Framework_TestCase
{
/*
* @cover Entiry\User::GetPrenom()
*/
    public function testGetPrenom()
        {
            $user = new Entity\User('Chirac', 'Jacques', 81);
	    $this->assertEquals('Jacques', $user->getPrenom());
	}

/*
* @cover Entiry\User::GetNom()
*/
    public function testGetNom()
        {
            $user = new Entity\User('Chirac', 'Jacques', 81);
	    $this->assertEquals('Chirac', $user->getNom());
	}
}
