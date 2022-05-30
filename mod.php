<?php
    $conn = new mysqli("localhost","root","","sklepik");
    $query1 = "SELECT id FROM category WHERE category=('{$_POST['category']}')";
    $result1 = $conn->query($query1);
    $row1 = $result1->fetch_object();
    $idcategory = $row1->id;

    $query = "UPDATE produkty SET name=('{$_POST['name']}'),short_describe=('{$_POST['describe']}'),price=('{$_POST['price']}'),count=('{$_POST['count']}'),sale=('{$_POST['sale']}'),id_category=$idcategory WHERE id=('{$_GET['id']}')";
    $conn->query($query);
    header("Location:kontoadmin.php");
?>