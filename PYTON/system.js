import { Update as UpPhyton, Render as RenPhyton, PySpeed,
 } from './phyton.js'

let ResButton = document.getElementById("restart");
let start = document.getElementById("start");
let Lrt = 0;
let GEnd = 0
export let GBoard = document.getElementById('board')
let NewSegment = 0

function GameStart(ct) {

    window.requestAnimationFrame(GameStart)

    var slcr = (ct - Lrt) / 1000

    if(slcr < 1 / PySpeed) {
        return
    }

    Lrt = ct;

    FUpdate();
    Render()
} 

window.requestAnimationFrame(GameStart)

function FUpdate() {
    UpPhyton()
}

function Render() {
    GBoard.innerHTML=''
    RenPhyton(GBoard)
}

// function Dcheck() {
//     GEnd = OutGrid(Head()) || Intersect()
// }

// function RandomGridPos () {
//     return {
//         x: Math.floor(Math.random() * size) + 1,
//         y: Math.floor(Math.random() * size) + 1
//     }
// }

// function OutGrid(pos) {
//     return (
//         pos.x < 1 || pos.x > size || pos.y < 1 || pos.y > size
//     )
// }

// function Update() {
    
// }

// function addSegment () {
//     for (let i = 0; 1 < NewSegment; i++) {
        
//     }
// }


// let food = RandomFood()

// function Render(GBoard) {
//     var FoodElement = document.createElement('div')
//     FoodElement.style.gridRowStart = food.y
//     FoodElement.style.gridColumnStart = food.x
//     FoodElement.classList.add(food)
//     GBoard.appenChild(FoodElement)
// }

// function RandomFood() {
//     let newfood
//     while (newfood == null || (newfood)) {
//         newfood = RandomGridPos()
//     }
//     return newfood
// }