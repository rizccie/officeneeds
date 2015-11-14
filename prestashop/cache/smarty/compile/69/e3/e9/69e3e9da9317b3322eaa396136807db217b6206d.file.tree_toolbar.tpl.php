<?php /* Smarty version Smarty-3.1.19, created on 2015-09-11 13:52:51
         compiled from "C:\xampp\htdocs\prestashop\administrator\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1294255f28f5b030586-11039272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e3e9da9317b3322eaa396136807db217b6206d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\administrator\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1436330600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294255f28f5b030586-11039272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f28f5b03c114_02476703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f28f5b03c114_02476703')) {function content_55f28f5b03c114_02476703($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
