function confirmPolicy(){
    var result = '';
    const items = document.getElementsByName('policy');
    for (var i = 0; i < items.length; i++){
        if (items[i].checked){
            result = items[i].value;
            break;
        }
    }
    return result;
}

function cadastraForm(){
    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const phone = document.getElementById('phone').value;
    const policy = confirmPolicy();

    const erroName = document.getElementById('erro_name');
    const erroSurname = document.getElementById('erro_surname');
    const erroEmail = document.getElementById('erro_email');
    const erroPassword = document.getElementById('erro_password');
    const erroPhone = document.getElementById('erro_phone');
    const erroPolicy = document.getElementById('erro_policy');

    erroName.textContent = '';
    erroSurname.textContent = '';
    erroEmail.textContent = '';
    erroPassword.textContent = '';
    erroPhone .textContent = '';
    erroPolicy .textContent = '';

    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\w+([-.]\w+)*$/;
    const telRegex = /^\d{11}$/;
    let cadValid = true; 

    if (name === '' || /\d/.test(name)){
        erroName.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (name.length < 3){
        erroName.textContent = '*Digite ao menos 3 caracteres';
        cadValid = false;
    } else if (surname === '' || /\d/.test(surname)){
        erroSurname.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (surname.length < 3){
        erroSurname.textContent = '*Digite ao menos 3 caracteres';
        cadValid = false;
    } else if (email === ''){
        erroEmail.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (!emailRegex.test(email)){
        erroEmail.textContent = '*Formato Inválido';
        cadValid = false;
    } else if (password === ''){
        erroPassword.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (password.length < 6){
        erroPassword.textContent = '*Digite no mínimo 6 caracteres';
        cadValid = false;
    } else if (phone == ''){
        erroPhone.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (!telRegex.test(phone)){
        erroPhone.textContent = '*Valor Inválido';
        cadValid = false;
    } else if (policy === '') {
        erroPolicy.textContent = '*Para continuar aceite as políticas do site!';
        cadValid = false;
    }

    return cadValid;
}

function authForm(){
    const authemail = document.getElementById('authemail').value;
    const authpassword = document.getElementById('authpassword').value;

    const erroAuthEmail = document.getElementById('erro_authemail');
    const erroAuthPassword = document.getElementById('erro_authpassword');

    erroAuthEmail.textContent = '';
    erroAuthPassword.textContent = '';

    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\w+([-.]\w+)*$/;
    let cadValid = true; 

    if (authemail === ''){
        erroAuthEmail.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (!emailRegex.test(authemail)){
        erroAuthEmail.textContent = '*Formato Inválido';
        cadValid = false;
    } else if (authpassword === ''){
        erroAuthPassword.textContent = '*Campo Obrigatório';
        cadValid = false;
    } else if (authpassword.length < 6){
        erroAuthPassword.textContent = '*Digite no mínimo 6 caracteres';
        cadValid = false;
    } 

    return cadValid;
}