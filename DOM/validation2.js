
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');


function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);}



function validatePassword() {
  var password = document.getElementById('password').value;
 
  if (password.length < 6) {
   window. alert('Password should be at least 6 characters long.');
    return false;}}


document.querySelector('form').addEventListener('submit', function(event) {
  
  event.preventDefault();


 let email = emailInput.value;
  let password = passwordInput.value;


  if (validateEmail(email) && validatePassword(password)) {
 
    this.submit();
  } else {
   
   window .alert('Invalid email or password');
  }
});
