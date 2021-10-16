    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var rp1=randomowyrozmiar1();
    var rp2=randomowyrozmiar1();
    var rp3 =randomowyrozmiar1();
    var rp4=randomowyrozmiar1();
    var colors = ["#E697A2","#DA9BBB","#F09ED6","#E697DB"];
    firstcreatetext();

    function randkolowidth(){
        return (Math.floor(Math.random() * (Math.floor(160) - Math.ceil(0) + 1)) + Math.ceil(0));
    }

    function randkoloheight(){
        return (Math.floor(Math.random() * (Math.floor(65) - Math.ceil(0) + 1)) + Math.ceil(0));
    }

    function randomowyrozmiar1(){
        return (Math.floor(Math.random() * (Math.floor(60) - Math.ceil(30) + 1)) + Math.ceil(30));
    }

    function randomowyrozmiar(){
        return (Math.floor(Math.random() * (Math.floor(90) - Math.ceil(40) + 1)) + Math.ceil(40));
    }

    function kolkopowiekszajace(x,y,rp,color){
        var time=5;
        for(let i=10;i<rp;i++){
            setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.beginPath();ctx.arc(x,y,i,0,2*Math.PI);ctx.fillStyle = color;ctx.fill();ctx.closePath();createtext();},time);
            time+=5;
        }
    }

    function kolorand(){
        var r1 = randkolowidth();
        var r2 = randkoloheight();
        var randomcolor = Math.floor(Math.random() * (Math.floor(3) - Math.ceil(0) + 1)) + Math.ceil(0);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        kolkopowiekszajace(r1,r2,randomowyrozmiar(),colors[randomcolor]);
    }

    function firstcreatetext(){
        ctx.font = "37px 'Source Code Pro', monospace";
        ctx.fillStyle = "black";
        ctx.textAlign = "center";
        ctx.fillText("S", canvas.width/2, canvas.height/2+11);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2-20, canvas.height/2+20);},200);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2-40, canvas.height/2+40);},200);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2+20, canvas.height/2-20);},350);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2+40, canvas.height/2-20);},350);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2-10, canvas.height/2+10);},450);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2-30, canvas.height/2+30);},450);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2+10, canvas.height/2-10);},550);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("在", canvas.width/2+10, canvas.height/2-10);},550);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("ST", canvas.width/2, canvas.height/2+11);},700);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("STO", canvas.width/2, canvas.height/2+11);},900);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("STOR", canvas.width/2, canvas.height/2+11);},1000);
        setTimeout(()=>{ctx.clearRect(0, 0, canvas.width, canvas.height);ctx.fillText("STORE", canvas.width/2, canvas.height/2+11);kolorand();createtext();},1100);
        setTimeout(()=>{canvas.addEventListener("mousemove",()=>{kolo();createtext();});canvas.addEventListener("mouseleave",()=>{rp1=randomowyrozmiar1();rp2=randomowyrozmiar1();rp3 =randomowyrozmiar1();rp4=randomowyrozmiar1();ctx.clearRect(0,0,canvas.width,canvas.height);kolorand();createtext();});},1800);
    }

    function createtext(){
        ctx.font = "37px 'Source Code Pro', monospace";
        ctx.fillStyle = "black";
        ctx.textAlign = "center";
        ctx.fillText("STORE", canvas.width/2, canvas.height/2+11);
    }

    function kolo(){
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();        
        ctx.arc(event.offsetX,event.offsetY,rp1,0,2*Math.PI);
        ctx.fillStyle = "#E697A2";
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();  
        ctx.arc((canvas.width-event.offsetX),(canvas.height-event.offsetY),rp2,0,2*Math.PI);
        ctx.fillStyle = "#DA9BBB";
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();  
        ctx.arc(event.offsetX,(canvas.height-event.offsetY),rp3,0,2*Math.PI);
        ctx.fillStyle = "#F09ED6";
        ctx.fill();
        ctx.closePath();
        ctx.beginPath();  
        ctx.arc((canvas.width-event.offsetX),event.offsetY,rp4,0,2*Math.PI);
        ctx.fillStyle = "#E697DB";
        ctx.fill();
        ctx.closePath();
    }