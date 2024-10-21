const btnLlogin = document.getElementById('btn-login');
const loginContainer = document.getElementById('login-container');

btnLlogin.addEventListener('click', () => {
    fetch('login.html')
        .then(response => response.text())
        .then(data => {
            loginContainer.innerHTML = data;
            loginContainer.style.display = 'block';
        });
});