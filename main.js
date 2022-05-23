$(function(){
    // optional: don't cache ajax to force the content to be fresh
    $.ajaxSetup ({
        cache: true,
    });
    
    // specify the server/url you want to load data from
    var url = "http://localhost/sklepik/index.php";
    
    // on click, load the data dynamically into the #result div
    $("#b1").click(function(){
        $("body").load(url);
        window.history.pushState("object or string", "Title", "/witam");
    });

});