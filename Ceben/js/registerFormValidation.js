const form = document.getElementById("form");
form.addEventListener("submit",e=>{
    e.preventDefault();
    if(validationForm() === true){
        alert("Your information has been submitted succcesful now login");
        window.location.href="./loginPage.php";
    };
});
function validationForm() {
    var fname = document.forms["myForm"]["FirstName"].value;
    var lname = document.forms["myForm"]["SecondName"].value;
    var email = document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;
    var confirmPassword = document.forms["myForm"]["ConfirmPassword"].value;
    var phoneNumber = document.forms["myForm"]["number"].value;

    var fnameError = document.getElementById("fnameError");
    var lnameError = document.getElementById("lnameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");
    var confirmPasswordError = document.getElementById("confirmPasswordError");
    var phoneNumberError = document.getElementById("phoneNumberError");

    var isValid = true;

    if (fname == "") {
        fnameError.innerHTML = "Firstname cannot be empty";
        isValid = false;
    } else if(!/^(?!.*([A-Za-z])\1\1)[A-Za-z]+$/.test(fname)) {
        fnameError.innerHTML = "put a valid name please";
        isValid=false;
    }else{
        fnameError.innerHTML = " ";
    }
    if (lname == "") {
        lnameError.innerHTML = "Lastname cannot be empty";
        isValid = false;
    } else if(!/^(?!.*([A-Za-z])\1\1)[A-Za-z]+$/.test(lname)){
        lnameError.innerHTML = "Put a valid name please";
        isValid=false;
    }else{
        lnameError.innerHTML=" ";
    }
    if (email == "") {
        emailError.innerHTML = "Email cannot be empty";
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,3}+$/.test(email)) {
        emailError.innerHTML = "please enter a valid email";
        isValid = false;
    } else {
        emailError.innerHTML = " ";
    }
    if (password == "") {
        passwordError.innerHTML = "password cannot be empty";
        isValid = false;
    } else if (password.length < 8) {
        passwordError.innerHTML = "Password should have 8 characters";
        isValid = false;
    } else {
        passwordError.style.display= "none";
    }
    if (confirmPassword == "") {
        confirmPasswordError.innerHTML = "Please confirm your password";
        isValid = false;
    } else if (password != confirmPassword) {
        confirmPasswordError.innerHTML = "Confirm the same password";
        isValid = false;
    } else {
        confirmPasswordError.innerHTML = "";
    }
    if (phoneNumber == "") {
        phoneNumberError.innerHTML = "Please put your phone number";
    } else if (!/^[0-9]{10}$/.test(phoneNumber)) {
        phoneNumberError.innerHTml = "Enter a valid pone";
    } else {
        phoneNumberError.innerHTML = "";
    }
    return isValid;
}