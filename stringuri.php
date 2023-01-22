<!DOCTYPE html>
<html>
<body>

<?php
//concatenarea a doua stringuri
// First String
$a = 'MAINE ESTE ';
  
// Second String
$b = 'JOI!';
  
// Concatenation Of String
$c = $a.$b;
  
// print Concatenate String
echo " $c \n";
echo "<BR>";

//afisam lungimea unui string
$str1 = 'Astazi este miercuri';
echo 'Lungimea stringului str1: '.strlen($str1);

echo "<BR>--------------------<BR>";

//afisam inversul stringului str1
echo "Inversul stringului str1: ".strrev($str1);
?>

<BR>

<?php
//inlocuim "i" cu "X" in stringul str1
$str2 = str_replace("i","X",$str1);
echo "Stringul modificat este: ".$str2."<BR><BR>";

//suma a doua numere
$x = 2;
$y = 6;
$suma = $x+$y;
echo "Suma este: ".$suma;

?> 

</body>
</html>
