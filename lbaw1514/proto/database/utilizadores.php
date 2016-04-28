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

//possivelmente nao é necessario
  function getUserProfile($id){
    global $conn;
    $stmt = $conn->prepare("SELECT email, password, dataNascimento 
                            FROM utilizador 
                            WHERE id = ?");
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function updateUserProfile($id, $email, $password, $dataNascimento){
    global $conn;

    if(!empty($email))
    {
      if(!empty($password))
      {
        if(!empty($dataNascimento))
        {
          $sql = "UPDATE utilizador SET email='$email', password='$password', dataNascimento='$dataNascimento' WHERE id='$id' ";
        }
        else
          $sql = "UPDATE utilizador SET email='$email', password='$password' WHERE id='$id' ";
      }
      else
      {
        if(!empty($dataNascimento))
        {
          $sql = "UPDATE utilizador SET email='$email', dataNascimento='$dataNascimento' WHERE id='$id' ";
        }
        else
          $sql = "UPDATE utilizador SET email='$email' WHERE id='$id' ";
      }

    }
    else
    {
      if(!empty($password))
      {
        if(!empty($dataNascimento))
        {
          $sql = "UPDATE utilizador SET password='$password', dataNascimento='$dataNascimento' WHERE id='$id' ";
        }
        else
          $sql = "UPDATE utilizador SET password='$password' WHERE id='$id' ";
      }
      else
      {
        if(!empty($dataNascimento))
        {
          $sql = "UPDATE utilizador SET dataNascimento='$dataNascimento' WHERE id='$id' ";
        }
        else
        {
          echo "nothing to update";
        }
      }
    }

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

  }

?>