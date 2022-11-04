
function check() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var message = document.getElementById("password_message");
    if (password == confirm_password && password != "") {
    message.textContent = "Passwords Match";
    message.style.backgroundColor = "green";
    } else {
        if (password == ""){
            message.textContent = "Password not entered yet";
            message.style.backgroundColor = "yellow";
        } else {
            message.textContent = "Passwords don't Match";
            message.style.backgroundColor = "red";
        }
    }
}

function existing_check(){
    var email = document.getElementById("email").value;
    const existing_emails = ["testuser@test.com", "testadmin@test.com"];
    var message = document.getElementById("email_message");
    if (existing_emails.includes(email)){
        message.textContent = "Email address already linked to an account";
        message.style.backgroundColor = "red";
    } else {
        message.textContent = "Email accepted";
        message.style.backgroundColor = "green";
    }
}