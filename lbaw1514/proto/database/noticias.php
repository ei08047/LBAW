<?php

  function criarNoticia($titulo, $descricao , $data) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO noticia () VALUES (?, )");
    $papel = 'utilizador';
    $stmt->execute(array($email));

    // $stmt->execute(array($email, $dob, sha1($password)));
  }


?>