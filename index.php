<?php

/*
    PHP é renderização no servidor
    assim, ele renderiza toda a página no servidor antes de enviar pro cliente
    e o php nao executa nenhum código no cliente
    executar código no cliente, quem faz é o JS
*/

// $private_key = '9a8sd090a8sd2kj9ujsjdj';
$private_key = '9a8sd090a8sd2kj9ujsjdj';

function imprimeChavePublica($private_key) {
    if($private_key == '9a8sd090a8sd2kj9ujsjdj')
        return 'Chave Pública: ' . $private_key;
    return false;
}

$public_key = imprimeChavePublica($private_key);

echo 'Chave pública: ' . $public_key;
print_r($public_key);

$array = array("Volvo", "BMW", "Toyota");

// echo nao consegue imprimir array, apenas variavel normal primitiva
// echo $array;

// pra imprimir array, usar print_r
// print_r($array);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Home</title>
</head>

<body id="main-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-style">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <section>
            <div class="jumbotron">
                <h1 class="display-4">Hello, world! Welcome!</h1>
                <p class="lead">Sua chave pública é: <?= $public_key ?></p>
                <p class="lead">Outra forma de imprimir na tela com echo: <?php echo $public_key ?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <a class="btn btn-success btn-lg" href="#" role="button">Ativa estilo diferenciado</a>
                <a id="btnRemoveStyle"class="btn btn-secondary btn-lg" href="#" role="button">Desativa estilos do Body</a>
            </div>
        </section>
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/700/300?v=1" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/700/300?v=2" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/700/300?v=3" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </section>
        <section>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </section>
        <section>
            <div class="row text-center">
                <?php for($i = 0; $i < 4; $i++) : ?>
                    <div class="card col-lg-4 col-md-6 col-12 m-2 shadow-lg" style="width: 18rem;">
                        <img class="card-img-top" src="https://picsum.photos/700/300?v=<?= $i ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div>
                <nav class="shadow-lg" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            </div>
        </section>
    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Business</a></li>
                    <li><a class="text-muted" href="#">Education</a></li>
                    <li><a class="text-muted" href="#">Government</a></li>
                    <li><a class="text-muted" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>

    <!-- bibliotecas para o booststrap funcionar -->
    <!-- popper: biblioteca requerida pelo boostrap para funcionalidades dos tooltips e popovers -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        console.log('Hello World JS!')

        let var1 = 4
        var var2 = 10
        const VAR3 = 2

        var resultado = var1 * (var2 + VAR3)

        console.log('Resultado', resultado)


        config_pt_br_json = {
            style: 'currency',
            currency: 'BRL',
            isFloat: true
        }

        function imprimeTextoComNumeroMoedaReal(texto, numero) {
            resultado = texto + ' ' + numero.toLocaleString('pt-BR', config_pt_br_json);
            console.log(resultado)
            return resultado
        }

        imprimeTextoComNumeroMoedaReal('Vende-se escultura: os pratos lamentaram os tigres tristes:', 98)

        // vai escutar o button
        btnActiveNewStyleBody = document.querySelector('#main-container > main > section:nth-child(1) > div > a')
        btnActiveNewStyleBody.addEventListener("click", changeBackgroundColor)

        function changeBackgroundColor(color = '#F00') {
            document.getElementById("main-container").classList += " bg-danger"
            document.getElementById("main-container").classList.toggle("text-warning")
            console.log('Entrou!!')
        }


        $(document).ready(function() {
            console.log($(".card"))

            $(".card .btn").click(function() {
                event.preventDefault()
                console.log($(this).parents()[1])
                $(this).parents()[1].classList.add('d-none');
            });
        });

        $(document).ready(function() {
            $("#btnRemoveStyle").click(function() {
                $('#main-container').removeClass()
                console.log('FOI! Remove classes.')
            });
        });
    </script>
</body>

</html>