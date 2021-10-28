<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotriz Prueba</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('libreria/toastr/toastr.scss') }}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="{{ asset('libreria/toastr/toastr.js') }}"></script>
    <script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.css') }}">
    <script href="js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Navbar hecho en bootstrap-->
    <nav class="navbar navbar-expand-sm fuente-nav">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" style="color:black" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-center navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Nosotros </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> Servicios </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onClick="formulario1()">Arrendamiento</a></li>
                        <li><a class="dropdown-item" onClick="formulario2()">Estrena tu auto</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Calculadora de pagos </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#"> Contacto </a>
                </li> 
            </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER by Sebastián Fonseca Flores-->
    <div class="automotriz">
        <header>
            <div class="overlay">
                <h1>Sebastián</h1>
                <h3>SIEMPRE HABRA UNA NUEVA AVENTURA POR VIVIRSE</h3>
                <img src="" alt="">
                <br>
                <button onClick="formulario2()">ESTRENA TU AUTO</button>
            </div>
        </header>
    </div>

    <br><br><br>

    <div class="container-fluid iconos-seccion scroll-content fadeTop">
        <div class="row">
            <br><br>
            <h2>PORQUE</h2> 
            <h3>NOSOTROS</h3> <br><br><br>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 scroll-content fadeTop">
                <div class="text-center">
                    <img loading="lazy" src="/img/icono1.png" alt=""/>
                </div>
                <h4> Lider en el mercado regional </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Eos repellat enim odio eum, nemo sequi numquam assumenda nulla obcaecati veniam possimus. 
                </p>
            </div>
            <div class="col-md-3 col-sm-6 scroll-content fadeTop">
                <div class="text-center">
                    <img loading="lazy" src="/img/icono2.png" alt=""/>
                </div>
                <h4> Último modelos </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Eos repellat enim odio eum, nemo sequi numquam assumenda nulla obcaecati veniam possimus. 
                </p>
            </div>
            <div class="col-md-3 col-sm-6 scroll-content fadeTop">
                <div class="text-center">
                    <img loading="lazy" src="/img/icono3.png" alt=""/>
                </div>
                <h4> Autos hibridos, electricos </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Eos repellat enim odio eum, nemo sequi numquam assumenda nulla obcaecati veniam possimus. 
                </p>
            </div>
            <div class="col-md-3 col-sm-6 scroll-content fadeTop">
                <div class="text-center">
                    <img loading="lazy" src="/img/icono4.png" alt=""/>
                </div>
                <h4> Mejores Ofertas</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Eos repellat enim odio eum, nemo sequi numquam assumenda nulla obcaecati veniam possimus. 
                </p>
            </div>
        </div>
        <br><br><br>
    </div>
    <br><br><br><br>
    <div class="container-fluid tercera-seccion">
        <h2>CONTRATA AQUÍ</h2>
        <button onClick="formulario1()">ARRENDAMIENTO</button>
    </div>

    <div class="container segunda-seccion text-center">
        <div class="row">
            <div class="col">
                <br><br class="hide"><br class="hide">
                <h2>LAS</h2>
                <h2>MEJORES</h2>
                <h2>OFERTAS</h2>
            </div>
            <div class="col" style="background-color:white;display:flex;align-items:left;">
                <img loading="lazy" src="/img/oferta.png" alt="">
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="six">
        <div class="row">
            <div class="col">
                <img loading="lazy" src="/img/car.png" alt="">
            </div>
            <div class="col">
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit sapiente consectetur iure. Laborum iusto nostrum numquam beatae atque quia, enim id sint!
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-automotriz text-center">
        <br><br><br>
        <div>
			<a href="#" target="_blank"><img loading="lazy" src="{{ asset('img/facebook.png') }}" class="ta-i"></a>
			<a href="#" target="_blank"><img loading="lazy" src="{{ asset('img/youtube.png') }}" class="ta-i" style="margin-left: 30px;"></a>
			<a href="#" target="_blank"><img loading="lazy" src="{{ asset('img/instagram.png') }}" class="ta-i" style="margin-left: 30px;"></a>
        </div>
        <br>
            <a href="#">Aviso de Privacidad  </a> | <a href="#">Sucursales </a> | <a href="#">Términos y Condiciones</a>
            <br><br>
            <p style="color:var(--obscuro);">Sebastián © <span id="year"></span> - Todos los derechos reservados </p>
            <br>
        </div>
    </div>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

    <script>
    function formulario1(){
    Swal.fire({
    title: '<strong>Contacta al vendedor</strong>',
    icon: 'info',
    html:
    '<b class="label-sebs">Nombre</b><br><input id="nombre" class="modal-sebs" placeholder="Nombre"><br>' +
    '<b class="label-sebs">RFC</b><br><input id="RFC" class="modal-sebs" placeholder="RFC y/o CURP"><br>'+
    '<b class="label-sebs">Nacionalidad</b><br><input id="nacionalidad" class="modal-sebs" placeholder="Nacionalidad"><br>'+
    '<b class="label-sebs">Domicilio</b><br><input id="domicilio" class="modal-sebs" placeholder="Calle, Núm"><br>'+
    '<b class="label-sebs">C.P.</b><br><input id="cp" class="modal-sebs" type="number" placeholder="00000" max-length="5"><br>'+
    '<b class="label-sebs">Teléfono</b><br><input id="telefono" class="modal-sebs" type="number" placeholder="000 000 0000"><br>'+
    '<b class="label-sebs">Correo</b><br><input id="correo" class="modal-sebs" type="email" placeholder="correo@ejemplo.com"><br>'+
    '<b class="label-sebs">Día</b><br><input id="dia" class="modal-sebs" type="date"><br>'+
    '<b class="label-sebs">Tiempo de Rentar</b><br><input id="time" class="modal-sebs" type="time"><br>',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    showCancelButton: true,
    confirmButtonColor: '#4CB6D9',
    confirmButtonText: 'Solicitar',
    cancelButtonColor: '#aaa',
    cancelButtonText: 'Cancelar'
    })
    }

    function formulario2(){
        Swal.fire(
        'Modelos Disponibles',
        'Selecciona',
        'info'
        )
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>