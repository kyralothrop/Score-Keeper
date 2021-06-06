<?php
	require ("database.php");

  	function getAllGames() {
			$conn=useDatabase();
  		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if($query = $conn->prepare("SELECT * FROM games;")){
	  	  $query->execute();
    		$items = $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query;
      }
      else{
          $error = $query->errorInfo();
          echo "MYSQL Error:". $error[2];
        }
  	}

		function getAllPlayers() {
			$conn=useDatabase();
  		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if($query = $conn->prepare("SELECT * FROM players;")){
	  	  $query->execute();
    		$items = $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query;
      }
      else{
          $error = $query->errorInfo();
          echo "MYSQL Error:". $error[2];
        }
  	}
?>
