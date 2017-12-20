<?php 
session_start();
include 'parts/head.php';
 ?>


<?php
	if (isset($_SESSION['id'])) {
		echo("<h1>All Accounts</h1>");
	}else{
 		include 'parts/welcome.php';
	}

  ?>		

<?php include 'parts/footer.php'; ?>