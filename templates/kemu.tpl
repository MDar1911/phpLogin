<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生科目信息</title>
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
<h1 align="center">学生科目信息</h1>

<span><a href="insert_km.php" style="width:auto"><center>添加科目</a></center></span>

<table align="center" border="1" cellpadding="5" cellspacing="0">

<tr><td>科目编码</td><td>科目名称</td><td>修改</td><td>删除</td></tr>
<{foreach from=$grade item=v}>
	<tr>
	<td><{$v.id}></td>
    <td><{$v.km}></td>
    
    <td><a href="md_km.php?id=<{$v.id}>">修改</a></td>
    <td><a href="delete_km.php?id=<{$v.id}>">删除</a></td></tr>
    <{/foreach}>
    <tr><td colspan="2"><a href="index.php">学生信息管理</td><td colspan="2"><a href="chengji.php">成绩信息管理</td></tr>
    
</table>
<div class="cla">
</body>
</html>
