<p>Para ver a lista de todas as variáveis: <a target="_blank" href="https://www.php.net/manual/pt_BR/reserved.variables.php">Variáveis reservadas PHP</a> </p>

<?php

session_start();

echo 'SERVER<br><br>';
var_dump($_SERVER);
echo "<br><br><br>---------------------------------------------";

echo 'SESSION<br><br>';
var_dump($_SESSION);
echo '<br><br><br>---------------------------------------------';

echo 'COOKIE<br><br>';
var_dump($_COOKIE );
echo '<br><br><br>---------------------------------------------';

echo 'ENV<br><br>';
var_dump($_ENV  );
echo '<br><br><br>---------------------------------------------';

echo 'REQUEST<br><br>';
var_dump($_REQUEST);
echo '<br><br><br>---------------------------------------------';

echo 'GLOBALS<br><br>';
var_dump($GLOBALS);
echo '<br><br><br>---------------------------------------------';

echo 'POST<br><br>';
var_dump($_POST);
echo '<br><br><br>---------------------------------------------';

echo 'GET<br><br>';
var_dump($_GET);
echo '<br><br><br>---------------------------------------------';


