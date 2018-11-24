const colorBtn=document.querySelector('.colorBtn');
const bodyBg=document.querySelector('body');

const colors=['green', 'red', 'yellow', '#3ba235'];

colorBtn.addEventListener('click', changeColor);

function changeColor(){
	let random = Math.floor(Math.random()*colors.length);
	console.log(random);
	bodyBg.style.backgroundColor = colors[random];

}