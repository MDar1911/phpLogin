<?php /* Smarty version 3.1.27, created on 2016-11-27 12:00:30
         compiled from "F:\wamp\www\test\templates\insert_km.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2495583abccec04aa9_88095091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1661c6b6db586eb10917a9c43de2d6cae90e7e1b' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\insert_km.tpl',
      1 => 1480244427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2495583abccec04aa9_88095091',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583abccec30620_65138554',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583abccec30620_65138554')) {
function content_583abccec30620_65138554 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2495583abccec04aa9_88095091';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>增添科目信息</title>
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
<h1 align="center">增添科目信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="insertdo_km.php" method="post" >
     <input type="hidden" name="oldid"/>
	科目编码:<input type="text"  name="id" /><br/>
    科目名称:<input type="text" name="km" /><br/>
    <input type="submit" name="sub" value="确定"/>
    <input type="button" name="back" value="返回" onclick="location.href='kemu.php'"/>
</form>
</div>
</div>
</body>
</html>
<?php }
}
?>