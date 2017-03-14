<?php /* Smarty version 3.1.27, created on 2016-11-28 14:40:42
         compiled from "F:\wamp\www\test\templates\chengji.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16301583c33daddba11_99919639%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18394af74a29f203ba8e9e6a660cf9b9cacf3cb8' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\chengji.tpl',
      1 => 1480340436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16301583c33daddba11_99919639',
  'variables' => 
  array (
    'grade2' => 0,
    's' => 0,
    'grade' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583c33dae58930_73884111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583c33dae58930_73884111')) {
function content_583c33dae58930_73884111 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16301583c33daddba11_99919639';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生成绩信息</title>
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
<div style=" width:300px; padding-left:120px">  <a href="editpwd.php" >修改密码</a>
<a href="login.html">安全退出</a></div>
<div class="cla">

<h1 align="center">学生成绩信息</h1>


        <form  method="post" action="search_cj.php" onsubmit="">
        	<div align="center">
       			 学号：<input type="text" name="xh" />
                  科目:<select name="km">
                 	<option value="">未知</option>
             		<?php
$_from = $_smarty_tpl->tpl_vars['grade2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
           		 		<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['km'];?>
</option>
       			 	<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                 	</select>
                
       				 <input type="submit" value="查询" name="sub"/>
           </div>
           
          
   
        </form>


<span><a href="insert_cj.php" style="width:auto"><center>添加成绩</a></center></span>

<table align="center" border="1" cellpadding="5" cellspacing="0">

<tr><td>学号</td><td>科目</td><td>成绩</td><td>修改</td><td>删除</td></tr>
<?php
$_from = $_smarty_tpl->tpl_vars['grade']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cj'];?>
</td>
    <td><a href="md_cj.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
">修改</a></td>
    <td><a href="delete_cj.php?xh=<?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
&km=<?php echo $_smarty_tpl->tpl_vars['v']->value['km'];?>
">删除</a></td></tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
     <tr><td colspan="3"><a href="index.php">学生信息管理</td><td colspan="2"><a href="kemu.php">科目信息管理</td></tr>
    
</table>
</div>



</body>
</html>
<?php }
}
?>