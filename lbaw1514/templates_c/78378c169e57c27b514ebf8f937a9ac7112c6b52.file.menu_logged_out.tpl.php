<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 18:58:32
         compiled from "/opt/lbaw/lbaw1514/public_html/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1794187591571a2fc2576ab7-21871789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78378c169e57c27b514ebf8f937a9ac7112c6b52' => 
    array (
      0 => '/opt/lbaw/lbaw1514/public_html/proto/templates/common/menu_logged_out.tpl',
      1 => 1461862692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1794187591571a2fc2576ab7-21871789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a2fc257cb78_92641349',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a2fc257cb78_92641349')) {function content_571a2fc257cb78_92641349($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/utilizadores/registo.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/utilizadores/login.php" method="post">
  <input type="text" placeholder="email" name="email">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value="submit">
</form>
<?php }} ?>
