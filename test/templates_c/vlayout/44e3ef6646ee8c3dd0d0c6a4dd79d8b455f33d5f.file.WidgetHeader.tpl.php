<?php /* Smarty version Smarty-3.1.7, created on 2015-09-25 19:05:55
         compiled from "/var/www/kulturedkitsch.info/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/WidgetHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180872111756059b137fb294-69779584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e3ef6646ee8c3dd0d0c6a4dd79d8b455f33d5f' => 
    array (
      0 => '/var/www/kulturedkitsch.info/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/WidgetHeader.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180872111756059b137fb294-69779584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'STYLES' => 0,
    'cssModel' => 0,
    'SCRIPTS' => 0,
    'jsModel' => 0,
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56059b138458b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56059b138458b')) {function content_56059b138458b($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?>
	<link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getHref();?>
" type="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getType();?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" />
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['jsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsModel']->key => $_smarty_tpl->tpl_vars['jsModel']->value){
$_smarty_tpl->tpl_vars['jsModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['jsModel']->key;
?>
	<script type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"></script>
<?php } ?>

<table width="100%" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="span5">
				<div class="dashboardTitle textOverflowEllipsis" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" style="width: 15em;"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></div>
			</td>
			<td class="refresh span2" align="right">
				<span style="position:relative;">&nbsp;</span>
			</td>
			<td class="widgeticons span5" align="right">
				<div class="box pull-right">
					<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardHeaderIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</td>
		</tr>
	</tbody>
</table>
<?php }} ?>