<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-image: url("https://www.onlygfx.com/wp-content/uploads/2018/03/blue-polygonal-background-fade-4.png");
               background-repeat: no-repeat;
                 background-size: 1450px 1300px;
             margin: 0;
            }
            h1{
                  color: black;
             text-align: center;
         
      text-decoration:underline;
            }
             h2 {
  color: black;
  text-align: center;
 text-decoration: underline;
             }

.receipt{
    font-size:20px;
 
  text-align:center;
}
h4 {
    text-align:center;
    font-size:20px;
}
p {
      text-align:center;
    font-size:20px;
}
        </style>
    </head>
<body>
    
    <h1>Invoice</h1>
<!-- //Starting the session to get the session variable from last page-->
<div style="background-color:#483D8B;color:white;padding:20px;"></div>
                       <h2>Summary</h2>
                       <h2>Thank you for your purchase</h2>
                       <h4>Company Name:Blackbird</h4>
                       <div class="receipt">
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$Address = $_POST['txtAddress'];
$PhoneNumber=$_POST['txtPhoneNumber'];

echo "Customers Name: ".$fullNameValue.".";
echo "<br></br>";
echo "Address: ".$Address.".";
echo "<br></br>";
echo "Phone Number: ".$PhoneNumber.".";
echo "<br></br>";
echo "Total Value of Products sold : €".$totalValue2.".";

?>
  </div>
                       <p>Receipt Number:</p>
                       <p id="demo"></p>

<script>
document.getElementById("demo").innerHTML =
Math.floor(Math.random() * 100) + 1;
</script>

<p>Date: <span id="datetime"></span></p>



<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>                  
  </div>
<br></br>

</body>
<html>