<?php
	$file=file_exists("credentials.php");

	if($file){
  		function useDatabase() {
				require("credentials.php");
				$dsn = "mysql:host=".$mysql_hostname.";dbname=".$mysql_database;
				$debug = false;
	    	try{
						$conn= new PDO($dsn, $mysql_username,$mysql_password, array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						return $conn;
	    	}
	    	catch (PDOException $e){
	    			echo 'PDO error: could not connect to DB, error: '.$e;
	    	}
 			}
  }
	else{
   		echo"<script>window.open('setUp.php','_self') </script>";
 	}
?>
