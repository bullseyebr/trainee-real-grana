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


session_start();

$_SESSION['OK'] = 'Sim';

// print_r($_SESSION);
// print_r($_SESSION['Logado']);

// exit;

$pageName = 'Contato';
include('../include/head.php');


?>

<?php include('../include/header.php'); ?>

<main class="container">
    <h1>Contato</h1>
    <h4>Olá <?= $_SESSION['username']; ?></h4>
</main>

<?php include('../include/footer.php'); ?>
