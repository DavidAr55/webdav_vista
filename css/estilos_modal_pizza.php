<style>
/*//////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////////////////////////////////////////////////////////////////////////////*/
/*///////////////////////////////      Modal Sin Limites        ////////////////////////////*/
/*//////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////////////////////////////////////////////////////////////////////////////*/

<?php 
    $consulta_tokens = $conexion->query("SELECT token FROM menu")or die($conexion->error);
    while($row_tokens = $consulta_tokens->fetch_array()) {

        echo "
        #modal-".$row_tokens['token']." {
            display: none;
        }
        
        #modal-".$row_tokens['token'].":checked ~ .modal-armar-pizza {
            display: block;
        }
        
        #modal-".$row_tokens['token'].":checked ~ .modal-armar-pizza .container-armar-pizza {
            top: 5vh;
            transition: all 300ms;
        }";

        if($row_tokens['token'] == "fb4a8b3cafb072c18afeed7e8114a9e0") {
            echo "
            #modal-".$row_tokens['token'].":checked ~ .modal-armar-pizza .container-armar-pizza {
                top: 5vh;
                transition: all 300ms;
            }";
        }
     } ?>

.btn-agregar-from-modal {
    margin-top: 7.5px;
    padding: 10px 20px;
    background: red;
    color: white;

    border-radius: 10px;

    font-size: 1rem;
    font-weight: bold;

    user-select: none;
}

.modal-armar-pizza {
    display: flex;
    position: fixed;
    top: 0px;
    left: 0px;

    z-index: 1;

    width: 100vw;
    height: 100vh;

    background: rgba(0, 0, 0, 0.5);
    display: none;
}

.container-armar-pizza {
    margin: auto;
    position: relative;
    top: 0px;
    
    width: 1000px;
    height: auto;
    max-height: 90vh;
    overflow-y: auto;

    background: white;
    border-radius: 10px;
    transition: all 300ms;
}

.header-armar-pizza {
    width: 100%;
    height: 200px;

    border-radius: 10px;
    background: var(--Amarillo9minutes);
}

.cerrrar-pizza-modal {
    display: block;
    float: right;
    padding: 5px 20px;

    color: red;
    font-weight: normal;
}

.icono-pizza-modal {
    height: 282.81px;
    width: 277px;

    margin: 10px 21px;
}

.tituli-pizza-modal {
    position: relative;
    top: -275px;
    left: calc(55% - 250px);

    width: 550px;
    height: auto;
}

.tituli-pizza-modal h2 {
    font-size: 2.35rem;
}

.opciones-pizza-modal {
    position: relative;
    top: -235px;
    left: 30%;

    font-size: 1rem;
    font-weight: normal;

    width: 65%;

    border-bottom: 2px solid lightgray;
}


.opciones-pizza-modal select {
    width: 110px;
    height: 40px;
    font-size: .9rem;
    border: 2px solid lightgray;
    border-radius: 10px;
    
    margin: 10px 0px;
    margin-right: 15px;
}

#extraqueso-pizza {
    margin-right: 15px;
}

.body-armar-pizza {
    display: block;

    margin: 25px;
    margin-top: 145px;

    font-size: 1.25rem;
    font-weight: normal;
}

.body-armar-pizza textarea {
    resize: none;
    width: 100%;
    height: 85px;
    margin-top: 5px;
    padding: 15px 10px;
    font-size: 1rem;
}

.sub-titulo-modal-pizza {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 20px;
}

.container-ingredientes-sinlimites {
    width: 100%;
    max-height: 200px;
    overflow-y: auto;

    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-flow: wrap;

    margin: auto;
    border-top: 2px solid lightgray;
    border-bottom: 2px solid lightgray;
}

.container-ingrediente-from-modal {
    width: 175px;
    margin: 7.5px 25px;

    font-size: 1rem;
}

.container-complemento-from-modal {
    width: 225px;
    margin: 7.5px 25px;

    font-size: 1rem;
}

.alerta-no-sucursal {
    color: red;
    font-size: 1rem;
    font-weight: normal;
    
    cursor: default;
}

#btn-azul-modal{
    padding: 20px 60px;
    border: none;
    border-radius: 20px;
    background: var(--Azul9minutes);
    color: white;
    font-weight: bold;
    font-family: Poppins, Arial;
    font-size: 1.25rem;
}

.br-hidde, .br-hidde2, .br-hidde3 {
    display: none;
}

@media (max-width: 1070px) {

    .container-armar-pizza {
        width: 600px;
        height: auto;
    }

    .icono-pizza-modal {
        height: 200px;
        width: 195.75px;

        margin: 55px 21px;
    }

    .tituli-pizza-modal {
        top: -290px;
        left: 35%;

        width: 400px;
    }

    .tituli-pizza-modal h2 {
        font-size: 2rem;
    }

    .opciones-pizza-modal {
        top: -245px;
        left: 3%;

        font-size: 0.9rem;
        font-weight: normal;

        width: 93%;

        border-bottom: 2px solid lightgray;
    }

    .body-armar-pizza {
        margin-top: 160px;

        font-size: 0.9rem;
        font-weight: normal;
    }

    .sub-titulo-modal-pizza {
        font-size: 1.15rem;
        font-weight: bold;
        margin-top: 35px;
        margin-bottom: 25px;
    }

}

@media (max-width: 620px) {

    .br-hidde {
        display: block;
    }

    .container-armar-pizza {
        width: 90%;
        height: auto;
    }

    .icono-pizza-modal {
        display: none;
    }

    .header-armar-pizza {
        height: 160px;
        margin-top: -10px;
    }

    .tituli-pizza-modal {
        top: 20px;
        left: 10%;

        width: 80%;
    }

    .tituli-pizza-modal h2 {
        font-size: 2rem;
    }

    .opciones-pizza-modal {
        top: 40px;
        left: 3%;

        font-size: 0.9rem;
        font-weight: normal;

        width: 93%;

        border-bottom: 2px solid lightgray;
    }

    #btn-azul-modal{
        padding: 20px 40px;
        border: none;
        border-radius: 20px;
        background: var(--Azul9minutes);
        color: white;
        font-weight: bold;
        font-family: Poppins, Arial;
        font-size: 1.1rem;
    }

    .body-armar-pizza {
        margin-top: 120px;

        font-size: 0.9rem;
        font-weight: normal;
    }

    .sub-titulo-modal-pizza {
        font-size: 1.15rem;
        font-weight: bold;
        margin-top: 35px;
        margin-bottom: 25px;
    }

    .container-complemento-from-modal {
        width: 200px;
        margin: 7.5px 5px;

        font-size: 0.9rem;
    }

}

@media (max-width: 605px) {

    .header-armar-pizza {
        height: 200px;
    }
}

@media (max-width: 554px) {

    .br-hidde2 {
        display: block;
    }

    .body-armar-pizza {
        margin-top: 180px;

        font-size: 0.9rem;
        font-weight: normal;
    }

    .container-ingrediente-from-modal {
        margin: 7.5px 5px;

        font-size: 0.9rem;
    }

    .body-armar-pizza textarea {
        width: 100%;
        height: 100px;
        font-size: 0.9rem;
    }
}

@media (max-width: 495px) {

    .tituli-pizza-modal h2 {
        font-size: 1.8rem;
    }
}

@media (max-width: 432px) {

    .br-hidde3 {
        display: block;
    }

    .body-armar-pizza {
        margin-top: 210px;
    }

    .sub-titulo-modal-pizza {
        font-size: 1rem;
        font-weight: bold;
        margin-top: 35px;
        margin-bottom: 25px;
    }
}

@media (max-width: 325px) {

    .opciones-pizza-modal select {
        width: 75px;
        font-size: .8rem;
        
        margin: 7px 0px;
    }

    .tituli-pizza-modal h2 {
        font-size: 1.65rem;
    }
}

@media (max-width: 296px) {

    .header-armar-pizza {
        height: 230px;
    }
}

.del-formato {
    margin: 0;
    padding: 0;
    border: none;
    width: auto;
    height: auto;
    box-sizing: border-box;
    box-shadow: none;
}

.container-row-promo img:hover  {
    width: 101%;
    height: auto;

    transition: all 300ms;
}

</style>
<?php 