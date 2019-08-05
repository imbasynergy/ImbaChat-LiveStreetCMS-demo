<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 08:07:52
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/topic/blocks/block.topics-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20886044975d47b9a8a96178-82923288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2405832dc00f5b69bff46d6693e9255bba1091f' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/topic/blocks/block.topics-tags.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20886044975d47b9a8a96178-82923288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tagsUser' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47b9a8a9a7f2_69597954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47b9a8a9a7f2_69597954')) {function content_5d47b9a8a9a7f2_69597954($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('tags','tagsUser')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.all'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tags']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.block_tags.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tags','template'=>'cloud','tags'=>$_smarty_tpl->tpl_vars['tagsUser']->value),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','title'=>$_tmp1,'classes'=>'js-block-default','tabs'=>array('tabs'=>array(array('text'=>$_tmp2,'content'=>$_tmp3),array('text'=>$_tmp4,'content'=>$_tmp5,'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value)))),$_smarty_tpl);?>
<?php }} ?>