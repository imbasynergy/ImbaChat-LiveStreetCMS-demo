<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:12:13
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/blog/search-form.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3119848725d47c8bd503690-11673237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a64ce7e391a2e5f93c53049f4e833f93e8d56e1' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/blog/search-form.blogs.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3119848725d47c8bd503690-11673237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47c8bd505443_56983872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47c8bd505443_56983872')) {function content_5d47c8bd505443_56983872($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'blog','method'=>'post','placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['search']['placeholder'],'inputClasses'=>'js-search-text-main','inputName'=>'blog_title','noSubmitButton'=>true),$_smarty_tpl);?>
<?php }} ?>