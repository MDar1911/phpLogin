<?php /* Smarty version 3.1.27, created on 2016-11-28 14:47:36
         compiled from "F:\wamp\www\test\templates\search_cj.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10665583c3578591333_54498024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b13638f3de464e312696e1e3d65247a8dc5f4e' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\search_cj.tpl',
      1 => 1480340850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10665583c3578591333_54498024',
  'variables' => 
  array (
    'grade' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583c35785ffbb4_19984942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583c35785ffbb4_19984942')) {
function content_583c35785ffbb4_19984942 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10665583c3578591333_54498024';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生成绩信息</title>
<style>
a{text-decoration:none;}
.cla{width: 30%;
	margin:7em auto 0;
	position:relative;
	background: #fff;
	padding: 2em 2em;
	border:1;
	border-radius: 0.3em;
	-webkit-border-radius: 0.3em;
	-o-border-radius: 0.3em;
	-moz-border-radius: 0.3em;
}

</style>
</head>
<body style="background-image:url(../../project/images/bg.jpg)">
<div style=" width:300px; padding-left:120px">  <a href="editpwd.php" >修改密码</a>
<a href="login.html">安全退出</a></div>
<div class="cla">

<h1 align="center">学生成绩信息</h1>

<span><center><input type="button" name="back" value="返回" onclick="location.href='chengji.php'"/></center></span>

<table align="center" border="1" cellpadding="5" cellspacing="0">

<tr><td>学号</td><td>科目</td><td>成绩</td><td>修改</td><td>删除</td></tr>
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
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
</td>
    <td><a href="md_cj.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">修改</a></td>
    <td><a href="delete_cj.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
&km=<?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
">删除</a></td></tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
     <tr><td colspan="3"><a href="index.php">学生信息管理</td><td colspan="2"><a href="kemu.php">科目信息管理</td></tr>
    
</table>
</div>



</body>
</html>
<?php }
}
?>