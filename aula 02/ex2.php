<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$a=2;
$b=4;
$c=6;
$m = (($c+$b)/2)**(--$c);
$t = --$c**($b+$a);
$x= --$c + $b;
$y= $b++ + $a;
$z= $a - $b--; 
echo $a;
echo "<br>".$b;
echo "<br>".$c;
echo "<br>".$m;
echo "<br>".$t;
echo "<br>".$x;
echo "<br>".$y;
echo "<br>".$z;
?>
<br> <br>
<?php
(double)$a;
$c;
echo  "<br>".$a.gettype($a);
echo  "<br>".(double)$b.gettype($b);
echo  "<br>".$c.gettype($c);

?>
</body>
</html>