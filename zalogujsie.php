<?php
    $conn = new mysqli("localhost","root","","sklepik");
    error_reporting(0);
    $user = $_POST['username'];
    if($user!=""){
        $password = $_POST['password'];
        $query ="SELECT id_account FROM `konto` WHERE (user='$user' OR mail='$user') AND password='$password'";
        $query1="SELECT id FROM koszyk WHERE id_konta='0'";
        $result1 = $conn->query($query1);
        $result=$conn->query($query);
        if($result->num_rows>0){
            $row=$result->fetch_object();
            setcookie('konto', "$row->id_account", time() + (86400 * 30));
            while($row1 = $result1->fetch_object()){
                $q = "UPDATE koszyk SET id_konta='$row->id_account' WHERE id='$row1->id'";
                $conn->query($q);
            }
            echo "<script>
            localStorage.setItem('konto','$user');
            location.href='http://localhost/sklepik/';
            </script>";
        }else{
            echo "<div>Błedne dane</div><script>logowanie();</script>";
        }
    }
    require("szablon.html");
?>