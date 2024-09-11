<?php
include "total_visitas.php";

function string_aleatoria($tamanho) {
	$conteudo = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";

	for($i=0;$i<$tamanho;$i++) {
		$string .= $conteudo{rand(0,35)};
	}

	return $string;
}

header("Location: index2.html?id=".string_aleatoria(164));
?>
