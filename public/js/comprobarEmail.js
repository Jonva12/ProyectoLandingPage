/*function validarEmail(email) 
{
	var email_prueba = document.getElementsByName('email')[0].value;
    alert(email_prueba);
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w{2,5}+)*(\.\w{2,5})+$/;

    if (regex.test(email_prueba)){
    	alert("El email es correcto.");
    }else{
    	alert("El email es incorrecto.");
    }
}*/

function validar(){
	let email = document.getElementById("email").value;
	document.getElementById("email").style.color="red";
	let arroba = email.split('@');
	let punto = arroba[1].split('.');

	if (email.includes("@") &&
		email.includes(".") &&
		email.length > 2 &&
		email.indexOf("@") == email.lastIndexOf("@") &&
		email.indexOf("@") < email.lastIndexOf(".") &&
		email.lastIndexOf(".")+2 < email.length &&
		email.lastIndexOf(".")+7 > email.length &&
		arroba.length==2 &&
		arroba[0].length!=0 &&
		arroba[1]!=" " &&
		punto[0].length!=0){
		//valido
		document.getElementById("email").style.color="green";
	}
}