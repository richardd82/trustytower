<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.progress.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a81548_84090816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5ee5f4576c0c823a9c492f365457d1be28d818' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.progress.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a81548_84090816 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['BLOCKS']->value)) {?>
<ul class="row no-bullet collapse checkout-progress-wrapper" id="box-progress">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
  <li class="small-4 columns text-center checkout-progress <?php echo $_smarty_tpl->tpl_vars['block']->value['class'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['block']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value['step'];?>
. <?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
</a></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
