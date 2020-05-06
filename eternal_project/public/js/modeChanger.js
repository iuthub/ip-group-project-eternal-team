const loginSelector = document.querySelector('.container nav .login');
const registerSelector = document.querySelector('.container nav .register');

const loginSelection = document.querySelector('.container #log-in');
const registerSelection = document.querySelector('.container #register');

registerSelector.addEventListener('click', function(){
	registerSelector.classList.add('selected');
	loginSelector.classList.remove('selected');	 
	loginSelection.classList.remove('show');
	registerSelection.classList.add('show');
});

loginSelector.addEventListener('click', function(){
	loginSelector.classList.add('selected');
	registerSelector.classList.remove('selected');
	loginSelection.classList.add('show');
	registerSelection.classList.remove('show');
});
