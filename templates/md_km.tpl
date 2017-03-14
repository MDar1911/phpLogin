<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改科目信息</title>
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
<h1 align="center">修改科目信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="md_kmdo.php" method="post" >
     <input type="hidden" name="oldid" value="<{$km.id}>"/>
	科目编码:<input type="text"  name="id" value="<{$km.id}>"/><br/>
    科目名称:<input type="text" name="km" value="<{$km.km}>"/><br/>
      <input type="submit" name="sub" value="确定"/>
     <input type="button" name="back" value="返回" onclick="location.href='kemu.php'"/>
</form>
</div>
</div>

</body>
</html>
