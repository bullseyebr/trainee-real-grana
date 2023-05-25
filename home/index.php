<?php

include_once('../helpers/string.php');



/*
    PHP é renderização no servidor
    assim, ele renderiza toda a página no servidor antes de enviar pro cliente
    e o php nao executa nenhum código no cliente
    executar código no cliente, quem faz é o JS
*/



$array = array("Volvo", "BMW", "Toyota");

// echo nao consegue imprimir array, apenas variavel normal primitiva
// echo $array;

// pra imprimir array, usar print_r
// print_r($array);


$pageName = 'Home';
$slogan = 'Perdedor não é quem tenta e falha, é quem nem tenta.';
include('../include/head.php');

session_start();

$_SESSION['Logado'] = 'Verdadeiro';

$_SESSION['username'] = 'Vinicius Leo do Leo';
$_SESSION['idade'] = 84;


// print_r($_SESSION);

?>


<?php include('../include/header.php'); ?>
<main class="container">
    <!-- abertura de php para imprimir, usando <\?php e <\?= são equivalentes -->

    <h1 class="mt-2"><?= $pageName ?></h1>
    <h4>Olá <?= $_SESSION['username']; ?></h4>
    <h6><?php echo $slogan; ?></h6>
    <section class="mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/admin/categorias" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/admin/cursos" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>



    </section>
</main>

<?php include('../include/footer.php'); ?>