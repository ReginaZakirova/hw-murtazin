<?php
$sum = float;
$sum = 0;
$drob = float;
$drob = 0;
$a=1;
$b=1;
while ($sum<10){
$drob=$a/$b;
$sum= $sum+$drob;
$i++;
$a= $a+3;
$b= $b+1;
}
echo $i;
