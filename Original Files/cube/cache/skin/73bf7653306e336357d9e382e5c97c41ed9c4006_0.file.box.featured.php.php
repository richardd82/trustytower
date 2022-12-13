<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.featured.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4992063_28107632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73bf7653306e336357d9e382e5c97c41ed9c4006' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.featured.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4992063_28107632 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['featured']->value) {?>
<div class="panel" id="box-featured">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_feature'];?>
</h3>
   <a class="th" href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
   <img src="<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
   </a>
   <h4><a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</a></h4>
   <?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_sale']) {?>
   <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>
</span> <span class="sale_price"><?php echo $_smarty_tpl->tpl_vars['featured']->value['sale_price'];?>
</span>
   <?php } else { ?>
   <?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>

   <?php }?>
</div>
<?php }
}
}
