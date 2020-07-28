<!DOCTYPE html>
<html lang ='en'>
	<head>
		<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">									<!--datatable-->
		<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>		<!--datatable-->
	</head>
	<body>
		<h1>Score Keeper</h1>
	</body>
</html>

<?php
	require 'functions.php';	//must have functions.php file
	$games= getAllGames();

	if (is_object($games)) {	//checks if the items varible is an object
		echo "<table id='gamesList'><thead><tr><th>Game</th></thead>";
		echo "<tbody>";

			while($row=$games->fetch(PDO::FETCH_ASSOC)){
				echo "<tr>";
				echo "<td>".$row['gameName']."</td>";
				echo "</tr>";
			}

			echo "</tbody></table>";
	}
?>


<script>

	$(document).ready( function () {
	    $('#gamesList').DataTable();
	} );

</script>
