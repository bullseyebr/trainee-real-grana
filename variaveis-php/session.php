<p>Para ver a lista de todas as variáveis: <a target="_blank" href="https://www.php.net/manual/pt_BR/reserved.variables.php">Variáveis reservadas PHP</a> </p>

<?php

session_start();

// print_r e var_dump também imprime variavel, igual o echo
// mas o echo nao imprime vetorl, pois o echo imprime apenas string (variavel simples)
// echo $_SESSION;

var_dump($_SESSION);
