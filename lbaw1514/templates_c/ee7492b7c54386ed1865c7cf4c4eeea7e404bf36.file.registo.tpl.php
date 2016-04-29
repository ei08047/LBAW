<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 17:05:47
         compiled from "/opt/lbaw/lbaw1514/public_html/proto/templates/utilizadores/registo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127040792557222675889f25-86061604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee7492b7c54386ed1865c7cf4c4eeea7e404bf36' => 
    array (
      0 => '/opt/lbaw/lbaw1514/public_html/proto/templates/utilizadores/registo.tpl',
      1 => 1461855920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127040792557222675889f25-86061604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5722267594b0b9_00263591',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5722267594b0b9_00263591')) {function content_5722267594b0b9_00263591($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/utilizadores/registo.php" method="post" enctype="multipart/form-data">
    <label>Email:<br> 
      <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
"> 
      <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['email'];?>
</span>
    </label>
    <br>
    <label>dob:<br> 
      <input type="text" name="dob" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['dob'];?>
">
    </label>
    <br>
    <label>Password:<br> 
      <input type="password" name="password" value="">
    </label>
    <br>
      <input type="submit" value="Register">
  </form>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
