
<?php 

  session_start(); 

 if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location:login.php');
}
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:index.php");
  }
  //echo $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>people you may know</title>
<link rel="icon" href="star1.jpg" type="image/gif" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/3.png" type="image/gif" sizes="17x17">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="w3.css">


<style>

.top{
  background-color: red;
  margin: 40%;
}

body {
  margin: 0;
  font-size: 0.7em;
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  background-color:black;
  padding: 30px;
  text-align: center;
  font-size: 30%;
  margin:%;
  color:pink;
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
  #star{
      width: 3%;
      height: 30px;
    }


</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

</head>

<body>
  

  </div>

 <div id="navbar">
  
<a   href ="tofriend.php">friends</a>
  <a href="mike.php">chat</a>
  <a href="status.php">status</a>
  
  <a href="myprofile.php">me</a>
</ul>
   <?php  if (isset($_SESSION['username'])) : ?>
       <a href="usi.php?logout='1'" style="color: red;">logout</a> 
<?php endif ?>
    <input type="text" name="search" placeholder="search">

</div>
</p>
<div class="content">
  
</div>
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
</script>

<?php
$server="localhost";

$username="root";
$password="";
$dbname="teshapp";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> <style>
      
      img{
        width:15%;
        border-radius: 70%;
        height: 200px;
      }
      body{
        background-color:Honeydew;
        font-family: 0.8em;
        
      }
      a{
        color: green;
        text-decoration:none;
      }
      #z{
        color: blue;
      }
      #q{
        color: blue;
      }
          @media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100;/*e width is 100%, when the viewport is 800px or smaller */
  }
}
 </style>
  </div>
<div class="content">
  <?php $b=$_SESSION['username'];
   ?>
<?php
$count=1;
//$sel_query="Select * from cashier ORDER BY id desc;";
$sql = "SELECT id, username, email,pic FROM  users where username !='$b'";
$result = $conn->query($sql);
//$result = mysqli_query($db,$sel_query);
 $rowcount = mysqli_num_rows($result);
while($row = $result->fetch_assoc()) {?>
  <div id="k">
    <div class="w3-container w3-half">
      <ul class="w3-ul">
<?php echo "<img src='uploadedimg/" . $row['pic']. " ' onclick='onClick(this)'
    class='w3-hover-opacity'>";?>
  </ul>



<a href="profille.php?id=<?php echo $row["id"]; ?>">
<?php
 echo $row["username"];
 echo "$rowcount";
?>
</a>

<br>

<a href="mesi.php?recip=<?php echo $row["username"]; ?>"><img src="message7.png" id="star"><label>message</label></a>
<td align="center">
<a href="adding.php?id=<?php echo $row["id"]; ?> " id="z"><label >add</label></a>
<br>
</div>
<?php } ?>
</div>

<body>

<body>
<br><br>
<div id="m01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">×</span>
  <img class="w3-modal-content w3-animate-zoom" id="img01" style="width:100%">
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("m01").style.display = "block";
}
</script>
   
            
</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_gallery by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:52 GMT -->
</html> 

