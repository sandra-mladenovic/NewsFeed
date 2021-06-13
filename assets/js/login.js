function login() { 
    let email = document.querySelector('#tbEmail').value; 
    let password = document.querySelector('#tbPassword').value; 
    let passwordError = document.querySelector('#passError');
    let emailError = document.querySelector('#emailError'); 
    let rePassword = /^[a-z0-9]{8,}$/; 
    let reEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; let emailTrue = true;
    let passwordTrue = true;

    if (password)
     { if (!rePassword.test(password)) {
          passwordError.textContent = 'Password is not correct!';
           passwordTrue = false;
         } 
    } else {
         passwordError.textContent = 'Password field cannot be empty!'; passwordTrue = false;
    } 
    if (email) {
              if (!reEmail.test(email))
               { emailError.textContent = 'Email is not correct!'; 
               emailTrue = false; 
            } 
    } else { 
        emailError.textContent = 'Email field cannot be empty!!';
         emailTrue = false; 
    } 
    if (emailTrue && passwordTrue) { return true; } else { return false; } }