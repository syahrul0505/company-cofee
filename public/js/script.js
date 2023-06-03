const send = document.getElementById('send');
const message = document.getElementById('message');
const inputName = document.getElementById('input-name');
const inputEmail = document.getElementById('input-email');
const inputMesage = document.getElementById('input-message');
const success = document.getElementById('success');
const failed = document.getElementById('failed');

send.addEventListener('click', (e) => {
    if(inputName.value != '' && inputEmail.value != '' && inputMesage.value != ''){
        failed.classList.add('hidden');
        success.classList.remove('hidden');
        message.reset();
    }else {
        success.classList.add('hidden');
        failed.classList.remove('hidden');
    }
});