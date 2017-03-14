<?php /* Smarty version 3.1.27, created on 2016-11-27 13:49:45
         compiled from "F:\wamp\www\test\templates\md_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31663583ad66917bfb1_24811098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4253a2e26a50f67b3728fbb18f4672b1c63c91' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\md_stu.tpl',
      1 => 1480250980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31663583ad66917bfb1_24811098',
  'variables' => 
  array (
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583ad6691ec2c0_28031897',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583ad6691ec2c0_28031897')) {
function content_583ad6691ec2c0_28031897 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31663583ad66917bfb1_24811098';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
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
<h1 align="center">修改学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="md_studo.php" method="post" >
     <input type="hidden" name="oldxh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/>
	学号:<input type="text"  name="xh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><br/>
    姓名:<input type="text" name="xm" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xm'];?>
"/><br/>
    性别:<input type="radio" value="0" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 0) {?>checked="checked"<?php }?>/>男&nbsp;
        <input type="radio" value="1" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 1) {?>checked="checked"<?php }?>/>女 <br/>
    班级:<input type="text" name="bj" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['s_class'];?>
"/><br/>
    <input type="submit" name="sub" value="确定"/>
      <input type="button" name="back" value="返回" onclick="location.href='index.php'"/>
</form>
</div>
</div>
</body>
</html>
<?php }
}
?>