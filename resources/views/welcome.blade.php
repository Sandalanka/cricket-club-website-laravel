@extends('layout.master')
@section('tittle')
Welcome Baduraliya Cricket Clube
@endsection

@section('body')
@include('navbar.main')
<div class="mySlides w3-display-container w3-center">
    <img src="image/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/4.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
  >    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/11.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          
    </div>
  </div>
<div class="container">
    <h1>About Us</h1>
    <br><br>
    <p>Badureliya Sports Club is a first-class cricket team in Sri Lanka. It plays its home matches at Surrey Village Cricket Ground, Maggona</p><br>
    <p>In late 2008, the club threatened to boycott the Sri Lankan domestic tournaments due to their objections to being relegated to Tier B from their position in Tier A.[2] The club later backed down from their stance, and defeated Nondescripts Cricket Club by an innings and two runs</p><br>
    <p>Between 2005-06, when they first appeared in first-class cricket, and late December 2015, Badureliya Sports Club played 97 first-class matches, for 13 wins, 37 losses and 47 draws.</p>
</div>




<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3500);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection
