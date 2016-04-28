<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 18:58:55
         compiled from "/opt/lbaw/lbaw1514/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:917893424571a347e213167-68930067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfdba8342246b1c876f3b8fe5ee16128985dfde7' => 
    array (
      0 => '/opt/lbaw/lbaw1514/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1461858783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '917893424571a347e213167-68930067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a347e2af649_75945373',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a347e2af649_75945373')) {function content_571a347e2af649_75945373($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/utilizadores/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
