<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quan{
            background-color: rgb(243, 237, 226);
            height: 1300px;
            position: relative;
            top: -20px;
        }
        h1{
            position: relative;
            top: 50px;
            text-align: center;
        }
        table{
            position: relative;
            top: 100px;
            left: 370px;
        }
        td{
            padding-bottom: 20px;
            font-size: 25px;
        }
        input{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="quan">
        <h1>借\还书管理</h1>
        <form action="jh.php" method="post">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>图书名称:</td>
					<td><input type="text" name="tsmc" class="qqq"/></td></tr>
				<tr><td>身份证: </td>
					<td><input type="text" name="sfz" class="qqq"/></td></tr>
                <tr><td>手机号: </td>
					<td><input type="text" name="sjh" class="qqq"/></td></tr>
                <tr><td>最迟还书时间: </td>
					<td><input type="date" name="sjj" class="qqq"/></td></tr>
                    <td><input type="radio" name="usertype" checked="checked" value="jie"/>借书
					<input type="radio" name="usertype" value="huan"/>还书</td></tr>
				<tr><td colspan="1" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="完成" id="dl"/>
				</td></tr>
			</table>
        </form>
    </div>
</body>
</html>
<?php 
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname='tsg';
    $con=new mysqli($servername,$username,$password,$dbname);
    if(isset($_POST['login'])){
		$tsmc=$_POST['tsmc'];
		$sfz=$_POST['sfz'];
		$sjh=$_POST['sjh'];
        $sj=$_POST['sjj'];
        $usertype=$_POST['usertype'];
		if($usertype=='jie'){
			$sql="INSERT INTO jieshu (图书名称,身份证,电话号,状态,时间) VALUES ('$tsmc','$sfz','$sjh','借书','$sj')";
                $res=mysqli_query($con,$sql);
                echo "<script>alert('借书登记完成!')</script>";
			}
        if($usertype=='huan'){
			$sql="UPDATE jieshu SET `状态`='已归还' WHERE `身份证`='$sfz' && `图书名称`='$tsmc' ";
                $res=mysqli_query($con,$sql);
                echo '<script>alert("还书登记完成！")</script>';
			}
        } 
        ?>