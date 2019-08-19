<?php
	 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }


        $sectionID=$_POST['sectionID'];
        $sectionName=$_POST['sectionName'];
        $description=$_POST['description'];

     $sql1 = "INSERT INTO section(sectionID,sectionName,description) VALUES('$sectionID','$sectionName','$description')";

        $res1 = $pdo->exec($sql1);
        if($res1){
            if ($sectionID) {
                echo "<script>alert('section添加成功！');  window.location='personal.php';</script>";
            }
        }else{
            echo "<script>alert('section添加失败！'); window.history.back();</script>";
        }


        $newsID = $_POST['newsID'];
        $section = $_POST['section'];
        $title = $_POST['title'];
        $author = $_POST['author']; 
        $content = $_POST['content'];
        $keyWords = $_POST['keyWords'];
        $submitDate = date('Y-m-d h:i:s');
        $clickedTimes = $_POST['clickedTimes']; 
        $picture = $_POST['picture'];
   

        $sql1 = "INSERT INTO news(newsID,section,title,author,content,keyWords,submitDate,clickedTimes,picture) VALUES('$newsID','$section','$title','$author','$content','$keyWords','$submitDate','$clickedTimes','$picture')";

        $res1 = $pdo->exec($sql1);
        if($newsID){
            
                echo "<script>alert('news添加成功！');  window.location='personal.php';</script>";
            }
        else{
            echo "<script>alert('news添加失败！'); window.history.back();</script>";
        }
?>