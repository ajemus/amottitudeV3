window.addEventListener('wheel', checkScrollDirection);




function checkScrollDirection(event) {

   	if (checkScrollDirectionIsUp(event)) {
		console.log("haut")
   		if (scrollY==0) {
            console.log("haut de page")
			if(containsSize){
				bigSize();
			}
			
   		}
   	} else if (scrollY==0){
         
		 
  	}else{
		console.log("bas")
		if(!containsSize()){
			smallSize();
		}
	  }
}
function checkScrollDirectionIsUp(event) {
  	if (event.wheelDelta) {
    	return event.wheelDelta > 0;
  	}
  	return event.deltaY < 0;
}
