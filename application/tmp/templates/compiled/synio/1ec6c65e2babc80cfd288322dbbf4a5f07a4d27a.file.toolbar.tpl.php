<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:18
         compiled from "/var/www/sait.livestreet.com/framework/frontend/components/toolbar/toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2206544445d47aefa04a269-87357427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ec6c65e2babc80cfd288322dbbf4a5f07a4d27a' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/toolbar/toolbar.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2206544445d47aefa04a269-87357427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aefa04eb04_77800969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aefa04eb04_77800969')) {function content_5d47aefa04eb04_77800969($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-toolbar', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('items','mods','classes','attributes')),$_smarty_tpl);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if (is_array($_smarty_tpl->tpl_vars['items']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php echo smarty_function_component(array('_default_short'=>'toolbar.item','params'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

        <?php } ?>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['items']->value;?>

    <?php }?>
</div><?php }} ?>