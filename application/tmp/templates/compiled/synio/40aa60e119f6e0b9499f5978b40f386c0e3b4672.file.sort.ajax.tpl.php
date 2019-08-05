<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:12:13
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/sort/sort.ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8437334295d47c8bd508124-08311350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40aa60e119f6e0b9499f5978b40f386c0e3b4672' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/sort/sort.ajax.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8437334295d47c8bd508124-08311350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'component' => 0,
    'classes' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47c8bd510b53_39288248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47c8bd510b53_39288248')) {function content_5d47c8bd510b53_39288248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-sort', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('items','text','label','mods','classes','attributes')),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->key]['attributes'] = array_merge((($tmp = @$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->key]['attributes'])===null||$tmp==='' ? array() : $tmp),array('data-name'=>'sort_by','data-value'=>$_smarty_tpl->tpl_vars['item']->value['name'],'data-order'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['order'])===null||$tmp==='' ? 'desc' : $tmp)));?>
<?php } ?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
">
    <?php echo smarty_function_component(array('_default_short'=>'dropdown','text'=>(($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? '...' : $tmp),'classes'=>'js-dropdown-default','attributes'=>array('data-lsdropdown-selectable'=>'true'),'menu'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

</div><?php }} ?>