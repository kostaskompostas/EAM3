const form = document.getElementById("contact-form");
const name_lastName = document.getElementById("name");
const email = document.getElementById("email");
const date = document.getElementById("date");
const timeAp = document.getElementById("time");
const subject = document.getElementById("subject");
const phone = document.getElementById("phone");


setInputFilter(phone, function(value) {
    return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
  });

form.addEventListener("submit", (e)=> {
    e.preventDefault();

    checkInputs();
});

function setMinDateToToday(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
            dd='0'+dd
    }if(mm<10){
            mm='0'+mm
    } 
    
    today = yyyy+'-'+mm+'-'+dd;
    date.setAttribute("min", today);
}

function checkInputs(){
    const name_lastNameValue = name_lastName.value.trim();
    const emailValue = email.value.trim();
    const dateValue = date.value.trim();
    const timeValue = timeAp.value.trim();
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

    if(dateValue === ''){
        setErrorFor(date, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date);
    }

    if(dateValue !== ''){
        var day = new Date(dateValue).getUTCDay();
        if([6,0].includes(day)){
            setErrorFor(date, "Συμπληρώστε μιαμερα εντός των ημερών λειτουργίας");
        }else{
            setSuccessFor(date);
        }
    }

    if(timeValue === ''){
        setErrorFor(timeAp, "Συμπληρώστε την ώρα που επιθυμείτε");
    } else{
        setSuccessFor(timeAp);
    }
 
    if(timeValue !== ''){
        // get input time
        var time = timeValue.split(":");
        
        var hour = parseInt(time[0]);
        console.log(hour);
        var min = parseInt(time[1]);
        
        console.log(time);
        var timeInMin = 60*hour + min;

        if (timeInMin > 1200 || timeInMin < 480) {
            setErrorFor(timeAp, "Συμπληρώστε μια ώρα εντός του ωράριου λειτουργίας");
        } else {
            setSuccessFor(timeAp);
        }
    }
    
    if(phoneValue === ''){
        setErrorFor(phone, "Συμπληρώστε το τηλεφωνό σας");
    } else{
        setSuccessFor(phone);
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

// Restricts input for the given textbox to the given inputFilter function.
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }