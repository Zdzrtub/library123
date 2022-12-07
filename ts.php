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
        .bj{
            overflow-x: hidden;
        }
        .tp img{
            position: relative;
            left: 50px;
            top: 50px;
            width: 300px;
            height: 460px;
        }
        .js{
            position: relative;
            left: 370px;
            top: -450px;
            width: 800px;
        }
        .tsmc li{
            position: relative;
            left: 150px;
            display: inline-block;
            font-size: 30px;
            text-align: right;
            padding-right: 50px;
        }
        .zz li{
            position: relative;
            left: 150px;
            display: inline-block;
            font-size: 30px;
            margin-right:50px;
            padding-right: 50px;

        }
        .fbsj li{
            position: relative;
            left: 150px;
            display: inline-block;
            font-size: 30px;
            text-align: right;
            padding-right: 50px;

        }
        .fgx{
            background-color: wheat;
            position: relative;
            top: -300px;
            height: 40px;
        }
        .fgx span{
            background-color: wheat;
            position: relative;
            font-size: 25px;
            top: 5px;
            left: 45px;
        }
        .jj li{
            top: -250px;
            position: relative;
            display: inline-block;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="bj">
    <?php 
        $tushu=@$_GET['name'];
        $servername='localhost';
        $username='root';
        $password='123456';
        $dbname='tsg';
        $con=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT * FROM tushu WHERE `图书名称`='$tushu'";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res))
        {   
    ?>
        <div class="tp">
            <img src="tushu\<?php echo $row['图书封面'] ?>" alt="">
        </div>
        <div class="js">
            <ul class="tsmc">
                <li>图书名称:</li>
                <li><h2><?php echo $row['图书名称'] ?></h2> </li>
            </ul>
            <ul class="zz">
                <li>作者:</li>
                <li><h4><?php echo $row['作者'] ?></h4> </li>
            </ul>
            <ul class="fbsj">
                <li>发布时间:</li>
                <li><h6><?php echo $row['发布时间'] ?></h6> </li>
            </ul>
        </div>
        <div class="fgx">
           <span>内容简介</span> 
        </div>
        <div class="jj">
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['第一段'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['第二段'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['第三段'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['第四段'];?> </span><br><br></li>
        </div>
        <?php
            }
        ?>
        
        
        
</div>
</body>
</html>