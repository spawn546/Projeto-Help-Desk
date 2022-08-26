<?php 

	/*session_start();
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	*/
// Remover Indices do array de sessão
//unset()

//destruir a variavel de sessão
	
	session_destroy(); // forçar redirecionamento 
	header('Location:index.php')

		
?>