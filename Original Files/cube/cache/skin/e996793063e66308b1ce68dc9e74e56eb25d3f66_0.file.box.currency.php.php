<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.currency.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e48fec80_24735825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e996793063e66308b1ce68dc9e74e56eb25d3f66' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.currency.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e48fec80_24735825 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right text-center show-for-medium-up" id="box-currency">
   <?php if (count($_smarty_tpl->tpl_vars['CURRENCIES']->value) > 1) {?>
   <a href="#" data-dropdown="currency-switch" class="button white small" rel="nofollow"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
   <ul id="currency-switch" data-dropdown-content class="f-dropdown">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['currency']->value['code'] !== $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code']) {?>
      <li class="text-left"><a href="<?php echo $_smarty_tpl->tpl_vars['currency']->value['url'];?>
" rel="nofollow"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
)</a></li>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <?php } else { ?>
   	<span class="button white small"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['code'];?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_CURRENCY']->value['symbol_right'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
   <?php }?>
</div><?php }
}
