const form = document.getElementById("contact-form");
const name_lastName = document.getElementById("name");
const email = document.getElementById("email");
const date = document.getElementById("date");
const time = document.getElementById("time");
const subject = document.getElementById("subject");
const phone = document.getElementById("phone");

form.addEventListener("submit", (e)=> {
    e.preventDefault();

    checkInputs();
});

function checkInputs(){
    const name_lastNameValue = name_lastName.value.trim();
    const emailValue = email.value.trim();
    const dateValue = date.value.trim();
    const timeValue = time.value.trim();
    const subjectValue = subject.value.trim();
    const phoneValue = phone.value.trim();

    if(name_lastNameValue === ''){
        setErrorFor(name_lastName, "Συμπληρώστε το ονοματεπώνυμο σας");
    } else{
        setSuccessFor(name_lastName);
    }

    if(emailValue === ''){
        setErrorFor(email, "Συμπληρώστε το email σας");
    } else{
        setSuccessFor(email);
    }

    if(subjectValue === ''){
        setErrorFor(subject, "Περιγράψτε με εναν τίτλο το πρόβλημα σας");
    } else{
        setSuccessFor(subject);
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = "form-group error";
}

function setSuccessFor(input){
    const formControl = input.parentElement;

    formControl.className = "form-group success";
}