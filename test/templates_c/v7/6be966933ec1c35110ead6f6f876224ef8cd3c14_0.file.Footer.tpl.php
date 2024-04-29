<?php
/* Smarty version 4.3.2, created on 2024-04-10 08:18:47
  from 'C:\wamp64\www\vtiger8\layouts\v7\modules\PDFMaker\Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66164b67c0e216_88691144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be966933ec1c35110ead6f6f876224ef8cd3c14' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger8\\layouts\\v7\\modules\\PDFMaker\\Footer.tpl',
      1 => 1712737120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66164b67c0e216_88691144 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br><div class="small" style="color: rgb(153, 153, 153);text-align: center;"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo PDFMaker_Version_Helper::$version;?>
 <?php echo vtranslate("COPYRIGHT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("Footer.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
