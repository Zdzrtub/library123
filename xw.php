<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: rgb(243, 237, 226);
        }
        .bt{
            text-align: center;
        }
        .nr{
            position: relative;
            top: 50px;
        }
        .time{
            position: relative;
            top: 100px;
            left: 900px;
        }
        .gd{
            overflow-x: hidden;
            height: 1400px;
        }
    </style>
</head>
<body>
    <div class="gd">
    <?php
    $numb=@$_GET['name'];
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname='tsg';
    $con=new mysqli($servername,$username,$password,$dbname);
    $sql="SELECT 新闻内容第一段,新闻内容第二段,新闻内容第三段,新闻内容第四段,numb,新闻名,发布时间 FROM xw WHERE `新闻名`='$numb'";
    $res=mysqli_query($con,$sql);                        //发送数据库语句while($row=mysqli_fetch_assoc($res)){
    while($row=mysqli_fetch_assoc($res))
    {
?>   
    <div class="bt">
        <h2><?php echo $row['新闻名'] ?></h2>
    </div>
    <div class="nr">            
    &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['新闻内容第一段'];?> </span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['新闻内容第二段'];?> </span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['新闻内容第三段'];?> </span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['新闻内容第四段'];?> </span><br><br>
    </div>
    <div class="time">
        发布时间：<?php echo $row{'发布时间'} ?><br>
        发布单位：Z市图书馆
    </div>
    <?php
     }
    ?>
</div>
</body>
</html>