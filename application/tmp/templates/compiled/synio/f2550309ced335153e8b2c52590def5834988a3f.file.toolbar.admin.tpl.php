<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:18
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/admin/toolbar.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13074214035d47aefa037d41-37507536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2550309ced335153e8b2c52590def5834988a3f' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/admin/toolbar.admin.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13074214035d47aefa037d41-37507536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aefa03bb66_67349672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aefa03bb66_67349672')) {function content_5d47aefa03bb66_67349672($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'admin'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','html'=>'<i class="ls-toolbar-icon"></i>','url'=>$_tmp1,'attributes'=>array('title'=>$_tmp2),'mods'=>'admin'),$_smarty_tpl);?>

<?php }?><?php }} ?>