<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start(); 
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>Ebusiness 1</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<style>
body {
background-image: url("http://629photography.com/Orange-background.png");
background-repeat: no-repeat;
background-size: 2000px 1000px
}
	</style>
	<div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
		<h1><u>Shop Calculator</u></h1>
		<hr />
		<center>
                    <table cellspacing="10">
			<tr>
                            <td><b>Product</b></td>
			</tr>
			<tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="150.00" /></td>
                        </tr>				
			<tr>
                            <td>ImmersiveExperience</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="500.00" /></td>
                        </tr>				
			<tr>
                            <td>AutonomousThings</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="300.00" /></td>
                        </tr>	
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
		<tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
		</tr>
		<tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
		</tr>
		<tr>
                    <td>-Discount @30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
		</tr>
                <tr>
                    <td>+VAT @40%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
		</tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
    
    <br />
		<center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
		</center>
	</form>
</div>
		
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
            var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
            
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
                
            } 
		else if (document.getElementById('ImmersiveExperience').checked) {
                document.intCalc.txtSubTot.value = ImmersiveExperience;
                subAmount = ImmersiveExperience;
                 calculation(subAmount);
               
            } 
		else if (document.getElementById('AutonomousThings').checked) {
                document.intCalc.txtSubTot.value = AutonomousThings;
                subAmount = AutonomousThings;
                 calculation(subAmount);
            } 
        }    
		
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .30);
           var vatCalc = parseFloat(subTotal * .40);
           var total = parseFloat(subTotal - discCalc + vatCalc);
           
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc;  
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
          
        }
//      

	</script>
	
	<script>
	function AmountClear(){
        document.getElementById("txtSubTot").value="";
	document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
	document.getElementById("txtTotal").value="";
}
	</script>
</body>
</html>
