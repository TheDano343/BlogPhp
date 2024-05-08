const nombre = document.getElementById('nombre');
//constante : es un tipo INMUTABLE, no puede cambiar una vez definida 
//getElementById : seleccionar un elemento del documento por medio del valor del atributo id que se le haya asignado
const correo = document.getElementById('correo');
const contraseña = document.getElementById('contraseña');

const form = document.getElementById('form');

const nombre_error = document.getElementById('nombre_error');
const email_error = document.getElementById('correo_error');
const contraseña_error = document.getElementById('contrasena_error');

//addEventListener : escucha un evento y ejecuta una función, estos dos argumentos se le pasan por parametros.
//Submit: Es para que reacione al dar clien en el submit
// e : Es una convención comúnmente utilizada para referirse al objeto de evento
form.addEventListener('submit', (e)=>
{
    // Explicacion: https://www.w3resource.com/javascript/form/email-validation.php
    var checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(nombre.value === '' || nombre.value == null)
        {
            // e.preventDefault() : es una función que se utiliza en el contexto de manejo de eventos en JavaScript para prevenir el comportamiento predeterminado asociado con un evento específico.
            e.preventDefault();
            nombre_error.innerHTML = 'Se requiere el nombre';
        }
        else
        {
            nombre_error.innerHTML = "";
        }

        // match : especifica la coincidencia de una expresión regular con una cadena.
    if(!correo.value.match(checkEmail))
        {
            e.preventDefault();
            email_error.innerHTML = 'No cuenta como formato de correo';
        }
        else
        {
            email_error.innerHTML = "";
        }

    if(contraseña.value.length <= 5)
        {
            e.preventDefault();
            contraseña_error.innerHTML = 'La contraseña tiene menos de 6 numeros';
        }
        else
        {
            contraseña_error.innerHTML = "";
        }

        if(contraseña.value === 'contraseña')
        {
            e.preventDefault();
            contraseña_error.innerHTML = 'Se requiere contraseña';
        }
})