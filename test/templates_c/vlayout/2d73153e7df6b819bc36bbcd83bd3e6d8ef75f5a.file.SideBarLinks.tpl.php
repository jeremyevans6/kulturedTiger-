<?php /* Smarty version Smarty-3.1.7, created on 2015-09-25 19:09:45
         compiled from "/var/www/kulturedkitsch.info/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBarLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71253362656059bf994c540-96931229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d73153e7df6b819bc36bbcd83bd3e6d8ef75f5a' => 
    array (
      0 => '/var/www/kulturedkitsch.info/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBarLinks.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71253362656059bf994c540-96931229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUICK_LINKS' => 0,
    'SIDEBARLINK' => 0,
    'SIDE_LINK_URL' => 0,
    'EXPLODED_PARSE_URL' => 0,
    'COUNT_OF_EXPLODED_URL' => 0,
    'EXPLODED_URL' => 0,
    'CURRENT_VIEW' => 0,
    'CURRENT_LINK_VIEW' => 0,
    'PARSE_URL' => 0,
    'MODULE' => 0,
    'CURRENT_MODULE_NAME' => 0,
    'LINK_LIST_VIEW' => 0,
    'IS_LINK_MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56059bf99d913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56059bf99d913')) {function content_56059bf99d913($_smarty_tpl) {?>
<div class="quickLinksDiv"><?php  $_smarty_tpl->tpl_vars['SIDEBARLINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SIDEBARLINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SIDEBARLINK']->key => $_smarty_tpl->tpl_vars['SIDEBARLINK']->value){
$_smarty_tpl->tpl_vars['SIDEBARLINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['SIDE_LINK_URL'] = new Smarty_variable(decode_html($_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getUrl()), null, 0);?><?php $_smarty_tpl->tpl_vars["EXPLODED_PARSE_URL"] = new Smarty_variable(explode('?',$_smarty_tpl->tpl_vars['SIDE_LINK_URL']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["COUNT_OF_EXPLODED_URL"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['EXPLODED_PARSE_URL']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNT_OF_EXPLODED_URL']->value>1){?><?php $_smarty_tpl->tpl_vars["EXPLODED_URL"] = new Smarty_variable($_smarty_tpl->tpl_vars['EXPLODED_PARSE_URL']->value[$_smarty_tpl->tpl_vars['COUNT_OF_EXPLODED_URL']->value-1], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars["PARSE_URL"] = new Smarty_variable(explode('&',$_smarty_tpl->tpl_vars['EXPLODED_URL']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["CURRENT_LINK_VIEW"] = new Smarty_variable(('view=').($_smarty_tpl->tpl_vars['CURRENT_VIEW']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["LINK_LIST_VIEW"] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['CURRENT_LINK_VIEW']->value,$_smarty_tpl->tpl_vars['PARSE_URL']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["CURRENT_MODULE_NAME"] = new Smarty_variable(('module=').($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["IS_LINK_MODULE_NAME"] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['CURRENT_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['PARSE_URL']->value), null, 0);?><p onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getUrl();?>
'" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_link_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getLabel());?>
"class="<?php if ($_smarty_tpl->tpl_vars['LINK_LIST_VIEW']->value&&$_smarty_tpl->tpl_vars['IS_LINK_MODULE_NAME']->value){?>selectedQuickLink <?php }else{ ?>unSelectedQuickLink<?php }?>"><a class="quickLinks" href="<?php echo $_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getUrl();?>
"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></p><?php } ?></div><?php }} ?>