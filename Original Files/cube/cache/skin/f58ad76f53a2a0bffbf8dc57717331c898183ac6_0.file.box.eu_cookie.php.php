<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/box.eu_cookie.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4a37c86_04649731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58ad76f53a2a0bffbf8dc57717331c898183ac6' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/box.eu_cookie.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e4a37c86_04649731 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['COOKIE_DIALOGUE']->value) {?>
<div class="row" id="eu_cookie_dialogue">
   <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" class="marg" method="POST">
      <div class="small-9 columns">
        <?php echo $_smarty_tpl->tpl_vars['COOKIE_DIALOGUE_TEXT']->value;?>

      </div>
      <div class="small-3 columns">
        <ul class="button-group right">
          <li><input type="submit" class="eu_cookie_button button tiny secondary" name="accept_cookies_submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['accept'];?>
"></li>
          <li><input type="submit" class="eu_cookie_button button tiny alert" name="decline_cookies_accept" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['block'];?>
"></li> 
        </ul>
      </div>
   </form>
</div>
<?php }
}
}
