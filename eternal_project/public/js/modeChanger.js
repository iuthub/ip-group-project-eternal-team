const loginSelector = document.querySelector('.card nav .login');
const registerSelector = document.querySelector('.card nav .register');

const loginSelection = document.querySelector('#login');
const registerSelection = document.querySelector('#register');

registerSelector.addEventListener('click', function(){
	registerSelector.classList.add('selected');
	loginSelector.classList.remove('selected');	 
	loginSelection.classList.remove('show');
	registerSelection.classList.add('show');
});

loginSelector.addEventListener('click', function(){
	loginSelector.classList.add('selected');
	registerSelector.classList.remove('selected');
	registerSelection.classList.remove('show');
	loginSelection.classList.add('show');
});
