<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 07:22:17
         compiled from "/var/www/sait.livestreet.com/application/frontend/skin/synio/components/search/hideable/search-hideable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9451662625d47aef9eeea84-69083472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4c32ad80fc19c567a450dbf8e5d0ea1249e7944' => 
    array (
      0 => '/var/www/sait.livestreet.com/application/frontend/skin/synio/components/search/hideable/search-hideable.tpl',
      1 => 1493617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9451662625d47aef9eeea84-69083472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d47aef9eefe57_02868932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d47aef9eefe57_02868932')) {function content_5d47aef9eefe57_02868932($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/var/www/sait.livestreet.com/framework/classes/modules/viewer/plugs/function.component.php';
?><div class="ls-search-hideable js-search-hideable">
    <div class="ls-search-hideable-toggle js-search-hideable-toggle">
        <i class="ls-search-hideable-toggle-icon"></i>
        <a href="#" class="ls-search-hideable-toggle-text"><?php echo smarty_function_lang(array('_default_short'=>'search.find'),$_smarty_tpl);?>
</a>
    </div>

    <?php echo smarty_function_component(array('_default_short'=>'search.main','classes'=>'ls-search-hideable-search js-search-hideable-search','mods'=>'light'),$_smarty_tpl);?>

</div><?php }} ?>