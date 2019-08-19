<div>

	<?php
	session_start();
 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }

        
        echo $_SESSION["name"];

	$sql = "select * from news where newsID = 1";
	$stmt = $pdo->query($sql);
	if($stmt->rowCount() > 0){
	    $list = $stmt->fetch(PDO::FETCH_ASSOC);  //解析数据
	}else{
	    die("没要有修改的数据");
	}
	echo $list['title'];
	echo $list['title'];
	echo $list['title'];
	echo $list['title'];
	echo $list['title'];
	?>
</div>