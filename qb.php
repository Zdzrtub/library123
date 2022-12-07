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
        }
        .bt{
            position: relative;
            text-align: center;
            top: 30px;
        }
        table{
            position: relative;
            top: 50px;
            left: 300px;
        }
        td{
            font-size: 30px;
            padding-bottom: 30px;
        }
        input{
            font-size: 30px;
        }
        .an{
            position: relative;
            left: 150px;
        }
        .wc{
            position: relative;
            left: 200px;
            height: 50px;
            width: 200px;
        }
        .ts{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="quan">
        <div class="bt">
            <h1>全部图书管理</h1>
        </div>
        <div class="ts">
            <h3>删除图书只需要写入图书的名称！</h3>
            <h3>图片封面名称：图书名称.png</h3>
        </div>
        <form action="qb.php" method="post" enctype="multipart/form-data">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>图书名称:</td>
					<td><input type="text" name="tsmc" class="qqq"/></td></tr>
                <tr><td>作者:</td>
					<td><input type="text" name="zz" class="qqq"/></td></tr>
                <tr><td>发布时间:</td>
					<td><input type="text" name="sj" class="qqq"/></td></tr>
                <tr><td>图书封面:</td>
					<td><input type="file" name="upload" class="qqq"/></td></tr>
                <tr><td>简介第一段: </td>
                    <td><textarea type="textarea" rows="8" cols="80" name="dyd" class="qqq"></textarea></td></tr>
                <tr><td>简介第二段: </td>
                    <td><textarea type="textarea" rows="8" cols="80" name="ded" class="qqq"></textarea></td></tr>
                <tr><td>简介第三段: </td>
                    <td><textarea type="textarea" rows="8" cols="80" name="dsd" class="qqq"></textarea></td></tr>
                <tr><td>简介第四段: </td>
                    <td><textarea type="textarea" rows="8" cols="80" name="dssd" class="qqq"></textarea></td></tr>
                <tr><td class="an"><input type="radio" name="usertype" checked="checked" value="tian"/>添加</td>
					<td class="an"><input type="radio" name="usertype" value="shan" class="shan"/>删除</td></tr>
				<tr><td colspan="1" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="完成" id="dl" class="wc"/>
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
        $zz=$_POST['zz'];
		$sj=$_POST['sj'];
		$dyd=$_POST['dyd'];
        $ded=$_POST['ded'];
        $dsd=$_POST['dsd'];
        $dssd=$_POST['dssd'];
        $usertype=$_POST['usertype'];
		if($usertype=='tian'){
			$sql="INSERT INTO tushu (图书名称,作者,发布时间,图书封面,第一段,第二段,第三段,第四段) VALUES ('$tsmc','$zz','$sj','$tsmc.png','$dyd','$ded','$dsd','$dssd');";
                $res=mysqli_query($con,$sql);
                echo "<script>alert('添加书籍成功!')</script>";
			}
        if($usertype=='shan'){
			$sql="DELETE from tushu WHERE 图书名称='$tsmc'";
                $res=mysqli_query($con,$sql);
                echo '<script>alert("删除图书完成！")</script>';
			}
        } 
        ?>
        <?php
            if(isset($_FILES['upload']))
            {
                if($_FILES['upload']['error']!==0)
                {
                    echo "<script>alert('上传失败')</script>";
                }
                $save='./tushu/'.$_FILES['upload']['name'];
                if(!move_uploaded_file($_FILES['upload']['tmp_name'],$save))
                {
                    echo "<script>alert('上传失败，无法保存到指定位置！')</script>";
                }
                echo "<script>alert('上传图片成功!')</script>";
            }
        ?>