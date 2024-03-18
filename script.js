function validateForm() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
    if (username == "" || password == "") {
        alert("Username and password must be filled out");
        return false;
    }
}

function validateRegisterForm() {
    var username = document.forms["registerForm"]["username"].value;
    var password = document.forms["registerForm"]["password"].value;
    var email = document.forms["registerForm"]["email"].value;
    if (username == "" || password == "" || email == "") {
        alert("Username, password, and email must be filled out");
        return false;
    }
}

function validateExamRegistrationForm() {
    var name = document.forms["examRegistrationForm"]["name"].value;
    var email = document.forms["examRegistrationForm"]["email"].value;
    if (name == "" || email == "") {
        alert("Name and email must be filled out");
        return false;
    }
}
