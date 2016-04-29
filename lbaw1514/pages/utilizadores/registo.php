<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/utilizadores.php');
  
  $smarty->display('utilizadores/registo.tpl');
?>
