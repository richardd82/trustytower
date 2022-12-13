<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:58:27
  from '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.gui_message.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be793007ed0_91220823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d797877cc9671e41961314927c16e79d4ec768' => 
    array (
      0 => '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.gui_message.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be793007ed0_91220823 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)) {?>
<div id="gui_message">
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])) {?>
  <div class="error" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
">
	<ul>
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
  </div>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'])) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'], 'notice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
?>
  	<div class="success" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</div>
<?php }?>
<noscript>
	<div id="gui_message">
		<div class="error" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
">
		<ul>
    		<li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['error_js_required'];?>
</li>
    	</ul>
    	</div>
    </div>
</noscript><?php }
}
