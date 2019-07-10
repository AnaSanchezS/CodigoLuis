<?php

class LoginTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $contrasena = "contrasena";

    }

	
	
     
    public function testlogin()
    {
        $contrasena = new contrasena($this->pdo);

        $this->assertEquals('contrasena', $contrasena->contrasena());
    }

    

    
}

