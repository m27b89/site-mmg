const send = document.querySelector("#send-form");
const username = document.querySelector("#username");
const useremail = document.querySelector("#useremail");
const usertxt = document.querySelector("#usertext");
const titleForm = document.querySelector("#title__form");
const titleEmail = document.querySelector("#title__email");
const writeLogin = document.querySelector(".warning__login");
const messageSent = document.querySelector(".message-info");
const messageError = document.querySelector(".message-error");
const greeting = document.querySelector(".greeting");
const emailError = document.querySelector(".message__email-error");
const coockiesUser = document.cookie;

if(coockiesUser){
    getGreeting();
}

//login
const sendLogin = document.querySelector("#send-login");
const loginEmail = document.querySelector("#login-email");
const loginPassword = document.querySelector("#login-password");

//registration
const sendRegistration = document.querySelector("#send-registration");
const registrationName = document.querySelector("#registration-name");
const registrationEmail = document.querySelector("#registration-email");
const registrationPassword = document.querySelector("#registration-password");

function checkInputForValid(input){
    input.onblur = function(){
        if(this.value === ""){
            this.classList.add("invalid");
            titleForm.style.display = "block";
            setTimeout(clearTitle, 1000);
        }
    }
}

function clearTitle(){
    titleEmail.style.display = "none";
    titleForm.style.display = "none";
    writeLogin.style.display = "none";
    messageSent.style.display = "none";
    greeting.style.display = "none";
    emailError.style.display = "none"
}

function checkInputForValidEmail(input){
    input.onblur = function(){
        if(this.value === "" || !this.value.includes('@')){
            this.classList.add("invalid");
            titleEmail.style.display = "block";
            setTimeout(clearTitle, 1000);
        }
    }
}

checkInputForValid(username);
checkInputForValid(usertxt);
checkInputForValid(loginPassword);
checkInputForValid(registrationName);
checkInputForValid(registrationPassword);
checkInputForValidEmail(loginEmail);
checkInputForValidEmail(useremail);
checkInputForValidEmail(registrationEmail);

function deletInvalid(input){
    input.onfocus = function(){
        if(this.classList.contains('invalid')){
            this.classList.remove('invalid');
        }
    }
}

deletInvalid(username);
deletInvalid(useremail);
deletInvalid(usertxt);
deletInvalid(loginEmail);
deletInvalid(loginPassword);
deletInvalid(registrationEmail);
deletInvalid(registrationPassword);
deletInvalid(registrationName);

send.addEventListener("click", function(event){
    event.preventDefault();
    let name = username.value;
    let email = useremail.value;
    let txt = usertxt.value;
    if(name === "" || name === undefined || name === null || email === "" || email === undefined || email === null || !email.includes('@') ||  txt === "" || txt === undefined || txt === null){
        titleForm.style.display = "block";
        setTimeout(clearTitle, 1000);
    }
    else{
            fetch("core/form/form.php",{
            method: 'POST',
            mode: 'cors',
            headers:{
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `name=${name}&email=${email}&txt=${txt}`,
        })
            .then(data => {return data.text()})
            .then(data => {
                if(data === "message sent"){
                    username.value = "";
                    useremail.value = "";
                    usertxt.value = "";
                    getMessageInfo();
                }
                else{
                    getErrorMessageInfo()
                }
            });
    }
});

sendLogin.addEventListener('click', function(event){
    event.preventDefault();
    let email = loginEmail.value;
    let password = loginPassword.value;
    if(email === "" || email === undefined || email === null || !email.includes('@') || password === "" || email === undefined || email === null){
        titleForm.style.display = "block";
        setTimeout(clearTitle, 1000);
    }
    else{
    fetch("login.php",{
        method: "POST",
        mode: 'cors',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `loginemail=${email}&loginpassword=${password}`,
    })
        .then(data => {return data.text()})
        .then(data => {
            if(data === "login"){
                loginEmail.value = "";
                loginPassword.value = "";
                getCloseLogin();
            }
            else{
                getErrorLogin();
            }
        })
    }
})

sendRegistration.addEventListener('click', function(event){
    event.preventDefault();
    let name = registrationName.value;
    let email = registrationEmail.value;
    let password = registrationPassword.value;
    if(name === "" || name === undefined || name === null || email === "" || email === undefined || email === null || !email.includes('@') ||  password === "" || password === undefined || password === null){
        titleForm.style.display = "block";
        setTimeout(clearTitle, 1000);
    }
    else{
        fetch("core/registration/registration.php",{
            method: "POST",
            mode: "cors",
            headers:{
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body:`username=${name}&useremail=${email}&userpassword=${password}`,
        })
        .then(data => data.text())
        .then(data => {
            if(data === "registration"){
                registrationName.value = "";
                registrationEmail.value = "";
                registrationPassword.value = "";
                getCloseRegistration();
            }
            else{
                getErrorEmail();
            }
        })
    }
    
})

function getCloseLogin(){
    document.querySelector("#login__wrapp").style.display = "none";
    document.body.style.overflow = "";
    window.location.reload();
}

function getErrorLogin(){
    writeLogin.style.display = "block";
    setTimeout(clearTitle, 2000);
}

function getMessageInfo(){
    messageSent.style.display = "block";
    setTimeout(clearTitle, 2000);
}

function getErrorMessageInfo(){
    messageError.style.display = "block";
    setTimeout(clearTitle, 2000);
}

function getErrorEmail(){
    emailError.style.display = "block";
    setTimeout(clearTitle, 2000);
}

function getGreeting(){
    greeting.style.display = "block";
    setTimeout(clearTitle, 2000);
}

function getCloseRegistration(){
    document.querySelector("#registration__inner").style.display = "none";
    document.querySelector("#login__inner").style.display = "block";
}