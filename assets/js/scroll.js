window.addEventListener('wheel', checkScrollDirection);




function checkScrollDirection(event) {

   	if (checkScrollDirectionIsUp(event)) {
		// console.log("haut")
		remove()
   		if (scrollY==0) {
            // console.log("haut de page")
			bigSize();
   		}
   	} else if (scrollY==0){
         
		 
  	}else{
		// console.log("bas")
		smallSize();
		add()
	  }
}
function checkScrollDirectionIsUp(event) {
  	if (event.wheelDelta) {
    	return event.wheelDelta > 0;
  	}
  	return event.deltaY < 0;
}
