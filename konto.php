<?php
    require("index.html");
    echo "<script>var e = document.getElementById('wave');
    e.parentNode.removeChild(e);</script>";
    $mysqli = new mysqli("localhost", "root", "", "sklepik");
    $zxc = "SELECT * FROM sdzieciecy";
    $all = $mysqli->query($zxc);
    foreach($all as $one)
    {
        echo($one["name"]);
    }
?>  