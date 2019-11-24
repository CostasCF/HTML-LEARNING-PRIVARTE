function CheckForBlanks()
{
	if(document.getElementById('fname').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('fname').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
	if(document.getElementById('Telephone').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('Telephone').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
	if(document.getElementById('email').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('email').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
	if(document.getElementById('subject').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('subject').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
}
function CheckForBlanks2()
{
	if(document.getElementById('ip').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('ip').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
	if(document.getElementById('NetMusk').value == "") {
		alert("Παρακαλώ συμπληρώστε όλα τα υποχρεωτικά πεδία.");
		document.getElementById('NetMusk').style.borderColor = "red";
		return false; /* Θελω η φορμα να μην στείλει τα στοιχεία NotSubmit, κάτι σαν break operation */
	}
}

function CheckforNum()
{
	if (document.getElementById('ip').value > 255.0){
		alert("Παρακαλώ εισάγεται στοιχεία με τιμή μικρότερη του 255")
		document.getElementById('ip').style.borderColor = "red";

	}
	if(document.getElementById('NetMusk').value > 255.0) {
		alert("Παρακαλώ εισάγεται στοιχεία με τιμή μικρότερη του 255");
		document.getElementById('NetMusk').style.borderColor = "red";
	
}
}

function dec2bin(){
	document.getElementById("ip").value = dec2bin(-5);
	document.write (ip >>> 0).toString(2);
  return false;
}

// --------ΠΡΟΣΠΑΘΕΙΑ ΓΙΑ ΠΡΟΕΠΙΣΚΟΠΙΣΗ ΣΥΜΠΛΗΡΩΜΕΝΩΝ ΣΤΟΙΧΕΙΩΝ ΦΟΡΜΑΣ--------------
//function onsubmit=myFunction(){
	//var myWindow = window.open("" , "MsgWindow", " width = 200 , height = 200");
	//myWindow.document.write (" <p> Ονοματεπώνυμο: "+fname", Τηλέφωνο: "+Telephone", Εmail: "+email", Ερώτημα: "+subject"</p>")} 