<!-- // FOTOS // -->
<link href="./css/fotos.css" rel="stylesheet" type="text/css" />
<div class="foto_grande">

  <!-- // exibe as 3 imgs // -->
  <div class="w3-content w3-display-container" >
    <img class="slide_adv" src="img/foto1.jpg" style="width:100%" >
    <img class="slide_adv" src="img/foto2.jpg" style="width:100%">
    <img class="slide_adv" src="img/foto3.jpg" style="width:100%">
    <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

      <!-- // gera as 3 bolinhas // -->
      <span class="w3-badge slide_ponto w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge slide_ponto w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge slide_ponto w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>

    </div>
  </div>
</div>

<!-- // SCRIPT CAROUSEL // -->
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
showDivs(slideIndex += n);
}
function currentDiv(n) {
showDivs(slideIndex = n);
}
function showDivs(n) {
var i;
var x = document.getElementsByClassName("slide_adv");
var dots = document.getElementsByClassName("slide_ponto");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length}
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" w3-white", "");
}
x[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " w3-white";
}
var myIndex = 0;
carousel();
function carousel() {
var i;
var x = document.getElementsByClassName("slide_adv");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}
x[myIndex-1].style.display = "block";
setTimeout(carousel, 5000); // 5 SEGUNDOS
}
</script>