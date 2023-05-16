const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellidoP: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellidoM: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.[a-zA-Z0-9]{8,20}$/, // 8 a 20 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	cel: /^\d{7,14}$/, // 7 a 14 numeros.
	estado: /^[a-zA-ZÀ-ÿ\s]{4,32}$/, // Letras y acentons
	municipio: /^[a-zA-ZÀ-ÿ\s]{4,32}$/, // Letras y acentons
	cp: /^\d{5,5}$/, // Numeros y solo cinco digitos
	colonia: /^[a-zA-ZÀ-ÿ\s0-9\_\-]{4,32}$/, // Letras, acentons , numeros, guion y guion_bajo
	calle: /^[a-zA-ZÀ-ÿ\s0-9\_\-]{4,32}$/, // Letras, acentons , numeros, guion y guion_bajo
}

const campos = {
	nombre: false,
	apellidoP: false,
	apellidoM: false,
	password: false,
	email: false,
	cel: false,
	estado: false,
	municipio: false,
	cp: false,
	colonia: false,
	calle: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
			break;
		case "apellidoP":
			validarCampo(expresiones.apellidoP, e.target, 'apellidoP');
			break;
		case "apellidoM":
			validarCampo(expresiones.apellidoM, e.target, 'apellidoM');
			break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
			break;
		case "password2":
			validarPassword2();
			break;
		case "email":
			validarCampo(expresiones.email, e.target, 'email');
			break;
		case "cel":
			validarCampo(expresiones.cel, e.target, 'cel');
			break;
		case "estado":
			validarCampo(expresiones.estado, e.target, 'estado');
			break;
		case "municipio":
			validarCampo(expresiones.municipio, e.target, 'municipio');
			break;
		case "cp":
			validarCampo(expresiones.cp, e.target, 'cp');
			break;
		case "colonia":
			validarCampo(expresiones.colonia, e.target, 'colonia');
			break;
		case "calle":
			validarCampo(expresiones.calle, e.target, 'calle');
			break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .status`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} .status`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .status`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} .status`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .status`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 .status`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .status`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 .status`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

/*formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(!(campos.nombre && campos.apellidoP && campos.password && campos.email && campos.cel && terminos.checked && campos.estado && campos.municipio && campos.cp && campos.colonia && campos.calle)){
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});*/