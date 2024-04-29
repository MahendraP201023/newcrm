<?php
/* Smarty version 4.3.2, created on 2024-04-17 09:47:14
  from 'C:\wamp64\www\vtiger8\layouts\v7\modules\Documents\partials\Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661f9aa2c3e283_56355607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0df3d766f6bc09c90c93ff696fbde45c7d93590' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger8\\layouts\\v7\\modules\\Documents\\partials\\Menubar.tpl',
      1 => 1693558650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661f9aa2c3e283_56355607 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['REQ']->value['view'] == 'Detail') {?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }
}
}
