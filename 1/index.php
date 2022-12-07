<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $servername='localhostt';
     $username='root';
     $password='123456';
     $dbname='tsg';
     $con=new mysqli($servername,$username,$password,$dbname);
    $sql="SELECT `新闻名`,链接,发布时间,numb FROM xw ORDER BY numb DESC LIMIT 0,5";
    $res=mysqli_query($con,$sql);            //发送数据库语句
    while($row=mysqli_fetch_assoc($res))
    {
?>
    <a href="index2.php?on=1&name=<?php echo $row['新闻名']?>"><?php echo $row['新闻名'] ?></a>
<?php
    }
?>
</body>
</html>