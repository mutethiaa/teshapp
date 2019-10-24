<?php
require('server.php');
?>



<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="star1.jpg" type="image/gif" sizes="16x16">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<meta charset="utf-8">
<title>message  <?php echo $row['$id'];?></title>
<link rel="stylesheet" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>


</head>

<style>


.top{
  background-color: red;
  margin: 40%;
}

body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
 
background-image: url("backgroud img.jpg");

}

.header {
  background-color: #BA55D3;
  padding: 30px;
  text-align: center;
  font-size: 30%;
  margin:%;
  color:#7FFFD4;
  font-family: Arial Black;
}

#navbar {
  overflow: hidden;
  background-color: black;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

textarea{
background-color: white;
color: black;
width: 30%;
height: 30px;
font-family: arial;
font-size: 0.8em;
border-radius:25%;


}
img{
  width: 5%;
  border-radius: 50%;
  height: 50px;
}
#n{
  color: blue;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
h{
  color:blue;
  margin: 0% 30%;
  font-size: 0.6em;
  background-color: white;
  border-radius: 20%;
}
#mike{
  background-color: white;
  width: 50%;
  font-size: .6em;
}
h1{
  font-size: 0.6em;
}
#star{
  width: 2%;
  height: 20px;
}
hr{
  margin: 0% 30%;
}
#mass{
  text-decoration: none;
  color:red;
}
#myImg {
    border-radius: 100%;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    height: 400px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }


</style>
</head>

<body>
  <?php 

$id=$_REQUEST['recip'];

$quer= "SELECT pic,username from users where username='$id'";
$re = mysqli_query($db, $quer);
$row = $re->fetch_assoc();
//echo "".$row['pic']."";

   ?>

  </div>

 <div id="navbar">
   <a href="usi.php">people</a>
    <a href="status.php">status</a>
  <a href="tofriend.php">friends</a>

  <?php echo "<img src='uploadedimg/" . $row['pic']. " ' id='myImg'> $id"; ?>
  <span style="color: red; font-size: 0.6em;"><?php echo "$id"; ?></span>


   <?php  if (isset($_SESSION['name'])) : ?>
      
      <a href="index.php?logout='1'" style="color: red;">logout</a> 
    <?php endif ?>
 

</div>
</p>

  

      </a> </p>
<div class="content">


<?php
//require('server1.php');
//include("auth.php");
$id=$_REQUEST['recip'];


//$query = "SELECT * from messages where recip='".$id."'"; 
//$result = mysqli_query($db, $query) or die ( mysqli_error());
//$row = mysqli_fetch_assoc($result);
?>


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$age =$_REQUEST['message'];
$q=$_SESSION['username'];
 $timestamp = date('Y-m-d G:i:s');

$update="INSERT INTO messages( author, recip, message,time) VALUES ('$q','".$id."','".$age."','".$timestamp."')";



mysqli_query($db, $update) or die(mysqli_error());

$status = "message sent  </br></br> 
<a href='mescon.php'>message sent</a>";

echo '<p style="color:#FF0000;">'.$status.'</p>';
//header('location:mesi.php?recip='.$id.'');

}

else {
?>


<div>
<form name="form" method="post" action="" id='userForm' > 
<input type="hidden" name="new" value="1" />
<input type="hidden" name="recip" value="<?php echo"$id";?>" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<?php //echo "<img src='uploadedimg/" . $row['pic']. " '>";?>
<br>

<p id="n" > <?php //echo $row['message'];?></p>
<p id="n" > <?//php echo $row['recip'];?></p>
<div id="mik">
  <div id="misero">





<?php

/*
//require('server1.php');
//include("auth.php");
//$l=$row['recip'];
//$id=$_REQUEST['recip'];
$q=$_SESSION['username'];




$query = "SELECT author,recip,message,time from messages where author='$q' or recip='$q' ";

//$q = "SELECT message from messages where author='$id' AND recip='$q' ";


//$q = "SELECT message from messages where author='$id' AND recip='$q'";
//$result = mysqli_query($db, $q) or die ( mysqli_error());
//$p="'.$row['username'].'"

$res = mysqli_query($db, $query) or die ( mysqli_error());


   while($row = $res->fetch_assoc()) {
    //echo "".$row["author"]."";
    $s=$row["author"];
    $z=$row["recip"];//

    if ($s==$q) {
              if ($id==$z){

      echo "<div id='them'><h>" .$row["message"]." 
      <img src='tick1.jpg' id='star'><br>  </h> 
      <span style='color:#7F8C; margin:0% 30%; font-size:0.6em;'>" .$row["time"]."</span></div>";
      echo "<br>";

    }

}
else{
  if ($z==$q) {
    if ($s==$id) {
       echo "<h1>".$row["message"]." <span style='color:#27332F;'><br>" .$row["time"]."</span></h1>";

   // echo "".$row["author"]."";
  echo "<br>";
      # code...
    }
   
    # code...
  }
      
}
    
  
//$row = $result->fetch_assoc();


   //echo"".$row["message"]."";

   //echo "<br>";



  
}

*/

?>
</div>



<br>

<textarea name="message"></textarea>
<br>

<input name="submit" type="submit" value="msg" />
<input name="sms" type="submit" value="sms" />

</form>

<?php } ?>

</div>

</style>
<!-- where the response will be displayed -->
<div id='response'></div>

$(document).ready(function(){
$('#userForm').submit(function(){

// show that something is loading
$('#response').html("<b>Loading text...</b>");

// Call ajax for pass data to other place
$.ajax({
type: 'POST',
url: 'sendmessage.php',
data: $(this).serialize() // getting filed value in serialize form
})
.done(function(data){ // if getting done then call.

// show the response
$('#response').html(data);

})
.fail(function() { // if fail then getting message

// just in case posting your form failed
alert( "sending failed." );

});

// to prevent refreshing the whole page page
return false;

});
});
</script>









	

<script>
$(document).ready(function(){
setInterval(function(){
    $("#misero").load("withajax.php",{
        id: "<?php echo"$id";?>",
        
    })

  },3000);
});
  
</script>



<script>

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>

