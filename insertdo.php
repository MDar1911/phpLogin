<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
	 if($_SESSION['id']==1){
   	if($_POST['xh']!=""&&$_POST['xm']!=""&&$_POST['bj']!=""&&$_POST['sex']!=""){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		$oldxh = $_POST['oldxh'];
		$xm = $_POST['xm'];
		$bj = $_POST['bj'];
		$sex = $_POST['sex'];
		$sql="insert into tb_stuinf values ('$xh','$xm',$sex,'$bj')";
		
		if($r = mysql_query($sql)){
			echo '<script>alert("添加成功");location.href="index.php";</script>';
		    
		}else{
			echo '<script>alert("添加失败，可能存在同名的学号或学号个数多余两位");history.go(-1);</script>';
		}
		 
		
	}else{
		echo '<script>alert("添加的值存在空值，请重新添加有效值");location.href="insert.php";</script>';
	}}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';

	}
?>