<?php

	session_start();
	if(isset($_SESSION['nome'])){
		echo $_SESSION['nome'];
		session_destroy();   // Está função destroi tudo que está escrtto no codígo.
}


?>