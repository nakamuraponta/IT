const quotes = [
{
	name : 'Kazuaki',
	quote : 'There is always light behind the clouds.'
},
{
	name : 'Sumit',
	quote : 'Change before you have to.'
},
{
	name : 'Pratima',
	quote : 'If you can dream it, you can do it.'
},
{
	name : 'Padma',
	quote : 'Love the life you live. Live the life you love.'
},
{
	name : 'Kavya',
	quote : 'My life did not please me, so I created my life.'
},
{
	name : 'Binayak',
	quote : 'It always seems impossible until it is done.'
},
];

const quoteBtn = document.querySelector('#quoteBtn');
const quoteAuthor = document.querySelector('#quoteAuthor');
const quote = document.querySelector('#quote');

quoteBtn.addEventListener('click',displayQuote);

function displayQuote(){
	let number = Math.floor(Math.random()*quotes.length);
	console.log(number);
	quoteAuthor.innerHTML = quotes[number].name;
	quote.innerHTML = quotes[number].quote;
}