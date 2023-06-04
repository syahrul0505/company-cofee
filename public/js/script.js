const send = document.getElementById('send');
const message = document.getElementById('message');
const inputName = document.getElementById('input-name');
const inputEmail = document.getElementById('input-email');
const inputMesage = document.getElementById('input-message');
const success = document.getElementById('success');
const failed = document.getElementById('failed');
const alertRequired = document.querySelectorAll('#alert-required');
const modal = document.querySelector('.main-modal');
const closeButton = document.getElementById('main-close');
const closeButton2 = document.getElementById('main-close2');

send.addEventListener('click', (e) => {
    if(inputName.value != '' && inputEmail.value != '' && inputMesage.value != ''){
        failed.classList.add('hidden');
        success.classList.remove('hidden');
        for (let i = 0; i < alertRequired.length; i++) {
            alertRequired[i].classList.add('hidden');
        }
        inputName.style.borderColor = '';
        inputEmail.style.borderColor = '';
        inputMesage.style.borderColor = '';
        modal.classList.remove('fadeOut');
		modal.classList.add('fadeIn');
        modal.style.display = 'flex';
        message.reset();
    }else {
        success.classList.add('hidden');
        failed.classList.remove('hidden');
        inputName.style.borderColor = '';
        inputEmail.style.borderColor = '';
        inputMesage.style.borderColor = '';
        for (let i = 0; i < alertRequired.length; i++) {
            alertRequired[i].classList.add('hidden');
        }
        if(inputName.value == ''){
            inputName.style.borderColor = 'red';
            alertRequired[0].classList.remove('hidden');
        }
        if(inputEmail.value == ''){
            inputEmail.style.borderColor = 'red';
            alertRequired[1].classList.remove('hidden');
        }
        if(inputMesage.value == ''){
            inputMesage.style.borderColor = 'red';
            alertRequired[2].classList.remove('hidden');
        }
        modal.classList.remove('fadeOut');
		modal.classList.add('fadeIn');
        modal.style.display = 'flex';
    }
});

closeButton.addEventListener('click', () => {
    modal.classList.remove('fadeIn');
	modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
});

closeButton2.addEventListener('click', () => {
    modal.classList.remove('fadeIn');
	modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
});