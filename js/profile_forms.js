const form = document.getElementById("personalFiles_form");
const date_start = document.getElementById("date_start");
const date_end = document.getElementById("date_end");
const table = document.getElementById("tableRows")




function mysubmit(){
    const date_startValue = date_start.value.trim();
    const date_endValue = date_end.value.trim();

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
        console.log(formDate);

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
                setErrorFor(date_start, "Τα ραντεβού πρεπει να ειναι τουλαχιστον μια μέρα μετα απο την τωρινή");
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

for (var i = 0, row; row = table.rows[i]; i++) {
    //iterate through rows
    //rows would be accessed using the "row" variable assigned in the for loop
    end = row.cells[1];
    var date = new Date(end.innerText);
    var today = new Date();
    
    if (date<today){
        row.setAttribute("class", "in-validDate");
    }else{
        row.setAttribute("class", "validDate");
    }

}


function delete_this(e){
    row = e.target.parentElement; //get clicked on element
    children = row.childNodes;
    var start = new Date(children [1].innerText);
    var end = new Date(children[3].innerText);
    var type = children[5].innerText;
    str = [start,end,type].join('/');

    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            console.log(this.responseText);
        }
    }
    xmlhttp.open("GET","php_includes/del_personal_file.inc.php?str=" + str,true);
    xmlhttp.send();


    return false;
}