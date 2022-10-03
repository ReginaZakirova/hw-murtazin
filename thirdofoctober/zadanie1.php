<?php
$string='fact';
$string=ucfirst($string);   
echo $string;
echo"<br>";
$str= 'Муртазин, Тимур, Радикович';
$array=explode(',', $str);
echo $array[0] . $array[1];
echo"<br>";
$str1="Привет,мир";
$str1 = mb_strtolower($str1);
echo substr_count($str1, 'и');
echo"<br>";
$str2='html css php';
$array1=explode(' ',$str2);
foreach ($array1 as $el){
    echo $el . "<br>";
}
echo"<br>";
$str3="unknown.png";
if (strpos($str3, '.png')==true){
    echo 'да';
}else echo 'нет';

