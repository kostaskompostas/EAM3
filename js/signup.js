const form = document.getElementById("login-form");
const username = document.getElementById("username");
const firstName = document.getElementById("name");
const lastName = document.getElementById("lastName");
const password = document.getElementById("password");
const afm = document.getElementById("afm");
const companyName = document.getElementById("companyName");
const typeOfUser = document.getElementById("typeOfUser");
const companySection = document.getElementById("companySection");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const adress = document.getElementById("adress");

isOwner = false;


setInputFilter(phone, function(value) {
    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
  });


function typeOfUserSelected() {
	var curSelection = typeOfUser.options[typeOfUser.selectedIndex].value;
	if (curSelection === "Εργοδότης") {
		companySection.style.display = "block";
		isOwner = true;
	} else {
		companySection.style.display = "none";
		isOwner = false;
	}
}

form.addEventListener("submit", (e) => {
	e.preventDefault();

	if (checkInputs()) {
		window.location = "index.html";
	}
});

function checkInputs() {
	const usernameValue = username.value.trim();
	const passValue = password.value.trim();
	const afmValue = afm.value.trim();
    const companyNameValue = companyName.value.trim();
	const emailValue = email.value.trim();
	const firstNameValue = firstName.value.trim();
	const lastNameValue = lastName.value.trim();
	const phoneValue = phone.value.trim();
	const adressValue = adress.value.trim();

	var everythingGood = true;

	if (usernameValue === "") {
		everythingGood = false;
		setErrorFor(username, "Συμπληρώστε το όνομα χρήστη σας");
	} else {
		setSuccessFor(username);
    }
    
    if (lastNameValue === "") {
		everythingGood = false;
		setErrorFor(lastName, "Συμπληρώστε το Ονοματεπώνυμό σας");
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
		setErrorFor(afm, "Συμπληρώστε τον κωδικό σας");
	} else {
		setSuccessFor(afm);
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

	if (isOwner) {
		if (companyNameValue === "") {
			everythingGood = false;
			setErrorFor(companyName, "Συμπληρώστε το όνομα της εταιρείας σας");
		} else {
			setSuccessFor(companyName);
		}
	}

	return everythingGood;
}
