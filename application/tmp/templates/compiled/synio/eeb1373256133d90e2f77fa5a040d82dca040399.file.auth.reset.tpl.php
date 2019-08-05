<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:38:16
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/auth/auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1361191195d47ced8c14fa1-88076745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb1373256133d90e2f77fa5a040d82dca040399' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/auth/auth.reset.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1361191195d47ced8c14fa1-88076745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ced8c1c5e7_65980730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ced8c1c5e7_65980730')) {function content_5d47ced8c1c5e7_65980730($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>