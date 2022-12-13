<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.js_foot.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a8e223_64668738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90b3de6302b5b13bfc7779aeb6c7230bbdab36cf' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.js_foot.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a8e223_64668738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/trustyto/public_html/cube/includes/lib/smarty/plugins/function.combine.php','function'=>'smarty_function_combine',),));
$_smarty_tpl->_assignInScope('js_foot', array('skins/{$SKIN_FOLDER}/js/vendor/jquery.rating.min.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.validate.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.cookie.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.bxslider.js','skins/{$SKIN_FOLDER}/js/vendor/jquery.chosen.js'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BODY_JS']->value, 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['js_foot']) ? $_smarty_tpl->tpl_vars['js_foot']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['js']->value;
$_smarty_tpl->_assignInScope('js_foot', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JS_SCRIPTS']->value, 'script', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['script']->value) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['js_foot']) ? $_smarty_tpl->tpl_vars['js_foot']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['script']->value;
$_smarty_tpl->_assignInScope('js_foot', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_combine(array('input'=>$_smarty_tpl->tpl_vars['js_foot']->value,'output'=>'cache/js_foot.{$SKIN_FOLDER}.js','age'=>'604800','debug'=>$_smarty_tpl->tpl_vars['CONFIG']->value['debug'] || !$_smarty_tpl->tpl_vars['CONFIG']->value['cache']),$_smarty_tpl);?>

<?php echo '<script'; ?>
>$(document).foundation({equalizer:{equalize_on_stack:true}});$('.bxslider').bxSlider({auto:true,captions:true});$('.chzn-select').chosen({width:"100%",search_contains:true});<?php echo '</script'; ?>
><?php }
}
