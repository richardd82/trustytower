<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.sale_items.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4954771_08838313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b0acc9e0b7942a8a3ffad965d406ee2d079d33' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.sale_items.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4954771_08838313 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PRODUCTS']->value && $_smarty_tpl->tpl_vars['CONFIG']->value['catalogue_sale_mode'] > 0) {?>
<div class="panel" id="box-sale_items">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_saleitems'];?>
</h3>
  <ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	<li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 (<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['saving'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {
echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['saving'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['saving'];
}?>)"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a><br>
	  <?php if (empty($_smarty_tpl->tpl_vars['product']->value['sale_price'])) {?>
    <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

    <?php } else { ?>
    <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
    <?php }?>
	</li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
}
