const form = document.getElementById("personalFiles_form");
const date_start = document.getElementById("date_start");
const date_end = document.getElementById("date_end");
const table = document.getElementById("historyRows")
const isOwner = document.getElementById("employeeTable");
const typeOfForm = document.getElementById("typeOfForm");



function mysubmit(){
    const date_startValue = date_start.value.trim();
    const date_endValue = date_end.value.trim();
    const type_Value =typeOfForm.value.trim();
    var everythingGood = true;


    //check start value
    if(date_startValue === ''){
        everythingGood = false;
        setErrorFor(date_start, "Συμπληρώστε την ημέρα που επιθυμείτε");
    } else{
        setSuccessFor(date_start);
    }
    
    if(date_startValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(date_startValue);

        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                everythingGood = false;
                setErrorFor(date_start, "Η έναρξη πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
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



    //check end value
    if(date_endValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(date_endValue);
        console.log(formDate);
        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                everythingGood = false;
                setErrorFor(date_end, "Η λήξη πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                
                var formDateStart = new Date(date_startValue);
                if (formDate < formDateStart){
                    everythingGood = false;
                    setErrorFor(date_end, "Η λήξη πρέπει να είναι μετά την έναρξη");
                }else{
                    setSuccessFor(date_end);

                }
            }
        }
    }
    
    return everythingGood;

}



date_start.addEventListener('input', function(e) {
    const date_startValue = date_start.value.trim();
    if(date_startValue !== ''){
        var dateIsValid = true;


        var formDate = new Date(date_startValue);
        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                setErrorFor(date_start, "Η έναρξη πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{
                setSuccessFor(date_start);
            }
        }
    }
});


date_end.addEventListener('input', function(e) {
    const date_endValue = date_end.value.trim();
    const date_startValue = date_start.value.trim();

    if(date_endValue !== ''){
        var dateIsValid = true;

        var formDate = new Date(date_endValue);
        if(dateIsValid){
            var today = new Date();
            if(formDate < today){
                setErrorFor(date_end, "Η λήξη πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
            }else{                
                var formDateStart = new Date(date_startValue);
                if (formDate < formDateStart){
                    setErrorFor(date_end, "Η λήξη πρέπει να είναι μετά την έναρξη");
                }else{
                    setSuccessFor(date_end);
                }
            }
        }
    }
});


if (isOwner==undefined){ //if the user is an employee immedietly stylize the text
    stylizeHistory(table);
}


