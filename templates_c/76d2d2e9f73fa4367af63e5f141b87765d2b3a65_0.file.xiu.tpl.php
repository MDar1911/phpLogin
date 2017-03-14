<?php /* Smarty version 3.1.27, created on 2016-11-24 16:04:43
         compiled from "F:\wamp\www\test\templates\xiu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:202195837018b956337_23743621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d2d2e9f73fa4367af63e5f141b87765d2b3a65' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\xiu.tpl',
      1 => 1479915556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202195837018b956337_23743621',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5837018b990059_41170455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5837018b990059_41170455')) {
function content_5837018b990059_41170455 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202195837018b956337_23743621';
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