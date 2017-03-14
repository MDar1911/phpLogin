<?php /* Smarty version 3.1.27, created on 2016-11-22 13:27:21
         compiled from "D:\wamp\www\test\templates\md_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30863583447b9383392_43237725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ac3d56ebfe273f485d1346faa0027d635e41e1' => 
    array (
      0 => 'D:\\wamp\\www\\test\\templates\\md_stu.tpl',
      1 => 1447689600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30863583447b9383392_43237725',
  'variables' => 
  array (
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583447b949c393_55324197',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583447b949c393_55324197')) {
function content_583447b949c393_55324197 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30863583447b9383392_43237725';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
</head>

<body>
<h1 align="center">修改学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="md_studo.php" method="post" >
     <input type="hidden" name="oldxh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><!--把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><br/>
    姓名:<input type="text" name="xm" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xm'];?>
"/><br/>
    性别:<input type="radio" value="0" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 0) {?>checked="checked"<?php }?>/>男&nbsp;
        <input type="radio" value="1" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 1) {?>checked="checked"<?php }?>/>女 <br/>
    班级:<input type="text" name="bj" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['s_class'];?>
"/><br/>
    <input type="submit" name="sub" value="确定"/>
</form>
</div>
</body>
</html>
<?php }
}
?>