<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">    
    <title>Contacto</title>
</head>

<body class="fondoBody">

    <header>
        <nav class="navbar navcolor navbar-dark fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-icons blanco">menu</span>
            </button>
            <a class="navbar-brand colorFuenteBlanca" href="../index.html">ABSOLUT</a>

            <a class="material-icons blanco" href="../html/productos.html">shopping_cart</a>

            <div class="collapse navbar-collapse fuenteHamburguesa" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link colorFuenteBlanca " href="../index.html">
                            <span class="material-icons centro">home</span>
                            Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link colorFuenteBlanca" href="productos.html">
                            <span class="material-icons centro">shopping_cart</span>
                            Productos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link colorFuenteBlanca" href="recetas.html">
                            <span class="material-icons centro">local_bar</span>
                            Recetas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link colorFuenteBlanca" href="historia.html">
                            <span class="material-icons centro">import_contacts</span>
                            Historias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link colorFuenteBlanca" href="contacto.html">
                            <span class="material-icons centro">email</span>
                            Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

    <h1 class="text-center margenSuperior">Contacto</h1>

    <!-- formulario -->
    <div class="container formulario margenInferior">
        <form action="#" method="get">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputApellido">Apellido</label>
                    <input type="text" class="form-control" id="inputApellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email </label>
                    <input type="email" class="form-control" id="inputEmail" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
                <label for="inputGenero">Genero</label>
                <select class="form-control" id="inputGenero">
                    <option>Mujer</option>
                    <option>Hombre</option>
                    <option>Otro</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">Acepto recibir información promocional de Absolut*</label>
                </div>
            </div>
            <button type="submit" class="btn botonColor">Registrate</button>
        </form>
    </div>

</main>
   
    <footer class="page-footer colorFooter mt-5">
        <div class="bg-botonColor">
            <div class="container">
                <div class="row py-2 d-flex">
                    <div class="col-md-12 text-center">
                        <a href="https://es-la.facebook.com/AbsolutFanPage/"><span class="material-icons text-white mr-4">facebook</span></a>
                        <a href="https://www.buenosaires.gob.ar/coronavirus"><span class="material-icons text-white mr-4">coronavirus</span></a>
                        <p class="text-white">&copy; Copyright
                            <a href="https://www.absolut.com/ar/" class="text-white">absolutvodka.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>

</html>