const form = document.getElementById("personalFiles_form");
const date_start = document.getElementById("date_start");
const date_end = document.getElementById("date_end");

function mysubmit(){
    const date_startValue = date_start.value.trim();
    const date_endValue = date_end.value.trim();

    var everythingGood = true;

    if(date_startValue === ''){
        everythingGood = false;
        setErrorFor(date_start, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date_start);
    }
    
    if(date_startValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(date_startValue);
        var day = formDate.getUTCDay();
        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                everythingGood = false;
                setErrorFor(date_start, "Τα ραντεβού πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                setSuccessFor(date_start);
            }
        }
    }

    if(date_endValue === ''){
        everythingGood = false;
        setErrorFor(date_end, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date_end);
    }

    
    return everythingGood;
}

date_start.addEventListener('input', function(e) {
    const date_startValue = date_start.value.trim();
    if(date_startValue !== ''){
        var dateIsValid = true;


        var formDate = new Date(date_startValue);
        var day = formDate.getUTCDay();
        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                setErrorFor(date_start, "Τα ραντεβού πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                setSuccessFor(date_start);
            }
        }
    }
});
