<?php
session_start();
if(isset($_SESSION['id'])==1){
	   header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['xh'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		
		$sql="select * from tb_stuinf where xh='$xh'";
		$sql2="select * from tb_stuinf where xh='$xh'";
		$r=mysql_query($sql);
		$r2=mysql_query($sql2);
		$grade=array();
		if(mysql_fetch_array($r)){
			while($row=mysql_fetch_array($r2)){
				$grade[]=$row;
			}
			$smarty->assign("grade",$grade);
			$smarty->display("search_stu.tpl");
		}else{
			echo '<script>alert("查询失败，学号不存在");history.go(-1);</script>';
			}
			
			
		
	}
}else{
	header("Content-type:text/html;charset=utf-8");
	echo "<script>alert('请先登录');location.href='login.html';</script>";
	}