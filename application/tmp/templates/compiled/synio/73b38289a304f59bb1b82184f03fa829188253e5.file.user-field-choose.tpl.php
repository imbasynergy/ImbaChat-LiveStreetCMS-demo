<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:19:40
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/user/user-field-choose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10488949135d47ca7c12cb82-42263546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b38289a304f59bb1b82184f03fa829188253e5' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/user/user-field-choose.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10488949135d47ca7c12cb82-42263546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'lang_choose' => 0,
    'component' => 0,
    'name' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ca7c134a17_21670262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ca7c134a17_21670262')) {function content_5d47ca7c134a17_21670262($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-field-choose', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('name','label','lang_choose','mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.choose.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? $_tmp1 : $tmp), null, 0);?>
<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user.choose.choose'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['lang_choose'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['lang_choose']->value)===null||$tmp==='' ? $_tmp2 : $tmp), null, 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('user_field_choose', null, null); ob_start(); ?>
    <a href="#" class="ls-link-dotted js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-button">
        <?php echo $_smarty_tpl->tpl_vars['lang_choose']->value;?>

    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'field.autocomplete','label'=>$_smarty_tpl->tpl_vars['label']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'inputClasses'=>'js-user-field-choose-users ls-hidden','isMultiple'=>true,'placeholder'=>" ",'note'=>Smarty::$_smarty_vars['capture']['user_field_choose'],'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>