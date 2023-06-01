const send = document.getElementById('send');
const message = document.getElementById('message');
const inputName = document.getElementById('input-name');
const inputEmail = document.getElementById('input-email');
const inputMesage = document.getElementById('input-message');

send.addEventListener('click', (e) => {
    if(inputName.value != '' && inputEmail.value != '' && inputMesage.value != ''){
        send.setAttribute('href', '#ex1');
        send.setAttribute('rel', 'modal:open');
        message.reset();
    }else {
        alert('Form input message tidak boleh ada yang kosong !');
        send.setAttribute('href', '#');
        send.setAttribute('rel', '');
    }
});