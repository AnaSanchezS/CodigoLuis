<?php

class LoginTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$this->pdo->query("CREATE TABLE users (usuario VARCHAR(50) NOT NULL, contrasena VARCHAR(200) NOT NULL)");
	
	    $contrasena = "contrasena";

    }

	
	
     
    public function testlogin()
    {
       $contrasena = new login($this->pdo);

        $this->assertEquals('contrasena', $contrasena->contrasena());
    }

    

    
}

