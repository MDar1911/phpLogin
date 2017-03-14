<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['xh'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		$oldxh = $_POST['oldxh'];
		$km = $_POST['km'];
		$cj = $_POST['cj'];
	
	$sql ="update tb_grade set xh='$xh',km='$km',cj=$cj where xh='$oldxh'";
		if($r = mysql_query($sql)){
			echo '<script>alert("修改成功");location.href="chengji.php";</script>';
		    
		}else{
			echo '<script>alert("修改失败，可能存在相同学号的科目");history.go(-1);</script>';
		}
		
		
	}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>