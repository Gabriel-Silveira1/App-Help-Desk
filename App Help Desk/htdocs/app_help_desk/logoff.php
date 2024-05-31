<?php

  session_start();

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  //remover indices do array de sessão individualmente
  //unset(nome da variavel sessão['indice'])
  
  //destruir a variavel de sessão completamente, mas não naquela instância, ou seja, se caso o usuário recarregar a página ou tentar novamente por uma outra, ai sim a variavel irá ter deixado de existir
  //session_destroy()
  session_destroy();
  header('Location: index.php');

?>