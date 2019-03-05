<?php 
session_start();
$fullNameValue = "";
$totalValue2 = "";
$Address= "";
$PhoneNumber= "";
/* 
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtAddress'] = $Address;
$_SESSION['txtPhoneNumber'] = $PhoneNumber;



/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
	<style>
	body{
		background-image:  url("https://www.setaswall.com/wp-content/uploads/2018/02/Green-Background-18-3500x2500.jpg");
	background-repeat: no-repeat;
background-size: 1500px 1000px;
 margin: 0;
	}
        h1{
                       color: black;
             text-align: center;
               width:84%;
      text-decoration:underline;
        }
	</style>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
					<h1>Personal Details</h1>
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtPhoneNumber" value="" /></td>
                        </tr>
 <tr>
                            <td>Address</td>
                            <td><input type="text" id="txtAddress" name="txtAddress" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        <tr>
    
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
    
        <center>
              
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
<input type="button" value="Previous" onclick="history.back(-1)" />
        </center >
        
        </div>
        </form>
    </body>
</html>


