<?php
	 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }

        $memberID = $_POST['memberID'];
        $loginName = $_POST['loginName'];
        $loginPwd = $_POST['loginPwd'];
        $realname = $_POST['realname']; 
        $email = $_POST['email'];
        $sql1 = "INSERT INTO member(memberID,loginName,loginPwd,realname,email) VALUES('$memberID','$loginName','$loginPwd','$realname','$email')";

        $res1 = $pdo->exec($sql1);
        if($res1){
            if($memberID){
                echo "<script>alert('注册成功！');  window.location='login1.php';</script>";
            }
            else{
                echo "<script>alert('注册失败！'); window.history.back();</script>";
            }
        }else{
            echo "<script>alert('注册失败！'); window.history.back();</script>";
        }
?>