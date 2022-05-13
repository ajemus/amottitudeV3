let savoirFaire1 = document.querySelector("#savoirFaire1")
let savoirFaire2 = document.querySelector("#savoirFaire2")

let start = "translateX("
let end = "vw)"

let max1 = 10
let min1 = -100

let max2 = -60
let min2 = 30

function add() {
	let currentPlace = getCurrentPlace(savoirFaire1)
	if (currentPlace<max1) {
		currentPlace = currentPlace+25
	}
	savoirFaire1.style.transform = start + currentPlace + end;

	currentPlace = getCurrentPlace(savoirFaire2)
	if (currentPlace>max2) {
		currentPlace = currentPlace-25
	}
	savoirFaire2.style.transform = start + currentPlace + end;
}

function remove() {
	let currentPlace = getCurrentPlace(savoirFaire1)
	if (currentPlace>min1) {
		currentPlace = currentPlace-25
	}
	savoirFaire1.style.transform = start + currentPlace + end;

	currentPlace = getCurrentPlace(savoirFaire2)
	if (currentPlace<min2) {
		currentPlace = currentPlace+25
	}
	savoirFaire2.style.transform = start + currentPlace + end;
}

function getCurrentPlace(line) {
	let currentPlace = line.style.transform;
	currentPlace = parseInt(currentPlace.slice(11,currentPlace.indexOf("v")))
	return currentPlace
}



