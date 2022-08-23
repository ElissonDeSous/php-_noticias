<?php
$texto = $_POST['titulo'] .' / '. $_POST['categoria'] .' / '. $_POST['descricao'].PHP_EOL;


$arquivo = fopen('arquivo.n','a');
fwrite($arquivo,$texto);
fclose($arquivo);
header('location:criar.php');

?>