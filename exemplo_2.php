<?php 

$imagens = scandir("imagens"); //scaneia o diretorio e retorna um array com cada item

$data = array();

foreach ($imagens as $img) { // adiciona a variavel $img para cada intem do array $imagens
	if(!in_array($img, array(".", ".."))){ // NAO(!)pode conter dentro desse array . ou .. execute

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename); //função que retorna informações do arquivo

		//adiciona mais intens ao array, para cada item uma função.

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost:8080/dir/" .str_replace("\\", "/", $filename);

		array_push($data, $info); // salva no array data, as informações obtidas e armazenadas no array $info.

	}
}

echo json_encode($data);

 ?>