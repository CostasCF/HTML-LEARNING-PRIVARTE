<?php
// συνδεση με βαση δεδομενων
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "assignment6";
    //ΔΗΜΙΟΥΡΓΙΑ ΣΥΝΔΕΣΗΣ ΜΕ ΤΗΝ ΒΑΣΗ
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
$output = '';
//collect
if(isset($_POST['search'])) {
	$searchq= $_POST['search'];
	//εμφανιζει παρομοια στοιχεια με αυτα που αναζητα ο χρηστης 
	$query = mysqli_query($conn,"SELECT * FROM register WHERE username LIKE '%$searchq%' OR  email like '%$searchq%'") or die("could not search!");
	$count = mysqli_num_rows($query);
	if($count== 0){
		$output = 'Το στοιχείο αναζήτησης δεν βρεθηκε';
	}else{
		while($row= mysqli_fetch_array($query)){
			// εξοδος δεδομενων
			$username = $row['username'];
			$password = $row['password'];
			$payment = $row['payment'];
			$email = $row['email'];
			$age = $row['age'];
			$phone = $row['phone'];
			$subject = $row['subject'];
			$date = $row['date'];
			$address = $row['address'];
		} 
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <style>
  /* περιοχες εντος φορμας που μπορεις να συμπληρώσεις στοιχεία */
input[type=text], textarea , input[type=email], input[type=password], input[type=radio] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}
/*κουμπια */
input[type=submit] ,input[type=reset] ,input[type=button] {
  background-color: #63b2f7;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* λειτουργια οταν το βελακι παει πανω στο πληκτρο */
input[type=submit]:hover, input[type=reset]:hover ,input[type=button]:hover {
  background-color: #8ad4ff;
}

/*φορμα*/
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  
.footer {
	background-color :#333333;
	height: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 4px;}

/* περιοχομενο footer*/
.footerTag {text-align: center;
			color: gray;
			margin-top: 5px;
			} 
			
.results {   border-collapse: collapse;
 border: 3px solid black;}			
  </style>
</head>
<body>
<!----- HEADER ---->
	<div class="footer">
		 <div class="footerTag"> 6η Εργαστηριακή άσκηση</div>	
	</div>
<form action="insert.php" method="POST">
<!------- ΦΟΡΜΑ ΕΙΣΑΓΩΓΗΣ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ -------------------------------->
 	<form id="form1" method="post" action="">
		<div class="container">
			<h2 class="EPIKEFALIDA"> Φόρμα Επικοινωνίας </h2>
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
		<!-- ΚΟΥΜΠΙΑΣ ΦΟΡΜΑΣ -->
		<h6> Τα πεδία με * ειναι υποχρεωτικά. </h6>
		<input type="submit" value="Αποστολή">
		<input type="reset" value="Καθαρισμός πεδίων">
	</div>
	</form>
	<hr>
<!------------------ Φορμα αναζητησης------------>
	<form  action="contactForm.php" method="post" >
		<div class="container">
		<h2 class="EPIKEFALIDA"> Φόρμα Αναζήτησης </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
		<label for="username">*Λεξη/Κλειδί αναζήτησης:</label>
		<input type="text" id="search" name="search" required placeholder="Email/Username..">
		
		<!-- κουμπια φορμας --->
		<input type="submit" value="Αναζήτηση">
		<input type="reset" value="Καθαρισμός πεδίων">
		<br>
		<table class="results">
		<tr class="results">
		<!-- ΔΕΝ ΕΙΝΑΙ BUG ΕΠΕΙΔΗ ΒΓΑΖΕΙ INVALID INPUT ΠΡΙΝ ΓΙΝΕΙ Η ΑΝΑΖΗΤΗΣΗ, ΜΕ ΤΟ ΠΟΥ ΔΩΣΕΙ INPUT Ο ΧΡΗΣΤΗΣ ΣΤΗΝ ΦΟΡΜΑ, ΕΜΦΑΝΙΖΕΙ ΚΑΝΟΝΙΚΑ ΤΑ ΔΕΔΟΜΕΝΑ ΑΠΟ ΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ register --->
			<td class="results"><em><b>Ονοματεπώνυμο: </b></em>	<br>	<?php print ("$username")?></td>
			<td class="results"><em><b>Κωδικός: 	</b></em>	<br> 	<?php print ("$password")?></td>
			<td class="results"><em><b>Τροπος Πληρωμης: </b></em> <br>	<?php print ("$payment")?></td>
			<td class="results"><em><b>Email: 	</b>	</em>	<br>	<?php print ("$email")?></td>
			<td class="results"><em><b>Ηλικία: 	</b>	</em>	<br>	<?php print ("$age")?></td>
			<td class="results"><em><b>Τηλέφωνο: </b>	</em>	<br>	<?php print ("$phone")?></td>
			<td class="results"><em><b>Λεπτομέρειες ερωτήματος: </b> </em><br> <?php print ("$subject")?></td>
			<td class="results"><em><b>Ημερομονία γεννησης: </b></em> <br> <?php print ("$date")?></td>
			<td class="results"><em><b>Διεύθυνση: </b></em><br> <?php print ("$address")?></td>
		</tr>
		</table>

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
</script> 

</body>
</html>