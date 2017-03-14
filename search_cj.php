<?php
session_start();
if(isset($_SESSION['id'])&&$_SESSION['id']==1){
   header("Content-type:text/html;charset=utf-8");
   	if($_POST['xh']!=""){
		if($_POST['km']!=""){
			include("conn.php");
			include("init.inc.php");
			$xh = $_POST['xh'];
			$km = $_POST['km'];
			
	

			
			$sql="select * from tb_grade where xh='$xh'";
			$sql2="select * from tb_grade,tb_stuinf where tb_grade.xh=tb_stuinf.xh and tb_grade.xh='$xh'";
			$sql3="select * from tb_grade,tb_stuinf where tb_grade.xh=tb_stuinf.xh and tb_grade.xh='$xh'";
			$r=mysql_query($sql);
			$r2=mysql_query($sql2);
			$r3=mysql_query($sql3);
			
			$grade=array();
			
			if(mysql_fetch_array($r)){
				if(mysql_fetch_array($r2)){
					while($row=mysql_fetch_array($r3)){
						$grade[]=$row;
					}
					$smarty->assign("grade",$grade);
					
					
					$smarty->display("search_cj.tpl");
				}else{
					echo '<script>alert("查询失败，成绩不存在");history.go(-1);</script>';
					}
				
			}else{
				echo '<script>alert("查询失败，学号不存在");history.go(-1);</script>';
				}
		
		}else{
				include("conn.php");
				include("init.inc.php");
				$xh = $_POST['xh'];
				
				$sql="select * from tb_grade where xh='$xh'";
				$sql2="select * from tb_grade,tb_stuinf where tb_grade.xh=tb_stuinf.xh and tb_grade.xh='$xh'";
				$r=mysql_query($sql);
				$r2=mysql_query($sql2);
				$grade=array();
				if(mysql_fetch_array($r)){
					while($row=mysql_fetch_array($r2)){
						$grade[]=$row;
					}
					$smarty->assign("grade",$grade);
					
				$smarty->display("search_cj.tpl");
				}else{
					echo '<script>alert("查询失败，学号不存在");history.go(-1);</script>';
					}		
			 }
	}else{
		echo '<script>alert("查询失败，请输入学号");history.go(-1);</script>';
		}
}else{
	header("Content-type:text/html;charset=utf-8");
	echo "<script>alert('请先登录');location.href='login.html';</script>";
	}