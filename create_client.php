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

 	   $Clientid = NULL;
 	   $Clientnaam = $_POST ["naamInput"];
 	   $Clientemail = $_POST ["emailInput"];
 	   $Clientadres = $_POST ["adresInput"];
 	   $CLienttelefoon = $_POST ["telefoonInput"];

 	   require_once "connectDB.php";

 	   $sql = $conn→prepare ("insert into clients values (:client_id, :naam, :email, :adres, :telefoon)");

 	   $sql→bindParam(":client_id", $Clientid);
 	   $sql→bindParam(":naam", $Clientnaam);
 	   $sql→bindParam(":email", $Clientemail);
 	   $sql→bindParam(":adres", $Clientadres);
 	   $sql→bindParam(":telefoon", $Clienttelefoon);

 	   $sql→execute();
 	   echo "<a href'index.php'>terug naar hoofdmenu</a>";
 	  ?>
 </body>
 </html>