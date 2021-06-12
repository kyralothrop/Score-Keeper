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

			$conn = null;
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

			$conn = null;
  	}

		function createPlayer($playerName){
			try {
				$conn=useDatabase();
				if($query=$conn->prepare("INSERT INTO players (playerName) VALUES (:playerName);")){
          $queryArray = array(
            'playerName'=>strip_tags($playerName),
          );
          $query->execute($queryArray);
        }

			}
			catch(PDOException $e) {
				echo "<p>here10</p>";
  			echo "Error: " . $e->getMessage();
			}

			$conn = null;
		}
?>
