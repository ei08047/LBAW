<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/utilizadores.php');  

  if (!$_POST['email'] || !$_POST['dob'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/utilizadores/registo.php');
    exit;
  }

  $email = strip_tags($_POST['email']);
  $dob = strip_tags($_POST['dob']);
  $password = $_POST['password'];


  try {
    createUser($email, $password, $dob);
      } catch (PDOException $e) {
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user'.$e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/utilizadores/registo.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
?>
