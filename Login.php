<!DOCTYPE html>
<html lang="en">
<head>
  <!--bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--external stylesheet-->
  <link rel="stylesheet" type="text/css" href="css.css" />

 <meta charset="UTF-8">

 <!--mobile compatibility-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Car Catalogue</title>

<style>
  .active, .collapsible:hover {
    background-color: rgb(175, 142, 92);
  }

</style>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>

</head>

  <!--viewport background color-->
  <body style ="background-color: bisque;">


      <hr>

      <!--nav bar-->
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">≡</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="index.php">HOMEPAGE</a>
          <a href="Bookmarks.html">Bookmarks</a>
          <a href="Login.php"class="active">Login/Register</a>
        </div>
      </div> 
      <br>
      <h1 style="font-size:50px;text-align:center;position: relative;bottom: -12px;"class="collapsible">Login/Register </h1>
      <br><br>


<!--------------------- The login page HTML code ---------------------------------------> 

<h1 style="font-size:50px;text-align:center;position: relative;bottom: -12px;"class="collapsible">Login</h1>
<br>  
<form action="Login.php"  method="post">  
    <div class="account">   
        <label>Email:</label>   
        <input type="text" placeholder="Enter Email" name="email" required>  
       <br>
        <label>Password : </label>   
        <input type="password" placeholder="Enter Password" name="password" required>  
        <br>
        <button type="submit"   name="submit">Login</button>         
    </div>   
</form>  

<br>

<!---------------------------------- Divider ---------------------------------->
  
<br>

<hr>
  
<br>

<!--------------------- The singup page HTML code ---------------------------------------> 

<br>

<h1 style="font-size:50px;text-align:center;position: relative;bottom: -12px;"class="collapsible">Register</h1>
<br>  
<form method="post"action="login.php"> 
    <div class="account"> 
        <label>Username : </label>   
        <input type="text" placeholder="Enter Username" name="username" required>  
        <br>
        <label>E-mail : </label>
        <input type="email" placeholder="Enter Email" name="email" required> 
        <br>
        <label>Password : </label> 
        <input type="password" placeholder="Enter Password" name="password" required>   
       <br>
        <button type="submit">Register</button>   
    </div>   
</form>
<br><br><br><br>

<!--FOOTER-->

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/profile.php?id=100088691922861"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/car_catalogue?t=DwtqgY5lDBwG44lcMLMFzQ&s=09"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/car-catalogue-080a2825a"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com/iSyed0/reza.car_catalogue.git"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="index.php">Home</a>

					<a href="blog.html">Blogs</a>

					<a href="About.html">About</a>

					<a href="contact.php">Contact Us</a>
				</p>

				<p>CarCatalogue &copy; 2022</p>
			</div>

		</footer>

</body>

  </html>

  <?php

 
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"carcatalogue");    
  
if(isset($_POST['submit']))  
{  

    $email=$_POST['email'];  
    $password=$_POST['password'];  
  
    $check_user="select * from user_data WHERE email='$email' AND password='$password'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
     if(mysqli_num_rows($run) )  
    {  
session_start(); 
        $_SESSION['email']=$email;
        echo "<script>window.open('index.php','_self')</script>";  
			
  
    }  
    else  
    { 
            
      echo "<script>alert('Username or password is incorrect!')</script>";  
    }  
}
else{
	
	  
}	


?>