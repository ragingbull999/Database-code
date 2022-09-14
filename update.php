<!DOCTYPE html>
<html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatabile" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale1.0">
 	<title>Document</title>
 	
 </head>
 
 <body>
 	<?php

 	  $Clientid = $_POST["ClientID"];
 	  require_once "connectDB.php";

 	  $Clients = $conn→prepare("select client_id, naam, email, adres, telefoon from clients");
 	  $Clients→execute();

 	  foreach ($Clients as $Client) {

 	  	echo "form action='update2.php' method='post'>";
 	  	echo "Client ID:" . $Client["client_id"];
 	  	echo "<input type='hidden' name='client_id' value = '' . $Client["client_id"] ."> <br/>;
 	  	echo "<label for='Naaminput'>naam</label>";
 	  	echo "<input type='text'class='form-control' name='Naaminput' value = '' . $Client["naam"] .";
 	  	echo "</div>";
 	  	echo "<label for='Emailinput'>naam</label>";
 	  	echo "<input type='text'class='form-control' name='Emailinput' value = '' . $Client["email"] .";
 	  	echo "</div>";
 	  	echo "<label for='Naaminput'>adres</label>";
 	  	echo "<input type='text'class='form-control' name='Adresinput' value = '' . $Client["adres"] .";
 	  	echo "</div>";
 	  	echo "<label for='Telefooninput'>naam</label>";
 	  	echo "<input type='text'class='form-control' name='Telefooninput' value = '' . $Client["telefoon"] .";
 	  	echo "</div>";
 	}
 	echo "<input type='submit'>";
 	echo "</form";
 ?>
</body>
</html>