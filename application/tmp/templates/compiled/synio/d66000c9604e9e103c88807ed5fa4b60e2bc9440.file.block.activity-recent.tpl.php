<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 08:07:52
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/activity/blocks/block.activity-recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12852926045d47b9a8a66168-56553111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66000c9604e9e103c88807ed5fa4b60e2bc9440' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/activity/blocks/block.activity-recent.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12852926045d47b9a8a66168-56553111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47b9a8a6ba64_34038732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47b9a8a6ba64_34038732')) {function content_5d47b9a8a6ba64_34038732($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_router')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('content')),$_smarty_tpl);?>



<?php $_smarty_tpl->_capture_stack[0][] = array('block_footer', null, null); ob_start(); ?>
    <a href="<?php echo smarty_function_router(array('_default_short'=>'stream'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.all'),$_smarty_tpl);?>
</a> ·
    <a href="<?php echo smarty_function_router(array('_default_short'=>'rss'),$_smarty_tpl);?>
allcomments/"><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.feed'),$_smarty_tpl);?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'stream'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.comments'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.block_recent.topics'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'primary activity-recent','classes'=>'js-block-default js-activity-block-recent','title'=>$_tmp1,'titleUrl'=>$_tmp2,'footer'=>Smarty::$_smarty_vars['capture']['block_footer'],'tabs'=>array('classes'=>'js-tabs-block js-activity-block-recent-tabs','tabs'=>array(array('text'=>$_tmp3,'url'=>$_tmp4."stream/comment",'list'=>$_smarty_tpl->tpl_vars['content']->value),array('text'=>$_tmp5,'url'=>$_tmp6."stream/topic")))),$_smarty_tpl);?>
<?php }} ?>