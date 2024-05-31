<?php

  session_start();

  //abrindo o arquivo e apenas escrevendo 'a'
  $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

  //estamos trabalhando na montagme do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  //implode('#', $_POST);

  $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; 

  //escrevendo o arquivo
  fwrite($arquivo, $texto);

  //fechando o arquivo
  fclose($arquivo);

  //echo $texto;
  header('Location: abrir_chamado.php')

?>