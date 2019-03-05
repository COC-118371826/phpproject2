<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-image: url("https://www.onlygfx.com/wp-content/uploads/2018/03/blue-polygonal-background-fade-4.png");
               background-repeat: no-repeat;
                 background-size: 1450px 1300px;
             
            }
            h1{
                  color: black;
             text-align: center;
               width:84%;
      text-decoration:underline;
            }
             h2 {
  color: black;
  text-align: left;
 text-decoration: underline;
             }
              
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:  	black;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 18px 20px;
  text-decoration: none;
   font-size:28px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
        </style>
    </head>
<body>
    
    <h1>Invoice</h1>
    <div class="topnav">
   <a href="/"></a>
    <a href=""></a>
  <a href=""></a>
    <a href=""> </a>
  <a href=""></a>
 
 
</div>
  
<!-- //Starting the session to get the session variable from last page-->
  <div style="background-color:#483D8B;color:white;padding:20px;">
                       <h2>Summary</h2>
         
          
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];

echo "Customers Name: ".$fullNameValue.".";
echo "<br></br>";
echo "Total Value of Products sold : ".$totalValue2.".";
?>
  </div>
<br></br>


</body>
<html>