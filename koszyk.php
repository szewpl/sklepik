<?php
    require("szablon.html");
    $mysqli = new mysqli("localhost", "root", "", "sklepik");
    $id = $_GET['id'];
    $konto = $_COOKIE["konto"];
    $q = "SELECT * FROM koszyk WHERE id_produktu='$id' AND id_konta='0'";
    $q1 = "SELECT * FROM koszyk WHERE id_produktu='$id' AND id_konta='$konto'";
    $result=$mysqli->query($q);
    $result1=$mysqli->query($q1);
    if(!isset($_COOKIE["konto"])){
        if($row=$result->num_rows>0){

        }else{
            $query = "INSERT koszyk SET id_produktu='$id',id_konta='0',ilosc='1'";
            $mysqli->query($query);
        }
    }else{
        if($row1=$result1->num_rows>0){

        }else{
            $query = "INSERT koszyk SET id_produktu='$id',id_konta='$konto',ilosc='1'";
            $mysqli->query($query);
        }
    }
?>