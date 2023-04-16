<?php

include_once('helpers/string.php');

echo 'Teste 1: ' .
contains('oi', 'oi minha gente') . ' Teste 2: ' .
contains('oi', 'olá pessoal');

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
    <?php include('include/navbar.php'); ?>
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
                    <?php include 'components/card.php'; ?>
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

    <?php include('include/footer.php'); ?>

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