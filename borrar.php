<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
					$_SESSION = array();
					$_REQUEST = array();
					$_POST = array();
					$_GET = array();
					// Borra la cookie que almacena la sesión
					
					// Borra la cookie que almacena la sesión
					if(isset($_COOKIE[session_name()])) {
						setcookie(session_name(), '', time() - 42000, '/');
					}
			

					// Finalmente, destruye la sesión
					session_destroy();
					 //echo "<p></p>";
        //echo "Todo correcto, Espere un momento y será redireccionado...DESCONEXION";
					header("location:index.php");
?>