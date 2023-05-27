function ValidateForm(event) {
    var email = document.getElementById("email");
    let Emailerror=document.getElementById("email-error");
    var mobile = document.getElementById("mobile");
    let MbileError=document.getElementById("mobile-error");
    var password = document.getElementById("password");
    let Passworderror=document.getElementById("password-error");
    var checkBox = document.getElementById("flexCheckDefault");
    let Checkerror=document.getElementById("check-error");
    let checkedregrx_email= (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    let checkedregrx_password= ('/^[a-zA-Z0-9.!#$%&’+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/');
    // email section
    let bool =true;
    if (email.value.trim() === "") {
      Emailerror.style.color="red";
      Emailerror.textContent = "The email field is required.";
      email.style.borderColor = "red";
     bool =false;
    } else if (!email.value.match(checkedregrx_email)) {
        Emailerror.style.color="red";
        Emailerror.textContent = "You have entered an invalid email address!";
      email.style.borderColor = "red";
      bool =false;
    } else {
        Emailerror.textContent = "";
      email.style.borderColor = "";
    }
    // Mobile Section
    if (mobile.value.trim() === "") {
        MbileError.style.color="red";
     MbileError.textContent = "The mobile field is required.";
      mobile.style.borderColor = "red";
      bool =false;
    } else if (!mobile.value.match(/^077\d{7}$/)) {
        MbileError.style.color="red";
        MbileError.textContent = "You have entered an invalid mobile number!";
      mobile.style.borderColor = "red";
      bool =false;
    } else {
        MbileError.textContent = "";
      mobile.style.borderColor = "";
    }
//   password section
    if (password.value.trim() === "") {
        Passworderror.style.color="red";
        Passworderror.textContent = "The password field is required.";
      password.style.borderColor = "red";
      bool =false;
    } else if (!password.value.match(checkedregrx_password)) {
        Passworderror.style.color="red";
        Passworderror.textContent = "The password must be between 6 and 18 characters.";
      password.style.borderColor = "red";
      bool =false;
    } else {
        Passworderror.textContent = "";
      password.style.borderColor = "";
    }
  
    if (!checkBox.checked) {
        Checkerror.style.color="red";
        Checkerror.textContent = "The Terms & Conditions Not Checked";
      checkBox.style.borderColor = "red";
      bool =false;
    } else {
        Checkerror.textContent = "";
      checkBox.style.borderColor = "";
    }
    if (bool == false){
      event.preventDefault();
    }
  }
 
  document.getElementById("submit").addEventListener("click", ValidateForm);