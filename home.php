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
  /*img clickable area hover color*/
img :hover{
  background-color: rgb(240, 203, 136);}


  /*replicate color to make title bar not look like a button*/
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
          <a href="home.php"class="active">HOMEPAGE</a>
          <a href="Bookmarks.html">Bookmarks</a>
          <a href="index.php">Login</a>
        </div>
      </div> 
      
                
      <!--page title-->
      <h1 style="font-size:50px;text-align:center;position: relative;bottom: -12px;"class="collapsible">CarCatalogue </h1>
  <img src="https://blog.calcarcover.com/media/70482/img_0490.jpg?anchor=center&mode=crop&width=830&height=521&rnd=132012646180000000"alt="coverpicture"style="width:100%;height:210px"class="center">
<!--heading and text-->


<p style="font-size:30px;text-align: center"class="collapsible">Assisting you with making a better choice in choosing an automobile.</p>
<br>
        <!-- search bar right align -->
        
        <div class="search">
          <form action="home.php"  method="post">
              <input type="text" placeholder=" Search Catalogue" name="search">
              
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
 
                 
              
            </form>
            </div>
            <br><br>
            <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Brand_name</th>
            <th>Engine_power</th>
            <th>Price</th>
           
          </tr>
        </thead>
     
        
  <?php

$searchErr = '';
$cars='';
$servername='localhost';
$username="root";
$password="";
 
try
{
    $con=new PDO("mysql:host=$servername;dbname=carcatalogue",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
  
  
  
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from cars where Brand_name like '%$search%' ");
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($cars as $key => $value) {

        echo $value['Brand_name'];

      }
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>

<?php
                 if(!$cars)
                 {
              if(isset($_POST['submit']))  echo 'No data found';
                 }
                 else{

                    foreach($cars as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['Brand_name'];?></td>
                        <td ><?php echo $value['Engine_power'];?></td>
                        <td ><?php echo $value['Price'];?></td>
                       
                    </tr>
                        <?php 
                    } 

                 }
                        
                        ?>
                
                      
                          </table>
                          </div>  

                    
                     
                 
              
                


<!--main content-->
<a href="USA.html"><img style="float:center;text-align:center;width:137px;height:133px;margin-top:40px" src="https://www.norskanalyse.com/wp-content/uploads/2020/04/USA-300.png" alt="USA_flag" class="cars" ></a>
<p style="font-size:30px;text-align:center;margin-top:10px;font-family:Arial, Helvetica, sans-serif;">USA</p>

<a href="Germany.html"><img style="float:center;width:130px;height:133px;margin-top:40px"src="https://th.bing.com/th/id/R.a8b26f66dafd3a3faf1b397e67188f49?rik=z9V6BBluZRPjKQ&pid=ImgRaw&r=0&sres=1&sresct=1" alt="Germany_flag"class="cars"></a>
<p style="font-size:30px;text-align:center;margin-top:10px;font-family:Arial, Helvetica, sans-serif;">Germany</p>

<a href="Japan.html"><img style="float:center;width:133px;height:133px;margin-top:40px"src="https://cdn.countryflags.com/thumbs/japan/flag-3d-round-250.png" alt="Japan_flag"class="cars"></a>
<p style="font-size:30px;text-align:center;margin-top:10px;font-family:Arial, Helvetica, sans-serif;">Japan</p>

<a href="Italy.html"><img style="float:center;width:133px;height:133px;margin-top:40px"src="https://i0.wp.com/marketingcube.com.au/wp-content/uploads/2018/08/FLAG-Italy-ID-Circle-274pxl.png-e1535381632780.png?ssl=1" alt="Italy_flag"class="cars"></a>
<p style="font-size:30px;text-align:center;margin-top:10px;font-family:Arial, Helvetica, sans-serif;">Italy</p>

  <br>

        <p style="text-align: center">Click the flags for information.</p>
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