<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 09:38:16
         compiled from "/var/www/sait.livestreet.com/framework/frontend/components/field/field.email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15785188725d47ced8b438f7-34990199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc8d79c9eff4aa8768acb5324ea557ed8857ff1' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/field/field.email.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
    '167465d7ac43ba173ebfda54695098b8a66a452f' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/field/field.text.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
    'd1ffb1c60b83da7b6dd8e7d01864f5db4e40e042' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/field/field.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15785188725d47ced8b438f7-34990199',
  'function' => 
  array (
    'field_input_attr_common' => 
    array (
      'parameter' => 
      array (
        'useValue' => true,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'id' => 0,
    'component' => 0,
    'rules' => 0,
    'escape' => 0,
    'form' => 0,
    '_aRequest' => 0,
    'isDisabled' => 0,
    'entity' => 0,
    'entityField' => 0,
    'name' => 0,
    'entityScenario' => 0,
    'value' => 0,
    'getValueFromForm' => 0,
    'uid' => 0,
    'inputClasses' => 0,
    'useValue' => 0,
    'placeholder' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'json' => 0,
    'inputAttributes' => 0,
    'inputData' => 0,
    'mods' => 0,
    'classes' => 0,
    'data' => 0,
    'attributes' => 0,
    'label' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47ced8b7c357_32822448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47ced8b7c357_32822448')) {function content_5d47ced8b7c357_32822448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_field_make_rule')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.field_make_rule.php';
if (!is_callable('smarty_function_field_get_value')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.field_get_value.php';
if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_cmods')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cdata')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cdata.php';
if (!is_callable('smarty_function_cattr')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-field', null, 0);?>

<?php echo smarty_function_component_define_params(array('params'=>array('form','placeholder','isDisabled','entity','entityScenario','entityField','escape','data','label','name','rules','value','id','inputClasses','inputAttributes','inputData','mods','classes','attributes','note')),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['component']->value).(mt_rand())) : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['rules'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['rules']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['escape'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['escape']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_aRequest']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['getValueFromForm'] = new Smarty_variable(true, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['isDisabled']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." disabled", null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['entity']->value){?>
    <?php echo smarty_function_field_make_rule(array('entity'=>$_smarty_tpl->tpl_vars['entity']->value,'field'=>(($tmp = @$_smarty_tpl->tpl_vars['entityField']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value : $tmp),'scenario'=>$_smarty_tpl->tpl_vars['entityScenario']->value,'assign'=>'rules'),$_smarty_tpl);?>

<?php }?>


    
    <?php if (!isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['getValueFromForm']->value&&$_smarty_tpl->tpl_vars['name']->value&&$_smarty_tpl->tpl_vars['form']->value){?>
        <?php ob_start();?><?php echo smarty_function_field_get_value(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable((($tmp = @$_tmp1)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['value']->value : $tmp), null, 0);?>
    <?php }?>

    
    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['escape']->value ? htmlspecialchars($_smarty_tpl->tpl_vars['value']->value) : $_smarty_tpl->tpl_vars['value']->value, null, 0);?>

    <?php echo smarty_function_component_define_params(array('params'=>array('type')),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? 'mail' : $tmp), null, 0);?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'field.email.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? $_tmp1 : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['rules'] = new Smarty_variable(array_merge(array('required'=>true,'type'=>'email'),$_smarty_tpl->tpl_vars['rules']->value), null, 0);?>



<?php if (!is_callable('smarty_function_cattr')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_cdata')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.cdata.php';
?><?php if (!function_exists('smarty_template_function_field_input_attr_common')) {
    function smarty_template_function_field_input_attr_common($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['field_input_attr_common']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"
    class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-input <?php echo $_smarty_tpl->tpl_vars['inputClasses']->value;?>
"
    <?php if ($_smarty_tpl->tpl_vars['useValue']->value){?>value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['placeholder']->value){?>placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value){?>disabled<?php }?>
    <?php  $_smarty_tpl->tpl_vars['rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rule']->key => $_smarty_tpl->tpl_vars['rule']->value){
$_smarty_tpl->tpl_vars['rule']->_loop = true;
?>
        <?php if (is_bool($_smarty_tpl->tpl_vars['rule']->value)&&!$_smarty_tpl->tpl_vars['rule']->value){?>
            <?php continue 1?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['rule']->key==='remote'){?>
            data-parsley-remote-validator="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rules']->value['remote-validator'])===null||$tmp==='' ? 'livestreet' : $tmp);?>
"
            data-parsley-trigger="focusout"

            
            <?php $_smarty_tpl->tpl_vars['json'] = new Smarty_variable(array('type'=>'post','data'=>array('security_ls_key'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value)), null, 0);?>

            <?php if (array_key_exists('remote-options',$_smarty_tpl->tpl_vars['rules']->value)){?>
                <?php $_smarty_tpl->tpl_vars['json'] = new Smarty_variable(array_merge_recursive($_smarty_tpl->tpl_vars['json']->value,$_smarty_tpl->tpl_vars['rules']->value['remote-options']), null, 0);?>
            <?php }?>

            data-parsley-remote-options='<?php echo json_encode($_smarty_tpl->tpl_vars['json']->value);?>
'
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['rule']->key==='remote-options'){?>
            <?php continue 1?>
        <?php }?>

        data-parsley-<?php echo $_smarty_tpl->tpl_vars['rule']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['rule']->value;?>
"
    <?php } ?>
    <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['inputAttributes']->value),$_smarty_tpl);?>

    <?php echo smarty_function_cdata(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'list'=>$_smarty_tpl->tpl_vars['inputData']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>




    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 ls-clearfix <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 "
        <?php echo smarty_function_cdata(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'list'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

        <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>

        
        <?php if ($_smarty_tpl->tpl_vars['label']->value){?>
            <label for="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
        <?php }?>

        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-holder">
            
    <input type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'text' : $tmp);?>
" <?php smarty_template_function_field_input_attr_common($_smarty_tpl,array());?>
 />

        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['note']->value){?>
            <small class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</small>
        <?php }?>
    </div>

<?php }} ?>