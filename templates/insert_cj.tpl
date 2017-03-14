<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示成绩信息</title>
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
<h1 align="center">增添成绩信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="insertdo_cj.php" method="post" >
     <input type="hidden" name="oldxh"/>
	学号:<input type="text"  name="xh" /><br/>
    科目:<input type="text" name="km" /><br/>
    成绩:<input type="text" name="cj" /><br/>
    <input type="submit" name="sub" value="确定"/>
    <input type="button" name="back" value="返回" onclick="location.href='chengji.php'"/>
</form>
</div>
</div>
</body>
</html>
