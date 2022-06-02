<?php
    require("szablon.html");
    $mysqli = new mysqli("localhost", "root", "", "sklepik");
<<<<<<< Updated upstream
    $query= "SELECT * FROM produkty";
    $result = $mysqli->query($query);
    $query1= "SELECT * FROM photos";
    $result1 = $mysqli->query($query1)->fetch_object();
    echo "<div id=\"grid\">";
    $i=1;
    while($row=$result->fetch_object()){
        $query1= "SELECT adres FROM photos WHERE id_produktu = $row->id";
        $result1 = $mysqli->query($query1)->fetch_object();
        if($row->sale==0){
            $sale = "";
        }else{
             $sale = $row->sale."zł";
        }
        if($i%2==0){
            echo <<< html
            <div class="wrapper animate__animated animate__backInRight">
            <div class='product-img'>
                <img src='$result1->adres' height='auto' width='327' vertical-align='middle'>
            </div>
            <div class='product-info'>
            <div class='product-text'>
                <h1>$row->name</h1>
                <h2>Ilość sztuk: $row->count</h2>
            </div>
            <div class='product-price-btn'>
                <div id="del">
                    <del id="sdel">$sale</del>
                    <p><span>$row->price</span>zł</p>
                </div>
                <div class="buttons">
                    <button id="b6" onclick="location.href='koszyk.php?id=$row->id'" class="blob-btn animate__animated animate__bounceInDown">
                        <a>Do koszyka</a>
                        <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            </span>
                        </span>
                    </button> 
                </div>
            </div>
            </div>
        </div>
        html;
        $i++;
        }else{
            echo <<< html
            <div class='wrapper animate__animated  animate__backInLeft'>
            <div class='product-img'>
                <img src='$result1->adres' height='auto' width='327' vertical-align='middle'>
            </div>
            <div class='product-info'>
            <div class='product-text'>
                <h1>$row->name</h1>
                <h2>Ilość sztuk: $row->count</h2>
            </div>
            <div class='product-price-btn'>
                <div id="del">
                    <del id="sdel">$sale</del>
                    <p><span>$row->price</span>zł</p>
                </div>
                <div class="buttons">
                    <button id="b6" type="submit" onclick="location.href='koszyk.php?id=$row->id'" class="blob-btn animate__animated animate__bounceInDown">
                        <a>Do koszyka</a>
                        <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            </span>
                        </span>
                    </button> 
                </div>
            </div>
            </div>
        </div>
        html;
        $i++;
        }
        
=======
    $q = "SELECT * FROM produkty INNER JOIN photos USING(id)";
    $result=$mysqli->query($q);
    echo "<div style=\"display:grid;grid-template-columns: auto auto auto;\">";
    while($row=$result->fetch_object())
    {
        echo "<div>
            <div>$row->name</div>
        <div>";
>>>>>>> Stashed changes
    }
    echo "</div>";
?>  