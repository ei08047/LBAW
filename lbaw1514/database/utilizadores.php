<?php

  function createUser($email, $password , $dob) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO utilizador (email, password, dataNascimento, papel) VALUES (?, ?, ?, ?)");
    $papel = 'utilizador';
    $stmt->execute(array($email, $password , $dob ,$papel));

    // $stmt->execute(array($email, $dob, sha1($password)));
  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM utilizador 
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, $password));
    //$stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>