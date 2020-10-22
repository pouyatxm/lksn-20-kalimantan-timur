let ResButton = document.getElementById("restart");
let start = document.getElementById("start");
let Lrt = 0;
let PySpeed = 1
var PyUpdate = PySpeed
var PyFood = PySpeed

function GameStart(ct) {

    window.requestAnimationFrame(GameStart)

    var slcr = (ct - Lrt) / 1000

    if(slcr < 1 / PySpeed) {
        return
    }

    console.log(slcr)
    Lrt = ct;

    GameFUpdate();
    Render()
} 

window.requestAnimationFrame(GameStart)

let PyPos = [
    { x:20, y:210 }
]
let NSg = 0



