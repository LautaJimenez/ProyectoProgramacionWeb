
function Registro() {
    var login = document.getElementById("formulario2");
    var register = document.getElementById("formulario");
    var toggle = document.getElementById("toggle");

    if (login.style.display === "none") {   
        login.style.display = "block";
        register.style.display = "none";
        toggle.innerHTML = "Iniciar sesión";
    } else {
        login.style.display = "none";
        register.style.display = "block";
        toggle.innerHTML = "Registrarse";
    }
}

// VALIDACIONES

const IS_VALID = document.getElementsByClassName("is-valid");

function validateEmail(formType){
    const regex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;

    if(formType.id == "email-login"){
        IS_VALID[0].innerHTML='';
        email = formType.value;
        if(email.match(regex)){
            //IS_VALID[0].innerHTML= "Email valido";
            IS_VALID[0].classList.remove("invalid-color");
            IS_VALID[0].classList.add("valid-color");
            formType.classList.remove("invalid-border");
            formType.classList.add("valid-border");
        }

        if(!email.match(regex)){
            IS_VALID[0].innerHTML= "Email no valido";
            IS_VALID[0].classList.remove("valid-color");
            IS_VALID[0].classList.add("invalid-color");
            formType.classList.add("invalid-border");
            formType.classList.remove("valid-border");
        }
    }

    else{
        IS_VALID.innerHTML='';
        email = formType.value;

        if(email.match(regex)){
            //IS_VALID[2].innerHTML= "Email valido";
            IS_VALID[2].classList.remove("invalid-color");
            IS_VALID[2].classList.add("valid-color");
            formType.classList.remove("invalid-border");
            formType.classList.add("valid-border");
        }

        if(!email.match(regex)){
            IS_VALID[2].innerHTML= "Email no valido";
            IS_VALID[2].classList.remove("valid-color");
            IS_VALID[2].classList.add("invalid-color");
            formType.classList.add("invalid-border");
            formType.classList.remove("valid-border");
        }
    }
}

function validateName(formType){
    const regex = /^[a-zA-Z ]{2,30}$/;
    const validName = "Nombre valido";
    const invalidName = "Nombre no valido";

    if(formType.id == "name-register"){
        IS_VALID[3].innerHTML='';
        const name = formType.value;

        if(name.match(regex)){
            IS_VALID[3].innerHTML= validName;
            IS_VALID[3].classList.remove("invalid-color");
            IS_VALID[3].classList.add("valid-color");
            formType.classList.remove("invalid-border");
            formType.classList.add("valid-border");
        }

        if(!name.match(regex)){
            IS_VALID[3].innerHTML= invalidName;
            IS_VALID[3].classList.remove("valid-color");
            IS_VALID[3].classList.add("invalid-color");
            formType.classList.add("invalid-border");
            formType.classList.remove("valid-border");
        }
    }
}

function CheckPassword(inputtxt) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(inputtxt.value.match(passw)) 
{ 
alert('Correct, try another...')
return true;
}
else
{ 
alert('Wrong...!')
return false;
}
}

function checkDNI(inputDNI){
    var regex = /^[\d]{1,3}.?[\d]{3,3}.?[\d]{3,3}$/;
    if(inputDNI.value.match(regex)){
        alert('DNI Correcto!')
        return true;
    }
    else{
        alert('DNI Incorrecto!')
        return false;
    }
}