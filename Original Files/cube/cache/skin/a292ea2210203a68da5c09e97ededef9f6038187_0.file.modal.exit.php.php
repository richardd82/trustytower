<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/modal.exit.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e4aba661_84018702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a292ea2210203a68da5c09e97ededef9f6038187' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/modal.exit.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/content.recaptcha.php' => 1,
  ),
),false)) {
function content_5f8be7e4aba661_84018702 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['CONFIG']->value['exit_modal']) {?>
<div id="newsletter_exit" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
   <h2 id="modalTitle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['email']['exit_title'];?>
</h2>
   <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['email']['exit_copy'];?>
</p>
   <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" id="newsletter_exit">
      <div class="hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['enter_email_signup'];?>
</div>
      <div class="row collapse">
         <div class="small-8 columns"><input name="subscribe" id="newsletter_email_exit" type="text" size="18" maxlength="250" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['eg'];?>
 joe@example.com"/></div>
         <div class="small-4 columns">
            <input type="submit" class="button postfix g-recaptcha" id="subscribe_button_exit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
">
            <input type="hidden" name="force_unsubscribe" id="force_unsubscribe_exit" value="0">
         </div>
      </div>
      <div class="hide" id="newsletter_recaptcha">
         <?php $_smarty_tpl->_subTemplateRender('file:templates/content.recaptcha.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ga_fid'=>"newsletter_exit"), 0, false);
?>
      </div>
   </form>
   <div class="hide" id="validate_email_exit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['error_email_invalid'];?>
</div>
   <div class="hide" id="validate_already_subscribed_exit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['notify_already_subscribed'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['continue_to_unsubscribe'];?>
</div>
   <div class="hide" id="validate_subscribe_exit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
</div>
   <div class="hide" id="validate_unsubscribe_exit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['unsubscribe'];?>
</div>
   <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<?php echo '<script'; ?>
>
   function addEvent(obj, evt, fn) {
      if (obj.addEventListener) {
         obj.addEventListener(evt, fn, false);
      }
      else if (obj.attachEvent) {
         obj.attachEvent("on" + evt, fn);
      }
   }
   addEvent(window,"load",function(e) {
      addEvent(document, "mouseout", function(e) {
         e = e ? e : window.event;
         var from = e.relatedTarget || e.toElement;
         if (!from || from.nodeName == "HTML") {
               if(!$.cookie('newsletter_exit')) {
                  $('#newsletter_exit').foundation('reveal', 'open');
                  $.cookie('newsletter_exit', true, { expires: 30, path: '/' });
               }
         }
      });
   });
<?php echo '</script'; ?>
>
<?php }
}
}
