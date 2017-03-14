<?php /* Smarty version 3.1.27, created on 2016-11-27 13:52:51
         compiled from "F:\wamp\www\test\templates\kemu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19740583ad7230a8729_25703039%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817452bda586c8c816bb9ed5aab65142f0e93a1d' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\kemu.tpl',
      1 => 1480251166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19740583ad7230a8729_25703039',
  'variables' => 
  array (
    'grade' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583ad723104ab1_53357632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583ad723104ab1_53357632')) {
function content_583ad723104ab1_53357632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19740583ad7230a8729_25703039';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生科目信息</title>
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
<div class="cla">
<h1 align="center">学生科目信息</h1>

<span><a href="insert_km.php" style="width:auto"><center>添加科目</a></center></span>

<table align="center" border="1" cellpadding="5" cellspacing="0">

<tr><td>科目编码</td><td>科目名称</td><td>修改</td><td>删除</td></tr>
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
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
</td>
    
    <td><a href="md_km.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></td>
    <td><a href="delete_km.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td></tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    <tr><td colspan="2"><a href="index.php">学生信息管理</td><td colspan="2"><a href="chengji.php">成绩信息管理</td></tr>
    
</table>
<div class="cla">
</body>
</html>
<?php }
}
?>