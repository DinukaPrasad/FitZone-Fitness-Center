const btnLogin = document.getElementById('btnLogin');
const btnSingUp = document.getElementById('btnSingUp');
const singUpForm = document.getElementById('singin');
const loginForm = document.getElementById('login');

btnSingUp.addEventListener('click',function(){
    loginForm.style.display="none";
    singUpForm.style.display="block";
})

btnLogin.addEventListener('click',function(){
    loginForm.style.display="block";
    singUpForm.style.display="none";
})