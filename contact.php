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
          <a href="home.php">HOMEPAGE</a>
          <a href="Bookmarks.html">Bookmarks</a>
          <a href="index.php">Login</a>
        </div>
      </div> 
      <br>
      <h1 style="font-size:50px;text-align:center;position: relative;bottom: -12px;"class="collapsible">Contact Us</h1>
      <br><br>
      <form action="/html/tags/html_form_tag_action.cfm" method="post"style="text-align:center">
        <div>
        <textarea class="box"name="comments" id="comments" style="font-family:sans-serif;font-size:2.2em;"placeholder="Type here.."></textarea>
        </div>
        <input class="middle"type="submit" value="Submit">
        </form>
      
<br><br><br><br><br>

<br><br><br><br><br><br>
<div class="collapsible"style="border">
  <p style="margin-left:35px;margin-right:50px;font-size: 20px;">Email: Imtinan_raza@hotmail.com</p>
  <p style="margin-left:35px;margin-right:50px;font-size: 20px;">Phone: ####-######</p>
        </div>
<!--FOOTER-->

<footer class="footer-distributed">

    <div class="footer-right"style="float:bottom">

        <a href="https://www.facebook.com/profile.php?id=100088691922861"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/car_catalogue?t=DwtqgY5lDBwG44lcMLMFzQ&s=09"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/car-catalogue-080a2825a"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/iSyed0/reza.car_catalogue.git"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="home.php">Home</a>

            <a href="blog.html">Blogs</a>

            <a href="About.html">About</a>

            <a href="contact.php">Contact Us</a>
        </p>

        <p>CarCatalogue &copy; 2022</p>
    </div>

</footer>


    </body>

    </html>