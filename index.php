<!DOCTYPE html>
<html>
<head>
    <title>Shoe'store | Bienvenido </title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,  initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div id="titulo" class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4">SHOE'STORE</h1>
            <img src="img/Logo.jpg" width="100" height="100">
        </div>
    </header>
    <section>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
            <a class="navbar-brand" href="#">
                <img src="img/Logo.jpg" alt="Shoe'store" width="50" height="50">
            </a>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Mujere</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hombre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Novedades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link">
                        <button type="button" class="btn btn-info">Registrar</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <button type="button" class="btn btn-success">Iniciar Sesion</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <button type="button" class="btn btn-danger">Salir</button>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid"><br>
            <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
            <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
            <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
            <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="display-4 text-center">Productos para Hombres</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="producto ">
                        <img src="img/tennis_1.jpg" class="rounded" alt="tennis_3" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="producto">
                        <img src="img/tennis_2.jpg" class="rounded" alt="tennis_2" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="producto">
                        <img src="img/tennis_3.jpg" class="rounded" alt="tennis_1" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="producto ">
                        <img src="img/tennis_1.jpg" alt="tennis_3" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="producto">
                        <img src="img/tennis_2.jpg" alt="tennis_2" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="producto">
                        <img src="img/tennis_3.jpg" alt="tennis_1" width="300" height="300">
                        <h2>zapatoos negros</h2>
                        <p> 300 pesos</p>
                    </a>
                </div>
            </div>
            <div>
                <p>
                    saegdsddddgafdgffdagdshdsjhfdsan
                    <br>
                    dsajfdbjsabdfnas
                    dsajbfdsaf
                    dsajfhjdnm
                    sdkfkdsnfm
                    <br>
                    sdmfdsnmfds
                    dsjfjdsnmf
                    dfjdshkjfhjdsfn
                    <br>
                    dsjfhkjdsfds
                    dsjfhjdshfs
                    <br>
                    dskjfkjdsf
                    dskjdfhjds
                    <br>
                    sdjhfjsd
                    dsjhfkldskflds
                    dslkfjklds
                    <br>
                    dskfjksdj
                    dlkjfkds
                    <br>
                    dskjflksddsk
                    sdlkfdhjdsnf
                    <br>
                    dsjfkdsl
                    slkfdslkf
                    <br>
                    dskfldsj
                    sdkjf;lds
                    <br>
                    dskgjlkds
                    dsjglkfds
                    fdljgd
                </p>
            </div>
        </div>
    </section>
    <footer id="footer">
        <p>Desarrollado por Bryan Reyes y Alberto Ruelas <?= date('Y') ?></p>
    </footer>
</body>
</html>