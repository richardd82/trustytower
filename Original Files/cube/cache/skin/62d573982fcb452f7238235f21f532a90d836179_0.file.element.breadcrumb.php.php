<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.breadcrumb.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a624d1_20234244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d573982fcb452f7238235f21f532a90d836179' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.breadcrumb.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a624d1_20234244 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="element-breadcrumbs">
   <?php if ($_smarty_tpl->tpl_vars['CRUMBS']->value) {?>
   <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
         <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
">
            <span class="show-for-small-only">
               <svg class="icon"><use xlink:href="#icon-home"></use></svg>
            </span>
            <span class="show-for-medium-up" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
</span>
         </a>
         <meta itemprop="position" content="1" />
      </li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CRUMBS']->value, 'crumb', false, NULL, 'crumbposition', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_crumbposition']->value['iteration']++;
?>
      <?php $_smarty_tpl->_assignInScope('position', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_crumbposition']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_crumbposition']->value['iteration'] : null)+1);?>
      <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
         <a itemprop="item" href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['url'];?>
">
            <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</span>
         </a>
         <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
" />
      </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
   <?php } else { ?>
   <div class="thickpad-top"></div>
   <?php }?>
</div><?php }
}
