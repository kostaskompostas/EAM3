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


function fetchEmployee(e){
    employee = e.target.parentElement.parentElement.parentElement; //get clicked on element
    children = employee.childNodes;
    var name = children [1].innerText;
    var surname = children[3].innerText;
    var afm = children[5].innerText;
    str = [name,surname,afm].join('/');

    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            //remove selected employee id from previously selected employee
            var prev_selected=document.getElementById("employee-selected");
            if(prev_selected != null){
                prev_selected.removeAttribute("id","employee-selected");
            }

            //select a new employee
            employee.id="employee-selected";
            
            
            
            //show history
            var table=document.getElementById("historyRows");
            table.innerHTML=this.responseText;


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
        }
    }
    xmlhttp.open("GET","php_includes/fetch_personal_file.inc.php?str=" + str,true);
    xmlhttp.send();


    return false;

}