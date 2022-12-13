<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:00
  from '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/element.hook_form_content.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7b44fe200_66752464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc33b1f3232e44ce60a383c6500b7c69778f1047' => 
    array (
      0 => '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/element.hook_form_content.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7b44fe200_66752464 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Bring in Tab Content for plugin hooks. -->
<?php if ($_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value, 'tabfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tabfile']->value) {
?>
  	  <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tabfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
