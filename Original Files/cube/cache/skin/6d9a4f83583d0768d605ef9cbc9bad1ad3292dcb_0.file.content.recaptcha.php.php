<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/content.recaptcha.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e496f1d5_84329363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9a4f83583d0768d605ef9cbc9bad1ad3292dcb' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/content.recaptcha.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e496f1d5_84329363 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value == '2') {?>
<div class="row">
   <div class="medium-8 columns">
        <?php if (empty($_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key']) || empty($_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_secret_key'])) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['recaptcha_key_not_set'];?>
</p>
        <?php } else { ?>
        <div class="g-recaptcha" id="RecaptchaField<?php echo $_smarty_tpl->tpl_vars['ga_fid']->value;?>
"></div>
        <?php echo '<script'; ?>
 type="text/javascript">
        
        var reCaptchaCallback = function() {
            var gr_exists = document.getElementById("RecaptchaField");
            if(gr_exists){
                grecaptcha.render('RecaptchaField', {'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
'});
            }
            <?php if ($_smarty_tpl->tpl_vars['ga_fid']->value) {?>grecaptcha.render('RecaptchaField<?php echo $_smarty_tpl->tpl_vars['ga_fid']->value;?>
', {'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
'});<?php }?>
        };
        
        <?php echo '</script'; ?>
>
        <?php }?>
    </div>
</div>
<?php }
}
}
