<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styling.css" />
	<title> ΕΠΙΚΟΙΝΩΝΙΑ </title>	
	</head>
	<!--BODY-->
	<body id="bodyContact">
	<div class="container">
	<ul>
		<li><a  href="main.php"><b>ΑΡΧΙΚΗ</b></a></li>
		<li><a href="info.php"><b>ΠΛΗΡΟΦΟΡΙΕΣ</b></a></li>
		<li><img src="images/logo.png" alt= "eikona span" class="logoImg" > </li>
		<li><a href="store.php"><b>ΚΑΤΑΣΤΗΜΑ</b></a></li>
		<li><a  class="active" href="contact.php"><b>ΕΠΙΚΟΙΝΩΝΙΑ</b></a></li>
	</ul>
	</div>

<!---------------------- ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ ------------------->
	<!-- ΕΙΣΑΓΩΓΗ JAVASCRIPT ΣΤΗΝ ΦΟΡΜΑ ---------->
	<form action="">
	<div class="containerF">
		<h2 class="EPIKEFALIDA"> Φόρμα Επικοινωνίας </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->

				<label for="name">*Ονοματεπώνυμο:</label> 
				<input type="text" id="name" name="fullname" placeholder="Ονοματεπώνυμο.." autofocus>
				<label for="phone">*Τηλέφωνο:</label> 
				<input type="text" id="phone" name="phone" maxlength="10" placeholder="Τηλέφωνο..">
			
				<label for="E-mail">*E-mail:</label>
				<input type="email" id="email" name="email"  placeholder="E-mail..">
				<label for="request">*Ερώτημα:</label> 

		<textarea id="request" name="request" placeholder="Γράψε κάτι.." maxlength="500" style="height:200px"></textarea>
		<!-- ΚΟΥΜΠΙΑΣ ΦΟΡΜΑΣ -->
		<h4> Τα πεδία με * ειναι υποχρεωτικά. </h4>
		<input id="submit" type="button" value="Αποστολή" >
		<input type="reset" value="Καθαρισμός πεδίων">
	</div>	
	</form>	

<!--Popup window με τα αποτελέσματα-->
<div id="popup" class="vBackground">
	<!-- Content -->
	<div class="vContent">
		<div class="vHeader">
			<h2>Σίσουρα θέλετε να στείλετε το παρακάτω mail με τις ακόλουθες πληροφορίες;</h2>
		</div>
		<div class="vBody">
			<p id="vEmail"></p>
			<div class="ButtonsPOP">
				<input type="button" id="Send" value="Τελική Αποστολή">
				<input type="button" id="noSend" value="Ακύρωση">
			</div>
		</div>
	</div>
</div>
	<hr>
	<!-- FOOTER-------------------->
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	
	<script>
	// ΕΛΕΓΧΟΣ ΓΙΑ ΚΕΝΑ ΕΝΤΟΣ ΤΗΣ ΦΟΡΜΑΣ	

function validateForm() {
	var name = document.getElementById("name").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var request = document.getElementById("request").value;
	var namelogic = true;
	var	maillogic = true;
	var phonelogic = true;
	let phonereg = /\D+/ // οποιοδηποτε χαρακτηρα
	let mailreg = /\S+@\S+\.\S+/; //μορφη email x@x.yyy
	let namereg= /\d/g; // οποιοδηποτε ψηφιο
	//ελεγχος ονοματος
	if (!(namereg.test(name))){ // εαν δεν περιέχει καποιο ψηφιο, το namelogic γινεται false;
		namelogic = false;
	}
	//ελεγχος email
	if ((mailreg.test(email))) { // εαν το mail ειναι της μορφης x@x.yyy, το maillogic γινεται false;
		maillogic = false;
	}
	//ελεγχος τηλεφωνου
	if (!(phonereg.test(phone))){ // εαν δεν περιέχει καποιο χαρακτήρα, το phonelogic γινεται false;
		phonelogic = false;
	}
	if (namelogic == true && !(name=="" || email=="" || phone== "" || request=="")){ // εαν ειναι ισχυει ακομα οτι namelogic=true τοτε βγάζει μήνυμα 
		alert("Το ονομα πρεπει να περιέχει μόνο χαρακτήρες.");
		document.getElementById('name').style.borderColor = "red";
		return false;
	}
	if (phonelogic == true && !(name=="" || email=="" || phone== "" || request=="")){ // εαν ειναι ισχυει ακομα οτι phonelogic=true τοτε βγάζει μήνυμα 
		alert("Το τηλέφωνο πρεπει να περιέχει μόνο αριθμούς.");
		document.getElementById('phone').style.borderColor = "red";
		return false;
	}
	if (maillogic == true && !(name=="" || email=="" || phone== "" || request=="")){ // εαν ειναι ισχυει ακομα οτι maillogic=true τοτε βγάζει μήνυμα 
		alert("Το email πρεπει να ειναι της μορφής x@x.yyy");
		document.getElementById('email').style.borderColor = "red";
		return false;
	}
	if (name=="" || email=="" || phone== "" || request==""){ // εαν οι τιμες ειναι κενες, εμφανισε μήνυμα
		alert ("Όλα τα πεδία με * είναι υποχρεωτικά");
		return false;
	}
	else {
		popup()
	}
}
function sendEmail(name,phone,email,request) {
	window.location.href = "mailto:" + email + "?subject=&body=Ονοματεπώνυμο: " + name + "%0D%0AΤηλέφωνο:" + phone + "%0D%0A%0D%0A" + request;
}

var email = document.getElementById("email").value;
function popup() {
	var popup = document.getElementById("popup");
	//styling με javascript και εισαγωγη values 
	popup.style.display = "block";
	var name = document.getElementById("name").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var request = document.getElementById("request").value;
	document.getElementById("vEmail").style.color = "#ed6258";
	document.getElementById("vEmail").style.fontFamily = "Arial";
	document.getElementById("vEmail").style.fontSize = "larger";	
	document.getElementById("vEmail").style.textAlign = "center";	
	document.getElementById("vEmail").style.floatval = "left";	
	document.getElementById("vEmail").innerHTML = " <b>Όνομα:</b> " + name + "<b><br>Τηλέφωνο:</b> " + phone + "<b><br>Email: </b> " + email + "<br><br>" + "<b>Ερώτημα:  </b>" + request;
	document.getElementById('Send').onclick=function(){sendEmail(name, phone, email, request)};
	document.getElementById('noSend').onclick=function(){
		popup.style.display = "none";
	}
} 
document.getElementById('submit').onclick=function(){validateForm()};

	</script>
</body>
</html>
