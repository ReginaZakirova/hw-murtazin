<form method="POST">
    <input type='number' name='pole1' value='Введите число от 0 до 10'> 
    <p><input type="submit" name="button_id" value="Ввод" /></p>
</form>
<?php

    if(isset( $_POST['button_id']))
    {
        $a = $_POST['pole1'];
    
    }
    
    $i = (int)$a;

    if($i==0){
        for ($=0; $i<10; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<9; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<8; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<8; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<7; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<6; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<5; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<4; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<3; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<2; $i++)
        echo $i;
    }
    elseif($i==0){
        for ($=0; $i<1; $i++)
        echo $i;
    }