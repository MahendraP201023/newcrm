<?php
/* Smarty version 4.3.2, created on 2024-04-11 08:41:21
  from 'C:\wamp64\www\vtiger8\layouts\v7\modules\Vtiger\DetailViewFullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6617a231517e12_04857175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fda00f66a3b445367d74943d5dea4f124555ca2' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger8\\layouts\\v7\\modules\\Vtiger\\DetailViewFullContents.tpl',
      1 => 1693558650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617a231517e12_04857175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="detailView" method="POST"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></form>
<?php }
}
