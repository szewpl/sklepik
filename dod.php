<?php
    $conn = new mysqli("localhost","root","","sklepik");
    $name = $_POST['name'];
    $describe = $_POST['describe'];
    $price= $_POST['price'];
    $count = $_POST['count'];
    $sale = $_POST['sale'];
    $query2="SELECT id FROM category WHERE category=('{$_POST['category']}')";
    $result = $conn->query($query2);
    $row = $result->fetch_object();
    $idcat=$row->id;
    
    $query= "INSERT produkty SET name='$name',short_describe='$describe',price='$price',count='$count',sale='$sale',id_category='$idcat'";
    $conn->query($query);
    header("Location:kontoadmin.php");
?>