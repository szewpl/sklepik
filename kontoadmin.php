<?php
    require("admin.html");
    $conn = new mysqli("localhost","root","","sklepik");
    $query = "SELECT * FROM `produkty`";
    $result =$conn->query($query);
    echo "<table border>";
    echo
    "
    <tr>
        <th>
            id
        </th>
        <th>
            Nazwa
        </th>
        <th>
            Opis
        </th>
        <th>
            Cena
        </th>
        <th>
            Ilosc
        </th>
        <th>
            przecena
        </th>
        <th>
            kategoria
        </th>
        <th>usuń</td>
        <th>modyfikuj</td>

    </tr>
    ";
    while($row=$result->fetch_object())
    {
        echo
        "
        
        <tr>
            <td>$row->id</td>
            <td>$row->name</td>
            <td>$row->short_describe</td>
            <td>$row->price</td>
            <td>$row->count</td>
            <td>$row->sale</td>
            <td>$row->id_category</td>
            <td><button><a href='modyfikacja.php?mode=usun&id=$row->id'>usuń</a></button></td>
            <td><button><a href='modyfikacja.php?mode=modyfikuj&id=$row->id'>modyfikuj</a></button></td>
        </tr>
        ";
    }
        echo "</table>";
        echo "<button><a href='dodaj.php'>Dodaj produkt</a></button>";
        echo "<button><a href='index.php'>Strona Głowna</a></button>";
        $result->free_result(); 
?>