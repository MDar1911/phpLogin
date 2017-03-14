<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
	 if($_SESSION['id']==1){
   	if($_POST['xh']!=""&&$_POST['cj']!=""&&$_POST['km']!=""){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		$oldxh = $_POST['oldxh'];
		$km = $_POST['km'];
		$cj = $_POST['cj'];
		$sql="insert into tb_grade values ('$xh','$km','$cj')";
		
		if($r = mysql_query($sql)){
			echo '<script>alert("添加成功");location.href="chengji.php";</script>';
		    
		}else{
			echo '<script>alert("添加失败，可能存在相同学号的科目");history.go(-1);</script>';
		}
		 
		
	}else{
		echo '<script>alert("添加的成绩存在空值，请重新添加有效成绩");location.href="insert_cj.php";</script>';
	} }else{
	 echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	 }
?>