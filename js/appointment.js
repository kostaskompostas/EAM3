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

    if(checkInputs()){
        window.location = "confirmation.php";
    }
});

function checkInputs(){
    const name_lastNameValue = name_lastName.value.trim();
    const emailValue = email.value.trim();
    const dateValue = date.value.trim();
    const timeValue = timeAp.value.trim();
    const subjectValue = subject.value.trim();
    const phoneValue = phone.value.trim();

    var everythingGood = true;

    if(name_lastNameValue === ''){
        everythingGood = false;
        setErrorFor(name_lastName, "Συμπληρώστε το ονοματεπώνυμο σας");
    } else{
        setSuccessFor(name_lastName);
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

    if(subjectValue === ''){
        everythingGood = false;
        setErrorFor(subject, "Περιγράψτε με εναν τίτλο το πρόβλημα σας");
    } else{
        setSuccessFor(subject);
    }

    if(dateValue === ''){
        everythingGood = false;
        setErrorFor(date, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date);
    }

    if(dateValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(dateValue);
        var day = formDate.getUTCDay();
        if([6,0].includes(day)){
            everythingGood = false;
            dateIsValid = false;
            setErrorFor(date, "Συμπληρώστε μια μερα εντός των ημερών λειτουργίας");
        }else{
            setSuccessFor(date);
        }

        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                everythingGood = false;
                setErrorFor(date, "Τα ραντεβού πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                setSuccessFor(date);
            }
        }
    }

    if(timeValue === ''){
        everythingGood = false;
        setErrorFor(timeAp, "Συμπληρώστε την ώρα που επιθυμείτε");
    } else{
        setSuccessFor(timeAp);
    }
 
    if(timeValue !== ''){
        // get input time
        var time = timeValue.split(":");
        
        var hour = parseInt(time[0]);
        var min = parseInt(time[1]);
        
        var timeInMin = 60*hour + min;

        if (timeInMin > 1200 || timeInMin < 480) {
            everythingGood = false;
            setErrorFor(timeAp, "Συμπληρώστε μια ώρα εντός του ωράριου λειτουργίας");
        } else {
            setSuccessFor(timeAp);
        }
    }
    
    if(phoneValue === ''){
        everythingGood = false;
        setErrorFor(phone, "Συμπληρώστε το τηλεφωνό σας");
    } else{
        setSuccessFor(phone);
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

date.addEventListener('input', function(e) {
    const dateValue = date.value.trim();

    if(dateValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(dateValue);
        var day = formDate.getUTCDay();
        if([6,0].includes(day)){
            everythingGood = false;
            dateIsValid = false;
            setErrorFor(date, "Συμπληρώστε μια μερα εντός των ημερών λειτουργίας");
        }else{
            setSuccessFor(date);
        }

        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                everythingGood = false;
                setErrorFor(date, "Τα ραντεβού πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                setSuccessFor(date);
            }
        }
    }
});

timeAp.addEventListener('input', function(e) {
    const timeValue = timeAp.value.trim();
    if(timeValue !== ''){
        // get input time
        var time = timeValue.split(":");
        
        var hour = parseInt(time[0]);
        var min = parseInt(time[1]);
        
        var timeInMin = 60*hour + min;

        if (timeInMin > 1200 || timeInMin < 480) {
            everythingGood = false;
            setErrorFor(timeAp, "Συμπληρώστε μια ώρα εντός του ωράριου λειτουργίας");
        } else {
            setSuccessFor(timeAp);
        }
    }
});