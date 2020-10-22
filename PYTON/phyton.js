export let PySpeed = 1
const PhytonBody = [
    { x:21, y:21}
]

export function Update () {
    
}

export function Render (GBoard) {
    PhytonBody.forEach(Sg => {
        var PhytonElement = document.createElement('div')
        PhytonElement.style.gridRowStart = Sg.y
        PhytonElement.style.gridColumnStart = Sg.x
        PhytonElement.classList.add('phyton')
        GBoard.appenChild(PhytonElement)
    })
}