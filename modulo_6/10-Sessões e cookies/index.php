<?php

session_start();
//$_SESSION['nome'] = 'Leandro';
//$_SESSION['idade'] = '32';

setcookie('nome' ,'Leandro', time() - (60+60+24),'/');  // Para destruir um cookie coloca da forma,
														//negativa o que era mais agora e menos.
echo $_COOKIE['nome'];  

?>