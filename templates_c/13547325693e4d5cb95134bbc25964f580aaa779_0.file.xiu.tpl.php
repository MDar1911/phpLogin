<?php /* Smarty version 3.1.27, created on 2016-11-23 15:39:17
         compiled from "D:\PHP\wamp\www\test\templates\xiu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:218555835b8257df9b2_12987839%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13547325693e4d5cb95134bbc25964f580aaa779' => 
    array (
      0 => 'D:\\PHP\\wamp\\www\\test\\templates\\xiu.tpl',
      1 => 1479915554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218555835b8257df9b2_12987839',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5835b825827034_81834416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835b825827034_81834416')) {
function content_5835b825827034_81834416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '218555835b8257df9b2_12987839';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<h1 align="center">修改密码</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<table align="center" border="0" cellpadding="1" cellspacing="0">
		<form action="xiudo.php" method="post" >
    	 
			<tr><td>原密码:</td><td><input type="password"  name="omi" /></td></tr>
    		<tr><td>新密码:</td><td><input type="password" name="xmi" /></td></tr>
    		<tr><td>确认新密码:</td><td><input type="password" name="qxmi" /></td></tr>
            <tr><td align="right" colspan="2"><input type="submit" name="sub1" value="确认修改"/></td></tr>
  
		</form>
        </table>
</div>
</body>
</html>


<?php }
}
?>