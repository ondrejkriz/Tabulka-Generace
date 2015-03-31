<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabulka</title>
    </head>
    <body>
        <?php
        include 'tabulka.php';
        $tabulka = new tabulka("test"); //vytvoření tabulky
        $tabulka->nadpisy(array("test", "123asd", "dalsi")); // zadaní naspisů
        $tabulka->pridej(array("neco", "test2", "dalsi text")); // vložení položek tabulky
        $tabulka->pridej(array("neco", "test2", "dalsi text")); // vložení položek tabulky
        $tabulka->pridej(array("neco", "test2", "dalsi text")); // vložení položek tabulky
        echo $tabulka; // vypsání tabulky
        ?>
    </body>
</html>
