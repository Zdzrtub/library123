<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            text-align: center;
            font-size: 30px;
            position: relative;
            left: 300px;
            top: 50px;
        }
        input{
            font-size: 30px;
        }
        .tx{
            position: relative;
            left: 100px;
        }
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        #dl{
            position: relative;
            left: 300px;
        }
    </style>
</head>
<body>
    <div class="quan">
        <div>
            <h1>个人信息修改</h1>
            <h3>上传图片请按照您要修改的名称命名后缀为.png</h3>
        </div>
    <form action="xiugai.php" method="post" enctype="multipart/form-data">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>头像：</td>
					<td class="tx"><input type="file" name="upload" class="qqq"/></td></tr>
				<tr><td>名称: </td>
					<td><input type="text" name="mc" class="qqq"/></td></tr>
                <tr><td>年龄: </td>
					<td><input type="text" name="age" class="qqq"/></td></tr>
                <tr><td>人生格言: </td>
					<td><input type="text" name="gy" class="qqq"/></td></tr>
				<tr><td colspan="2" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="修改完成" id="dl"/>
                    
				</td></tr>
			</table>
        </form>
        <form action="xiugai.php" method="post">
        <input type="submit" name="tc" value="返回" id="dl"/>
        <?php
        if(isset($_POST['tc'])){
            echo "<script language=\"javascript\">window.open ('yonghu.php', '_parent')</script>";
        }
        ?>
        </form>
    </div>
    <?php
        session_start();
        $user=$_SESSION['user'];
        $servername='localhost';
        $username='root';
        $password='123456';
        $dbname='tsg';
        $con=new mysqli($servername,$username,$password,$dbname);
        if(isset($_POST['login'])){
            $tx=$_POST['tx'];
            $mc=$_POST['mc'];
            $age=$_POST['age'];
            $gy=$_POST['gy'];
                $sql="UPDATE denglu SET `名称`='$mc',`头像`='$mc.png',`人生格言`='$gy',`年龄`='$age' WHERE `账号`='$user'";
                    $res=mysqli_query($con,$sql);
                    echo "<script>alert('个人信息修改成功!')</script>";
        }
        
        
        
    ?>
</body>
</html>
</body>
</html>
<?php
            if(isset($_FILES['upload']))
            {
                if($_FILES['upload']['error']!==0)
                {
                    echo "<script>alert('头像上传失败')</script>";
                }
                $save='./yonghu/'.$_FILES['upload']['name'];
                if(!move_uploaded_file($_FILES['upload']['tmp_name'],$save))
                {
                    echo "<script>alert('头像上传失败，无法保存到指定位置！')</script>";
                }
                echo "<script>alert('头像成功!')</script>";
            }
        ?>