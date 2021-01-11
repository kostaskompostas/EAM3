const form = document.getElementById("login-form");
const username = document.getElementById("username");
const password = document.getElementById("password");


var everythingGood = true;


function mysubmit(){
    everythingGood = true;

    const name_Value = username.value.trim();
    const passValue = password.value.trim();

    if(name_Value === ''){
        everythingGood = false;
        setErrorFor(username, "Συμπληρώστε το όνομα χρήστη σας");
    } else{
        setSuccessFor(username);
    }

    if(passValue === ''){
        everythingGood = false;
        setErrorFor(password, "Συμπληρώστε τον κωδικό σας");
    } else{
        setSuccessFor(password);
    }

    return everythingGood;
}