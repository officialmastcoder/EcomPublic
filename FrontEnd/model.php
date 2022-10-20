<?php 
session_start();
$_SESSION['model'] ;
if(!$_SESSION['model'] ){
  $_SESSION['model'] = 0;
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The model_new (background) */
.model_new {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* model_new Content */
.model_new-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.model_new-header {
  padding: 2px 16px;
  background-color: #eb0d0d;
  color: white;
}

.model_new-body {
    padding: 2px 16px;
    text-align: center;
}

.model_new-footer {
  padding: 2px 16px;
  background-color: #c7230e;
  color: white;
}
</style>
</head>
<body <?php 
if($_SESSION['model'] ==0){
  $_SESSION['model'] =1;
?>
onload="myBtnLoad()"
<?php

} ?> >


<!-- The model_new -->
<div id="mymodel_new" class="model_new">

  <!-- model_new content -->
  <div class="model_new-content">
    <div class="model_new-header">
      <span class="close">&times;</span>
      <h2>Important Notice (read carefully) <?php echo $_SESSION['model'];?></h2>
    </div>
    <div class="model_new-body">
      <h2 style="color:#c7230e;">AHK WEB SOLUTIONS Does Not Allow Reselling of Any File.</h2>
      <h4>We sell products only on our website and have not authorised reselling of our scripts to anyone.</h4>
      <h4 style="color:#c7230e;">WE ARE NOT RESPONSIBLE FOR ANY MONETARY LOSS OR SERVICE QUALITY OFFERED BY UNAUTHORIZED PERSONS.</h4>
      <h4>if Need Help Then Contact With us Immidiately at email ( <a target="_blank" href="mailto:admin@ahkwebsolutions.com">admin@ahkwebsolutions.com</a>  ) or WhatsApp <a href="https://wa.me/917896619162" target="_blank">+91 7896619162</a></h4>
    </div>
    <div class="model_new-footer">
      <h3>Beware of Fraud Person</h3>
    </div>
  </div>

</div>

<script>
  
// Get the model_new
var model_new = document.getElementById("mymodel_new");

// Get the <span> element that closes the model_new
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the model_new 
myBtnLoad = function() {
  model_new.style.display = "block";
}

// When the user clicks on <span> (x), close the model_new
span.onclick = function() {
  model_new.style.display = "none";
}

// When the user clicks anywhere outside of the model_new, close it
window.onclick = function(event) {
  if (event.target == model_new) {
    model_new.style.display = "none";
  }
}
</script>

</body>
</html>
