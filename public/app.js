document.getElementById("btnExample").addEventListener('click', function(){
	alert('Hello');
});

window.addEventListener('load', async function () {
	try {
		const response = await fetch('/api.php?e=test');
		const data = await response.json();
		document.getElementById('page-title').innerHTML = data.message;
	} catch (error) {
		alert('Error: ' + error.message);
	}
});