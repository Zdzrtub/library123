<meta charset="UTF-8"/>
<?php 
    session_start();
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname='tsg';
    $con=new mysqli($servername,$username,$password,$dbname);
    if(isset($_POST['login'])){
		$username=$_POST['user'];
		$pwd=$_POST['pwd'];
		$usertype=$_POST['usertype'];
		if($usertype=='yonghu'){
			$sql="SELECT count(*) count FROM denglu ".
				"WHERE 账号='$username' && 密码='$pwd' ";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($res);
                if($row['count']==0)
				echo "非法用户，密码或账号错误";
			    else{
				$_SESSION['user']=$username;
				$_SESSION['usertype']=$usertype;
                echo "<script language=\"javascript\">window.open ('yonghu.php', '_parent')</script>";
			}
        }
        if($usertype=='guanli'){
			$sql="SELECT count(*) count FROM guanli ".
				"WHERE 账号='$username' && 密码='$pwd' ";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($res);
                if($row['count']==0)
				echo "非法用户，密码或账号错误";
			    else{
				$_SESSION['user']=$user;
				$_SESSION['usertype']=$usertype;
                echo "<script language=\"javascript\">window.open ('guanli.php', '_parent')</script>";
			}
        }
    } 
?>