function validation(){
    
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


   
    var usernameCheck = /^[A-Z]*[a-z].{8,15}$/;
    var emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+/;
    var passwordCheck = /^[A-Za-z]*[0-9]{3}/;

    
    
    if(usernameCheck.test(username)){
        document.getElementById("userError").innerHTML = " ";
    }else{
        document.getElementById("userError").innerHTML = " * Username Is Invalid(Please type a range of 8 to 15 characters)";
        return false
    }
    if(emailCheck.test(email)){
        document.getElementById("emailError").innerHTML = " ";
    }else{
        document.getElementById("emailError").innerHTML = " * Email Is Invalid (Please type a standard email)";
        return false
    }
    if(passwordCheck.test(password)){
        document.getElementById("passwordError").innerHTML = " ";
    }else{
        document.getElementById("passwordError").innerHTML = " * Password Is Invalid(Must contain three numbers on the end)";
        return false
    }


}