<?php /* Smarty version 3.1.27, created on 2016-11-23 14:13:38
         compiled from "D:\PHP\wamp\www\test\templates\insert.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23165835a412e050e1_69771703%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff107d70cb2ebeaf56ce20716514c50f48c2b053' => 
    array (
      0 => 'D:\\PHP\\wamp\\www\\test\\templates\\insert.tpl',
      1 => 1479821632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23165835a412e050e1_69771703',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5835a412e52ca4_01370590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835a412e52ca4_01370590')) {
function content_5835a412e52ca4_01370590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23165835a412e050e1_69771703';
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