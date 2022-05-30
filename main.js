const b = document.getElementById("textkonto");
const b1 = document.getElementById("b2");
const b6 = document.getElementById("b6");
if(!localStorage.getItem("konto")){
    b.innerText = "Zaloguj się";
    b1.addEventListener("click",function(){location.href='http://localhost/sklepik/konto.php';});
}else{
    b.innerText = "Konto, " + localStorage.getItem("konto");
    b1.addEventListener("click",function(){if(localStorage.getItem("konto")=="admin"){location.href = "http://localhost/sklepik/kontoadmin.php"}else{location.href = "http://localhost/sklepik/twojekonto.php"}});
}