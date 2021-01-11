const form = document.getElementById("personalFiles_form");
const date_start = document.getElementById("date_start");
const date_end = document.getElementById("date_end");

function mysubmit(){
    const date_startValue = date_start.value.trim();
    const date_endValue = date_end.trim();

    var everythingGood = true;

    if(date_startValue === ''){
        everythingGood = false;
        setErrorFor(date_start, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date_start);
    }

    if(date_endValue === ''){
        everythingGood = false;
        setErrorFor(date_end, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date_end);
    }

    return everythingGood;
}