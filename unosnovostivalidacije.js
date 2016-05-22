var errorPoruke = "";

function validateForm(){
	if(!validanKod || !validanBroj) {alert("Uneseni kod države i/ili broj telefona nisi validni."); return false;}
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

var errorPorukeKodTel = "";
var validanKod = false;
var validanBroj = false;

function resetErrors(){
	errorPorukeKodTel = "";
	validanKod = false;
	validanBroj = false;
}

function validateKodIbrojTelefona()
{
	var kod = document.querySelector("input[name=dkod]").value;
	var brtel = document.querySelector("input[name=brtel]").value;
	var ajax = new XMLHttpRequest();
	if(brtel.length >0){
	ajax.onreadystatechange = function() {// Anonimna funkcija
		if (ajax.readyState == 4 && ajax.status == 200){
			var JsonRezultat = JSON.parse(ajax.responseText);
			if(JsonRezultat[0] == null) {errorPorukeKodTel += "Nepostojeći kod države! ";}
			else validanKod = true;
			if(validanKod) {
				var cClength = JsonRezultat[0].callingCodes[0].length+1;
				if(brtel.substring(0, cClength) != ('+' + JsonRezultat[0].callingCodes[0])){validanBroj = false; errorPorukeKodTel += " Pozivni broj ne odgovara izabranoj državi(očekivano: +" + JsonRezultat[0].callingCodes[0] +"). ";}
				else if(brtel.length == cClength) {validanBroj = false; errorPorukeKodTel += "Uneseni broj telefona je nepotpun. ";}
				else validanBroj = true;
			}
			if(errorPorukeKodTel.length > 0) { 
				alert(errorPorukeKodTel);
				if(!validanBroj) document.querySelector("input[name=brtel]").focus(); 
			}
			else {validanKod = validanBroj = true;}
		}
	}
 	ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + kod, true);
	ajax.send();}
}