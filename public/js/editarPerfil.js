//NOMBRE

var inputName = document.querySelector('.field-item-Name');
var labelName = document.querySelector('.field-label-Name');
var iconName = document.querySelector('.field-icon-Name');

const toggleName = () => {
    var validate = inputName.type == 'text' ? inputName.type = 'text' : inputName.type = 'text';
}

const floatLabelName = () => {
    var validate = inputName.value ? labelName.classList.add('field-toTop-Name') : labelName.classList.remove('field-toTop-Name');
}

const toTopName = () => {
    labelName.classList.add('field-toTop-Name');
}

iconName.addEventListener('click', toggleName);
inputName.addEventListener('focus', toTopName);
inputName.addEventListener('focusout', floatLabelName);

//APELLIDO

var inputSurname = document.querySelector('.field-item-Surname');
var labelSurname = document.querySelector('.field-label-Surname');
var iconSurname = document.querySelector('.field-icon-Surname');

const toggleSurname = () => {
    var validate = inputSurname.type == 'text' ? inputSurname.type = 'text' : inputSurname.type = 'text';
}

const floatLabelSurname = () => {
    var validate = inputSurname.value ? labelSurname.classList.add('field-toTop-Surname') : labelSurname.classList.remove('field-toTop-Surname');
}

const toTopSurname = () => {
    labelSurname.classList.add('field-toTop-Surname');
}

iconSurname.addEventListener('click', toggleSurname);
inputSurname.addEventListener('focus', toTopSurname);
inputSurname.addEventListener('focusout', floatLabelSurname);

//NOMBRE DE USUARIO

var inputAlias = document.querySelector('.field-item-Alias');
var labelAlias = document.querySelector('.field-label-Alias');
var iconAlias = document.querySelector('.field-icon-Alias');

const toggleAlias = () => {
    var validate = inputAlias.type == 'text' ? inputAlias.type = 'text' : inputAlias.type = 'text';
}

const floatLabelAlias = () => {
    var validate = inputAlias.value ? labelAlias.classList.add('field-toTop-Alias') : labelAlias.classList.remove('field-toTop-Alias');
}

const toTopAlias = () => {
    labelAlias.classList.add('field-toTop-Alias');
}

iconAlias.addEventListener('click', toggleAlias);
inputAlias.addEventListener('focus', toTopAlias);
inputAlias.addEventListener('focusout', floatLabelAlias);