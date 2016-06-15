<div id="left">
  <h3 id="affiche">A l'affiche</h3>
  <img class="top_i" src="img/sylak.jpeg"/>
  <img class="top_i" src="img/index.jpeg"/>
  <img class="bot_i" src="img/nimes.jpeg"/>
  <img class="bot_i" src="img/fdm.jpeg"/>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("top_i");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<script>
var myIndexs = 0;
carousels();

function carousels() {
var i;
var x = document.getElementsByClassName("bot_i");
for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";
}
myIndexs++;
if (myIndex > x.length) {myIndex = 1}
x[myIndex-1].style.display = "block";
setTimeout(carousels, 4000); // Change image every 2 seconds
}
</script>
