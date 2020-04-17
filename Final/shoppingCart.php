<!DOCTYPE HTML>
<html>
<head>
  <title>ΦΟΡΜΑ ΑΠΟΣΤΟΛΗΣ</title>
  	<link rel="stylesheet" href="styling.css" />

</head>
<body id="BodyCart" onload="recieved();">
<!----- HEADER ---->
	<div class="container">
	<ul>
		<li><a  href="main.php"><b>ΑΡΧΙΚΗ</b></a></li>
		<li><a href="info.php"><b>ΠΛΗΡΟΦΟΡΙΕΣ</b></a></li>
		<li><img src="images/logo.png" alt= "eikona span" class="logoImg" > </li>
		<li><a class="active" href="store.php"><b>ΚΑΤΑΣΤΗΜΑ</b></a></li>
		<li><a href="contact.php"><b>ΕΠΙΚΟΙΝΩΝΙΑ</b></a></li>
	</ul>
	</div>


<!------- ΦΟΡΜΑ ΕΙΣΑΓΩΓΗΣ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ -------------------------------->
<form action="insertDB.php" method="POST" id="dataForm" name="dataForm">
		<div class="containerF">
			<h2 class="EPIKEFALIDA"> Μέθοδος πληρωμής και στοιχεία αποστολής. </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
				<label for="username">*Ονοματεπώνυμο:</label>
				<input type="text" id="username" name="username" oncopy="return false" onpaste="return false"  
				  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  maxlength="60" required placeholder="Ονοματεπώνυμο..">
				
				<label for="password">*Κωδικός:</label> 
				<input type="password" id="password" name="password" maxlength="100" required placeholder="Κωδικός..">

				<label for="Telephone">*Τηλέφωνο:</label>
				<input type="text" id="phone" name="phone" pattern="[0-9]{10}" oncopy="return false" onpaste="return false" maxlength="10" 
				onkeypress="return !(event.charCode > 31 &&  (event.charCode < 48 || event.charCode > 57))" required placeholder="Τηλέφωνο.."> 
				
				<label for="Address">*Διεύθυνση:</label>
				<input type="text" id="address" name="address" required placeholder="Διεύθυνση..">
				
				<label for="E-mail">*E-mail:</label>
				<input type="email" id="email" name="email" required placeholder="E-mail..">
				
				<label for="payment"> *ΤΡΟΠΟΣ ΠΛΗΡΩΜΗΣ: </label> <br><br><br>
				<em>VISA / MASTERCARD</em><input type="radio" name="payment" value="VISA/MASTERCARD" required>
				<img src="images/cards.png"><br><br><br>
                <em>ΑΝΤΙΚΑΤΑΒΟΛΗ (€)</em><input type="radio" name="payment" value="ΜΕΤΡΗΤΑ" required> 
				<br><br>
				<label for="subject">*Ερώτημα:</label>
				<textarea id="subject" name="subject" maxlength="500" required placeholder="Γράψε κάτι.." style="height:60px"></textarea>
				
				<label for="date">*Ημερομονία Γέννησης:</label>
				<input type="date" id="date" name="date" required >
				<br><br><br>

				<label for="red"><b>Μπλουζάκι "ΚΟΚΚΙΝΟ" </b></label> 
				<input readonly type="text" name="red" id="red" value="Readonly Value">	
				<label for="white"><b>Μπλουζάκι "ΛΕΥΚΟ": </b></label> 
				<input readonly type="text" name="white" id="white" value="Readonly Value">	
				<label for="quantity"><b>Συνολικά Τεμάχια: </b></label> 
				<input readonly type="text" name="quantity" id="sumq" value="Readonly Value">	
				<label for="money"><b>Ποσό αγοράς: </b></label> 
				<input readonly type="text" name="money" id="money"  value="Readonly Value">				
		<!-- ΚΟΥΜΠΙΑΣ ΦΟΡΜΑΣ -->
		<h6> Τα πεδία με * ειναι υποχρεωτικά. </h6>
		<input type="submit" value="Αποστολή" id="btnSubmit">
		<input type="button" value ="Ακύρωση" onclick="location.href='store.php';"> 
	</div>
</form>

<!-- FOOTER ------>
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	<script> 
	
	// παραλαβη τιμων απο την προηγουμενη σελιδα
function recieved() {
		var quantityWhite = localStorage.getItem("storageWhite");
		var quantityRed  = localStorage.getItem("storageRed");
		var quantityR = localStorage.getItem("storageQuantity");
		var moneyR = localStorage.getItem("storageMoney");	
		document.getElementById('white').value = quantityWhite;
		document.getElementById('red').value = quantityRed;		
		document.getElementById('sumq').value = quantityR;
		document.getElementById('money').value = moneyR;
	}

</script> 
</body>
</html>