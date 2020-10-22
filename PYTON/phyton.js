export let PySpeed = 1
import { GBoard } from './system.js'
const PhytonBody = [
    { x: 15, y: 24 },
    { x: 16, y: 24 },
    { x: 17, y: 24 },
    { x: 18, y: 24 },
    { x: 19, y: 24 },
    { x: 20, y: 24 }
]

export function Update () {
    
}

export function Render (GBoard) {
    PhytonBody.forEach(Sg => {
        var PhytonElement = document.createElement('div')
        PhytonElement.style.gridRowStart = Sg.y
        PhytonElement.style.gridColumnStart = Sg.x
        PhytonElement.classList.add('phyton')
        GBoard.appendChild(PhytonElement)
    })
}