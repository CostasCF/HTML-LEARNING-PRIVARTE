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
<form action="insert.php" method="POST">
		<div class="containerF">
			<h2 class="EPIKEFALIDA"> Φόρμα Συμπλήρωσης Στοιχείων </h2>
			<h4 class="EPIKEFALIDA"> Παρακαλούμε εισάγεται μόνο λατινικούς χαρακτήρες μέσα στο ονοματεπώνυμο και τον κωδικό. Ευχαριστούμε πολύ. </h2>
			<h5 class="EPIKEFALIDA"> Αν δεν τηρηθεί ο παραπάνω κανονας, τότε δεν εισάγεται τίποτα στα συγκεκριμένα κενα. </h5>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
				<label for="username">*Ονοματεπώνυμο:</label> <!-- ΕΠΙΤΡΕΠΟΥΜΑΙ ΜΟΝΟ ΛΑΤΙΝΙΚΟ ΑΛΦΑΒΗΤΟ ΣΤΟ ΟΝΟΜΑΤΕΠΩΝΥΜΟ --->
				<input type="text" id="username" name="username"   onkeypress="return (event.charCode > 64 &&  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required placeholder="Ονοματεπώνυμο..">
				
				<label for="password">*Κωδικός:</label> <!-- ΕΠΙΤΡΕΠΟΥΜΑΙ ΜΟΝΟ ΛΑΤΙΝΙΚΟ ΑΛΦΑΒΗΤΟ ΣΤΟ password ΣΥΜΦΩΝΑ ΜΕ ΤΑ ΔΕΔΟΜΕΝΑ ΤΗΣ ΑΣΚΗΣΗΣ --->
				<input type="password" id="password" name="password"     onkeypress="return (event.charCode > 64 &&  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required placeholder="Κωδικός..">

				<label for="Telephone">*Τηλέφωνο:</label>
				<input type="text" id="phone" name="phone"  onkeypress="return onlyNumberKey(event)"  required placeholder="Τηλέφωνο.."> 
				
				<label for="Address">*Διεύθυνση:</label>
				<input type="text" id="address" name="address" required placeholder="Διεύθυνση..">
				
				<label for="E-mail">*E-mail:</label>
				<input type="email" id="email" name="email" required placeholder="E-mail..">
				
				<label for="payment"> *ΤΡΟΠΟΣ ΠΛΗΡΩΜΗΣ: </label> <br><br><br><br>
				<em>VISA / MASTERCARD</em><input type="radio" name="payment" value="VISA/MASTERCARD" required> <br><br>
                <em>ΜΕΤΡΗΤΑ</em><input type="radio" name="payment" value="ΜΕΤΡΗΤΑ" required> 
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
				<label for="quantity"><b>Τελική Ποσότητα: </b></label> 
				<input readonly type="text" name="quantity" id="sumq" value="Readonly Value">	
				<label for="sum"><b>Ποσό αγοράς: </b></label> 
				<input readonly type="text" name="sum" id="money"  value="Readonly Value">				
		<!-- ΚΟΥΜΠΙΑΣ ΦΟΡΜΑΣ -->
		<h6> Τα πεδία με * ειναι υποχρεωτικά. </h6>
		<input type="submit" value="Αποστολή">
		<input type="button" value ="Ακύρωση" onclick="location.href='store.php';"> 
	</div>
</form>
<hr>

<!-- FOOTER ------>
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	<script> 
	function onlyNumberKey(evt) { 
       // Επιτρέπονται μόνο αριθμοί στο πεδίο του τηλεφώνου
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
	
	// παραλαβη τιμων απο την προηγουμενη σελιδα
	function recieved() {
		var quantityR = localStorage.getItem("storageQuantity");
		var moneyR = localStorage.getItem("storageMoney");		
		document.getElementById('sumq').value = quantityR;
		document.getElementById('money').value = moneyR;
	}
</script> 
</body>
</html>