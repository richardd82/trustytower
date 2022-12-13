<?php
/* Smarty version 3.1.33, created on 2020-10-19 12:31:34
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.navigation_tree.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8d872654a044_65570437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e360a91ac3d2f29b00db631d82e82a3a5d6a5e0e' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.navigation_tree.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d872654a044_65570437 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="has-dropdown">
   <a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a>
   <?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])) {?>
   <ul class="dropdown">
      <li itemprop="name"><label itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</label></li>
      <?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['children'];?>

   </ul>
   <?php }?>
</li><?php }
}
