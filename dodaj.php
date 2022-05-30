<?php
    $conn = new mysqli("localhost","root","","sklepik");
    $query = "SELECT * FROM produkty";
    $result=$conn->query($query);
    $row=$result->fetch_object();
    $query1="SELECT * FROM category";
    $result1 = $conn->query($query1);

    echo <<< html

    <form action="dod.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nazwa: </label>
        <input type="text" name="name">
        <br>
        <label for="describe">Opis:</label>
        <input type="text" name="describe">
        <br>
        <label for="price">Cena: </label>
        <input type="number" name="price">
        <br>
        <label for="count">Ilosc: </label>
        <input type="number" name="count">
        <br>
        <label for="sale">Przecena: </label>
        <input type="number" name="sale">
        <br>
        <label for="category">Kategoria</label>
        <select name="category">
    html;
        while($row1=$result1->fetch_object()){
            echo "<option>$row1->category</option>";
        }
        echo "</select>";
    echo <<< html
        <input type="submit" value="Dodaj">
    </form>

    html;
?>