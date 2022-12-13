<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.social.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e49a92a0_52705430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6a7a4bfdfd59a7f04aab26d741f07a522938db' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.social.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e49a92a0_52705430 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value) {?>
<div class="element-social">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['follow_us'];?>
</h3>
   <ul class="small-block-grid-4 no-bullet nomarg social-icons text-left">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
" target="_blank" rel="noopener noreferrer"><svg class="icon"><use xlink:href="#icon-<?php echo $_smarty_tpl->tpl_vars['link']->value['icon'];?>
"></use></svg></a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
</div><?php }
}
}
