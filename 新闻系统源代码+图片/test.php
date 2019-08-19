 <?php
 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }
  //生成随机数来进行选择那一条新闻      
  $sql8 = "select * from news where newsID = 1";
 

  $stmt8 = $pdo->query($sql8);
 

  $list8 = $stmt8->fetch(PDO::FETCH_ASSOC);
  print_r($list8);

  
  ?>