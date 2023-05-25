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
include('../include/head.php');

?>


<?php include('../include/header.php'); ?>
<main class="container">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero impedit quo repellendus veritatis dolorum tempora nobis alias nostrum ea sunt incidunt nemo libero fugit fuga, beatae ducimus pariatur voluptatibus id.</p>
    </section>
</main>

<?php include('../include/footer.php'); ?>