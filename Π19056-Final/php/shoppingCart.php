<!DOCTYPE HTML>
<html>
<head>
  <title>ΦΟΡΜΑ ΑΠΟΣΤΟΛΗΣ</title>
  	<link rel="stylesheet" href="styling.css" />

</head>
<body onload="recieved();">
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
<form action="insertDB.php" method="POST">
		<div class="containerF">
			<h2 class="EPIKEFALIDA"> Μέθοδος πληρωμής και στοιχεία αποστολής. </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
				<label for="username">*Ονοματεπώνυμο:</label>
				<input type="text" id="username" name="username"   required placeholder="Ονοματεπώνυμο..">
				
				<label for="password">*Κωδικός:</label> 
				<input type="password" id="password" name="password"  required placeholder="Κωδικός..">

				<label for="Telephone">*Τηλέφωνο:</label>
				<input type="text" id="phone" name="phone"    required placeholder="Τηλέφωνο.."> 
				
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
				<textarea id="subject" name="subject" required placeholder="Γράψε κάτι.." style="height:200px"></textarea>
				
				<label for="date">*Ημερομονία Γέννησης:</label>
				<input type="date" id="date" name="date" required >
				
				
				<label for="subject">*Ηλικία:</label>
				<select name="age" required>
					<option selected hidden value=""><em>Πόσο χρονών είστε;</em></option>
					<!-- DROP DOWN ΛΙΣΤΑ ΗΛΙΚΙΑΣ ΜΕ PHP! -->
					<?php
						for($i = 1; $i <= 100; $i += 1){
						echo("<option value='{$i}'>{$i}</option>");
						}		
					?>
				</select>
				<br><br>
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
		<input type="submit" value="Αποστολή" id="submit"onclick="validateForm();">
		<input type="button" value ="Ακύρωση" onclick="location.href='store.php';"> 
	</div>
</form>
<hr>

<!-- FOOTER ------>
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	<script> 
function validateForm(){
	var phone = document.getElementById("phone").value;
	var phonelogic = true;
	let phonereg = /\D+/ // οποιοδηποτε χαρακτηρα
	//ελεγχος τηλεφωνου
	if (!(phonereg.test(phone))){ // εαν δεν περιέχει καποιο χαρακτήρα, το phonelogic γινεται false;
		phonelogic = false;
	}else {
		alert("Το τηλέφωνο πρεπει να περιέχει μόνο αριθμούς.");
		document.getElementById('phone').style.borderColor = "red";
		var submit = document.getElementById('submit');
		preventDefault(submit);
		return false;
	}
}
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