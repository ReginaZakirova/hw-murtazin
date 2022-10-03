<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/adaptive.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeboy</title>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="content_head">
                <div class="Picture">
                    <img class="logo_tm" src="images/Trademark-TM-Logo-Transparent-Background.png" alt="">

                </div>
                <div class="title">
                   БИОГРАФИЯ
                </div>
                <nav class="=menu"> 
                    <ul class="list"> 
                        <li class="list_item">
                            <a class="list_link list_link_disabled" href="table.html" target="_blank">Таблица</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="wrapper">
            <div class="content_main">
                <div class="Pictureofme1">
                    <img class="Pictureofme" src="images/drive.jpg">
                </div>
                <div class="about">
                    <div class="fio">
                       <H1> Муртазин Тимур </H1>

                    </div>
                    <div class="info">
                        <div class="info_about">
                         <?php
                         $array = Array('red', 'green', 'blue');
                         $randcolor = array_rand($array);
                         echo $str = ("<p style=\"color:$array[$randcolor];\">Возраст: 32 года</p>");
                         ?>
                         Дата рождения: 30.07.1990 <br>
                         Текущая дата: <?php echo date ("d/m/Y"); ?> <br> 
                         <?php 
                             $now = time();
                             $my_date = strtotime("1990-07-30");
                             $datediff = $now - $my_date;               
                             echo "прожито дней: " . round($datediff / (60 * 60 * 24)); 
                             "<br>";
                         ?> <br>
                         <H2>
                           Хобби: 3 места работы <br>
                           Место работы: Парикмахер, <br>
                           Арт-Директор, Диджей <br>
                          </H2>                       
                        </div>
                        <div class="info_school">
                            <?php
                        $str1 = "В связи с тем,что опыта в данной сфере <br> я не имею, не берусь судить о том, насколько правильно посторен учебный процесс.<br>
                        На данном этапе усваиваить информацию будет тяжело в любом случае.<br>";
                        $arr = explode(' ',$str1);
                        $i=0;
                        foreach ($arr as $value){
                            if($i%2==0){
                                $str2 = $str2."<span class='$array[1]'>".$arr[$i]."</span> ";
                            }else $str2 = $str2."<span class='$array[2]'>".$arr[$i]."</span> ";          
                            $i++;
                        }
                        echo $str2; 
                        ?>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="imageshomework3">
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw3" src="images/1.jpg">
                        <p class="Imgs_title">Король крести</p>
                    </div>
               </div>
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw3" src="images/2.jpg">
                        <p class="Imgs_title">Дама крести</p>            
                    </div>
                </div>    
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw3" src="images/3.jpg">
                        <p class="Imgs_title">Валет крести</p>
                    </div>                     
                </div>
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw3" src="images/4.jpg">
                        <p class="Imgs_title">Король черви</p>   
                    </div> 
                </div>                    
            </div>
            <div class="imageshomework31">
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw31" src="images/1.jpg">
                        <p class="Imgs_title">Король крести</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw31" src="images/2.jpg">
                        <p class="Imgs_title">Дама крести</p>            
                    </div>
                </div>    
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw31" src="images/3.jpg">
                        <p class="Imgs_title">Валет крести</p>
                    </div>                     
                </div>
                <div class="cards">
                    <div class="cartoons">
                        <img class="imageshw31" src="images/4.jpg">
                        <p class="Imgs_title">Король черви</p>   
                    </div> 
                </div>                    
            </div>        
        </div>
    </main>
    
</body>
</html>
