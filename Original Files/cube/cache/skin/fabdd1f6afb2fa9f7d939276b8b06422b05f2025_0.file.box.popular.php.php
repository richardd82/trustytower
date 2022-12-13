<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.popular.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e499f984_32602981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fabdd1f6afb2fa9f7d939276b8b06422b05f2025' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.popular.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e499f984_32602981 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['POPULAR']->value) {?>
<div class="panel" id="box-popular">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_popular'];?>
</h3>
  <ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POPULAR']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a><br>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']) {?>
         <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span>
    <?php } else { ?>
         <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

    <?php }?>
	</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ol>
</div>
<?php }
}
}
