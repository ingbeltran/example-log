<?php 

require_once ('autoload.php');

Logger::log(
	'Error en el archivo '.__FILE__
	.', en la linea '.__LINE__
	.', en la clase '.__CLASS__
	.', en el metodo'.__METHOD__
);

echo "hola";

throw new Exception("Error Processing Request");
