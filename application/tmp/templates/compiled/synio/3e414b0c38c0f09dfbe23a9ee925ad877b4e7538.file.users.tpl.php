<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:19:40
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/feed/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7033367955d47ca7c119244-01729428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e414b0c38c0f09dfbe23a9ee925ad877b4e7538' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/feed/users.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7033367955d47ca7c119244-01729428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ca7c11b4f3_39691145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ca7c11b4f3_39691145')) {function content_5d47ca7c11b4f3_39691145($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('users')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'user-list-add','users'=>$_smarty_tpl->tpl_vars['users']->value,'classes'=>'js-feed-users','attributes'=>array('data-param-type'=>'users'),'note'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['users']['note']),$_smarty_tpl);?>
<?php }} ?>