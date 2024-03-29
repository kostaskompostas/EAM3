const form = document.getElementById("login-form");
const username = document.getElementById("username");
const firstName = document.getElementById("name");
const lastName = document.getElementById("lastName");
const password = document.getElementById("password");
const afm = document.getElementById("afm");
const companyName = document.getElementById("companyName");
const typeOfUser = document.getElementById("typeOfUser");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const address = document.getElementById("adress");
const parentSection = document.getElementById("parentSection");
const companyLabelDesc = document.getElementById("companyLabelDescription");
const gender_radios = document.getElementsByName("gender");
isOwner = false;


setInputFilter(phone, function(value) {
    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
  });

  setInputFilter(afm, function(value) {
    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
  });


function typeOfUserSelected() {
	var curSelection = typeOfUser.options[typeOfUser.selectedIndex].value;
	if (curSelection === "Εργαζόμενος") {
		companyLabelDesc.innerHTML="Όνομα της εταιρείας που εργάζεστε";

		parentSection.style.display = "flex";
		console.log(parentSection.style.display);
		isOwner = true;
	} else {
		companyLabelDesc.innerHTML="Όνομα της εταιρείας σας";

		parentSection.style.display = "none";
		console.log(parentSection.style.display);
		isOwner = false;
	}
}

function mysubmit(){

	const usernameValue = username.value.trim();
	const passValue = password.value.trim();
	const afmValue = afm.value.trim();
    const companyNameValue = companyName.value.trim();
	const emailValue = email.value.trim();
	const firstNameValue = firstName.value.trim();
	const lastNameValue = lastName.value.trim();
	const phoneValue = phone.value.trim();
	const addressValue = adress.value.trim();

	var everythingGood = true;

	var gender_flag=false;
	for ( var i=0,length=gender_radios.length ; i< length; i++){
		if (gender_radios[i].checked)
			gender_flag=true;
	}

	temp = document.getElementById("gender_radios");
	if(gender_flag===false){
		everythingGood = false;
		setErrorFor(temp, "Συμπληρώστε το φυλο  σας");
	} else {
		setSuccessFor(temp);
	}

	if (usernameValue === "") {
		everythingGood = false;
		setErrorFor(username, "Συμπληρώστε το όνομα χρήστη σας");
	} else {
		setSuccessFor(username);
	}
	
	if (firstNameValue === "") {
		everythingGood = false;
		setErrorFor(firstName, "Συμπληρώστε το Ονομασας");
	} else {
		setSuccessFor(firstName);
	}

    if (lastNameValue === "") {
		everythingGood = false;
		setErrorFor(lastName, "Συμπληρώστε το Επώνυμό σας");
	} else {
		setSuccessFor(lastName);
	}

	if (passValue === "") {
		everythingGood = false;
		setErrorFor(password, "Συμπληρώστε τον κωδικό σας");
	} else {
		setSuccessFor(password);
	}

	if (afmValue === "") {
		everythingGood = false;
		setErrorFor(afm, "Συμπληρώστε τον ΑΦΜ σας");
	} else {
		if (afmValue.length<9){
			setErrorFor(afm,"Πρέπει να συμπληρώσετε 9 ψηφία");
		}else{

			setSuccessFor(afm);
		}
    }
	

	
    
    if(emailValue === ''){
        everythingGood = false;
        setErrorFor(email, "Συμπληρώστε το email σας");
    } else{
        setSuccessFor(email);
    }

    if(emailValue !== ''){
        if(!validateEmail(emailValue)){
            everythingGood = false;
            setErrorFor(email, "Συμπληρώστε το email σας σε μορφή name@mail.com");
        }else{
            setSuccessFor(email);
        }
	}
	
    if(phoneValue === ''){
        everythingGood = false;
        setErrorFor(phone, "Συμπληρώστε το τηλέφωνό σας");
    } else{
        setSuccessFor(phone);
	}

	if(addressValue === ''){
        everythingGood = false;
        setErrorFor(address, "Συμπληρώστε τη διεύθυνσή σας");
    }else{
        setSuccessFor(address);
    }

	
	if (companyNameValue === "") {
		everythingGood = false;
		setErrorFor(companyName, "Συμπληρώστε το όνομα της εταιρείας");
	} else {
		setSuccessFor(companyName);
	}
	

	return everythingGood;
}

email.addEventListener('input', function(e) {
    const emailValue = email.value.trim();
    if(emailValue !== ''){
        if(!validateEmail(emailValue)){
            setErrorFor(email, "Συμπληρώστε το email σας σε μορφή name@mail.com");
        }else{
			setSuccessFor(email);
		}
    }
});