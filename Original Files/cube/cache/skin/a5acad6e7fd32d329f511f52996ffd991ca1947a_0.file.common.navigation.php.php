<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:58:26
  from '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.navigation.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be792f2cd57_88517214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5acad6e7fd32d329f511f52996ffd991ca1947a' => 
    array (
      0 => '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.navigation.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be792f2cd57_88517214 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['NAVIGATION']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAVIGATION']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group'];?>
" class="menu"><?php if ($_smarty_tpl->tpl_vars['group']->value['visible'] == "false") {?><i class="fa fa-plus-square-o"></i><?php } else { ?><i class="fa fa-minus-square-o"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['group']->value['members'])) {?>
<ul id="menu_<?php echo $_smarty_tpl->tpl_vars['group']->value['group'];?>
" class="submenu<?php if ($_smarty_tpl->tpl_vars['group']->value['visible'] == "false") {?> hide<?php }?>">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['nav']->value['target'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['nav']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];
if (!empty($_smarty_tpl->tpl_vars['nav']->value['icon'])) {?> <i class="fa <?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
"></i><?php }?></a></li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
