<?php

class LoginTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
       $conn=new mysqli("localhost", "registro", "", "registro") or die("ConnectionFailed");
	$this->pdo = new PDO($GLOBALS['localhost'], $GLOBALS['registro'], $GLOBALS['']);
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

