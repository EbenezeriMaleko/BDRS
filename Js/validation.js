function validation(){
    var email=document.forms["Forms"]["email"].value;
    var password=document.forms["Forms"]["password"].value;
    if(email==""||password==""){
        alert("Please fill the blanks");
        return false;
    }
    var emailPattern=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailPattern.test(email)){
        alert("Put a valid email");
        return false;
    }
    // if(password.length<8){
    //     alert("Password should not be less than 8");
    //     return false;
    // }
    return true;
}