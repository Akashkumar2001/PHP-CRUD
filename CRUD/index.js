function required(){
    var empt=document.forms["form1"]["name"].value;
    if(empt===""){
        alert("Enter your name!");
        return false;
    }
}