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
        h1{
            position: relative;
            top: 20px;
            text-align: center;
        }
        td{
            font-size: 30px;
            padding-bottom: 50px;
        }
        table{
            position: relative;
            left: 350px;
            top: 50px;
        }
        input{
            font-size: 30px;
        }
        .wc{
            position: relative;
            left: 150px;
        }
        .an{
            position: relative;
            left: 100px;
        }
        .ts{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="quan">
        <div class="bt">
            <h1>图书上新</h1>
        </div>
        <div class="ts">
            <h3>删除图书只需要写入图书的名称！</h3>
            <h3>图片封面名称：图书名称.png</h3>
        </div>
        <!--   -->
        <form action="sx.php" method="post" enctype="multipart/form-data">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>图书名称:</td>
					<td><input type="text" name="tsmc" class="qqq"/></td></tr>
                <tr><td>作者:</td>
					<td><input type="text" name="zz" class="qqq"/></td></tr>
                <tr><td>图书封面:</td>
					<td><input type="file" name="upload" class="qqq"/></td></tr> 
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
        $usertype=$_POST['usertype'];
		if($usertype=='tian'){
			$sql="INSERT INTO sxtushu (图书名称,作者,图书封面) VALUES ('$tsmc','$zz','$tsmc.png')";
            echo $sql;
                $res=mysqli_query($con,$sql);
                echo "<script>alert('图书上新登记完成!')</script>";
			}
        if($usertype=='shan'){
			$sql="DELETE from sxtushu WHERE 图书名称='$tsmc' ";
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
                $save='./sxtushu/'.$_FILES['upload']['name'];
                if(!move_uploaded_file($_FILES['upload']['tmp_name'],$save))
                {
                    echo "<script>alert('上传失败，无法保存到指定位置！')</script>";
                }
                echo "<script>alert('上传图片成功!')</script>";
            }
        ?>
        