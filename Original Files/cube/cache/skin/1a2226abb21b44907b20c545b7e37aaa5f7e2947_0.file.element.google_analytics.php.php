<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:59:48
  from '/home/trustyto/public_html/cube/skins/foundation/templates/element.google_analytics.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be7e49fbbd3_38482664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a2226abb21b44907b20c545b7e37aaa5f7e2947' => 
    array (
      0 => '/home/trustyto/public_html/cube/skins/foundation/templates/element.google_analytics.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8be7e49fbbd3_38482664 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_COOKIE['accept_cookies']) && $_COOKIE['accept_cookies'] == 'true') {
echo '<script'; ?>
>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS']->value;?>
', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
<?php echo '</script'; ?>
>
<?php }
}
}
