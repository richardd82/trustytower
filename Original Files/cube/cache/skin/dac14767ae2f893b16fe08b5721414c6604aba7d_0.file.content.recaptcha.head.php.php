<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/content.recaptcha.head.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e49f3dc7_26388432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac14767ae2f893b16fe08b5721414c6604aba7d' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/content.recaptcha.head.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e49f3dc7_26388432 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value) {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?onload=reCaptchaCallback&render=explicit" async defer><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['RECAPTCHA']->value == '3') {
echo '<script'; ?>
>
var reCaptchaCallback = function() {
        $(".g-recaptcha" ).each(function() {
            var el = $(this);
            grecaptcha.render($(el).attr('id'), {
                'sitekey': '<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['recaptcha_public_key'];?>
',
                'badge': '<?php echo $_smarty_tpl->tpl_vars['SKIN_CUSTOM']->value['recaptcha_badge_position'];?>
',
                'callback': function(token) {
                    if($(el).attr("data-form-id")){
                        $('#'+$(el).attr("data-form-id")).submit();
                    } else {
                        $(el).parent().submit();
                    }
                }
            });
        });
    };
<?php echo '</script'; ?>
>
<?php }
}
}
