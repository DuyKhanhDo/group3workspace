let form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
});

const registerDiv = document.getElementById('register-div');

registerDiv.addEventListener('click', () => {
  window.location.href = 'register.html';
});