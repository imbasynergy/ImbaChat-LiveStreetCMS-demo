<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:19:40
         compiled from "/var/www/sait.livestreet.com/application/frontend/components/user-list-add/user-list-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6673878245d47ca7c11c647-60850529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3ab7085257c122c0b803622428373eb2afa880' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/components/user-list-add/user-list-add.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6673878245d47ca7c11c647-60850529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'note' => 0,
    'editable' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ca7c12a0a7_18676094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ca7c12a0a7_18676094')) {function content_5d47ca7c12a0a7_18676094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-list-add', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','note','editable','users','mods','classes','attributes')),$_smarty_tpl);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['note']->value){?>
        <p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</p>
    <?php }?>

    
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['editable']->value)===null||$tmp==='' ? true : $tmp)){?>
        <form class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form">
            <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'user_list_add.form.fields.add.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'choose','name'=>'add','classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-choose",'label'=>$_tmp1),$_smarty_tpl);?>


            <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.add'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_tmp2,'mods'=>'primary','classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-form-submit"),$_smarty_tpl);?>

        </form>
    <?php }?>

    
    
    
        <?php echo smarty_function_component(array('_default_short'=>'user-list-add','template'=>'list','hideableEmptyAlert'=>true,'users'=>$_smarty_tpl->tpl_vars['users']->value,'showActions'=>true,'show'=>!!$_smarty_tpl->tpl_vars['users']->value,'classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-users",'itemClasses'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-user"),$_smarty_tpl);?>

    
</div><?php }} ?>