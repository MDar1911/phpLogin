<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
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
<h1 align="center">修改密码</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<table align="center" border="0" cellpadding="1" cellspacing="0">
		<form action="editpwddo.php" method="post" >
    	 
			<tr><td>原密码:</td><td><input type="password"  name="opwd" /></td></tr>
    		<tr><td>新密码:</td><td><input type="password" name="npwd" /></td></tr>
    		<tr><td>确认新密码:</td><td><input type="password" name="cpwd" /></td></tr>
            <tr><td align="left"><input type="button" name="back" value="取消" onclick="location.href='index.php'"/></td>
            <td align="right" colspan="2"><input type="submit" name="sub1" value="确认修改"/></td>
            </tr>
  			
		</form>
        </table>
</div>
</div>
</body>
</html>


