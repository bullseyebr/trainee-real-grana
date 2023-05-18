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




?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
    $pageName = 'Contato';
    include('../include/head.php');
?>

<body id="main-container">
    <?php include('../include/header.php'); ?>
    <main class="container">
        <h1>Contato</h1>
    </main>

    <?php include('../include/footer.php'); ?>

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