<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:39:15
         compiled from "/var/www/sait.livestreet.com/framework/frontend/components/field/field.hidden.security-key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2393041045d47cf13d783c7-78720758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9df8a3fb74ec4ca58e241e6fc54c882678fdd34' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/field/field.hidden.security-key.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2393041045d47cf13d783c7-78720758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47cf13d79a38_59199111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47cf13d79a38_59199111')) {function content_5d47cf13d79a38_59199111($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'security_ls_key','value'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),$_smarty_tpl);?>
<?php }} ?>