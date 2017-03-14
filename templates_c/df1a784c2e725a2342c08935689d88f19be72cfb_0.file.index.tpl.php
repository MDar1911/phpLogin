<?php /* Smarty version 3.1.27, created on 2016-11-24 13:42:52
         compiled from "D:\PHP\wamp\www\test\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:278065836ee5c55b724_77505563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df1a784c2e725a2342c08935689d88f19be72cfb' => 
    array (
      0 => 'D:\\PHP\\wamp\\www\\test\\templates\\index.tpl',
      1 => 1479994969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278065836ee5c55b724_77505563',
  'variables' => 
  array (
    'grade2' => 0,
    'v' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836ee5c608c79_94347692',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836ee5c608c79_94347692')) {
function content_5836ee5c608c79_94347692 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '278065836ee5c55b724_77505563';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>


<body>
<?php
$_from = $_smarty_tpl->tpl_vars['grade2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div style=" width:300px; padding-left:1280px">你好 : <?php echo $_smarty_tpl->tpl_vars['v']->value['ming'];?>
    <a href="xiu.php" >修改密码</a>
<a href="login.html">安全退出</a></div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<h1 align="center">学生基本信息</h1>
<a href="insert.php" ><center>添加学生</center></a>

<table align="center" border="1" cellpadding="5" cellspacing="0">
<tr><td>学号</td><td>姓名</td><td>性别</td><td>科目</td><td>修改</td><td>删除</td></tr>
<?php
$_from = $_smarty_tpl->tpl_vars['grade']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xm'];?>
</td>
    <td><?php if (($_smarty_tpl->tpl_vars['v']->value['sex'] == 0)) {?>男<?php } else { ?>女<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['s_class'];?>
</td>
    <td><a href="md_stu.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">修改</a></td>
    <td><a href="delete.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">删除</a></td></tr>
    

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>
</body>
</html>
<?php }
}
?>