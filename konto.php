<?php
    require("szablon.html");
<<<<<<< Updated upstream
    require("konto.html");
    $conn = new mysqli("localhost","root","","sklepik");
    error_reporting(0);
    $user = $_POST['username'];
    if($user!=""){
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
            $row=$result->fetch_object();
            setcookie('konto',"$row->id_account",time() + (10 * 365 * 24 * 60 * 60),'/');
        }
=======
    $mysqli = new mysqli("localhost", "root", "", "sklepik");
    $zxc = "SELECT * FROM produkty";
    $all = $mysqli->query($zxc);
    foreach($all as $one)
    {
        echo($one["id"]);
>>>>>>> Stashed changes
    }
    
    $conn->close();
?>  