var loader = document.getElementById('j899-loader');
document.getElementById('btn-validar-lic').addEventListener('click', e => {
	e.preventDefault();
	loader.classList.remove('no_display');
	// ---------- POST con CORS configurado en backend --------------
	var datos = {
		lic: document.getElementById('lic-code').value
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
				loader.classList.add('no_display');
				document.getElementById('message-confirm').classList.remove('no_display');
				document.getElementById('message').classList.add('no_display');
				document.getElementById('lic-confirmation').innerText=datos.lic;
			}
		});
	});
	// ---------- // POST con CORS configurado en backend ----------
});
