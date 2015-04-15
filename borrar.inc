<?php

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

?>