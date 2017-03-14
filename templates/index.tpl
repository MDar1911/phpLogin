<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生基本信息</title>

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

<div style=" width:300px; padding-left:120px">   <a href="editpwd.php" >修改密码</a>
<a href="login.html">安全退出</a></div>

<div class="cla">
<h1 align="center">学生基本信息</h1>

<span><a href="insert.php" style="width:auto"><center>添加学生</a></center></span>
<table align="center" border="1" cellpadding="5" cellspacing="0">

<form  method="post" action="search_stu.php" onsubmit=""><div align="center">学号：<input type="text" name="xh" /><input type="submit" value="查询" ></div></form>

<tr><td>学号</td><td>姓名</td><td>性别</td><td>班级</td><td>修改</td><td>删除</td></tr>
<{foreach from=$grade item=v}>
	<tr>
	<td><{$v.xh}></td>
    <td><{$v.xm}></td>
    <td><{if ($v.sex==0)}>男<{else}>女<{/if}></td>
    <td><{$v.s_class}></td>
    <td><a href="md_stu.php?xh=<{$v.xh}>">修改</a></td>
    <td><a href="delete.php?xh=<{$v.xh}>">删除</a></td></tr>
    <{/foreach}>
    <tr><td colspan="3"><a href="kemu.php">科目信息管理</td><td colspan="3"><a href="chengji.php">成绩信息管理</td></tr>
</table>

</div>

</body>
</html>
