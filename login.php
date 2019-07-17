<?PHP
class login
{
	private $pdo;
	public function contrasena(PDO $pdo)
		
    {
	$usuario="Luis";
	$contrasenaEncriptada=password_hash("Hola", PASSWORD_DEFAULT);
	$queryIngresarUsuario="INSERT INTO `users`( `contrasena`) VALUES ('$contrasenaEncriptada')";
	$resultIngresarUsuario=mysqli_query($conn,$queryIngresarUsuario);
	
	//check if form was submitted
	//$usuario = $_POST['usuario']; //get input text
	// $psw = $_POST['contrasena'];
	$query1 = "SELECT * FROM users ";
	$result = mysqli_query($conn, $query1);
	if(mysqli_num_rows($result)!=0){
	while($data= mysqli_fetch_assoc($result) ) {
  
	$contrasena = $data['contrasena'];
	
	}
	if(password_verify($contrasena)){
	
	print("Sesion Iniciada <br>");
	print($contrasena);
	}
	
	}
	}
	
}	
	
	?>
