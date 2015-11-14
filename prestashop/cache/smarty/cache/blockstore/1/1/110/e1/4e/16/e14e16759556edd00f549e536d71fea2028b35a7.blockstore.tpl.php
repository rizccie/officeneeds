<?php /*%%SmartyHeaderCode:378655f29803bd8160-52988327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14e16759556edd00f549e536d71fea2028b35a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1436330600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378655f29803bd8160-52988327',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f29803c26368_13836841',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f29803c26368_13836841')) {function content_55f29803c26368_13836841($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost/prestashop/stores" title="Our stores">
			Our stores
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost/prestashop/stores" title="Our stores">
				<img class="img-responsive" src="http://localhost/prestashop/modules/blockstore/store.jpg" alt="Our stores" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost/prestashop/stores" 
			title="Our stores">
				<span>Discover our stores<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
