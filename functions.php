<?php 
require_once 'connection.php';


function registerUser($username,$password,$email)
{
	global $db;
	$sql = "INSERT INTO users VALUES (NULL,'$username','$password','$email',0)";
	$query = mysqli_query($db, $sql);

	return $query;

}

function loginUser($email,$password)
{
	global $db;
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$query = mysqli_query($db,$sql);

	if (mysqli_num_rows($query) == 1) {
		$result = mysqli_fetch_assoc($query);
		return ['id' => $result['id'],'name'=>$result['username']];
	}else{
		echo "User Not found";
	}
}