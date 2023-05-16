let paginaActual = 1
/* Llamando a la función getData() */
getData(paginaActual)

/* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
document.getElementById("campo").addEventListener("keyup", function() {
    getData(1)
}, false)
document.getElementById("num_registros").addEventListener("change", function() {
    getData(paginaActual)
}, false)


/* Peticion AJAX */
function getData(pagina) {
    let input = document.getElementById("campo").value
    let num_registros = document.getElementById("num_registros").value
    let content = document.getElementById("content")

    if (pagina != null) {
        paginaActual = pagina
    }

    let url = "php/scripts/suc_load.php"
    let formaData = new FormData()
    formaData.append('campo', input)
    formaData.append('registros', num_registros)
    formaData.append('pagina', paginaActual)

    fetch(url, {
            method: "POST",
            body: formaData
        }).then(response => response.json())
        .then(data => {
            content.innerHTML = data.data
            document.getElementById("lbl-total").innerHTML = data.totalFiltro +
                ' de ' + data.totalRegistros + ' colonias encontradas'
            document.getElementById("nav-paginacion").innerHTML = data.paginacion
        }).catch(err => console.log(err))
}