<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/noticias.php');
	
  $smarty->display('noticias/home.tpl');
?>
