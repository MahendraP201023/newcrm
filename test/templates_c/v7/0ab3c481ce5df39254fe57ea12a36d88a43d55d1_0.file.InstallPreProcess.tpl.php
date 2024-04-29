<?php
/* Smarty version 4.3.2, created on 2024-04-10 05:02:55
  from 'C:\wamp64\www\vtiger_new\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66160f6f1ce043_01646670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab3c481ce5df39254fe57ea12a36d88a43d55d1' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger_new\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66160f6f1ce043_01646670 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
