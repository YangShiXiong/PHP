<?php
session_start();

        //链接数据库
        try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }
        
        //查询会员信息
        $sql = "select * from member";
        $sqladmin = "select * from admin";
        

        $result = $pdo->query($sql);

        $resultadmin = $pdo->query($sqladmin);

        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username)||empty($password)){
             echo "<script>alert('请完整的输入密码');</script>";
              echo "<script>window.location='login1.php';</script>";
        }
        else {
            foreach ($result as $row) {

                if(($row['loginName']==$username)&&($row['loginPwd']==$password)){
                     $_SESSION["name"]=$username;
                    echo "<script>window.location='personal.php';</script>";
                    }
                }

                foreach ($resultadmin as $rowadmin) {

                if(($rowadmin['loginName']==$username)&&($rowadmin['loginPwd']==$password)){
                     $_SESSION["name"]=$username;
                    echo "<script>window.location='adminpersonal.php';</script>";
                    }
                }
                 echo "<script>alert('账号或密码错误');</script>";
                 echo "<script>window.location='login1.php';</script>";
        }

?>
