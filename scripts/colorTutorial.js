function myColor(){
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "ctx.fillStyle= "+x+";";
    ctx.beginPath();
    ctx.arc(240, 160, 100, 0, Math.PI*2, false);
    ctx.fillStyle=x;
    ctx.fill();
    ctx.stroke();
}


myColor();

