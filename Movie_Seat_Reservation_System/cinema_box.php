<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body>
  
    <?php
		ini_set ('display_errors', 1);
		error_reporting (E_ALL | E_STRICT);
		
		// Get the values from the $_POST array:
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$ticket = $_POST['qty'];

		print nl2br ("Hi, thank you for your order $firstname $lastname!\n
		You have booked $ticket ticket(s). Now choose the seat location of your choice.");
	?>
	  
	  
    <div class="movie-container">
      <label>Select seats for movie: </label>
      
	
	<select id="movie">
        <option value="10">
		<?php
		
		$mov = $_POST['movie_title'];
		echo $mov;
		?>
		</option>
	</select>
	
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
	<form action="orderTicket.php" method="post">
      <input type="hidden" name="firstname" value= "<?php echo $firstname;?>">
	  <input type="hidden" name="lastname" value= "<?php echo $lastname;?>">
	  <input type="hidden" name="ticket" value= "<?php echo $ticket;?>">
	  <div class="row"><input type="hidden" name="seats" value="A">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
		<div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div></input>

      <div class="row"><input type="hidden" name="seats" value="B">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
		<div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div></input>

      <div class="row"><input type="hidden" name="seats" value="C">
        <div class="seat" value="C1"></div>
        <div class="seat" value="C2"></div>
        <div class="seat" value="C3"></div>
        <div class="seat" value="C4"></div>
        <div class="seat" value="C5"></div>
        <div class="seat" value="C6"></div>
        <div class="seat occupied" value="C7"></div>
        <div class="seat occupied" value="C8"></div>
		<div class="seat" value="C9"></div>
        <div class="seat" value="C10"></div>
        <div class="seat" value="C11"></div>
        <div class="seat" value="C12"></div>
        <div class="seat" value="C13"></div>
        <div class="seat" value="C14"></div>
        <div class="seat" value="C15"></div>
        <div class="seat" value="C16"></div>
      </div></input>

      <div class="row"><input type="hidden" name="seats" value="D">
        <div class="seat" value="D1"></div>
        <div class="seat" value="D2"></div>
        <div class="seat" value="D3"></div>
        <div class="seat" value="D4"></div>
        <div class="seat" value="D5"></div>
        <div class="seat" value="D6"></div>
        <div class="seat" value="D7"></div>
        <div class="seat" value="D8"></div>
		<div class="seat" value="D9"></div>
        <div class="seat" value="D10"></div>
        <div class="seat" value="D11"></div>
        <div class="seat" value="D12"></div>
        <div class="seat" value="D13"></div>
        <div class="seat" value="D14"></div>
        <div class="seat" value="D15"></div>
        <div class="seat" value="D16"></div>
      </div></input>

      <div class="row"><input type="hidden" name="seats" value="E">
        <div class="seat" value="E1"></div>
        <div class="seat" value="E2"></div>
        <div class="seat" value="E3"></div>
        <div class="seat occupied" value="E4"></div>
        <div class="seat occupied" value="E5"></div>
        <div class="seat" value="E6"></div>
        <div class="seat occupied" value="E7"></div>
        <div class="seat occupied" value="E8"></div>
		<div class="seat occupied" value="E9"></div>
        <div class="seat occupied" value="E10"></div>
        <div class="seat" value="E11"></div>
        <div class="seat" value="E12"></div>
        <div class="seat occupied" value="E13"></div>
        <div class="seat occupied" value="E14"></div>
        <div class="seat" value="E15"></div>
        <div class="seat" value="E16"></div>
      </div></input>

      <div class="row"><input type="hidden" name="seats" value="F">
        <div class="seat" value="F1"></div>
        <div class="seat" value="F2"></div>
        <div class="seat" value="F3"></div>
        <div class="seat" value="F4"></div>
        <div class="seat occupied" value="F5"></div>
        <div class="seat occupied" value="F6"></div>
        <div class="seat occupied" value="F7"></div>
        <div class="seat" value="F8"></div>
		<div class="seat" value="F9"></div>
        <div class="seat" value="F10"></div>
        <div class="seat" value="F11"></div>
        <div class="seat" value="F12"></div>
        <div class="seat" value="F13"></div>
        <div class="seat" value="F14"></div>
        <div class="seat" value="F15"></div>
        <div class="seat" value="F16"></div>
      </div></input>
	
	<div class="row"><input type="hidden" name="seats" value="G">
        <div class="seat" value="G1"></div>
        <div class="seat" value="G2"></div>
        <div class="seat" value="G3"></div>
        <div class="seat" value="G4"></div>
        <div class="seat" value="G5"></div>
        <div class="seat" value="G6"></div>
        <div class="seat" value="G7"></div>
        <div class="seat" value="G8"></div>
		<div class="seat" value="G9"></div>
        <div class="seat" value="G10"></div>
        <div class="seat" value="G11"></div>
        <div class="seat occupied" value="G12"></div>
        <div class="seat occupied" value="G13"></div>
        <div class="seat occupied" value="G14"></div>
        <div class="seat" value="G15"></div>
        <div class="seat" value="G16"></div>
      </div></input>
	
	<div class="row"><input type="hidden" name="seats" value="H">
        <div class="seat" value="H1"></div>
        <div class="seat" value="H2"></div>
        <div class="seat" value="H3"></div>
        <div class="seat" value="H4"></div>
        <div class="seat" value="H5"></div>
        <div class="seat" value="H6"></div>
        <div class="seat" value="H7"></div>
        <div class="seat" value="H8"></div>
		<div class="seat" value="H9"></div>
        <div class="seat" value="H10"></div>
        <div class="seat" value="H11"></div>
        <div class="seat" value="H12"></div>
        <div class="seat" value="H13"></div>
        <div class="seat" value="H14"></div>
        <div class="seat occupied" value="H15"></div>
        <div class="seat occupied" value="H16"></div>
      </div></input>
    </div>

	<a href="orderTicket.php"><button input type="submit" class="glow-on-hover" type="button">Place Order</button></a>
	</form>
	
    <p class="text">
      You have selected <span id="count" >0</span> seats for a price of $<span
        id="price">0</span>
    </p>
	

    <script src="script.js" type="text/javascript"></script>
  </body>
</html>
