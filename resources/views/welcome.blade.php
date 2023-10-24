<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Bienvenido a MyCase</title>
</head>
<style>
    /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos generales */
body {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.5;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 20px;
}

h1, h2, h3 {
    margin-bottom: 20px;
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
}

/* Estilos de la barra de navegación */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

.logo {
    font-size: 24px;
    font-weight: 700;
}

.menu li {
    display: inline-block;
    margin-left: 20px;
}

.menu li a {
    color: #fff;
}

/* Estilos del hero */
.hero {
    background-image: url('imagen-hero.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    color: #fff;
    padding: 100px 0;
}

.hero h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background-color: #fff;
    color: #333;
    padding: 10px 20px;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: 700;
}

/* Estilos de la sección "Sobre Nosotros" */
.about {
    background-color: #f9f9f9;
    padding: 100px 0;
    text-align: center;
}

.about h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.about p {
    font-size: 18px;
    margin-bottom: 30px;
}

/* Estilos del footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

footer p {
    font-size: 14px;
}

</style>
<body>
    <header>
        <nav>
            <div class="container">
                <h1 class="logo">MyCase</h1>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Bienvenido a MyCase</h2>
            <p>Abogados que ofrecen servicios legales de calidad</p>
            <a href="#" class="btn">Contactar</a>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h3>Sobre Nosotros</h3>
            <p>MyCase es una empresa de abogados comprometida en ofrecer servicios legales de alta calidad a nuestros clientes. Nuestro equipo de profesionales altamente capacitados está listo para ayudarte en tus casos legales.</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 MyCase. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
