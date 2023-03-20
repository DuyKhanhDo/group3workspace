let form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  return false;
});

const registerDiv = document.getElementById('register-div');

registerDiv.addEventListener('click', () => {
  redirectToRegister();
});

function redirectToRegister() {
  // Redirect to the registration page
  window.location.href = "register.php";
}