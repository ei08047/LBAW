<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/utilizadores.php');  


        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>EMAIL:</b> ".$_SESSION["email"];
        echo "<br /><b>PASSWORD:</b> ".$_SESSION["password"];
        echo "<br /><b>Year:</b> ".$_SESSION["dataNascimento"];
        echo "</div>"   
   
/*MISSING SUBMIT!?*/

  try {
    updateUserProfile($id, $email, $password, $dataNascimento);
      } catch (PDOException $e) {
    
    $_SESSION['form_values'] = $_PUT;
    header("Location: $BASE_URL" . 'pages/utilizadores/registo.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User profile updated successfully';  
  header("Location: $BASE_URL");

?>
