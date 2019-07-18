<?PHP
class login
{
	private $pdo;
	public function contrasena()
		
    {
	$conn=new mysqli('localhost','root','','hello_world_test');
	$usuario="Luis";
	//$contrasenaEncriptada=password_hash("contrasena", PASSWORD_DEFAULT);
	$contrasenaEncriptada='contrasena';
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
		return($contrasena);
	if(password_verify('contrasena',$contrasena)){
	
	//print("Sesion Iniciada <br>");
	
	}
	
	}
	}
	
}	
	
	?>
