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
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
    </section>
</main>

<?php include('../include/footer.php'); ?>