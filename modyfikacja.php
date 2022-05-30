<?php
    $conn = new mysqli("localhost","root","","sklepik");
    if($_GET['mode']=="usun"){
        $query="DELETE FROM produkty WHERE id={$_GET['id']}";
        $conn->query($query);
        header("Location:kontoadmin.php");
    }else{
        $query = "SELECT * FROM produkty WHERE id='{$_GET['id']}'";
        $result=$conn->query($query);
        $row=$result->fetch_object();
        $query1="SELECT * FROM category";
        $result1 = $conn->query($query1);
    
        echo <<< html
    
        <form action="mod.php?id=$row->id" method="POST">
            <label for="name">Nazwa: </label>
            <input type="text" name="name" value="$row->name">
            <br>
            <label for="describe">Opis:</label>
            <input type="text" name="describe" value="$row->short_describe">
            <br>
            <label for="price">Cena: </label>
            <input type="number" name="price" value="$row->price">
            <br>
            <label for="count">Ilosc: </label>
            <input type="number" name="count" value="$row->count">
            <br>
            <label for="sale">Przecena: </label>
            <input type="number" name="sale" value="$row->sale">
            <br>
            <label for="category">Kategoria</label>
            <select name="category">
        html;
            while($row1=$result1->fetch_object()){
                echo "<option>$row1->category</option>";
            }
        echo <<< html
            </select>
            <input type="submit" value="modyfikuj">
        </form>
    
        html;
    }
?>