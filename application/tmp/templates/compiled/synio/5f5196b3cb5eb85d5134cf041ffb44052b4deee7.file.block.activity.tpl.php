<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:39:10
         compiled from "/var/www/sait.livestreet.com/application/plugins/admin/frontend/components/p-dashboard/blocks/block.activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6534617305d47cf0e991159-25970347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5196b3cb5eb85d5134cf041ffb44052b4deee7' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/plugins/admin/frontend/components/p-dashboard/blocks/block.activity.tpl',
      1 => 1493617528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6534617305d47cf0e991159-25970347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'events' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47cf0e9958c3_56149197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47cf0e9958c3_56149197')) {function content_5d47cf0e9958c3_56149197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('events','count')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'activity','events'=>$_smarty_tpl->tpl_vars['events']->value,'count'=>$_smarty_tpl->tpl_vars['count']->value,'classes'=>'p-dashboard-activity js-dashboard-activity'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:block','title'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['users_stats']['activity'],'content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>