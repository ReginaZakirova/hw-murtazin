<?php
$k = 1234;
$sum=0;
while($k!=0)
{
    if (!($k%2)){
        $sum = $sum + $k % 10;
    }
    $k = $k / 10;
}
echo $sum;
