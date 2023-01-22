<!DOCTYPE html>
<html>
<body>

<?php
if  (!empty($_POST["price"]) and !empty($_POST["tva"]))
   echo "Price is: ".$_POST["price"]." RON";
if  (!empty($_POST["tva"]))
   echo "TVA este: ".$_POST["tva"]." %";
$result = (int)$_POST["price"]+(int)$_POST["price"]*(int)$_POST["tva"]/100;
echo "Result: ".$result;
?>

<h1>Formular</h1>

<form action="prices.php" method="POST">
   Pret: <input type="text" name="price"><br> 
   TVA: <input type="text" name="tva"><br>
   
   <input type="reset" value="RENUNTA">
   <input type="submit" value="TRIMITE">
</form>
</body>
</html>