//Fazendo o menu responsivo, burguer
const nav = document.querySelector('#nav');
function clickMenu(){
    if (window.innerWidth < 600) {
        if (nav.style.display == 'flex') {
            nav.style.display = 'none'
        } else {
            nav.style.display = 'flex'
        }
    }
}
function checkWindowSize() {
    if (window.innerWidth < 600) {
    nav.style.display = 'none';
    } else {
        nav.style.display = 'flex';
    }
}
checkWindowSize();
window.addEventListener('resize', function() {
checkWindowSize();
});

//fazendo o relógio
const horas = document.getElementById('horas');
const minutos = document.getElementById('minutos');
const segundos = document.getElementById('segundos');
const dia = document.getElementById('dia');
const mes = document.getElementById('mes');
const ano = document.getElementById('ano');

const relogio = setInterval(function time(){
    let dateToday = new Date();
    let hr = dateToday.getHours();
    let min = dateToday.getMinutes();
    let s = dateToday.getSeconds();
    let d = dateToday.getDate();
    let m = dateToday.getMonth() + 1;
    let a = dateToday.getFullYear();

    if (hr<10) hr = '0' + hr;
    if (min<10) min = '0' + min;
    if (s<10) s = '0' + s;

    horas.textContent = hr;
    minutos.textContent = min;
    segundos.textContent = s;
    dia.textContent = d;
    mes.textContent = m;
    ano.textContent = a;
});

//validação de campo vazio
const formulario = document.querySelector('fieldset');
const nomeInput = document.querySelector('#nome');
const emailInput = document.querySelector('#email');
const errorVazio = document.createElement('p');
errorVazio.textContent = '* Preencha os campos vazios';
errorVazio.classList.add('error1');
formulario.insertAdjacentElement('beforeend', errorVazio);
function validarVazio() {
if (nomeInput.value.trim() === '' || emailInput.value.trim() === '') {
    errorVazio.style.display = 'block';
} else {
    errorVazio.style.display = 'none';
}
}
nomeInput.addEventListener('input', validarVazio);
emailInput.addEventListener('input', validarVazio);
//validação de campo nome para receber apenas texto
const errorNome = document.createElement('p');
errorNome.textContent = '* Nome inválido';
errorNome.classList.add('error');
nomeInput.insertAdjacentElement('afterend', errorNome);
function validarNome() {
const nome = nomeInput.value.trim();
const regex = /^[\p{L}\s]+$/u; // regex para validar o campo de nome
if (regex.test(nome)) {
    errorNome.style.display = 'none';
} else {
    errorNome.style.display = 'block';
}
}
nomeInput.addEventListener('input', validarNome);
//validação de campo email para receber apenas emails corretos
const errorEmail = document.createElement('p');
errorEmail.textContent = '* Email inválido';
errorEmail.classList.add('error');
emailInput.insertAdjacentElement('afterend', errorEmail);
function validarEmail() {
const email = emailInput.value.trim();
const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // regex para validar o formato de email
if (regex.test(email)) {
    errorEmail.style.display = 'none';
} else {
    errorEmail.style.display = 'block';
}
}
emailInput.addEventListener('input', validarEmail);

//impedindo o envio do formulário
const form = document.querySelector('form');
function validarFormulario(event) {    
    if (errorEmail.style.display === 'block' || errorNome.style.display === 'block' || errorVazio.style.display === 'block') {
      event.preventDefault();
      alert("Há erros no formulário, por favor, corrija-os antes de enviar.");
    } else {
      formulario.submit();
    }
  }
form.addEventListener('submit', validarFormulario);
  