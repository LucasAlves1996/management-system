function changeColor1 (module_id,checkbox_id) {
	if (document.getElementById(checkbox_id).checked) {
		document.getElementById(module_id).setAttribute('style','background-color:rgb(220,53,69);');
	} 
	else {
		document.getElementById(module_id).removeAttribute('style');
	}
}