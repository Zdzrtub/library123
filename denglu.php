<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tou{
            background-color: rgb(243, 237, 226);
            height: 1300px;
        }
        .dl{
            position: relative;
            background-color: wheat;
            height: 150px;
            width: 500px;
            left: 350px;
            top: 50px;
        }
        h1{
            text-align: center;
        }
        #dl:hover{
            background-color: orange;
        }
        #d2:hover{
            background-color: orange;
        }
        table{
            position: relative;
            left: 350px;
            /* top: 100px; */
            background-color: wheat;
            height: 500px;
            width: 500px;
        }
        td{
            padding-bottom: 20px;
            padding-right: 10px;
        }
        tr{
            font-size: 30px;
        }
        .qqq{
            border: none;
            border-bottom: 2px black solid;
            background-color: wheat;
        }
        input{
            font-size: 30px;
        }
        #dl{
            border-radius: 10px;
            border: none;
            background-color: wheat;
        }
        #d2{
            border-radius: 10px;
            border: none;
            background-color: wheat;
        }
    </style>
</head>
<body>
<div class="tou">
    <div class="dl">
        <h1>用户登录</h1>
        </div>
        <form action="on_login_posted.php" method="post">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>电话号:</td>
					<td><input type="text" name="user" class="qqq"/></td></tr>
				<tr><td>密码: </td>
					<td><input type="password" name="pwd" class="qqq"/></td></tr>
				<tr><td>类型:</td>
					<td><input type="radio" name="usertype" checked="checked" value="yonghu"/>用户
					<input type="radio" name="usertype" value="guanli"/>管理员</td></tr>
				<tr><td colspan="2" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="登录" id="dl"/>
					<input type="submit" name="exit" value="退出" id="d2"/>
				</td></tr>
			</table>
        </form>
    
</div>    
</body>
</html>
