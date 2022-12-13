<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.js_head.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a046f6_98243604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e154e2e3aacbde9f6dc7f65099c7cff7de013dbb' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.js_head.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a046f6_98243604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/trustyto/public_html/cube/includes/lib/smarty/plugins/function.combine.php','function'=>'smarty_function_combine',),));
$_smarty_tpl->_assignInScope('js_head', array('skins/{$SKIN_FOLDER}/js/vendor/modernizr.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.js'));
echo smarty_function_combine(array('input'=>$_smarty_tpl->tpl_vars['js_head']->value,'output'=>'cache/js_head.{$SKIN_FOLDER}.js','age'=>'604800','debug'=>$_smarty_tpl->tpl_vars['CONFIG']->value['debug'] || !$_smarty_tpl->tpl_vars['CONFIG']->value['cache']),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEAD_JS']->value, 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
echo $_smarty_tpl->tpl_vars['js']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
