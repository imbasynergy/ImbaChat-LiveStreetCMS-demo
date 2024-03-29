<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:18
         compiled from "/var/www/sait.livestreet.com/framework/frontend/components/performance/performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12949303885d47aefa050178-17578184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7d8157f1d5bb54bb41fddaf83b9fe83a36633a' => 
    array (
      0 => '/var/www/sait.livestreet.com/framework/frontend/components/performance/performance.tpl',
      1 => 1493617438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12949303885d47aefa050178-17578184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bIsShowStatsPerformance' => 0,
    'stats' => 0,
    'timeFullPerformance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aefa055b73_12898110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aefa055b73_12898110')) {function content_5d47aefa055b73_12898110($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.hook.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('stats','timeFullPerformance')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['bIsShowStatsPerformance']->value){?>
    <div class="ls-alert ls-alert--info ls-performance">
        <?php echo smarty_function_hook(array('run'=>'statistics_performance_begin'),$_smarty_tpl);?>


        <table>
            <tr>
                <td>
                    <h4>MySql</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['count'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['time'];?>
</strong>
                </td>
                <td>
                    <h4>Cache</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count'];?>
</strong><br />
                    &mdash; set: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_set'];?>
</strong><br />
                    &mdash; get: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_get'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['time'];?>
</strong>
                </td>
                <td>
                    <h4>PHP</h4>
                    time load modules: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['engine']['time_load_module'];?>
</strong><br />
                    full time: <strong><?php echo $_smarty_tpl->tpl_vars['timeFullPerformance']->value;?>
</strong>
                </td>
                <td>
                    <h4>Memory</h4>
                    memory usage: <strong><?php echo memory_get_usage(true)/1024/1024;?>
 Mb</strong><br />
                    memory peak usage: <strong><?php echo memory_get_peak_usage(true)/1024/1024;?>
 Mb</strong>
                </td>

                <?php echo smarty_function_hook(array('run'=>'statistics_performance_item'),$_smarty_tpl);?>

            </tr>
        </table>

        <?php echo smarty_function_hook(array('run'=>'statistics_performance_end'),$_smarty_tpl);?>

    </div>
<?php }?><?php }} ?>