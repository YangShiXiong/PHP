<?php
  try{
            $pdo = new PDO("mysql:dbname=user;host=127.0.0.1:3308","root","");
        }catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }
?>