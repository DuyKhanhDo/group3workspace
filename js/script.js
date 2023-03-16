let form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
});

const registerButton = document.getElementById('register-btn');

registerButton.addEventListener('click', () => {
  window.location.href = 'register.html';
});
