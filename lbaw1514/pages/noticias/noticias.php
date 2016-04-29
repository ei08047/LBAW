<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/noticias.php');
  $smarty->display('common/header.tpl');	
  $smarty->display('noticias/home.tpl');
  $smarty->display('common/footer.tpl');
?>
