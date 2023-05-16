function success(geolocationPosition) {
    let coords = geolocationPosition.coords;
    location.href = "php/scripts/load_sucursal.php?Lat="+coords.latitude+"&Lon="+coords.longitude;
}
  
function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
}
  
const options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
};
  
  function usarGeolocalizacion() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error, options);
    }
    else {
        alert("El navegador no permite el uso de ubicación");
    }
}

function buscadorSucursal() {
    Swal.fire({
        title: '¿Te gustaría encontrar tu sucursal más cercana?',
        text: 'Da clic en aceptar y danos permiso de saber tu ubicación',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#0F4B9B',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            usarGeolocalizacion();
        } 
    })
}