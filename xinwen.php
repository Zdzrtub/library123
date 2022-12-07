
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
        .gd{
            overflow-x: hidden;
        }
        .xw{
            position: relative;
            height:60px;
            
        }
        .xw a{
            position: relative;
            text-decoration: none;
            font-size: 20px;
            top: 50px;
            color: black;
        }
        .xw a:hover{
            color: blue;
            text-decoration: underline;
        }
        .time{
            position: relative;
            left: 1000px;
            top: -15px;
        } 
    </style>
</head>
<body>
    <div class="gd">
    <?php
                    ob_start();
                    session_start();
                    $servername='localhost';
                    $username='root';
                    $password='123456';
                    $dbname='tsg';
                    $con=new mysqli($servername,$username,$password,$dbname);
                    $sql="SELECT `新闻名`,链接,发布时间,numb FROM xw order by numb desc";
                    $res=mysqli_query($con,$sql);            //发送数据库语句
            		while($row=mysqli_fetch_assoc($res))
                    {
                ?>
                <div class="xw">
                <a href="xw.php?on=1&name=<?php echo $row['新闻名']?>"><?php echo $row['新闻名'] ?></a>
                </div>
                    <div class="time"><?php echo $row['发布时间']; ?></div>
                
                <?php
                    }
                ?>
</div>
</body>
</html>