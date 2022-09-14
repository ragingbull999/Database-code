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
// met require_once roep ik de document om een connect uit te voeren
 	   require_once "connectDB.php";

 	   $sql = $conn→prepare ("insert into clients values (:client_id, :naam, :email, :adres, :telefoon)");
// hier binden we de secties van de database met onze variable via bindparam
 	   $sql→bindParam(":client_id", $Clientid);
 	   $sql→bindParam(":naam", $Clientnaam);
 	   $sql→bindParam(":email", $Clientemail);
 	   $sql→bindParam(":adres", $Clientadres);
 	   $sql→bindParam(":telefoon", $Clienttelefoon);
// met execute() geven ik aan dat ik de ingevulde info in de database wil inserten
 	   $sql→execute();
 	   echo "<a href'index.php'>terug naar hoofdmenu</a>";
 	  ?>
 </body>
 </html>
