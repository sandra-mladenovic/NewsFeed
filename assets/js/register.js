window.onload = function() {
     let button = document.querySelector("#registerBtn");
     button.addEventListener("click", register);
}

function register() {
    let name = document.querySelector("#fullName").value;
    let email = document.querySelector("#regEmail").value;
    let password = document.querySelector("#regPassword").value;
    let confirmPass = document.querySelector("#regConfirmPassword").value;

    let reName = /^[A-Z][a-z]{2,15}\s[A-Z][a-z]{2,15}$/;
    let reEmail = /^([A-Za-z0-9\_\-\.])+\@([A-Za-z0-9\_\-\.])+\.([A-Zaz]{2,4})$/;
    let rePassword = /^[a-z0-9]{8,}$/;
    let nameError = document.querySelector("#nameError");
    let emailError = document.querySelector("#emailError");
    let passwordError = document.querySelector("#passwordError");
    let confirmPassError = document.querySelector("#confirmPasswordError");
    let nameOk = true;
    let emailOk = true;
    let passwordOk = true;
    let confirmPassOk = true;

    if (name) {
        if (!reName.test(name)) {
            nameOk = false;
            nameError.textContent = "Name is not in correct format!";
        }
    } else {
        nameOk = false;
        nameError.textContent = "Name is required!";
    }
    if (password) {
        if (!rePassword.test(password)) {
            passwordOk = false; passwordError.textContent = "Password: Minimum eight characters, at least one uppercase letter, one lowercase letter and one number!";
        }
    } else {
        passwordOk = false;
        passwordError.textContent = "Password is required!";
    }
    if (email) {
        if (!reEmail.test(email)) {
            emailOk = false;
            emailError.textContent = "Email is not in correct format!";
        }
    } else {
        emailOk = false;
        emailError.textContent = "Email is required!";
    }
    if (confirmPass !== password) {
        confirmPassOk = false;
        confirmPassError.textContent = "Passwords are not matching!";
    }

    if (nameOk && emailOk && passwordOk && confirmPassOk) {
        nameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        confirmPassError.textContent = "";
        $.ajax({
            url: "models/user/register.php",
            method: "POST",
            dataType: "json",
            data: {
                registerBtn: "send", name, email, password, confirmPass
            },
            success: function (data) {
                console.log(data);
                document.querySelector("#fullName").value = '';
                document.querySelector("#email").value = '';
                document.querySelector("#password").value = '';
                document.querySelector("#confirmPassword").value = '';

                let alertDiv = document.querySelector('#successMessage');
                let message = document.querySelector('#msg');
                alertDiv.classList.remove('invisible');
                alertDiv.classList.add('alert-success');
                message.textContent = data;
                setTimeout(function () {
                    alertDiv.classList.add('invisible')
                }, 2500);
            },
            error: function (err, status, statusText) {
                let alertDiv = document.querySelector('#successMessage');
                let message = document.querySelector('#msg');
                switch (err.status) {
                    case 409:
                        alertDiv.classList.remove('invisible');
                        alertDiv.classList.add('alert-warning');
                        message.textContent = 'Email nije dostupan!';
                        break;
                    case 422:
                        alertDiv.classList.remove('invisible');
                        alertDiv.classList.add('alert-warning');
                        message.textContent = 'Greške!';
                        break;
                }
            }
        })
    } else
        console.log("There was an error!");
}