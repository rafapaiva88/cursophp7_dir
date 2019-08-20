<?php 

$name = 'imagens';

if (!is_dir($name)){

	mkdir($name);
	echo "diretorio criado com sucesso";
} else {

	rmdir($name);
	echo "diretorio $name já existe, foi removido";
}
 ?>