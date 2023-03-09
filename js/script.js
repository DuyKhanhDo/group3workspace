let form = document.querySelecter('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  return false;
});

function redirectToRegister() {
  // Redirect to the registration page
  window.location.href = "register.html";
}


