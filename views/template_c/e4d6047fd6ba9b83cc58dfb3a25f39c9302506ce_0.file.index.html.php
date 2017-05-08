<?php /* Smarty version 3.1.23, created on 2017-05-08 07:11:16
         compiled from "views/template/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:7468970659101a14c69d46_32142352%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d6047fd6ba9b83cc58dfb3a25f39c9302506ce' => 
    array (
      0 => 'views/template/index.html',
      1 => 1494227380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7468970659101a14c69d46_32142352',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_59101a14c7d758_39314381',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59101a14c7d758_39314381')) {
function content_59101a14c7d758_39314381 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '7468970659101a14c69d46_32142352';
?>
<!doctype html>
<html lang="en">
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('navigation.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="content">
		<div id="err_cont">
			<a href="javascript:;">OK</a>
		</div>

		<div class="content-panel">
			<?php echo $_smarty_tpl->getSubTemplate ('content.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
	</div>
	<div class="waiting">
		<div class="wait-left">
			<div class="loading"></div>
			<div class="load-font">
				<div class="wait-font">
					Scanning
				</div>
				<div class="jumppoint">
					<span id="p1">.</span><span id="p2">.</span><span id="p3">.</span>
				</div>
			</div>
		</div>
		<div class="div-line"></div>
		<div class="wait-right">
			<div class="timecounter">
				<span id="h"></span>:<span id="m"></span>:<span id="s"></span>:<span id="ms"></span>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>