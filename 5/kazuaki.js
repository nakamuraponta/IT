const messageIn = document.querySelector('#messageIn');
const messageOut = document.querySelector('#messageOut');
const button = document.querySelector('.sendBtn');

button.addEventListener('click',sendMsg);

function sendMsg(){
 let content = messageIn.value;

 if(content === ''){
  alert('please enter valid Value. Current value is empty')
 }

 else{
  messageOut.innerHTML = content;
  messageIn.value = '';
 }
}