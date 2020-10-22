export let PySpeed = 1
const PhytonBody = [
    { x: 15, y: 15 },
    { x: 16, y: 16 },
    { x: 17, y: 17 },
    { x: 18, y: 18 },
    { x: 19, y: 19 },
    { x: 20, y: 20 }
]

export function Update () {
    for (let i = PhytonBody.length - 2; i >= 0; i--) {
        PhytonBody[i + 1] = { ...PhytonBody[i] }
    }

    PhytonBody[0].x += 1
    PhytonBody[0].y += 1

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