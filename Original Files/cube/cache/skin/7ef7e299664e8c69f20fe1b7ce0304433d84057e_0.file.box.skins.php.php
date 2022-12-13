<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.skins.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a9c1d3_18288157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef7e299664e8c69f20fe1b7ce0304433d84057e' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.skins.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a9c1d3_18288157 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SKINS']->value) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="autosubmit nomarg skin_selector thickpad-top" id="box-skin">
   <div class="row">
      <div class="small-6 columns text-right"><h4>Change Skin:</h4></div>
      <div class="small-5 columns">
         <select name="select_skin" class="auto_submit">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SKINS']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>
         <?php if (isset($_smarty_tpl->tpl_vars['skin']->value['styles'])) {?>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skin']->value['styles'], 'style');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['style']->value['directory'];?>
" <?php echo $_smarty_tpl->tpl_vars['style']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['skin']->value['display'];?>
 - <?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
</option>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <?php } else { ?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value['name'];?>
" <?php echo $_smarty_tpl->tpl_vars['skin']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['skin']->value['display'];?>
</option>
         <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </select>
      </div>
      <div class="small-1 columns">
         <h4><a href="#" class="hide_skin_selector" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['close'];?>
"><svg class="icon"><use xlink:href="#icon-times"></use></svg></a></h4>
      </div>
   </div>
   <input type="submit" value="submit" class="hide">
</form>
<?php }
}
}
