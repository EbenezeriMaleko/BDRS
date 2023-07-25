function myvalidation(){
    var firstName=document.forms["myForm"]["FirstName"].value;
    var secondName=document.forms["myForm"]["SecondName"].value;
    var email=document.forms["myForm"]["email"].value;
    var password=document.forms["myForm"]["password"].value;
    var confirmPassword=document.forms["myForm"]["ConfirmPassword"].value;
    var phone=document.forms["myForm"]["number"].value;
    if(firstName==" "||secondName==""||email==""||password==""||confirmPassword==""||phone==""){
        alert("must fill all blanks to sign in")
        return false;
    }
    var NamePattern=/^(?!.*([A-Za-z])\1{2})[A-Za-z]+$/;
    if(!NamePattern.test(firstName)){
        alert("Name is not valid")
        return false;
    }
    if(!NamePattern.test(secondName)){
        alert("Name is not valid")
        return false;
    }
    var emailPattern=/^[a-z]+[0-9]*\@[a-z]+\.[a-z]{2,3}$/; 
    if(!emailPattern.test(email)){
        alert("Email not valid");
        return false;
    }
    var passwordPattern=/^([A-Za-z]+[0-9]+)$/
    if(!passwordPattern.test(password)){
        alert("Password shall contain number characters and start with capital letter")
        return false;
    }
    var phonePattern=/^([0]+)([0-9]){9}$/
    if(!phonePattern.test(phone)){
        alert("Number must start with 0 and total of 10 numbers")
        return false;
    }
    if(password!=confirmPassword){
        alert("confirm the same password")
        return false;
    }

    return true;

}