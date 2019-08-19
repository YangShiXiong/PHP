<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册界面</title>
	<style type="text/css">
		body{
			background-color: #F8F8FF;
			background: url(signup.jpg) no-repeat;  
			background-size:cover;
		}
	</style>
</head>
<style type="text/css">	
	input[type=text]{
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
		height: 550px;
		float: right;
		border-radius: 10px;
		background-color: #f2f2f2;
		padding: 20px;
		margin-top: 50px; 
		margin-right:200px;

	}
</style>
<body>
	<div>
	<form action="signup.php" method="post">
		<h2>用户注册</h2>
		<label>memberID</label>
		<input type="text" name="memberID" >
		<label>loginName</label>
		<input type="text" name="loginName" >
		<label>loginPwd</label>
		<input type="text" name="loginPwd" >
		<label>realname</label>
		<input type="text" name="realname" >
		<label>email</label>
		<input type="text" name="email" >
	
		<input type="submit"  value="注册">
	</form>
	</div>

</body>
</html>