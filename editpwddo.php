<?php
	session_start();
  header("Content-type:text/html;charset=utf-8");
  if($_SESSION['id']==1){
   	if($_POST['npwd']!=""){
		include("conn.php");
		include("init.inc.php");
		$opwd = $_POST['opwd'];
		$npwd = $_POST['npwd'];
		$cpwd = $_POST['cpwd'];	
		$sql="select * from tb_user";
		$r=mysql_query($sql);		
		while($row=mysql_fetch_array($r)){
			if($opwd==$row['pwd']){
				if($npwd!=null&&$cpwd!=null){
					if($npwd==$cpwd){
						$sql2 = "UPDATE `tb_user` SET `pwd`=$npwd ";
						$r2=mysql_query($sql2);
						echo "<script>alert('修改成功，请重新登录');location.href='login.html'</script>";
						}else{
							echo "<script>alert('密码输入不一致');location.href='editpwd.php'</script>";
							}
					}else{
						echo "<script>alert('请输入新密码');location.href='editpwd.php';</script>";
						}
				}else{
					echo "<script>alert('原密码不匹配');location.href='editpwd.php'</script>";
					}
			
		}
	
	}
	}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';

	}