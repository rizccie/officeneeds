<?php /* Smarty version Smarty-3.1.19, created on 2015-09-11 14:09:38
         compiled from "C:\xampp\htdocs\prestashop\administrator\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238155f2934aa8aa10-26658206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6446cc60f27fde2c1f83321a2d638c09426a321' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\administrator\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1436330600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238155f2934aa8aa10-26658206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f2934aa9e2a6_62747942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2934aa9e2a6_62747942')) {function content_55f2934aa9e2a6_62747942($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
