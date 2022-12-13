<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.search.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4944649_73037745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8fecd0ce42aeee5c3bf528a078656d23f06a93' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.search.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4944649_73037745 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
   <form action="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/search.html" class="search_form" method="get">
      <div class="row collapse">
         <div class="small-10 large-11 columns">
            <input name="search[keywords]" type="text" class="search_input nomarg" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" required><small><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/search.html"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>
</a></small>
         </div>
         <div class="small-2 large-1 columns">
            <button class="button postfix nomarg nopad" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['search'];?>
"><svg class="icon"><use xlink:href="#icon-search"></use></svg></button>
         </div>
      </div>
      <input type="hidden" name="_a" value="category">
   </form>
   <div class="hide validate_search"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['enter_search_term'];?>
</div>
</div><?php }
}
