<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:12:13
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/dropdown/dropdown-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20477081645d47c8bd523e85-00302546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a55f1f655f0054c39b56a950fcd62a525afd19f7' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/dropdown/dropdown-menu.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20477081645d47c8bd523e85-00302546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'activeItem' => 0,
    'classes' => 0,
    'attributes' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47c8bd529023_15285479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47c8bd529023_15285479')) {function content_5d47c8bd529023_15285479($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('items','name','text','activeItem','mods','classes','attributes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>$_smarty_tpl->tpl_vars['name']->value ? ((string)$_smarty_tpl->tpl_vars['name']->value)."_menu" : '','activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'mods'=>'stacked','isSubnav'=>true,'showSingle'=>true,'classes'=>"ls-dropdown-menu js-ls-dropdown-menu ".((string)$_smarty_tpl->tpl_vars['classes']->value),'attributes'=>array_merge((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp),array('role'=>'menu','aria-hidden'=>'true')),'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php }} ?>