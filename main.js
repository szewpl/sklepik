$(function(){
    
    // optional: don't cache ajax to force the content to be fresh
    $.ajaxSetup ({
        cache: true
    });
    
    // specify the server/url you want to load data from
    var url = "http://localhost/sklepik/sklepdzieciecy.php";
    
    // on click, load the data dynamically into the #result div
    $("#b2").click(function(){
        $("body").load(url);
    });

});