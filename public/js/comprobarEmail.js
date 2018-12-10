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

jQuery(function() {
	jQuery( "#registro" ).validate({
		rules: {
			nif: {
				minlength: 9,
				maxlength: 9,
			},
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 20
			},
			apellidos: {
				required: true,
				minlength: 2,
				maxlength: 40
			},
			email: {
				required: true
			},
			telefono: {
				required: true,
				minlength: 9,
				maxlength: 9,
				number: true
			},
			calle: {
				minlength: 2,
				maxlength: 40
			},
			postal: {
				required: true,
				minlength: 5,
				maxlength: 5,
				number: true
			}
		},
		messages:{
			nif:{
				minlength:"Demasido corto",
				maxlength:"Demasido largo",
			},
			nombre:{
				required:"Campo obligatorio",
				minlength:"Minimo 2 caracteres",
				maxlength:"Demasido largo"
			},
			apellidos:{
				required:"Campo obligatorio",
				minlength:"Minimo 2 caracteres",
				maxlength:"Demasido largo"
			},
			email:{
				required:"Campo obligatorio"
			},
			telefono:{
				minlength:"Minimo 9 caracteres",
				maxlength:"Maximo 9 caracteres",
				number:"Introduce solo numeros",
				required:"Campo obligatorio"
			},
			calle:{
				minlength:"Minimo 2 caracteres",
				maxlength:"Maximo 40 caracteres"
			},
			postal:{
				required:"Campo obligatorio",
				minlength:"Minimo 5 caracteres",
				maxlength:"Maximo 5 caracteres",
				number:"Introduce solo numeros"
			}

		}
   });
}