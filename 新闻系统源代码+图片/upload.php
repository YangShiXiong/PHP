<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>上传界面</title>
	<style type="text/css">
		body{
			background-color: #F8F8FF;
			background: url(signup.jpg) no-repeat;  
			background-size: cover;
		}
	</style>
</head>
<style type="text/css">	
	input[type=text]{
		width: 100%;
		padding: 8px 8px;
		margin:4px 0;
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
		height: 850px;
		float: right;	
		border-radius: 10px;
		background-color: #f2f2f2;
		padding: 10px;
		margin-top: 0px; 
		margin-right:100px;

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
</style>
<body>
	<div>	
<form action="upload1.php" method="post">
		<h2>上传新闻 <a href="index.php" style="float: right;">退出</a></h2>
		<label>sectionID</label>
		<input type="text" name="sectionID" >
		<label>sectionName</label>
		<input type="text" name="sectionName" >
		<label>description</label>
		<input type="text" name="description" >
		<label>newsID</label>
		<input type="text" name="newsID" >
		<label>section</label>
		<input type="text" name="section" >
		<label>title</label>
		<input type="text" name="title" >
		<label>author</label>
		<input type="text" name="author" >
		<label>content</label>
		<input type="text" name="content" >
		<label>keyWords</label>
		<input type="text" name="keyWords" >
		<label>clickedTimes</label>
		<input type="text" name="clickedTimes" >
		<label>picture</label>
		<input type="text" name="picture" >
	
		<input type="submit"  value="上传">
	</form>
	</div>

</body>
</html>