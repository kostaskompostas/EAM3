const form = document.getElementById("login-form");
const firstName = document.getElementById("name");
const lastName = document.getElementById("lastName");
const password = document.getElementById("password");
const afm = document.getElementById("afm");
const companyName = document.getElementById("companyName");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const address = document.getElementById("adress");
const companyLabelDesc = document.getElementById("companyLabelDescription");
const parentCheckBox = document.getElementById("parentCheckBox");


isOwner = parentCheckBox != null;

typeOfUserSelected();

setInputFilter(phone, function(value) {
    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
  });

function typeOfUserSelected() {
	if (isOwner) {
		companyLabelDesc.innerHTML="Όνομα της εταιρείας σας";
    } else {
		companyLabelDesc.innerHTML="Όνομα της εταιρείας που εργάζεστε";
	}
}

function mysubmit(){
    var everythingGood = true;

    const emailValue = email.value.trim();
    if(emailValue !== ''){
        if(!validateEmail(emailValue)){
            everythingGood = false;
            setErrorFor(email, "Συμπληρώστε το email σας σε μορφή name@mail.com");
        }
    }

	return everythingGood;
}

password.addEventListener('input', function(e) {
    handleInput(password);
});

email.addEventListener('input', function(e) {
    handleInput(email);

    const emailValue = email.value.trim();
    if(emailValue !== ''){
        if(!validateEmail(emailValue)){
            setErrorFor(email, "Συμπληρώστε το email σας σε μορφή name@mail.com");
        }
    }
});

firstName.addEventListener('input', function(e) {
    handleInput(firstName);
});

lastName.addEventListener('input', function(e) {
    handleInput(lastName);
});

phone.addEventListener('input', function(e) {
    handleInput(phone);
});

address.addEventListener('input', function(e) {
    handleInput(address);
});

afm.addEventListener('input', function(e) {
    handleInput(afm);
});

companyName.addEventListener('input', function(e) {
    handleInput(companyName);
});

function handleInput(inp){
    var defaultVal = inp.getAttribute("placeholder");
    if(defaultVal == inp.value || inp.value == ''){
        unsetFor(inp);
    }else{
        setModifiedFor(inp);
    }
}