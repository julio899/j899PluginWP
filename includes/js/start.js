var loader = document.getElementById('j899-loader');
document.getElementById('btn-validar-lic').addEventListener('click', e => {
	e.preventDefault();
	loader.classList.remove('no_display');
	// ---------- POST con CORS configurado en backend --------------
	var datos = {
		lic: document.getElementById('lic-code').value,
		proccess_lic: 'proccess_start'
	};
	fetch('http://localhost:8000/lic', {
		method: 'POST',
		body: JSON.stringify(datos),
		headers: {
			'content-type': 'application/json'
		}
	}).then(r => {
		r.json().then(data => {
			if (data.error !== null) {
				console.log(data);
			} else {
				console.info(data.data.status);

				datos.proccess_lic = 'proccess_start';
				datos.expire = data.data.expire;
				
				setTimeout(function(){
					processConfirmation(datos);
				}(datos),500);

			}
		});
	});
	// ---------- // POST con CORS configurado en backend ----------
});

function processConfirmation(datos) {
	return fetch(
		window.location.href +
			'&proccess_lic=' +
			datos.proccess_lic +
			'&lic=' +
			datos.lic+
			'&expire=' +
			datos.expire,
		{
			method: 'POST',
			body: JSON.stringify(datos),
			headers: {
				'content-type': 'application/json'
			}
		}
	)
		.then(r => {
			r.json().then((proceso)=>{
				console.log(proceso);
				console.log('sincronizado...');
				loader.classList.add('no_display');
				document.getElementById('message-confirm').classList.remove('no_display');
				document.getElementById('message').classList.add('no_display');
				document.getElementById('lic-confirmation').innerText = datos.lic;
			});

			// return r.json();
		});
}
