<!DOCTYPE html>
<html lang ='en'>
	<head>
		<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">									<!--datatable-->
		<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>		<!--datatable-->
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

	</head>
	<body>
		<h1>Score Keeper</h1>
		<p><a href='../players.php'>List of players</a></p>
		<?php
			require 'functions.php';	//must have functions.php file
			$games= getAllGames();

			if (is_object($games)) {	//checks if the items varible is an object
				echo "<table id='gamesList'><thead><tr><th>Game</th></thead>";
				echo "<tbody>";

					while($row=$games->fetch(PDO::FETCH_ASSOC)){
						echo "<tr>";
						echo "<td><a href='../gamePage.php'>".$row['gameName']."</a></td>";
						echo "</tr>";
					}

					echo "</tbody></table>";
			}

			// <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newGameModal">
		  // 	Launch demo modal
			// </button>
			//
			// <div class="modal fade" id="newGameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  // 	<div class="modal-dialog" role="document">
		  //   	<div class="modal-content">
		  //     	<div class="modal-header">
		  //       	<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  //       	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  //         	<span aria-hidden="true">&times;</span>
		  //       	</button>
		  //     	</div>
		  //     	<div class="modal-body">
		  //       	<p>Modal body text goes here.</p>
		  //     	</div>
		  //     	<div class="modal-footer">
		  //       	<button type="button" class="btn btn-primary">Save changes</button>
		  //       	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  //     	</div>
		  //   	</div>
		  // 	</div>
			// </div>

		?>

		<script>

			$(document).ready( function () {
			    $('#gamesList').DataTable();
			} );

			// $('#myModal').on('shown.bs.modal', function () {
		  // 	$('#myInput').trigger('focus')
			// })

		</script>

		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
	</body>
</html>
