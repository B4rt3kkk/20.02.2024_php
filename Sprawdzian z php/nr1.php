<?php include_once("connect.php");?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <body>
        <nav>
            <h2>Bartek Janik</h2>
            <ul>
                
                <li><a href="index.php">Start</a></li>
                <li><a href="nr1.php">Czujniki nr1</a></li>
                <li><a href="nr4.php">Czujniki nr4</a></li>
                <li><a href="all_czujnikow.php">Wszystkie Czujniki i ich ceny</a></li>

            </ul>
        </nav>

        <div class="counter">

        <?php

            $counter_records = $conn->query("SELECT SUM(czujniki.ID) as 'ile' FROM czujniki WHERE KATEGORIA = 1;" );
            list($ile)=mysqli_fetch_row($counter_records);
            echo "<h4>Ile czujników: $ile</h4>";
        ?>

        </div>

        <div class="najdroższe">

        <?php

            $counter_records = $conn->query("SELECT MAX(czujniki.CENACZUJNIKA) as 'najdroższe' FROM czujniki WHERE KATEGORIA = 1;" );
            list($najdroższe)=mysqli_fetch_row($counter_records);
            echo "<h4>Cena Wszystkich czujników: $najdroższe</h4>";
        ?>

        </div>

        <div class="nr1">

            <?php

                $all_records = $conn->query("SELECT czujniki.ID,czujniki.CENACZUJNIKA,czujniki.NAZWA,czujniki.KATEGORIA FROM czujniki WHERE KATEGORIA = 1" );
                while(list($ID,$CENACZUJNIKA,$NAZWA,$KATEGORIA)=mysqli_fetch_row($all_records)){
                    echo("<li><b>$ID</b>,<i>$CENACZUJNIKA,$NAZWA,$KATEGORIA</i></li>");
                }
            ?>

        </div>

    </body>
</html>