var loader = document.getElementById('j899-loader');
document.getElementById('btn-validar-lic').addEventListener('click',(e)=>{
	e.preventDefault();
	loader.classList.remove('no_display');
	setTimeout(()=>{
		loader.classList.add('no_display');	
	},3000)
});
