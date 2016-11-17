<?php
	header("Content-type:text/html;charset=utf-8");
	if($con = mysql_connect('localhost','root','123')){
		echo "链接成功";
	}else{
		echo "链接失败";
	}
	//选择数据库
	if(mysql_select_db("info")){
		echo "链接成功";
	}else{
		echo "链接失败";
	}
	// $ = 
	if(mysql_query('insert into test (name) values ("abc")')){
		echo "22链接成功";
	}else{
		echo "33链接失败";
	}
	mysql_close($con)
?>