//validations for login form

function validateForm() {
    let email = document.forms["loginForm"]["loginEmail"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    let password = document.forms["loginForm"]["loginPassword"].value;
    if (password == "") {
        alert("Password must be filled out");
        return false;
        
    }
    let format = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!format.test(String(email).toLowerCase()))
    {alert("You have entered an invalid email address");
    return false;
}

}

//validation for register form

function validateRegisterForm() {
    let username = document.forms["registerForm"]["username"].value;
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if(username.indexOf(' ')>=0)
    {
        alert("Username can't contain any spaces");
        return false;
    }
    let email = document.forms["registerForm"]["email"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    let format = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!format.test(String(email).toLowerCase()))
    {alert("You have entered an invalid email address");
    return false;
    }
    let password = document.forms["registerForm"]["password"].value;
    if (password == "") {
        alert("Password must be filled out");
        return false;

    }
    let passFormat=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(!passFormat.test(String(password)))
    {
        alert("Password must be 8-15 characters\nIt must contain:\nOne upper case character\nOne lower case\nOne digit\nOne special character");
        return false;
    }
    let confirmPassword = document.forms["registerForm"]["confirmPassword"].value;
    if (confirmPassword == "") {
        alert("Please confirm your password");
        return false;
    }
    if (password != confirmPassword) {
        alert("Password doesn't match\nPlease re-enter your password");
        return false;
    }

}

