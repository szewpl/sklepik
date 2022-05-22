<?php
    require("szablon.html");
    $mysqli = new mysqli("localhost", "root", "", "sklepik");
    $zxc = "SELECT * FROM produkty";
    $all = $mysqli->query($zxc);
    foreach($all as $one)
    {
        echo($one["name"]);
    }
?>  