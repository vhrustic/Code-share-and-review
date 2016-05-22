var errorPoruke = "";

function validateForm(){
	errorPoruke = "";
	errorPoruke += validateNaslov() + validateSadrzaj() + validateUrl();
	if(errorPoruke.length > 0) {alert(errorPoruke); return false;}
	return true;
}

function validateNaslov(){
	var naslov = document.querySelector("input[name=naslov]").value;
	var errrorMsg = "";
	if(naslov.length < 3) errrorMsg += "Naslov mora biti barem 3 slova. ";
	errrorMsg += validateAgainstXSS(naslov, "Naslov");
	return errrorMsg;
}

function validateAgainstXSS(tekst, tipTeksta){
	var errrorMsg = "";
	if(tekst.includes("^^^^^^") || tekst.includes("__--__")) errrorMsg = tipTeksta + " sadrži ilegalne znakove! ";
	return errrorMsg;
}

function validateSadrzaj(){
	var sadrzaj = document.querySelector("textarea[name=sadrzaj]").value;
	var errrorMsg = "";
	if(sadrzaj.length < 15) errrorMsg += "Sadržaj mora biti barem 15 slova. ";
	errrorMsg += validateAgainstXSS(sadrzaj, "Sadržaj");
	return errrorMsg;
}

function validateUrl(){
	var url = document.querySelector("input[name=url]").value;
	var errrorMsg = "";
	if(url.length < 7) errrorMsg += "Url slike nije potpun. ";
	errrorMsg += validateAgainstXSS(url, "Url slike");
	if(url.substring(url.length-4) != ".jpg" && url.substring(url.length-4) != ".png") errrorMsg += "Slika mora biti .jpg ili .png formata. ";
	return errrorMsg;
}