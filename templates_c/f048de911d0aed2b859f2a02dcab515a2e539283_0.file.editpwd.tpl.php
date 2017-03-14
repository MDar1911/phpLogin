<?php /* Smarty version 3.1.27, created on 2016-11-27 13:48:34
         compiled from "F:\wamp\www\test\templates\editpwd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6030583ad62234c5a7_35533481%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f048de911d0aed2b859f2a02dcab515a2e539283' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\editpwd.tpl',
      1 => 1480250908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6030583ad62234c5a7_35533481',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583ad622395857_39030288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583ad622395857_39030288')) {
function content_583ad622395857_39030288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6030583ad62234c5a7_35533481';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
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
<h1 align="center">修改密码</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<table align="center" border="0" cellpadding="1" cellspacing="0">
		<form action="editpwddo.php" method="post" >
    	 
			<tr><td>原密码:</td><td><input type="password"  name="opwd" /></td></tr>
    		<tr><td>新密码:</td><td><input type="password" name="npwd" /></td></tr>
    		<tr><td>确认新密码:</td><td><input type="password" name="cpwd" /></td></tr>
            <tr><td align="left"><input type="button" name="back" value="取消" onclick="location.href='index.php'"/></td>
            <td align="right" colspan="2"><input type="submit" name="sub1" value="确认修改"/></td>
            </tr>
  			
		</form>
        </table>
</div>
</div>
</body>
</html>


<?php }
}
?>