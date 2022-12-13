<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.errors.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a76c73_32359498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a734632e018d265f4caf90fe75869af043706af9' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.errors.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a76c73_32359498 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])) {?>
<div data-alert class="alert-box alert">
   <?php echo $_smarty_tpl->tpl_vars['LANG']->value['gui_message']['errors_detected'];?>

   <ul class="nomarg no-bullet">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <a href="#" class="close">&times;</a>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'])) {?>
<div data-alert class="alert-box success">
   <ul class="nomarg no-bullet">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'], 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <a href="#" class="close">&times;</a>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['info'])) {?>
<div data-alert class="alert-box">
   <ul class="nomarg no-bullet">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['info'], 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <a href="#" class="close">&times;</a>
</div>
<?php }?>
<noscript>
   <div data-alert class="alert-box alert">
   <ul class="nomarg no-bullet">
      <li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['error_js_required'];?>
</li>
   </ul>
   <a href="#" class="close">&times;</a>
</div>
</noscript><?php }
}
