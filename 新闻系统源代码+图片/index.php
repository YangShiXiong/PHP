<div>
  <?php
 try{
            $pdo = new PDO("mysql:dbname=webnews;host=127.0.0.1:3308","root","");
        }
        catch(PDOException $e){
            die("数据库链接失败".$e->getMessage());
        }
  //生成随机数来进行选择那一条新闻      
  $arr=array();
  $count1=0;
  $count = 0;
  $return = array();
  while ($count < 8) 
   {
   $return[] = mt_rand(1,14);
   $return = array_flip(array_flip($return));
   $count = count($return);
   } 
  $arr=array_values($return);// 获得数组的值    
  $num1 = $arr[0];
  $num2 = $arr[1];
  $num3 = $arr[2];
  $num4 = $arr[3];
  $num5 = $arr[4];
  $num6 = $arr[5];
  $num7 = $arr[6];
  $num8 = $arr[7];



  $sql7 = $list7 = array();     

  $sql8 = "select * from news where newsID = $num1";
  $sql9 = "select * from news where newsID = $num2";
  $sql10 = "select * from news where newsID = $num3";
  $sql11 = "select * from news where newsID = $num4";
  $sql12 = "select * from news where newsID = $num5";
  $sql13 = "select * from news where newsID = $num6";
  $sql14 = "select * from news where newsID = $num7";
  $sql15 = "select * from news where newsID = $num8";

  $stmt8 = $pdo->query($sql8);
  $stmt9 = $pdo->query($sql9);
  $stmt10 = $pdo->query($sql10);
  $stmt11 = $pdo->query($sql11);
  $stmt12 = $pdo->query($sql12);
  $stmt13 = $pdo->query($sql13);
  $stmt14 = $pdo->query($sql14);
  $stmt15 = $pdo->query($sql15);

  $list8 = $stmt8->fetch(PDO::FETCH_ASSOC);
  $list9 = $stmt9->fetch(PDO::FETCH_ASSOC);
  $list10 = $stmt10->fetch(PDO::FETCH_ASSOC);
  $list11 = $stmt11->fetch(PDO::FETCH_ASSOC);
  $list12 = $stmt12->fetch(PDO::FETCH_ASSOC);
  $list13 = $stmt13->fetch(PDO::FETCH_ASSOC);
  $list14 = $stmt14->fetch(PDO::FETCH_ASSOC);
  $list15 = $stmt15->fetch(PDO::FETCH_ASSOC);
  
  ?>
</div>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>智瀚体育</title>
<style>
      * {
        box-sizing: border-box;
      }
       
      body {
        font-family: Arial;
        padding: 5px;
        background: #CCDDFF;
      }
       
      /* 头部标题 */
      .header {
        padding: 30px;
        text-align: center;
        background: #CCEEFF;
        background: url(index.jpg);  
        width: 100%;
        background-size:cover;
      }
       
      .header h1 {
        font-size: 50px;
      }
       
      /* 导航条 */
      .topnav {
        overflow: hidden;
        background-color: #333;
      }
       
      /* 导航条链接 */
      .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
       
      /* 链接颜色修改 */
      .topnav a:hover {
        background-color: #4CAF50;
        color: black;
      }
       
      /* 创建两列 */
      /* Left column */
      .leftcolumn {
        /* padding: 5px;*/
        float: left;
        width: 25%;
         padding-left: 10px;
      }
      /*中间栏*/
      .midl{
      
        float: left;
        width: 25%;
         padding-left: 20px;
      }
      .midr{
      
        float: left;
        width: 25%;
         padding-left: 20px;
      }

       
      /* 右侧栏 */
      .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 25px;
      }
       
      /* 图像部分 */
      .fakeimg {
      	background-color: #ccc;
        width: 100%;
        padding: 20px;
      }
       
      /* 文章卡片效果 */
      .card {
        background-color: #FFFFFF ;
        height: 480px;
        padding: 20px;
        margin-top: 20px;
      }
       
      /* 列后面清除浮动 */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
       
      /* 底部 */
      .footer {
        padding: 20px;
        text-align: center;
        background: #FFF0F5;
        margin-top: 20px;
      }
      .a1{
        max-height: 200px;
        width: 100%;

      }
      div.desc {
        padding: 15px;
        text-align: center;
      }


      /* 响应式布局 - 屏幕尺寸小于 800px 时，两列布局改为上下布局 */
      @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {   
          width: 100%;
          padding: 0;
        }
      }
       
      /* 响应式布局 -屏幕尺寸小于 400px 时，导航等布局改为上下布局 */
      @media screen and (max-width: 400px) {
        .topnav a {
          float: none;
          width: 100%;
        }
      }
      </style>
      </head>
      <body>

      <div class="header">
      	<h1>智瀚体育</h1>
      	<p>智瀚体育，为你提供最新事件</p>
      </div>
      <div class="topnav">
        <a href="index.php">主页</a>
        <a href="http://www.huntersun.cc/">关于我</a>
        <a href="index.php" >换一换</a>
        <a href="login1.php" style="float:right">登录</a>
      </div>


      <div class="row">
        <div class="leftcolumn">
          <div class="card">
        <h2><?php echo $list8['title']?></h2>
            <h5><?php echo $list8['submitDate']?></h5>
                      <a  href="https://news.zhibo8.cc/nba/2019-08-05/5d477079830ec.htm" target="_blank"><IMG src=" <?php echo $list8['picture']?>.jpg" style="background-size: cover; max-height: 300px;width: 90%;"></a>
            <p>作者：<?php echo $list8['author']?></p>
            <p><?php echo $list8['title']?></p>
          </div>

          <div class="card">
            <h2><?php echo $list9['title']?></h2>
            <h5><?php echo $list9['submitDate']?></h5>
            <a  href="https://news.zhibo8.cc/nba/2019-08-06/5d48f4dd0894d.htm" target="_blank"><IMG src=" <?php echo $list9['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p><?php echo $list9['author']?></p>
            <p><?php echo $list9['content']?></p>
          </div>



        </div>
        <div class="row">
        <div class="midl">
          <div class="card">
        <h2><?php echo $list10['title']?></h2>
            <h5><?php echo $list10['submitDate']?></h5>
              <a  href="https://news.zhibo8.cc/nba/2019-08-05/5d47077b476d8.htm" target="_blank"><IMG src=" <?php echo $list10['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p>作者： <?php echo $list10['author']?></p>
            <p><?php echo $list10['title']?></p>
          </div>
          <div class="card">
            <h2><?php echo $list11['title']?></h2>
            <h5><?php echo $list11['submitDate']?></h5>
            <a  href="https://news.zhibo8.cc/nba/2019-08-06/5d49271ab0ec4.htm" target="_blank"><IMG src=" <?php echo $list11['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p>作者：<?php echo $list11['author']?></p>
            <p><?php echo $list11['content']?></p>
          </div>

        </div>

         <div class="row">
        <div class="midr">
          <div class="card">
        <h2><?php echo $list12['title']?></h2>
            <h5><?php echo $list12['submitDate']?></h5>
             <a  href="https://news.zhibo8.cc/nba/2019-08-06/5d48c70d31d7e.htm" target="_blank"><IMG src=" <?php echo $list12['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
          
      
            <p>作者：<?php echo $list12['author']?></p>
            <p><?php echo $list12['content']?></p>
          </div>
          <div class="card">
            <h2><?php echo $list13['title']?></h2>
            <h5><?php echo $list13['submitDate']?></h5>
            <a  href="https://news.zhibo8.cc/nba/2019-08-05/5d47e0b64dfa5.htm" target="_blank"><IMG src=" <?php echo $list13['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p>作者：<?php echo $list13['author']?></p>
            <p><?php echo $list13['content']?></p>
          </div>



        </div>
        <div class="rightcolumn">
         <div class="card">
          <h2><?php echo $list14['title']?></h2>
            <h5><?php echo $list14['submitDate']?></h5>
             <a  href="https://news.zhibo8.cc/nba/2019-08-05/5d47635262ed9.htm" target="_blank"><IMG src=" <?php echo $list14['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p>作者：<?php echo $list14['author']?></p>
            <p><?php echo $list14['content']?></p>
          </div>
          <div class="card">
           <h2><?php echo $list15['title']?></h2>
            <h5><?php echo $list15['submitDate']?></h5>
             <a  href="https://news.zhibo8.cc/nba/2019-08-06/5d4856e88d677.htm" target="_blank"><IMG src=" <?php echo $list15['picture']?>.jpg" style="background-size: cover; max-height: 200px;width: 90%;"></a>
            <p>作者：<?php echo $list15['author']?></p>
            <p><?php echo $list15['content']?></p>
          </div>
        </div>
      </div>

<div class="footer">
  <h3>联系电话: 0855-8888   Emial: ZH888888@163.com    地址: 凯里互联网众产业区</h3>
</div>

</body>
</html>