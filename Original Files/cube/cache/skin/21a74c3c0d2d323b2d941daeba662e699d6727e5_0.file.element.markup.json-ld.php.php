<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.markup.json-ld.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4aad0d5_67390083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21a74c3c0d2d323b2d941daeba662e699d6727e5' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.markup.json-ld.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4aad0d5_67390083 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","legalName":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_name'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
","contactPoint":[{"@type":"ContactPoint","url":"<?php echo $_smarty_tpl->tpl_vars['CONTACT_URL']->value;?>
","contactType":"customer service"}],"logo":"<?php echo $_smarty_tpl->tpl_vars['STORE_LOGO']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value) {?>,"sameAs":[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_LINKS']->value, 'link', false, NULL, 'social_links', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['total'];
?>"<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_social_links']->value['last'] : null)) {?>,<?php } else { ?>]<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>}<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['store_name'];?>
","url":"<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
","potentialAction":{"@type":"SearchAction","target":"<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/search.html?search%5Bkeywords%5D={search_term}&_a=category","query-input":"required name=search_term"}}<?php echo '</script'; ?>
><?php }
}
