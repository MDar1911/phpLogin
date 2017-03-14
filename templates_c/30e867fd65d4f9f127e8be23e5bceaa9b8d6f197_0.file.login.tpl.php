<?php /* Smarty version 3.1.27, created on 2016-11-22 12:45:39
         compiled from "D:\wamp\www\test\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:323958343df317c405_85498478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e867fd65d4f9f127e8be23e5bceaa9b8d6f197' => 
    array (
      0 => 'D:\\wamp\\www\\test\\templates\\login.tpl',
      1 => 1479816340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323958343df317c405_85498478',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58343df31a5830_32673799',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58343df31a5830_32673799')) {
function content_58343df31a5830_32673799 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '323958343df317c405_85498478';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<h1 align="center">请登录账号</h1>
<table align="center" border="0" cellpadding="1" cellspacing="0">
	<form method="post" action="logindo.php" onsubmit="">
    	<tr><td>用户名：</td><td><input type="text" name="name"/></td></tr>
        <tr><td>密码：</td><td><input type="password" name="password"/></td></tr>
        <tr><td>请输入验证码：</td><td><input  type="text" name="string"/></td></tr>
        <tr><td colspan="2" align="right"><img src="checkcode.php" onclick="this.src='checkcode.php?id='+Math.random()"/></td></tr>
        <tr><td colspan="2" align="right"><input type="submit" value="登录" name="sub"/></td></tr>
    </form>
</table>
</body>
</html>
<?php }
}
?>