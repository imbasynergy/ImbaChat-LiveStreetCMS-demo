<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:08
         compiled from "/var/www/sait.livestreet.com/application/plugins/admin/frontend/components/p-actionbar/actionbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19353060775d47aef0b90198-42923139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98ec5363788cceb2fa48a5fa78ef1318f22fd26' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/plugins/admin/frontend/components/p-actionbar/actionbar.tpl',
      1 => 1493617528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19353060775d47aef0b90198-42923139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'backUrl' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'backText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aef0b958b3_48478277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aef0b958b3_48478277')) {function content_5d47aef0b958b3_48478277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('p-actionbar', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('content','backUrl','backText','mods','classes','attributes')),$_smarty_tpl);?>


<?php if (trim($_smarty_tpl->tpl_vars['content']->value)||$_smarty_tpl->tpl_vars['backUrl']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
        <?php if ($_smarty_tpl->tpl_vars['backUrl']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'admin:button','text'=>(($tmp = @$_smarty_tpl->tpl_vars['backText']->value)===null||$tmp==='' ? 'Назад' : $tmp),'url'=>$_smarty_tpl->tpl_vars['backUrl']->value),$_smarty_tpl);?>

        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }?><?php }} ?>