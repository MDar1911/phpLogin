<?php /* Smarty version 3.1.27, created on 2016-11-24 15:36:01
         compiled from "F:\wamp\www\test\templates\zhuce.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62375836fad19f7171_27946741%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22702647f703520808b839befd7bfebc3e7a6034' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\zhuce.tpl',
      1 => 1479916560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62375836fad19f7171_27946741',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5836fad1a31be5_18251741',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5836fad1a31be5_18251741')) {
function content_5836fad1a31be5_18251741 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '62375836fad19f7171_27946741';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<h1 align="center">新用户注册</h1>

<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<table align="center" border="0" cellpadding="1" cellspacing="0">
		<form action="zhucedo.php" method="post" >
    	 
			<tr><td>用户名:</td><td><input type="text"  name="ming" /></td></tr>
    		<tr><td>密码:</td><td><input type="password" name="mi" /></td></tr>
    		<tr><td>确认密码:</td><td><input type="password" name="qmi" /></td></tr>
            <tr><td align="right" colspan="2"><input type="submit" name="sub1" value="注册"/></td></tr>
  
		</form>
        </table>
        </div>
</body>
</html>
<?php }
}
?>