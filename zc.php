<meta charset="UTF-8">
<?php
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname='tsg';
    $con=new mysqli($servername,$username,$password,$dbname);
    if(isset($_POST['login'])){
		$mingzi=$_POST['mingzi'];
		$pwd=$_POST['pwd'];
		$youxiang=$_POST['youxiang'];
        $dianhua=$_POST['dianhua'];
        $sfz=$_POST['sfz'];
		$sql="INSERT INTO denglu (名称,账号,密码,身份证,邮箱) VALUES ('$mingzi','$dianhua','$pwd','$sfz','$youxiang')";
            $res=mysqli_query($con,$sql);
            // $row=mysqli_fetch_assoc($res);
				$_SESSION['user']=$user;
				$_SESSION['usertype']=$usertype;
                echo "注册成功";
			}
?>