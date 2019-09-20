
<?php
 include "hedds.php";
?>
<!--<link rel="stylesheet" type="text/css" href="css/indexStyle.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/imaga.css">
<style>
.mySlides {display:none;}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.wedds{color: blue;}


</style>
<div class="container">

	<div class="row mb-2" style="background-color:  #4863A0">
		<div class="col-sm-12">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/hand1.jpg" style="width:100%">
  <img class="mySlides" src="images/hand2.jpg" style="width:100%">
  <img class="mySlides" src="images/hand2.jpg" style="width:100%">
  <img class="mySlides" src="images/hand1.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

  <h2 class="centered">Wellcome to the new Age <span class="wedds">Barter</span></h2>
</div>
</div>
		</div>
		<div class="row">
			<div class="col-sm-2" style="background-color: #4863A0">
				<h5>Barter by Category</h5>
				<a href="barter.php"><img class="img-responsive mb-2" src="images/other.jpg"><a>
				<a href="#"><img class="img-responsive mb-2" src="images/other1.jpg"></a>
			</div>
			<div class="col-sm-3 " style="background-color: white">
				<img class="img-responsive" src="images/light.jpg">
			</div>
           <div class="col-sm-4">
				 <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                allowfullscreen></iframe>

            </div>
            <p>We are ready to support you</p>
			</div>
         <div class="col-sm-3" style="background-color: #4863A0">

				<h5>become one of us</h5>
        <a href="login.php" class="btn btn-large btn-outline-warning btn-block ">Sign up</a>
				<p>Already have an account?</p>
                <a href="login.php" class="btn btn-large btn-outline-warning btn-block ">Log In</a>
			</div>

			

		</div>
		<!--images/books/law/law1.jpg-->
		</div>
	
         
	





</body>
</html>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>