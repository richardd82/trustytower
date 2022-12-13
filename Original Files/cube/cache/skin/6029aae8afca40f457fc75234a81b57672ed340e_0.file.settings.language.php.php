<?php
/* Smarty version 3.1.33, created on 2020-10-18 06:58:26
  from '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/settings.language.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8be792ee1095_03018330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6029aae8afca40f457fc75234a81b57672ed340e' => 
    array (
      0 => '/home/trustyto/public_html/cube/admin_1EQWYv/skins/default/templates/settings.language.php',
      1 => 1582811830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/element.hook_form_content.php' => 2,
  ),
),false)) {
function content_5f8be792ee1095_03018330 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" id="edit_phrases" method="post" enctype="multipart/form-data">
   <?php if (isset($_smarty_tpl->tpl_vars['LANGUAGES']->value)) {?>
   <div id="lang_list" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_languages'];?>
</h3>
      <table>
         <thead>
         <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['language'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['action'];?>
</th>
         </tr>
         </thead>
         <tbody>
         <tr>
            <td></td>
            <td><img src="language/flags/globe.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['master_language'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['master_language'];?>
</td>
            <td class="actions"><a href="?_g=settings&node=language&download=definitions" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['download'];?>
"><i class="fa fa-download" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['download'];?>
"></i></a></td>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
         <tr>
            <td align="center"><input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
]" id="status_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['status'];?>
" class="toggle"></td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></td>
            <td class="actions">
               <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['download'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['download'];?>
"><i class="fa fa-download" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['download'];?>
"></i></a>
               <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['edit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"><i class="fa fa-pencil-square-o" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
"></i></a>
               <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['delete'];?>
" class="delete" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['notification']['confirm_delete'];?>
"><i class="fa fa-trash" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
"></i></a>
            </td>
         </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </tbody>
         </table>
   </div>
   <div id="lang_create" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_language_create'];?>
</h3>
      <fieldset>
         <div><label for="create_title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_name'];?>
</label><span><input id="create_title" type="text" name="create[title]" class="textbox required" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_name_eg'];?>
"></span></div>
         <div><label for="create_code"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_code'];?>
</label><span><input id="create_code" type="text" name="create[code]" class="textbox required" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_code_eg'];?>
"></span></div>
         <div><label for="create_currency"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_currency'];?>
</label><span><input id="create_currency" type="text" name="create[currency_iso]" class="textbox number" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_code_eg2'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_currency_code_url'];?>
</div>
         <div>
            <label for="create_direction"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_direction'];?>
</label>
            <span>
               <select id="create_direction" name="create[text_direction]">
                  <option value="ltr"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['read_ltr'];?>
</option>
                  <option value="rtl"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['read_rtl'];?>
</option>
               </select>
            </span>
         </div>
      </fieldset>
   </div>
   <div id="lang_import" class="tab_content">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_language_import'];?>
</h3>
      <fieldset>
         <div><label for="import_overwrite"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['overwrite'];?>
</label><span><input id="import_overwrite" type="checkbox" name="import[overwrite]"></span></div>
         <div><label for="import_file"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['filemanager']['file_upload'];?>
</label><span><input id="import_file" type="file" name="import[file]" class="textbox"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['example_upload'];?>
</span></div>
      </fieldset>
   </div>
   <?php $_smarty_tpl->_subTemplateRender('file:templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div class="form_control">
      <input type="hidden" name="previous-tab" id="previous-tab" value="">
      <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
   </div>
   <?php } elseif (!$_smarty_tpl->tpl_vars['DISPLAY_EDITOR']->value && !$_smarty_tpl->tpl_vars['DISPLAY_EXPORT']->value) {?>
   <div id="lang_list" class="tab_content">
   <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['title_languages'];?>
</h3>
   <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['error_no_languages'];?>
</p>
   </div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['DISPLAY_EDITOR']->value) {?>
   <div class="tab_content" id="general">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['tab_string_edit'];?>
</h3>
      <?php if ($_smarty_tpl->tpl_vars['SECTIONS']->value) {?>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['language_group_edit'];?>
</legend>
         <div>
            <select name="type" class="textbox update_form required">
               <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SECTIONS']->value, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
" <?php echo $_smarty_tpl->tpl_vars['section']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['section']->value['description'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['nav_modules'];?>
">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['path'];?>
" <?php echo $_smarty_tpl->tpl_vars['module']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </optgroup>
            </select>
         </div>
      </fieldset>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['STRINGS']->value)) {?>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['STRING_TYPE']->value;?>
</legend>
         <table class="phrases">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRINGS']->value, 'string');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['string']->value) {
?>
            <tr id="row_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
">
               <td class="phrase_row" rel="string_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
">
                  <label for="string_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
</label>
                  <input type="hidden" id="defined_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['string']->value['defined'];?>
">
                  <?php if ($_smarty_tpl->tpl_vars['string']->value['multiline']) {?>
                  <textarea id="string_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" name="string[<?php echo $_smarty_tpl->tpl_vars['string']->value['type'];?>
][<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
]" class="textbox editable_phrase" rel="<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['string']->value['disabled']) {?> disabled="disabled"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['string']->value['value'];?>
</textarea>
                  <?php } else { ?>
                  <input type="text" id="string_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" name="string[<?php echo $_smarty_tpl->tpl_vars['string']->value['type'];?>
][<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['string']->value['value'];?>
" class="textbox editable_phrase" rel="<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['string']->value['disabled']) {?> disabled="disabled"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_edit'];?>
">
                  <?php }?>
               </td>
               <td class="actions">
                  <input type="hidden" id="default_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['string']->value['default'];?>
">
                  <a href="#" class="revert" id="revert_<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['string']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['revert'];?>
"><i class="fa fa-clock-o"></i></a>
               </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </table>
      </fieldset>
      <?php }?>
      <div>
         <input type="hidden" name="previous-tab" id="previous-tab" value="">
         <input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
">
      </div>
   </div>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_EXPORT']->value)) {?>
   <div class="tab_content" id="merge">
      <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['merge_db_file'];?>
</h3>
      <fieldset>
         <legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_import_options'];?>
</legend>
         <div>
            <label for="export_opt_replace"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['translate']['replace_original'];?>
 (<?php echo $_smarty_tpl->tpl_vars['REPLACE_OPTION']->value;?>
.xml)</label>
            <span><input type="checkbox" name="export_opt[replace]" id="export_opt_replace" value="1"></span>
         </div>
      </fieldset>
   </div>
   <?php if (isset($_smarty_tpl->tpl_vars['PLUGIN_TABS']->value)) {?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_TABS']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['tab']->value;?>

   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
   <?php $_smarty_tpl->_subTemplateRender('file:templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
   <div class="form_control">
      <input type="submit" name="export" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['export'];?>
">
   </div>
   <?php }?>
   
</form><?php }
}
