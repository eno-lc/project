function user(name = String, username = String, password = String, age = Number, email = String) {
    this.name = name,
    this.username = username,
    this.password = password,
    this.age = age,
    this.email = email
}


function showPassword() {
    var pw = document.getElementById("password");
    if (pw.type === "password") {
        pw.type = "text";
    } else {
        pw.type = "password";
    }
}

function register(
    name = document.getElementById('name').value,
    username = document.getElementById('username').value,
    password = document.getElementById('password').value,
    age = document.getElementById('age').value,
    email = document.getElementById('email').value
    ) {
    if (
    validateName(name) &&
    validateUsername(username) &&
    validateEmail(email) &&
    validatePassword(password) 
    ) {
        registerdUsers.push(
            new user (name, username, password,age,email)
        )    
    }
}
function validateUsername(username = String) {
    for (let i = 0; i < registerdUsers.length; i++){
        if (username === registerdUsers[i].username || username == null) {
            return false
        }
    }
    return true
}
function validateEmail(email = String) {
    for (let i = 0; i < registerdUsers.length; i++){
        if (email == registerdUsers[i].email || email == null || email.length < 6 || email.includes('@')) {
            return false
        }
    }
    return true
}
function validatePassword(password = String) {
    if (password == null || password.length < 8) {
        return false
    }
    return true
}
function validateName(name = String) {
    if (name == null || name.length < 3) {
        return false
    }
    return true
}
function validateAge(age = Number) {
    if (age < 0 || age > 122 || age == null) {
        return false
    }
    return true
}