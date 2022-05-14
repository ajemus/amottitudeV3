var numSlide = 1;
afficheSlide(numSlide);

function changementSlide(n) {
  afficheSlide(numSlide += n);
}

function afficheSlide(n) {
  console.log(n)
  var slide = document.getElementsByClassName("modal");
  if (n > slide.length) {numSlide = 1}
  if (n < 1) {numSlide = slide.length}
  for (var i = 0; i < slide.length; i++) {
    slide[i].style.visibility = "hidden";
  }
  slide[numSlide-1].style.visibility = "visible";
}