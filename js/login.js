const form = document.getElementById("login-form");
const username = document.getElementById("name");
const password = document.getElementById("password");

form.addEventListener("submit", (e)=> {
    e.preventDefault();

    if(checkInputs()){
        window.location = "index.html";
    }
});

function checkInputs(){
    const name_Value = username.value.trim();
    const passValue = password.value.trim();

    var everythingGood = true;

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