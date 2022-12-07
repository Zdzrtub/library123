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
    $numb=@$_GET['name'];
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname='tsg';
    $con=new mysqli($servername,$username,$password,$dbname);
    $sql="SELECT 新闻内容,numb,新闻名 FROM xw WHERE `新闻名`='$numb'";
    echo $sql;
    $res=mysqli_query($con,$sql);                        //发送数据库语句while($row=mysqli_fetch_assoc($res)){
    while($row=mysqli_fetch_assoc($res))
    {
?>                        
    <li> <span><?php echo $row['新闻内容'];?> </span></li>
    <?php
     }
    ?>
</body>
</html>