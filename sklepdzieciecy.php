<?php
require("index.html");
echo "<script>var e = document.getElementById('wave');
e.parentNode.removeChild(e);</script>";
$mysqli = new mysqli("localhost", "root", "", "sklepik");
    for($i=0;$i<10;$i++){
        echo "<div>as</div>";
    }
?>