//Funcion para saber el metodo de recoleeccióm de la pizza
function functionSelectMethod() {
    Swal.fire({
        title: 'Método de entrega',
        text: "¿Quieres pedir a domicilio o pasar a recoger a sucursal?",
        showDenyButton: true,
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#0F4B9B',
        denyButtonColor: '#0F4B9B',
        confirmButtonText: 'A domicilio',
        denyButtonText: `Recoger en sucursal`,
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'hora-entrega?met=0';
        } else if (result.isDenied) {
            location.href = 'hora-entrega?met=1';
        }
    })
}

//Este alert es para cuando la sucursal no tiene servicio a domocilio
function metodoNoDelivery() {
    Swal.fire({
        title: 'Método de entrega',
        text: "La sucursal que tienes seleccionada no cuenta con servicio a domicilio",
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#0F4B9B',
        confirmButtonText: 'Recoger en sucursal',
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'hora-entrega?met=1';
        }
    })
}

//Si la distancia se exede
function distanciaExedida() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'La distancia de tu colonia a la sucursal seleccionada no cubre el rango de entrega, selecciona otra o cambia de método de recepción.'
    })
}

//Funcion para redireccionar a borrar todos los elementos del carrito
function borrarCarro() {
    Swal.fire({
        title: '¿Estás seguro?',
        text: '¿seguro que quieres eliminar el pedido?',
        showDenyButton: true,
        confirmButtonColor: '#FF0000',
        denyButtonColor: '#0F4B9B',
        confirmButtonText: 'Borrar',
        denyButtonText: `No borrar`,
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'php/scripts/carrito_unset.php?All_Car=NULL';
        } 
    })
}

//Seleccionar una nueva sucursal
function seleccionarSucursal(sucursal) {
    Swal.fire({
        title: 'Seleccionar sucursal',
        text: '¿Quieres seleccionar esta sucursal para continuar tu pedido?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#0F4B9B',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'menu?sucursal='+sucursal;
        } 
    })
}

//Funcion para redireccionar a la seleción de un horario
function alertConfirmar() {
    location.href = 'hora-entrega';
}

function metodoInvalido(sucursal) {
    Swal.fire({
        title: 'Oops...',
        text: 'La sucursal '+sucursal+' actualmente no cuenta con servicio a domicilio.',
        imageUrl: 'images/tambor-stop.png',
        imageWidth: 164.54,
        imageHeight: 200,
    })

    console.log('Sucursal: ' + sucursal)
}

function registrate() {
    Swal.fire({
        title: '¡Espera!',
        text: 'Antes de continuar con tu orden por favor inicia sesión.',
        imageUrl: 'images/Img-Mascota-Nine-Minutes-Pizza-Sacando-la-lengua.png',
        imageWidth: 198.70,
        imageHeight: 200,
        confirmButtonText: 'Iniciar sesión'
    }).then((result) => {
        if (result) {
            location.href = 'iniciar-sesion';
        } 
    })
}

//Modal de tambor easterEgg
function easterEgg() {
    Swal.fire({
        title: 'Esta función estará disponible muy pronto',
        text: 'Próximamente podrás hacer pedidos desde el sitio web.',
        imageUrl: 'images/tambor-stop.png',
        imageWidth: 164.54,
        imageHeight: 200,
    })
}

function errorSeleccion(sucursal) {
    Swal.fire({
        icon: 'error',
        title: '¡Advetencia!',
        text: 'Se seleccionó la sucursal, pero se encuentra actualmente cerrada, no podrás concluir el pedido en esta sucursal si continúas, por favor selecciona otra sucursal cercana',
        showDenyButton: true,
        confirmButtonColor: '#FF0000',
        denyButtonColor: '#0F4B9B',
        confirmButtonText: 'Continuar',
        denyButtonText: `Buscar otra sucursal`,
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = 'menu?sucursal=' + sucursal;
        } 
    })
}