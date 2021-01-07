const form = document.getElementById("login-form");
const username = document.getElementById("name");
const nameLastName = document.getElementById("nameLastName");
const password = document.getElementById("password");
const afm = document.getElementById("afm");
const companyName = document.getElementById("companyName");
const typeOfUser = document.getElementById("typeOfUser");
const companySection = document.getElementById("companySection");
const email = document.getElementById("email");

isOwner = false;

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
	const name_Value = username.value.trim();
	const passValue = password.value.trim();
	const afmValue = afm.value.trim();
    const companyNameValue = companyName.value.trim();
    const emailValue = email.value.trim();
    const nameLastNameValue = nameLastName.value.trim();

	var everythingGood = true;

	if (name_Value === "") {
		everythingGood = false;
		setErrorFor(username, "Συμπληρώστε το όνομα χρήστη σας");
	} else {
		setSuccessFor(username);
    }
    
    if (nameLastNameValue === "") {
		everythingGood = false;
		setErrorFor(nameLastName, "Συμπληρώστε το Ονοματεπώνυμό σας");
	} else {
		setSuccessFor(nameLastName);
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
