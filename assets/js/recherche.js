function recherche() {
    let input = document.getElementById('recherche').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('box_reference');
    let y = document.getElementsByClassName('box_titre_ref');

    

    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input) && !y[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="flex";                 
        }
    }
}