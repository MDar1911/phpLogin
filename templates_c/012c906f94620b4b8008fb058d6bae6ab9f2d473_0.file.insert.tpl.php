<?php /* Smarty version 3.1.27, created on 2016-11-22 13:43:21
         compiled from "D:\wamp\www\test\templates\insert.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1760058344b792dd604_84729367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012c906f94620b4b8008fb058d6bae6ab9f2d473' => 
    array (
      0 => 'D:\\wamp\\www\\test\\templates\\insert.tpl',
      1 => 1479821630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760058344b792dd604_84729367',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58344b79317c18_98250793',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58344b79317c18_98250793')) {
function content_58344b79317c18_98250793 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1760058344b792dd604_84729367';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
</head>

<body>
<h1 align="center">增添学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="insertdo.php" method="post" >
     <input type="hidden" name="oldxh"/>
	学号:<input type="text"  name="xh" /><br/>
    姓名:<input type="text" name="xm" /><br/>
    性别:<input type="radio" value="0" name="sex"  />男&nbsp;
        <input type="radio" value="1" name="sex"  />女 <br/>
    班级:<input type="text" name="bj" /><br/>
    <input type="submit" name="sub" value="确定"/>
</form>
</div>
</body>
</html>
<?php }
}
?>