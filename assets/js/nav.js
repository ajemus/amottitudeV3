let header = document.querySelector("#header");

testTop();

// test si on est en haut de page
function testTop() {
	if (scrollY==0) {
		bigSize();
	}
}

// test pour savoir si le header contient la classe pour le rendre petit
function containsSize() {
	var retour;
	if (header.classList.contains("navSize")) {
		retour = true;
	} else {
		retour = false
	}
	return retour
}

// permet d'enlever la classe pour que le header devienne grand
function bigSize() {
	if(containsSize){
		header.classList.remove("navSize");
	}
	
}

// permet d'ajouter la classe pour que le header devienne petit
function smallSize() {
	if(!containsSize()){
		header.classList.add("navSize");
	}
	
}

