<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:08
         compiled from "/var/www/sait.livestreet.com/application/plugins/admin/frontend/skin/default/stats_performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17393097365d47aef0bfaf30-32417447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d287d79f504c72fd63f25b4c335c9299226476e' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/plugins/admin/frontend/skin/default/stats_performance.tpl',
      1 => 1493617528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17393097365d47aef0bfaf30-32417447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStatsPerformance' => 0,
    'iTimeFullPerformance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aef0bffa47_83816826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aef0bffa47_83816826')) {function content_5d47aef0bffa47_83816826($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.hook.php';
?>


<div class="ls-alert ls-alert--info">
	<?php echo smarty_function_hook(array('run'=>'statistics_performance_begin'),$_smarty_tpl);?>


	<table class="ls-table">
		<tbody>
			<tr>
				<td>
					<h4>MySql</h4>
					query: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['sql']['count'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['sql']['time'];?>
</strong>
				</td>
				<td>
					<h4>Cache</h4>
					query: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count'];?>
</strong><br />
					&mdash; set: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count_set'];?>
</strong><br />
					&mdash; get: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count_get'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['time'];?>
</strong>
				</td>
				<td>
					<h4>PHP</h4>
					time load modules: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['engine']['time_load_module'];?>
</strong><br />
					full time: <strong><?php echo $_smarty_tpl->tpl_vars['iTimeFullPerformance']->value;?>
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
		</tbody>
	</table>

	<?php echo smarty_function_hook(array('run'=>'statistics_performance_end'),$_smarty_tpl);?>

</div>
<?php }} ?>