<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:18
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/tags-personal/modal.tags_personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2003853855d47aefa02f103-79257585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f2780229a39b58c58460eb1b288987efb76d5c' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/tags-personal/modal.tags_personal.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2003853855d47aefa02f103-79257585',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aefa033252_23202585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aefa033252_23202585')) {function content_5d47aefa033252_23202585($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('modal_content', null, null); ob_start(); ?>
    <form id="js-favourite-form">
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'tags','noMargin'=>true,'autofocus'=>true,'inputClasses'=>'ls-width-full autocomplete-tags-sep js-tags-form-input-list'),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags_personal.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.save'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['modal_content'],'classes'=>'js-modal-default','mods'=>'favourite-tags','id'=>'favourite-form-tags','primaryButton'=>array('text'=>$_tmp2,'classes'=>'js-tags-form-submit','form'=>'js-favourite-form')),$_smarty_tpl);?>
<?php }} ?>