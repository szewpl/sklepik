<?php
    require("szablon.html");
    require("konto.html");
    $conn = new mysqli("localhost","root","","sklepik");
    $user = $_POST['username'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM konto WHERE user='$user'";
    $result=$conn->query($query);
    if($result->num_rows>0){
        echo "<div>Taka nazwa użytkownika juz istnieje</div><script>rejestracja();</script>";
    }else{
        $query1 = "INSERT INTO konto(user,mail,password) VALUES ('$user','$mail','$password')";
        $conn->query($query1);
        echo "<script>
        localStorage.setItem('konto','$user');
        location.href='http://localhost/sklepik/';
        </script>";
    }
    $conn->close();
?>  