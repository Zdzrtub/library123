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
         session_start();
         $ssts=$_SESSION['ssts'];
        $servername='localhost';
        $username='root';
        $password='123456';
        $dbname='tsg';
        $con=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT * FROM tushu WHERE `????????????`='$ssts'";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res))
        {   
    ?>
        <div class="tp">
            <img src="tushu\<?php echo $row['????????????'] ?>" alt="">
        </div>
        <div class="js">
            <ul class="tsmc">
                <li>????????????:</li>
                <li><h2><?php echo $row['????????????'] ?></h2> </li>
            </ul>
            <ul class="zz">
                <li>??????:</li>
                <li><h4><?php echo $row['??????'] ?></h4> </li>
            </ul>
            <ul class="fbsj">
                <li>????????????:</li>
                <li><h6><?php echo $row['????????????'] ?></h6> </li>
            </ul>
        </div>
        <div class="fgx">
           <span>????????????</span> 
        </div>
        <div class="jj">
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['?????????'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['?????????'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['?????????'];?> </span><br><br></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row['?????????'];?> </span><br><br></li>
        </div>
        <?php
            }
        ?>
        
        
        
</div>
</body>
</html>
