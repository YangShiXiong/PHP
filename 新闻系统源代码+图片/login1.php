<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录界面</title>
	<style type="text/css">
		body{
			background-color: #F8F8FF;
			background: url(login.jpg) no-repeat;  
			background-size:cover;
		}
	</style>
</head>
<style type="text/css">	
	input[type=password]{
		width: 100%;
		padding: 12px 20px;
		margin:8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box; 
	}
	input[type=username]{
		width: 100%;
		padding: 12px 20px;
		margin:8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box; 
	}
	input[type=submit]{
		width: 100%;
		background-color: #4CAF50;	
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer; 
	}
	div{
		width: 400px;
		height: 350px;
		float: right;
		border-radius: 10px;
		background-color: #f2f2f2;
		padding: 20px;
		margin-top: 100px; 
		margin-right:100px;
	}
	a.link{
		background-color: #B2FF99;
	}
	a.visit{
		background-color: #B2FF99;
	}
	a.hover{
		background-color: #B2FF99;
	}
	a.active{
		background-color: #4CAF50;
	}
</style>
<body>
	<div>
	<form action="login.php" method="post">
		<h2>用户登录</h2>
		<label>username</label>
		<input type="username" name="username" placeholder="username">
		<label>password</label>
		<input type="password" name="password"  placeholder="password" >
		<input type="submit"  value="登录">
		<p><b><a href="signup1.php" target="_blank" style="float: right;">注册用户</a></b></p>
		<p><b><a href="index.php" target="_blank" style="float: left;">退出</a></b></p>
	</form>
	</div>

</body>
</html>