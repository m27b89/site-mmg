const buttonLogin = document.querySelector("#btn-login");
const buttonLoginMob = document.querySelector("#btn-login__mob");
const loingWrapp = document.querySelector("#login__wrapp");
const closeLogin = document.querySelector("#login-close");
const registrationBtn = document.querySelector("#registration-get");
const login = document.querySelector("#login__inner");
const registration = document.querySelector("#registration__inner");
const loginBtn = document.querySelector("#login-get");

loginBtn.addEventListener('click', function(){
    login.style.display = "block";
    registration.style.display = "none";
})

registrationBtn.addEventListener('click', function(){
    login.style.display = "none";
    registration.style.display = "block";
})

if(buttonLogin){
    buttonLogin.addEventListener('click', function(){
        document.body.style.overflow = "hidden";
        loingWrapp.style.display = "block";
    });
}

if(buttonLoginMob){
    buttonLoginMob.addEventListener('click', function(){
        document.body.style.overflow = "hidden";
        loingWrapp.style.display = "block";
    });
}

closeLogin.addEventListener('click', function(){
    document.body.style.overflow = "";
    loingWrapp.style.display = "none";
})


