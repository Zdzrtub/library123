<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quan{
            height: 1300px;
            background-color: rgb(243, 237, 226);
        }
        table{
            font-size: 30px;
            position: relative;
            left: 350px;
            top: 50px;
        }
        td{
            padding-bottom: 20px;
        }
        h1{
            text-align: center;
        }
        .sc{
            padding-left: 50px;
        }
        h3{
            text-align: center;
        }
        .wc{
            width: 150px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="quan">
        <div class="bt"><h1>新闻添加</h1></div>
        <div> <h3>删除时只需要提交新闻名称即可删除！</h3> </div>
        <div class="bd">
        <form action="xwtj.php" method="post">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>新闻名称:</td>
					<td><input type="text" name="xwmc" class="qqq"/></td></tr>
                <tr><td>时间:</td>
					<td><input type="date" name="sj" class="qqq"/></td></tr>
				<tr><td>新闻内容第一段: </td>
					<td><textarea type="textarea" rows="10" cols="50" name="dyd" class="qqq"></textarea></td></tr>
                <tr><td>新闻内容第二段: </td>
                    <td><textarea type="textarea" rows="10" cols="50" name="ded" class="qqq"></textarea></td></tr>
                <tr><td>新闻内容第三段: </td>
                    <td><textarea type="textarea" rows="10" cols="50" name="dsd" class="qqq"></textarea></td></tr>
                <tr><td>新闻内容第四段: </td>
                    <td><textarea type="textarea" rows="10" cols="50" name="dssd" class="qqq"></textarea></td></tr>
                <tr><td><input type="radio" name="usertype" checked="checked" value="tian"/>添加</td>
					<td><input type="radio" name="usertype" value="shan" class="shan"/>删除</td></tr>
				<tr><td colspan="1" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="完成" id="dl" class="wc"/>
				</td></tr>
			</table>
        </form>
        </div>
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
		$xwmc=$_POST['xwmc'];
		$sj=$_POST['sj'];
		$dyd=$_POST['dyd'];
        $ded=$_POST['ded'];
        $dsd=$_POST['dsd'];
        $dssd=$_POST['dssd'];
        $usertype=$_POST['usertype'];
		if($usertype=='tian'){
			$sql="INSERT INTO xw (新闻名,新闻内容第一段,新闻内容第二段,新闻内容第三段,新闻内容第四段,发布时间) VALUES ('$xwmc','$dyd','$ded','$dsd','$dssd','$sj')";
                $res=mysqli_query($con,$sql);
                echo "<script>alert('发布新闻成功!')</script>";
			}
        if($usertype=='shan'){
			$sql="DELETE from xw WHERE 新闻名='$xwmc'";
                $res=mysqli_query($con,$sql);
                echo '<script>alert("删除新闻完成！")</script>';
			}
        } 
        ?>