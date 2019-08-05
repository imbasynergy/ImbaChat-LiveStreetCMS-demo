<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:19:40
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/feed/blocks/block.userfeed-blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14436089305d47ca7c0f8ba0-47426670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dd42b1ab281b51b587f12756c790b0bee21931f' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/feed/blocks/block.userfeed-blogs.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14436089305d47ca7c0f8ba0-47426670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogsJoined' => 0,
    'blogsSubscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ca7c0fdd25_02322919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ca7c0fdd25_02322919')) {function content_5d47ca7c0fdd25_02322919($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.blogs.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'feed','template'=>'blogs','blogsJoined'=>$_smarty_tpl->tpl_vars['blogsJoined']->value,'blogsSubscribed'=>$_smarty_tpl->tpl_vars['blogsSubscribed']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-blogs','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>