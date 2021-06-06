<!DOCTYPE html>
<html lang ="en">
  <head>
    <style>
      /*modal*/
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }
    </style>
  </head>
  <body>
    <a href='../index.php'>Main Page</a>
    <h1>List of Challengers</h1>
    <button id="addPlayerBtn">Add a Player</button>

    <!-- Add Player Modal-->
    <div id="addPlayerModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Modal</p>
      </div>
    </div>

    <?php
			require 'functions.php';	//must have functions.php file
			$players= getAllPlayers();

			if (is_object($players)) {	//checks if the items variable is an object
				echo "<table id='playersList'><thead><tr><th>Player Name</th></thead>";
				echo "<tbody>";

					while($row=$players->fetch(PDO::FETCH_ASSOC)){
						echo "<tr>";
						echo "<td>".$row['playerName']."</td>";
						echo "</tr>";
					}

					echo "</tbody></table>";
			}

      ?>


    <script>
      var addPlayerModal = document.getElementById("addPlayerModal");
      var btn = document.getElementById("addPlayerBtn");
      var span = document.getElementsByClassName("close")[0];

      //open the modal
      btn.onclick = function() {
        addPlayerModal.style.display = "block";
      }

      // close the modal
      span.onclick = function() {
        addPlayerModal.style.display = "none";
      }

      // click outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == addPlayerModal) {
          addPlayerModal.style.display = "none";
        }
      }
    </script>
  </body>
</html>
