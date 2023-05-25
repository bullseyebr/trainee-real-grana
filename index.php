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

function imprimeChavePublica($private_key)
{
    if ($private_key == '9a8sd090a8sd2kj9ujsjdj')
        return 'Chave Pública: ' . $private_key;
    return false;
}

$public_key = imprimeChavePublica($private_key);






$array = array("Volvo", "BMW", "Toyota");


// debugar seu código para saber o valor das variaveis e o que está acontecendo
// echo 'Chave pública: ' . $public_key;
// print_r($public_key);
// var_dump($array);


// echo nao consegue imprimir array, apenas variavel normal primitiva
// echo $array;

// pra imprimir array, usar print_r
// print_r($array);


$pageName = 'Home';
include('include/head.php');


?>

<?php include('include/header.php'); ?>
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
            <a id="btnRemoveStyle" class="btn btn-secondary btn-lg" href="#" role="button">Desativa estilos do Body</a>
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
            <?php for ($i = 0; $i < 4; $i++) : ?>
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