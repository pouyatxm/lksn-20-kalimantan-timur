export let PySpeed = 1
import { GBoard } from './system.js'
const PhytonBody = [
    { x: 15, y: 24 }
]

export function Update () {
    
}

export function Render (board) {
    PhytonBody.forEach(Sg => {
        var PhytonElement = document.createElement('div')
        PhytonElement.style.gridRowStart = Sg.y
        PhytonElement.style.gridColumnStart = Sg.x
        PhytonElement.classList.add('phyton')
        GBoard.appendChild(PhytonElement)
    })
}