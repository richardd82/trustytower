<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:58:26
  from '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.breadcrumb.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be792f3cc45_12278322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd820d9382b76f2037d67baa65278d67fb3bc650c' => 
    array (
      0 => '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/common.breadcrumb.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be792f3cc45_12278322 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="breadcrumbs">
   <div class="inner">
      <ul class="quick_links">
      <?php if (!isset($_smarty_tpl->tpl_vars['CONFIG']->value['cid'])) {?>
      <li><i class="fa fa-server" aria-hidden="true"></i> <a href="https://hosted.cubecart.com/offer" target="_blank">Official CubeCart Hosting Offer</a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['QUICK_TOUR']->value) {?>
      <li><a href="#" id="quickTour"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['quick_tour'];?>
</a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['cache']) {?><li id="clear_cache_master"<?php if ($_smarty_tpl->tpl_vars['CLEAR_CACHE']->value) {?> class="clear"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['clear_cache_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['maintain']['cache_clear'];?>
</a></li><?php }?>
      <li id="help_menu"><i class="fa fa-life-ring" aria-hidden="true"></i> <a href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['help'];?>
</a>
         <ul>
            <li><i class="fa fa-book" aria-hidden="true"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['HELP_URL']->value;?>
" id="wikihelp" class="colorbox wiki"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['this_page'];?>
</a></li>
            <li><i class="fa fa-comments-o" aria-hidden="true"></i> <a href="https://www.cubecart.com/technical-support" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['tech_support'];?>
</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i> <a href="https://forums.cubecart.com" target="_blank">CubeCart Forums</a></li>
         </ul>
      </li>
      <li><a href="index.php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['store_status'];?>
 - <?php if (($_smarty_tpl->tpl_vars['STORE_STATUS']->value)) {?><span class="store_open"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['open'];?>
</span><?php } else { ?><span class="store_closed"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['closed'];?>
</span><?php }?></a></li>
      </ul>
      <ul class="location">
      <li><i class="fa fa-home"></i> <a href="?"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['dashboard']['title_dashboard'];?>
</a></li>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CRUMBS']->value, 'crumb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->value) {
?><li><i class="fa fa-chevron-right"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
   </div>
</div><?php }
}
