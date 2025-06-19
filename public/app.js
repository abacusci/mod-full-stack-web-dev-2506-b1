function getElement(id) {
	return document.getElementById(id);
}

function onEvent(id, event, func)
{
	getElement(id).addEventListener(event, func);
}

function onClick(id, func){
	onEvent(id, 'click', func);
}

async function call(endpoint) {
	const response = await fetch('/api.php?e=' + endpoint);
	const data = await response.json();
	return data;
}

function show(id, content)
{
	getElement(id).innerHTML = content;
}

onClick('btnLoad', async function(){
	try {
		const data = await call('test');
		show('page-title', data.message);
	} catch (error) {
		alert('Error: ' + error.message);
	}
});

/*
window.addEventListener('load', async function () {
	
});*/