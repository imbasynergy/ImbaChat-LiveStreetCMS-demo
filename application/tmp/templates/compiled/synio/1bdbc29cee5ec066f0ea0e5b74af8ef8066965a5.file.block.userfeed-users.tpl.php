<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:19:40
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/feed/blocks/block.userfeed-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2843593425d47ca7c116383-45014994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bdbc29cee5ec066f0ea0e5b74af8ef8066965a5' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/feed/blocks/block.userfeed-users.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843593425d47ca7c116383-45014994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ca7c118007_56425080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ca7c118007_56425080')) {function content_5d47ca7c118007_56425080($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.users.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'feed','template'=>'users','users'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-users','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>