let ResButton = document.getElementById("restart");
let start = document.getElementById("start");
let Lrt = 0;
let PySpeed = 1
let GEnd = 0
let GBoard = document.getElementById('board')

function GameStart(ct) {

    window.requestAnimationFrame(GameStart)

    var slcr = (ct - Lrt) / 1000

    if(slcr < 1 / PySpeed) {
        return
    }

    console.log(slcr)
    Lrt = ct;

    FUpdate();
    Render()
} 

window.requestAnimationFrame(GameStart)

function FUpdate() {
    UpPy()
    UpFood()
    Dcheck()
}

function Render() {
    GBoard.innerHTML = ''
    FUpdate(GBoard)
    Render(GBoard)
}
