//EMAIL

var inputUser = document.querySelector('.field-item-user');
var labelUser = document.querySelector('.field-label-user');
var iconUser = document.querySelector('.field-icon-user');

const toggleUser = () => {
    var validate = inputUser.type == 'email' ? inputUser.type = 'text' : inputUser.type = 'email';
}

const floatLabelUser = () => {
    var validate = inputUser.value ? labelUser.classList.add('field-toTop-user') : labelUser.classList.remove('field-toTop-user');
}

const toTopUser = () => {
    labelUser.classList.add('field-toTop-user');
}

iconUser.addEventListener('click', toggleUser);
inputUser.addEventListener('focus', toTopUser);
inputUser.addEventListener('focusout', floatLabelUser);

//CONTRASEÑA

var input = document.querySelector('.field-item');
var label = document.querySelector('.field-label');
var icon = document.querySelector('.field-icon');
const icono = document.getElementById('icon-eye');

icon.addEventListener('click', function() {

    if (icono.classList.contains('fa-eye-slash')) {
        icono.classList.remove('fa-eye-slash');
        icono.classList.add('fa-eye');

    } else {

        icono.classList.remove('fa-eye');
        icono.classList.add('fa-eye-slash');
    }
});

const togglePassword = () => {
    var validate = input.type == 'password' ? input.type = 'text' : input.type = 'password';
}

const floatLabel = () => {
    var validate = input.value ? label.classList.add('field-toTop') : label.classList.remove('field-toTop');
}

const toTop = () => {
    label.classList.add('field-toTop');
}
icon.addEventListener('click', togglePassword);
input.addEventListener('focus', toTop);
input.addEventListener('focusout', floatLabel);