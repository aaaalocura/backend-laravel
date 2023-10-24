<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pre-Aprobador</title>
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.skypack.dev/canvas-confetti"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    background: rgb(190, 205, 47);
    background: linear-gradient(90deg, rgba(190, 205, 47, 1) 35%, rgba(140, 122, 122, 1) 100%);
    background-size: 300% 100%;
    animation: gradient 15s ease infinite;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

h1 {
    font-weight: bold;
    margin: 0;
}

h2 {
    text-align: center;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: 1px solid #ffffff;
    background-color: #2d50c2;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background-color: transparent;
    border-color: #FFFFFF;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    /* Efecto de relieve */
    transition: box-shadow 0.3s ease;
    /* Transición suave */
    opacity: 0;
    transition: opacity 0.5s ease, transform 0.5s ease;
}

button.ghost:hover {
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
    /* Cambio de relieve al pasar el mouse */
}


form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

.form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    width: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border-radius: 10px;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    border: block;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 780px;
    height: 600px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
    margin-top: 10px;
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;

}

@keyframes show {

    0%,
    49.99% {
        opacity: 0;
        z-index: 1;
    }

    50%,
    100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

.overlay {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}


.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #DDDDDD;
    borderradius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.styled-select {
    display: block;
    width: 200px;
    padding: 5px;
    font-size: 14px;
    line-height: 1.6;
    color: #555555;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 4px;
    margin-top: 5px;
}

.doblep {
    margin-top: 2px;
}

/* Estilos responsivos */

@media screen and (max-width: 768px) {
    .container {
        width: 100%;
        height: auto;
        min-height: 100vh;
    }

    .form-container {
        position: relative;
        height: auto;
    }

    .sign-up-container,
    .sign-in-container {
        width: 100%;
        height: auto;
    }

    .overlay-container {
        width: 100%;
        left: 0;
        transform: translateX(0);
    }

    .overlay {
        width: 100%;
        left: 0;
        transform: translateX(0);
    }

    .overlay-panel {
        width: 100%;
        transform: translateX(0);
    }
}

/* Resetear estilos por defecto del select */
select {
    appearance: none;
    background-color: transparent;
    border: 1px solid #ccc;
    padding: 8px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 10px;
    color: #333;
}

/* Estilo del select cuando está desplegado */
select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.6);
}

/* Estilo del ícono de despliegue */
select::-ms-expand {
    display: none;
}

/* Estilo del ícono de despliegue para navegadores webkit */
select::-webkit-expand-more-indicator {
    display: none;
}

/* Estilo de las opciones dentro del select */
select option {
    background-color: #fff;
    color: #333;
}

/* Estilo para el contenedor de los inputs de archivos */
#camposCarga {
    display: none;

    border-radius: 10px;
}

/* Estilo para las etiquetas de los inputs de archivos */
.file-label {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 4px;
    display: block;
    border-radius: 10px;
}

/* Estilo para los inputs de archivos */
.file-input {
    display: none;
}

/* Estilo para el contenedor personalizado del input de archivo */
.custom-file {
    border: 1px solid #2d50c2;
    border-radius: 4px;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
}

/* Estilo para el texto de la etiqueta del input de archivo */
.file-label-text {
    display: block;
    padding: 8px 12px;
    cursor: pointer;
}

/* Estilo cuando se hace hover en la etiqueta del input de archivo */
.file-label-text:hover {
    background-color: #f2f2f2;
}

/* Estilo cuando se selecciona un archivo */
.file-input:focus+.file-label .file-label-text {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.6);
}

.oculto {
    display: none;
    /* O puedes usar visibility: hidden; */
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
let origen = '';
let gente = '';

let tieneNumeroAlien = '';
let numeroAlien = '';
let copiaPasaporte = '';
let copiaVisa = '';
let fotoEnBlanco = '';
let motivo = '';
let nombre = '';
let apellido1 = '';
let email = '';
let pais = '';
let edad = '';
let telefono = '';

function datos() {
    nombre = document.getElementById('nombre').value;
    console.log('nombre:', nombre);

    apellido1 = document.getElementById('apellido1').value;
    console.log('apellido1:', apellido1);

    email = document.getElementById('email').value;
    console.log('email:', email);

    pais = document.getElementById('pais').value;
    console.log('pais:', pais);

    edad = document.getElementById('edad').value;
    console.log('edad:', edad);

    telefono = document.getElementById('telefono').value;
    console.log('telefono:', telefono);
}



function guardarOrigen(opcion) {
    origen = opcion;
    console.log('Origen seleccionado:', origen);

    // Actualizar el valor del campo oculto con el origen seleccionado
    document.getElementById('origen').value = origen;
}

function guardarGente(valor) {
    gente = valor;
    console.log('Solo o familiar:', gente);

    // Actualizar el valor del campo oculto con el origen seleccionado
    document.getElementById('gente').value = gente;
}

function contactar1() {
    tieneNumeroAlien = 'no';
    console.log('¿Tienes número de alien?:', tieneNumeroAlien);

    // Actualizar el valor del campo oculto con la opción seleccionada
    document.getElementById('tieneNumeroAlien').value = tieneNumeroAlien;
}

function contactar2() {
    tieneNumeroAlien = 'si';
    console.log('¿Tienes número de alien?:', tieneNumeroAlien);

    // Actualizar el valor del campo oculto con la opción seleccionada
    document.getElementById('tieneNumeroAlien').value = tieneNumeroAlien;
}



function validarNumero2() {
    numeroAlien = document.getElementById('numeroAlien').value;
    console.log('Número de alien:', numeroAlien);

    // Actualizar el valor del campo oculto con el numeroAlien ingresado
    document.getElementById('numeroAlienHidden').value = numeroAlien;


}

function validarNumero3() {
    var MAS12 = document.getElementById('MAS12Input').value;
    var MENOS12 = document.getElementById('MENOS12Input').value;

    // Actualizar los valores de los campos ocultos con los números ingresados
    document.getElementById('MAS12').value = MAS12;
    document.getElementById('MENOS12').value = MENOS12;
}




function validarCamposDeCarga1() {
    copiaPasaporte = document.getElementById('copiaPasaporte').value;
    copiaVisa = document.getElementById('copiaVisa').value;
    fotoEnBlanco = document.getElementById('fotoEnBlanco').value;
    console.log('Copia de pasaporte:', copiaPasaporte);
    console.log('Copia de visa:', copiaVisa);
    console.log('Foto en blanco:', fotoEnBlanco);
}

function actualizarMotivo() {
    motivo = document.getElementById('motivoSelect').value;
    console.log('Motivo:', motivo);
mostrarSweetAlert();
    // Actualizar el valor del campo oculto con el motivo seleccionado
    document.getElementById('motivoHidden').value = motivo;
    document.getElementById('camposCarga').style.display = 'block';
    document.getElementById('motivoContainer').style.display = 'none';
    
}

function finalizarProceso1() {

    var MAS12 = document.getElementById('MAS12Input').value;
    var MENOS12 = document.getElementById('MENOS12Input').value;

    // Actualizar los valores de los campos ocultos con los números ingresados
    document.getElementById('MAS12').value = MAS12;
    document.getElementById('MENOS12').value = MENOS12;
    console.log("MAS12:", MAS12); // Agrega este log para verificar el valor
    console.log("MENOS12:", MENOS12);
    // Enviar datos al controlador mediante una petición AJAX (usando jQuery).
    // Asegúrate de incluir jQuery en tu proyecto para que esto funcione.

    var data = {
        "_token": "{{ csrf_token() }}",
        "origen": origen1,
        "familia1": gente,
        "mas": MAS12,
        "menos": MENOS12,

        "tieneNumeroAlien": tieneNumeroAlien,
        "numeroAlien": numeroAlien,
        "copiaPasaporte": copiaPasaporte,
        "copiaVisa": copiaVisa,
        "fotoEnBlanco": fotoEnBlanco,
        "motivo": motivo,

        "tieneNumeroAlien": tieneNumeroAlien1,
        "nombre": document.getElementsByName('nombre')[0].value,
        "apellido1": document.getElementsByName('apellido1')[0].value,
        "email": document.getElementsByName('email')[0].value,
        "pais": document.getElementsByName('pais')[0].value,
        "edad": document.getElementsByName('edad')[0].value,
        "telefono": document.getElementsByName('telefono')[0].value
    };

    console.log("Data:", data); // Imprimir los datos a enviar en la consola
    alert(data);
    $.ajax({
        url: "{{ route('aspirantes.store') }}",
        type: "POST",
        data: data,
        success: function(response) {
            // Aquí puedes manejar la respuesta del servidor si es necesario.
            console.log("Respuesta del servidor:", response);
            alert(data); // Imprimir la respuesta en la consola
            console.log("Datos enviados correctamente.");
        },
        error: function(error) {
            // Aquí puedes manejar errores si ocurre alguno en la petición.
            console.error("Error al enviar los datos:", error);
        }
    });
}

function genteFamilia() {
    document.getElementById('inputContainer1').style.display = 'block';
    document.getElementById('inputContainer44').style.display = 'none';


}

function MostrarFA() {
    document.getElementById('FA').style.display = 'block';
    document.getElementById('inputContainer1').style.display = 'none';

}

function MostrarFA2() {
    document.getElementById('FA').style.display = 'block';
    document.getElementById('inputContainer1').style.display = 'none';
    document.getElementById('inputContainer44').style.display = 'none';
}
</script>
<script>
function verificarFecha() {
    const selectedDate = new Date(document.getElementById("fecha").value);
    const currentDate = new Date();

    // Calculate the difference in milliseconds
    const difference = currentDate - selectedDate;

    // Convert milliseconds to months (assuming each month has 30.44 days)
    const differenceInMonths = difference / (1000 * 60 * 60 * 24 * 30.44);

    if (differenceInMonths >= 12) {

        document.getElementById('textoPregunta').innerText =
            'Lo sentimos su Solicitud ha sido rechazada automaticamente';
        finalizarProcesoNO();
    } else {
        document.getElementById('textoPregunta').innerText =
            'Continua el proceso por favor';
        document.getElementById('inputContainer44').style.display = 'block';
        document.getElementById('fechaForm').style.display = 'none';
    }
}
</script>

<body>
    <h2>Sistema de trámite automatizado</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form enctype="multipart/form-data">
                @csrf
                <div id="fechaForm">
                    <p>Selecciona la fecha en que ingresaste a los Estados Unidos</p>
                    <input type="date" id="fecha" placeholder="personas de +21 años"
                        onchange="verificarFecha();irAtras();">
                </div>

                <div id="inputContainer44" style="display: none;">
                    <p>Ingresó con su familia, o solo?</p>
                    <button type="button" id="FAM" name="gente"
                        onclick=" guardarGente('Familiar');genteFamilia();MostrasAtras1();">Familiar</button>
                    <button type="button" id="SOLO" name="gente"
                        onclick="guardarGente('Solo');MostrarFA2();MostrasAtras2();">Solo</button>
                </div>
                <input type="hidden" id="gente" name="gente" value="">
                <br><br>

                <script>
                function irAtras() {
                    document.getElementById('atras1').style.display = 'block';
                }

                function irATRAS1() {
                    document.getElementById('inputContainer44').style.display = 'none';
                    document.getElementById('fechaForm').style.display = 'block';
                    document.getElementById('atras1').style.display = 'none';
                }
                </script>



                <div id="inputContainer1" style="display: none;">
                    <p>Cantidad de personas mayores o menores de 21 años</p>
                    <input type="number" id="MAS12Input" placeholder="personas de +21 años" oninput="validarNumero()">
                    <input type="number" id="MENOS12Input" placeholder="personas de -21 años" oninput="validarNumero()">
                    <input type="hidden" id="MAS12" name="MAS12" value="">
                    <input type="hidden" id="MENOS12" name="MENOS12" value="">
                    <button type="button" id="siguienteBtn" style="display: none;"
                        onclick="MostrarFA();validarNumero3();">Siguiente</button>
                </div>
                <br><br>


                <script>
                function MostrasAtras1() {
                    document.getElementById('atras2').style.display = 'none';
                    document.getElementById('atras1').style.display = 'none';
                }

                function irATRAS2() {
                    document.getElementById('inputContainer1').style.display = 'none';
                    document.getElementById('inputContainer44').style.display = 'block';
                    document.getElementById('atras2').style.display = 'none';
                    document.getElementById('atras1').style.display = 'block';
                }

                function MostrasAtras2() {
                    document.getElementById('atras2').style.display = 'none';
                    document.getElementById('atras1').style.display = 'none';
                    document.getElementById('atras3').style.display = 'block';
                }

                function irATRAS3() {
                    document.getElementById('FA').style.display = 'none';
                    document.getElementById('inputContainer44').style.display = 'block';
                    document.getElementById('atras1').style.display = 'block';
                    document.getElementById('atras3').style.display = 'none';

                }
                </script>






                <div id="FA" style="display: none;" class="button-wrapper">
                    <p>Por donde ingreso a los Estados Unidos?</p>
                    <button type="button" id="F" name="origen"
                        onclick="mostrarPreguntaAlien('Frontera'); guardarOrigen('Frontera')" ;>Frontera
                        (ASILO
                        DEFENSIVO)</button>
                    <button type="button" id="A" name="origen" class="confetti-button"
                        onclick="mostrarPreguntaAlien('Aeropuerto');guardarOrigen('Aeropuerto'); ">Aeropuerto</button>
                </div>
                <input type="hidden" id="origen" name="origen" value="">

                <br><br>




                <script>
                function AtrasIngreso() {
                    document.getElementById('atras4').style.display = 'none';
                    document.getElementById('atras3').style.display = 'none';
                }

                function irATRAS4() {
                    document.getElementById('FA').style.display = 'block';
                    document.getElementById('inputContainer44').style.display = 'none';
                    document.getElementById('atras3').style.display = 'block';
                    document.getElementById('atras4').style.display = 'none';
                    document.getElementById('motivoContainer').style.display = 'none';
                    document.getElementById('camposCarga').style.display = 'none';
                    document.getElementById('finalizarBtn').style.display = 'none';
                }

                function MostrasAtras2() {
                    document.getElementById('atras2').style.display = 'none';
                    document.getElementById('atras1').style.display = 'none';
                    document.getElementById('atras3').style.display = 'block';
                }

                function irATRAS3() {
                    document.getElementById('FA').style.display = 'none';
                    document.getElementById('inputContainer44').style.display = 'block';
                    document.getElementById('atras1').style.display = 'block';
                    document.getElementById('atras3').style.display = 'none';

                }
                </script>




                <div id="preguntaAlien" style="display: none; padding:1px">
                    <a>Tienes número de Alíen?</a>
                    <button id="N" type="button" onclick="contactar();contactar1();finalizarProcesoNO();">NO</button>
                    <button id="S" type="button" onclick="mostrarInput();contactar2()">SI</button>
                    <!-- Agrega un campo oculto para almacenar la opción seleccionada -->
                    <input type="hidden" id="tieneNumeroAlien" name="tieneNumeroAlien" value="">
                </div>
                <div id="inputContainer" style="display: none;">







                    <p>Ingresa tu número alien</p>
                    <input type="number" id="numeroAlien" placeholder="Ingresa tu número de alien"
                        oninput="validarALIEN()">
                    <input type="hidden" id="numeroAlienHidden" name="numeroAlien" value="">
                    <button type="button" id="siguienteBtn"
                        onclick="mostrarCamposDeCarga();validarNumero2();">Siguiente</button>
                </div>


                <div id="motivoContainer" style="display: none;">
                    <label for="motivoSelect">Motivo:</label>
                    <select id="motivoSelect" onchange="actualizarMotivo()">
                        <option value="">Selecciona un motivo</option>
                        <option value="presecucion politica">Persecución Política</option>
                        <option value="presecucion por genero">Persecución por Género</option>
                        <option value="presecucion religiosa">Persecución Religiosa</option>
                        <option value="tortura">Tortura</option>
                        <option value="ninguna">Ninguna</option>
                    </select>
                    <!-- Agrega un campo oculto para almacenar el valor seleccionado del motivo -->
                    <input type="hidden" id="motivoHidden" name="motivo" value="">
                </div>



                <div id="camposCarga" style="display: none;">
                    <p>Por favor adjunta una copia de tu pasaporte con el fin de crear el registro.</p>
                    <label for="copiaPasaporte" class="file-label">Copia de pasaporte:</label>
                    <div class="custom-file">
                        <input type="file" id="copiaPasaporte" name="copiaPasaporte" class="file-input"
                            accept=".pdf,.jpg,.png"
                            onchange="validarCamposDeCarga();actualizarNombreArchivo('copiaPasaporte');">
                        <label for="copiaPasaporte" class="file-label"><span class="file-label-text">Seleccionar
                                archivo</span></label>
                    </div>

                    <script>
                    function iniciarTramite() {
                        // URL de PayPal
                        var paypalURL = 'https://www.paypal.com/invoice/p/#ZPV79N7CP9RGKC7X';

                        // Abrir en una nueva pestaña
                        window.open(paypalURL, '_blank');
                    }
                    </script>






                    <label style="display: none;" for="copiaVisa" class="file-label">Copia de visa:</label>
                    <div style="display: none;" class="custom-file">
                        <input type="file" id="copiaVisa" name="copiaVisa" class="file-input" accept=".pdf,.jpg,.png"
                            onchange="validarCamposDeCarga(); actualizarNombreArchivo('copiaVisa');">
                        <label for="copiaVisa" class="file-label"><span class="file-label-text">Seleccionar
                                archivo</span></label>
                    </div>
                    <br>
                    <label style="display: none;" for="fotoEnBlanco" class="file-label">Foto en blanco (no mayor a 30
                        días):</label>
                    <div style="display: none;" class="custom-file">
                        <input type="file" id="fotoEnBlanco" name="fotoEnBlanco" class="file-input"
                            accept=".pdf,.jpg,.png"
                            onchange="validarCamposDeCarga(); actualizarNombreArchivo('fotoEnBlanco');">
                        <label for="fotoEnBlanco" class="file-label"><span class="file-label-text">Seleccionar
                                archivo</span></label>
                    </div>
                </div>








                <br><br>





                <br><br><br><br>
                <button id="finalizarBtn" style="display: none;"
                    onclick="finalizarProcesoNObtn();iniciarTramite();">Iniciar tramite</button>

                <br>
                <br>


        </div>


        <div class="form-container sign-in-container">
            <div class="form">
                <h1>Información Personal</h1>
                <div id="pregunta1">
                    <p>¿Cuál es tu nombre?</p>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                </div>
                <div id="pregunta2" style="display: none;">
                    <p>¿Cuál es tu apellido?</p>
                    <input type="text" name="apellido1" id="apellido1" placeholder="Apellidos" />
                </div>
                <div id="pregunta3" style="display: none;">
                    <p>¿Cuál es tu email?</p>
                    <input type="email" name="email" id="email" placeholder="Email" />
                </div>
                <div id="pregunta4" style="display: none;">
                    <p>¿Cuál es tu nacionalidad?</p>
                    <select name="pais" id="pais" onchange="mostrarLada()">
                        <option value="" disabled selected>Seleccione su país</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Haití">Haití</option>
                        <option value="Honduras">Honduras</option>
                        <option value="México">México</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perú">Perú</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guayana Francesa">Guayana Francesa</option>
                    </select>
                </div>
                <div id="pregunta5" style="display: none;">
                    <p>¿Cual es tu numero telefonico? (sin espacios)</p>
                    <input type="text" name="telefono" id="telefono" placeholder="Telefono"
                        oninput="limitarDigitos()" />
                </div>
                <div id="pregunta6" style="display: none;">
                    <p>¿Cual es tu edad?</p>
                    <input type="number" name="edad" id="edad" placeholder="Edad" />
                </div>
                <div style="margin-top:25px;">
                    <button id="btn-atras" type="button" onclick="preguntaAnterior()"
                        style="display: none;">Atrás</button>
                    <button type="button" id="btn-siguiente" onclick="siguientePregunta()">Siguiente</button>
                </div>

            </div>

            <script>
            let preguntaActual = 1;

            function siguientePregunta() {
                const preguntaActualDiv = document.getElementById(`pregunta${preguntaActual}`);
                preguntaActualDiv.style.display = "none";

                preguntaActual++;
                const siguientePreguntaDiv = document.getElementById(`pregunta${preguntaActual}`);
                siguientePreguntaDiv.style.display = "block";

                // Mostrar/ocultar los botones según corresponda
                const btnAtras = document.getElementById("btn-atras");
                if (preguntaActual > 1) {
                    btnAtras.style.display = "inline-block";
                } else {
                    btnAtras.style.display = "none";
                }

                const btnSiguiente = document.getElementById("btn-siguiente");
                if (preguntaActual === 6) {
                    btnSiguiente.style.display = "none"; // Ocultar el botón de "Siguiente" en la última pregunta
                } else {
                    btnSiguiente.style.display = "inline-block";
                }
            }

            function preguntaAnterior() {
                const preguntaActualDiv = document.getElementById(`pregunta${preguntaActual}`);
                preguntaActualDiv.style.display = "none";

                preguntaActual--;
                const preguntaAnteriorDiv = document.getElementById(`pregunta${preguntaActual}`);
                preguntaAnteriorDiv.style.display = "block";

                // Mostrar/ocultar los botones según corresponda
                const btnAtras = document.getElementById("btn-atras");
                if (preguntaActual > 1) {
                    btnAtras.style.display = "inline-block";
                } else {
                    btnAtras.style.display = "none"; // Ocultar el botón de "Atrás" en la primera pregunta
                }

                const btnSiguiente = document.getElementById("btn-siguiente");
                if (preguntaActual < 6) {
                    btnSiguiente.style.display = "inline-block";
                } else {
                    btnSiguiente.style.display = "none"; // Ocultar el botón de "Siguiente" en la última pregunta
                }
            }

            function mostrarLada() {
                var paisSeleccionado = document.getElementById("pais").value;
                var lada = obtenerLada(paisSeleccionado);
                document.getElementById("telefono").value = lada;
            }

            function obtenerLada(pais) {
                switch (pais) {
                    case "Argentina":
                        return "+54 ";
                    case "Bolivia":
                        return "+591 ";
                    case "Brasil":
                        return "+55 ";
                    case "Chile":
                        return "+56 ";
                    case "Colombia":
                        return "+57 ";
                    case "Costa Rica":
                        return "+506 ";
                    case "Cuba":
                        return "+53 ";
                    case "Ecuador":
                        return "+593 ";
                    case "El Salvador":
                        return "+503 ";
                    case "Guatemala":
                        return "+502 ";
                    case "Haití":
                        return "+509 ";
                    case "Honduras":
                        return "+504 ";
                    case "México":
                        return "+52 ";
                    case "Nicaragua":
                        return "+505 ";
                    case "Panamá":
                        return "+507 ";
                    case "Paraguay":
                        return "+595 ";
                    case "Perú":
                        return "+51";
                    case "República Dominicana":
                        return "+1-809 "; // República Dominicana tiene varias ladas, aquí se incluyen algunas
                    case "Uruguay":
                        return "+598 ";
                    case "Venezuela":
                        return "+58 ";
                    case "Puerto Rico":
                        return "+1-787 "; // Puerto Rico tiene varias ladas, aquí se incluyen algunas
                    case "Guadalupe":
                        return "+590 "; // Lada para Guadalupe (territorio de ultramar de Francia)
                    case "Guayana Francesa":
                        return "+594 "; // Lada para Guayana Francesa (territorio de ultramar de Francia)
                    default:
                        return ""; // En caso de país no seleccionado o sin lada asignada
                }
            }

            function limitarDigitos() {
                var telefonoInput = document.getElementById("telefono");
                var maxDigitos = 15;
                telefonoInput.value = telefonoInput.value.slice(0, maxDigitos);
            }
            document.addEventListener("DOMContentLoaded", function() {
                validateForm();
            });
            document.querySelectorAll(".form input, .form select").forEach(input => {
                input.addEventListener("input", function() {
                    validateForm();
                });
            });

            function validateForm() {
                const inputs = document.querySelectorAll(".form input, .form select");
                const signUpButton = document.getElementById("signUp");

                // Check if all inputs have some value
                const allInputsFilled = Array.from(inputs).every(input => {
                    return input.tagName === "SELECT" ? input.value !== "" : input.value.trim() !== "";
                });

                // Show or hide the button based on the validation result
                if (allInputsFilled) {
                    signUpButton.classList.add("show-button");
                } else {
                    signUpButton.classList.remove("show-button");
                }
            }
            </script>
            <style>
            #signUp.show-button {
                display: block;
                opacity: 1;
                transform: translateY(0);
            }
            </style>

            </form>
        </div>
        <style>
        .overlay-image {
            width: 400px;
            height: 600px;
            object-fit: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Centrar la imagen tanto horizontal como verticalmente */
        }

        .overlay-content h1,
        .overlay-content p,
        .overlay-content button {
            position: relative;
            /* Volvemos a la posición relativa para evitar el sombreado */
            display: block;
            /* Aseguramos que sean bloques para que ocupen el ancho completo */
        }

        .overlay-content h1 {
            margin-top: 70px;
            /* Agregamos un margen inferior al h1 */
            text-shadow: 4px 4px 4px black;
            /* Agregamos sombreado al texto del h1 */
            font-size: 20px;
        }

        .overlay-content p {
            margin-bottom: 5px;
            /* Agregamos un margen inferior al p */
            text-shadow: 4px 4px 4px black;
            /* Agregamos sombreado al texto del p */
        }

        .overlay-content button {
            margin-top: 10px;
            /* Agregamos un margen superior al botón */
            text-shadow: 2px 2px 4px black;
            /* Agregamos sombreado al texto del botón */
        }
        </style>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left overlay-content">
                    <img class="overlay-image"
                        src="https://firebasestorage.googleapis.com/v0/b/miigrup.appspot.com/o/Miigrup.png?alt=media&token=6e64ba6d-a930-4b12-bb24-d38ca108dcc1">
                    <h1 id="textoPregunta">Responde unas Breves Preguntas</h1>

                </div>
                <div class="overlay-panel overlay-right overlay-content">
                    <div>
                        <img class="overlay-image"
                            src="https://firebasestorage.googleapis.com/v0/b/miigrup.appspot.com/o/Miigrup.png?alt=media&token=6e64ba6d-a930-4b12-bb24-d38ca108dcc1">
                    </div> <br>
                    <h1>Bienvenid@ al sistema automatizado de trámites.</h1>
                    <p>A continuación responderas algunas preguntas con el fin de perfilar tu situación
                        Y que el sistema proceda a iniciar su tramite legal.</p>
                    <button type="submit" class="ghost" id="signUp" onclick="datos()">Continuar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
function validarALIEN() {
    var numeroAlienInput = document.getElementById('numeroAlien');
    var siguienteBtn = document.getElementById('siguienteBtn');
    var numeroAlienHidden = document.getElementById('numeroAlienHidden');

    // Verificar si el valor del input contiene algún número
    if (numeroAlienInput.value === 10) {
        // Mostrar el botón "Siguiente" si se ingresó un número
        siguienteBtn.style.display = 'block';

        // Guardar el valor ingresado en el campo oculto
        numeroAlienHidden.value = numeroAlienInput.value;
    } else {
        // Ocultar el botón "Siguiente" si no se ingresó ningún número
        siguienteBtn.style.display = 'none';

        // Limpiar el valor del campo oculto
        numeroAlienHidden.value = '';
    }
}
let origen1 = '';

let tieneNumeroAlien1 = '';

function guardarOrigen(opcion) {
    origen1 = opcion;
    console.log('Origen seleccionado:', origen1);

    // Actualizar el valor del campo oculto con el origen seleccionado
    document.getElementById('origen').value = origen;
}


function contactar1() {
    tieneNumeroAlien1 = 'no';
    console.log('¿Tienes número de alien?:', tieneNumeroAlien1);

    // Actualizar el valor del campo oculto con la opción seleccionada
    document.getElementById('tieneNumeroAlien').value = tieneNumeroAlien1;
}

function contactar2() {
    tieneNumeroAlien1 = 'si';
    console.log('¿Tienes número de alien?:', tieneNumeroAlien1);

    // Actualizar el valor del campo oculto con la opción seleccionada
    document.getElementById('tieneNumeroAlien').value = tieneNumeroAlien1;
}

function finalizarProcesoNObtn() {
    var MAS12 = document.getElementById('MAS12Input').value;
    var MENOS12 = document.getElementById('MENOS12Input').value;

    // Actualizar los valores de los campos ocultos con los números ingresados
    document.getElementById('MAS12').value = MAS12;
    document.getElementById('MENOS12').value = MENOS12;
    console.log("MAS12:", MAS12); // Agrega este log para verificar el valor
    console.log("MENOS12:", MENOS12);
    // Enviar datos al controlador mediante una petición AJAX (usando jQuery).
    // Asegúrate de incluir jQuery en tu proyecto para que esto funcione.

    var formData = new FormData();
    formData.append("_token", "{{ csrf_token() }}");
    formData.append("origen", origen1);
    formData.append("familia1", gente);
    formData.append("mas", MAS12);
    formData.append("menos", MENOS12);
    formData.append("motivo", motivo);
    formData.append("tieneNumeroAlien", tieneNumeroAlien);
    formData.append("numeroAlien", numeroAlien);
    formData.append("tieneNumeroAlien", tieneNumeroAlien1);
    formData.append("nombre", document.getElementsByName('nombre')[0].value);
    formData.append("apellido1", document.getElementsByName('apellido1')[0].value);
    formData.append("email", document.getElementsByName('email')[0].value);
    formData.append("pais", document.getElementsByName('pais')[0].value);
    formData.append("edad", document.getElementsByName('edad')[0].value);
    formData.append("telefono", document.getElementsByName('telefono')[0].value);

    // Agregar los archivos solo si están presentes
    var copiaPasaporteInput = document.getElementById('copiaPasaporte');
    if (copiaPasaporteInput.files.length > 0) {
        formData.append("copiaPasaporte", copiaPasaporteInput.files[0]);
    }

    var copiaVisaInput = document.getElementById('copiaVisa');
    if (copiaVisaInput.files.length > 0) {
        formData.append("copiaVisa", copiaVisaInput.files[0]);
    }

    var fotoEnBlancoInput = document.getElementById('fotoEnBlanco');
    if (fotoEnBlancoInput.files.length > 0) {
        formData.append("fotoEnBlanco", fotoEnBlancoInput.files[0]);
    }

    //console.log("Data:", formData); /// Imprimir los datos a enviar en la consola

    $.ajax({
        url: "https://miigrup.com/intranet/public/api/aspirantes", // URL de la API para crear un aspirante
        type: "POST", // Tipo de petición: POST
        data: formData, 
        processData: false, // No procesar los datos del formData
        contentType: false, // No configurar el tipo de contenido
        headers: {
            // Agrega el token CSRF si es necesario para proteger contra ataques CSRF
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Aquí puedes manejar la respuesta del servidor si es necesario.
            // console.log("Respuesta del servidor:", JSON.stringify(response));
            // alert("Datos enviados correctamente.");
        },
        error: function(error) {
            // console.log("Respuesta del servidor:", JSON.stringify(error));
            // alert("Error al enviar los datos.");
        }
    });

}

function finalizarProcesoNO() {
    document.getElementById('finalizarBtn').style.display = 'none';
    document.getElementById('preguntaAlien').style.display = 'none';




}
// ... Código previo ...
function actualizarNombreArchivo(inputId) {
    const fileInput = document.getElementById(inputId);
    const label = fileInput.nextElementSibling;
    const labelSpan = label.querySelector('.file-label-text');

    const fileName = fileInput.files[0]?.name || 'Seleccionar archivo';
    labelSpan.textContent = fileName;
}

function mostrarCamposDeCarga() {
    document.getElementById('inputContainer').style.display = 'none';
    document.getElementById('camposCarga').style.display = 'none';
    document.getElementById('motivoContainer').style.display = 'block';
    document.getElementById('numeroAlien').classList.add('oculto');
    document.getElementById('N').classList.add('oculto');
    document.getElementById('siguienteBtn').classList.add('oculto');
    document.getElementById('atras4').style.display = 'none';



}

function validarCamposDeCarga() {
    const copiaPasaporte = document.getElementById('copiaPasaporte').files.length;
    const copiaVisa = document.getElementById('copiaVisa').files.length;
    const fotoEnBlanco = document.getElementById('fotoEnBlanco').files.length;

    if (copiaPasaporte > 0) {
        document.getElementById('tramite').style.display = 'none';
        document.getElementById('motivoContainer').style.display = 'block';
        document.getElementById('finalizarBtn').style.display = 'none';
        validarCamposDeCarga1();
    } else {
        document.getElementById('motivoContainer').style.display = 'none';
        document.getElementById('finalizarBtn').style.display = 'none';
    }
}

document.getElementById('motivoSelect').addEventListener('change', function() {
    const motivoSelect = this.value;
    if (motivoSelect !== "") {
        document.getElementById('finalizarBtn').style.display = 'block';
    } else {
        document.getElementById('finalizarBtn').style.display = 'none';
    }
});

function finalizarProceso() {
    const motivoSelect = document.getElementById('motivoSelect').value;

    // Aquí puedes realizar acciones adicionales cuando se finalice el proceso,
    // como mostrar un mensaje de éxito, enviar datos al servidor, etc.

    alert('Proceso finalizado con éxito');
    // finalizarProceso1();


}
</script>


<script>
function mostrarPreguntaAlien(opcion) {
    if (opcion === 'Frontera') {
        document.getElementById('textoPregunta').innerText = 'ASILO DEFENSIVO';
        document.getElementById('FA').style.display = 'none';
        document.getElementById('preguntaAlien').style.display = 'block';

    } else {
        
        document.getElementById('motivoContainer').style.display = 'block'; 
document.getElementById('FA').style.display = 'none';
    }
}

function mostrarSweetAlert() {
    // Mostrar Sweet Alert de carga
    Swal.fire({
        title: 'Nuestro robot está analizando tu caso',
        icon: 'info',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        showConfirmButton: false,
        timer: 5000 // Duración del mensaje de carga en milisegundos (2 segundos en este caso)
    }).then(function() {
       
        // Después de mostrar el Sweet Alert, realizar cambios en la página
        document.getElementById('textoPregunta').innerText =
            'Estás a un paso de Migrar! Felicidades, tu Asilo es AFIRMATIVO y tiene un 93% de ser aprobado';
        document.getElementById('FA').style.display = 'none';
        document.getElementById('inputContainer').style.display = 'none';
        document.getElementById('camposCarga').style.display = 'block';
        document.getElementById('motivoContainer').style.display = 'none';
        document.getElementById('S').style.visibility = 'hidden';
        document.getElementById('N').classList.add('oculto');
 confetti();
        
    });
}

function contactar() {
    document.getElementById('textoPregunta').innerText =
        'Iniciaremos el trámite de tu asilo, a tu correo electrónico registrado te llegara el siguiente paso.';
    //    document.getElementById('resultado').style.display = 'block';
    document.getElementById('S').classList.add('oculto');
}

function mostrarInput() {
    document.getElementById('inputContainer').style.display = 'block';
    document.getElementById('FA').classList.add('oculto');
    document.getElementById('preguntaAlien').style.display = 'none';
}

function validarNumero() {
    const numeroAlienInput = document.getElementById('numeroAlien');
    const siguienteBtn = document.getElementById('siguienteBtn');
    if (numeroAlienInput.value.length !== '') {
        siguienteBtn.style.display = 'block';
    } else {
        siguienteBtn.style.display = 'none';
    }
}

function validarNumero5() {
    const numeroAlienInput = document.getElementById('numeroAlien');
    const siguienteBtn = document.getElementById('siguienteBtn');
    if (numeroAlienInput.value.length === 10) {
        siguienteBtn.style.display = 'block';
    } else {
        siguienteBtn.style.display = 'block';
    }
}

function siguiente() {
    const numeroAlienInput = document.getElementById('numeroAlien').value;
    // Aquí puedes hacer algo con el número de alien ingresado, si es necesario.
    // Por ejemplo, mostrar un mensaje de éxito, etc.
    document.getElementById('resultado').innerText = 'Número de alien ingresado: ' + numeroAlienInput;
    document.getElementById('resultado').style.display = 'block';
}
</script>
<script>
document.getElementById('signUp').addEventListener('click', function(event) {
    event.preventDefault();
    // validateForm();
});
/*
function validateForm() {
    const inputs = document.getElementsByTagName('input');
    let isValid = true;

    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() === '') {
            inputs[i].style.border = '2px solid red';
            isValid = false;
        } else {
            inputs[i].style.border = '2px solid green';
        }
    }

    if (isValid) {
        // Aquí puedes enviar el formulario o realizar alguna acción si todos los campos son válidos.
        // Por ejemplo, puedes usar AJAX para enviar los datos al servidor.
        alert('Formulario válido. Puedes continuar.');
       
    } else {
        alert('Por favor, completa todos los campos obligatorios.'); return;
    }
}*/
</script>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script>