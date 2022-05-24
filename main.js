const b = document.getElementById("textkonto");
if(!localStorage.getItem("konto")){
   b.innerText = "Zaloguj się";
}else{
    b.innerText = "Konto, " + localStorage.getItem("konto");
}