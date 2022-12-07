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
        <h1>用户注册</h1>
        </div>
        <form action="zc.php" method="post">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr><td>名称:</td>
					<td><input type="text" name="mingzi" class="qqq" maxlength="5" placeholder="不得超过5个字" /></td></tr>
                <tr><td>邮箱:</td>
					<td><input type="text" name="youxiang" class="qqq"/></td></tr>
                <tr><td>电话号:</td>
					<td><input type="text" name="dianhua" class="qqq" maxlength="11"/></td></tr>
				<tr><td>密码: </td>
					<td><input type="text" name="pwd" class="qqq" maxlength="20" placeholder="不得超过20个"/></td></tr>
                <tr><td>身份证:</td>
					<td><input type="text" name="sfz" class="qqq" maxlength="18"/></td></tr>
				<tr><td colspan="2" align="center" style="line-height: 60px;">
					<input type="submit" name="login" value="注册" id="dl"/>
				</td></tr>
			</table>
        </form>
    
</div>    
</body>
</html>