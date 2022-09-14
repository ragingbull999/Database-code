<!DOCTYPE html>
<html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatabile" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale1.0">
 	<title>clients</title>
 	<?php require_once "connectDB.php";?>
 </head>

 <body>


<?php

echo "<form action='create_client.php' method= 'post'>";
echo "<label for= 'naam'>Naam</label>";
echo "<input type= 'text' class= 'form-control' name='naamInput'>";
echo "<label for='email'>Email</label>";
echo "<input type= 'text' class= 'form-control' name='emailInput'>";
echo "<label for='adres'>Adres</label>";
echo "<input type= 'text' class= 'form-control' name='adresInput'>";
echo "<label for='Telefoon'>Telefoon</label>";
echo "<input type= 'text' class= 'form-control' name='telefoonInput'>";
echo "<input type='submit'>";
echo "<br>";
echo "<a href='index.php'> ga terug naar het hoofdmenu</a>";
?>
</body>
</html>