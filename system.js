let ResButton = document.getElementById("restart");
let start = document.getElementById("start");
let Lrt = 0;
let PySpeed = 1000; // 1000=1s
var global = {};

function GameStart() {
    var GS = setInterval( Function => {
        console.log('1s Every time!')
    }, `${PySpeed}`);
} 

let PyPos = [
    { x:10, y:10 }
]