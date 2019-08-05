<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:38:16
         compiled from "/var/www/sait.livestreet.com/framework/frontend/components/field/field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4297362205d47ced8b7f277-93009356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ff2d17ca1a79cefbe99fc6f17185c5681dfb53' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/field/field.captcha.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4297362205d47ced8b7f277-93009356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captchaType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ced8b81079_65919894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ced8b81079_65919894')) {function content_5d47ced8b81079_65919894($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('label','captchaName','name','captchaType','mods','attributes','classes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)$_smarty_tpl->tpl_vars['captchaType']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>