const formulario = document.getElementById("formulario");
const nombre = formulario.nombre;
const correo = formulario.correo;
const telefono = formulario.telefono;
const mensaje = formulario.mensaje;
const enviarBtn = formulario.enviar
const error = document.getElementById("error");
let contador = 0;

function validarNombre(e){
    if(nombre.value == '' || nombre.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el nombre</li>';
        e.preventDefault();
    }else{
        error.style.display = 'none';
    }
}

function validarEmail(e){
    if(correo.value == '' || correo.value == null){
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el correo</li>';
        e.preventDefault();
    }else{
        error.style.display = 'none';
    }
}

function validarFormulario(e){

    let timer = function(){
        contador++;
        error.innerHTML="";
        validarNombre(e);
        validarEmail(e);
        if (contador%10==0) {
            clearInterval(intervalo);
            error.style.display = 'none';
        }
    }

    let intervalo = setInterval(timer, 500);

}

enviarBtn.addEventListener("click", validarFormulario)


