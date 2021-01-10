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

changes = 0;

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
    everythingGood = true;
    const emailValue = email.value.trim();

    if(emailValue !== ''){
        if(!validateEmail(emailValue)){
            everythingGood = false;
            setErrorFor(email, "Συμπληρώστε/-*/ το email σας σε μορφή name@mail.com");
        }
    }

	return everythingGood;
}

password.addEventListener('input', function(e) {
    var defaultVal = password.getAttribute("placeholder");
    if(defaultVal == password.value || password.value == ''){
        unsetFor(password);
    }else{
        setModifiedFor(password);
    }
});

email.addEventListener('input', function(e) {
    var defaultVal = email.getAttribute("placeholder");
    if(defaultVal == email.value || email.value == ''){
        unsetFor(email);
    }else{
        setModifiedFor(email);
    }
});

firstName.addEventListener('input', function(e) {
    var defaultVal = firstName.getAttribute("placeholder");
    if(defaultVal == firstName.value || firstName.value == ''){
        unsetFor(firstName);
    }else{
        setModifiedFor(firstName);
    }
});

lastName.addEventListener('input', function(e) {
    var defaultVal = lastName.getAttribute("placeholder");
    if(defaultVal == lastName.value || lastName.value == ''){
        unsetFor(lastName);
    }else{
        setModifiedFor(lastName);
    }
});

phone.addEventListener('input', function(e) {
    var defaultVal = phone.getAttribute("placeholder");
    if(defaultVal == phone.value || phone.value == ''){
        unsetFor(phone);
    }else{
        setModifiedFor(phone);
    }
});

phone.addEventListener('input', function(e) {
    var defaultVal = phone.getAttribute("placeholder");
    if(defaultVal == phone.value || phone.value == ''){
        unsetFor(phone);
    }else{
        setModifiedFor(phone);
    }
});

address.addEventListener('input', function(e) {
    var defaultVal = address.getAttribute("placeholder");
    if(defaultVal == address.value || address.value == ''){
        unsetFor(address);
    }else{
        setModifiedFor(address);
    }
});

afm.addEventListener('input', function(e) {
    var defaultVal = afm.getAttribute("placeholder");
    if(defaultVal == afm.value || afm.value == ''){
        unsetFor(afm);
    }else{
        setModifiedFor(afm);
    }
});

companyName.addEventListener('input', function(e) {
    var defaultVal = companyName.getAttribute("placeholder");
    if(defaultVal == companyName.value || companyName.value == ''){
        unsetFor(companyName);
    }else{
        setModifiedFor(companyName);
    }
});