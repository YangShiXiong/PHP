<div>

	<?php
	session_start();
 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }
    $loginName =  $_SESSION["name"];
	$sql = "select * from admin where loginName = $loginName ";

	$stmt = $pdo->query($sql);
	if($stmt->rowCount() > 0){
	    $list = $stmt->fetch(PDO::FETCH_ASSOC);  //解析数据
	}else{
	    die("没要有修改的数据");
	}
	?>
</div>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>管理员页面</title>
	<style type="text/css">
	body{
			background: url(upload.jpg) no-repeat;  
			background-size:cover;
		}
		*{
			box-sizing: border-box;
		}
		.row:after{
			content:"";
			clear: both;
			display: block;
		}
		[class*="col-"]{
			float: left;
			padding: 15px;
		}
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
		html{
			font-family: "Lucida Sans", sans-serif;

		}
		.header{
			background-color: #9933cc;
			color: #ffffff;
			padding: 15px;
		}
		.menu ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		.menu a {
		    padding: 8px;
		    margin-bottom: 7px;
		    background-color :#33b5e5;
		    color: #ffffff;
		    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
		.menu a:hover {
    		background-color: #0099cc;
		}
		.menu li {
			margin-left:150px;
		    padding: 8px;
		    margin-bottom: 7px;
		    background-color :#33b5e5;
		    color: #ffffff;
		    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
		.menu li:hover {
    		background-color: #0099cc;
		}
		.h{
			color: #f5f5dc;
		}
		.dropbtn {
		    background-color: #0099cc;
		    color: white;
		    padding: 16px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;
	    }

		.dropdown {
			float: left;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		  /*  min-width: 160px;*/
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		    display: block;
		}

		.dropdown:hover .dropbtn {
		    background-color: #3e8e41;
		}

	</style>
</head>
<body>
	<div class="header">
		<h2 class="h">尊敬的管理员，欢迎你</h2>
	</div>
	<div class="dropdown">
	  <button class="dropbtn">菜单</button>
	  <div class="dropdown-content">
	    <a href="index.php">退出</a>
	    <a href="search.php"></a>
	  </div>
    </div>


		<div class="col-9 menu">
			<li>管理ID： <?= $list['adminID'];?></li>
			<li>管理员类型： <?= $list['adminType'];?></li>
			<li>姓名： <?= $list['adminName'];?></li>
			<li>账号：
			 <?= $list['loginName'];?></li>

		</div>
	</div>	
</body>
</html>