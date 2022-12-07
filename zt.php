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
            text-align: center;
        }
        form table{
            font-size: 30px;
        }
        form td{
            position: relative;
            left: 300px;
            font-size: 30px;
        }
        form input{
            position: relative;
            left: -100px;
            font-size: 30px;
        }
        .cx{
            position: relative;
            padding-top: 50px;
            left: 600px;
        }
        .ts{
            position: relative;
            left: 20px;
            padding: 0px;
            margin: 0px;
        }
        .sf{
            position: relative;
            left: 310px;
            padding: 0px;
            margin: 0px;
        }
        .dh{
            position: relative;
            left: 580px;
        }
        .zt{
            position: relative;
            left: 750px;
        }
        .tss{
            position: relative;
            left: 20px;
            padding: 0px;
            margin: 0px;
        }
        .sff{
            position: fixed;
            left: 440px;
            padding: 0px;
            margin: 0px;
        }
        .dhh{
            position: fixed;
            left: 790px;
            padding: 0px;
            margin: 0px;
        }
        .ztt{
            position: fixed;
            left: 1060px;
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>
<body>
    <div class="quan">
        <div>
            <h1>图书状态查询</h1>
        </div>
        <form action="zt.php" method="post">
        <table border="0" cellspacing="0" cellpadding="0">
        <tr><td>输入身份证:</td>
			<td><input type="text" name="sfz" class="qqq"/></td>
            <td><input type="submit" name="sfzcx" value="查询" id="dl" class="sfzcx"/></td>
        </tr>
        <tr><td colspan="1" align="center" style="line-height: 60px;" class="cx">
			<input type="submit" name="login" value="查询全部未还书名单" id="dl" class="wc"/>
			</td>
        </tr>
        </table>
        <?php
            $numb=@$_GET['name'];
            $servername='localhost';
            $username='root';
            $password='123456';
            $dbname='tsg';
            $con=new mysqli($servername,$username,$password,$dbname);
            if(isset($_POST['sfzcx'])){
                $sfz=$_POST['sfz'];
                $sql="SELECT `图书名称`,身份证,电话号,状态 FROM jieshu WHERE `身份证`='$sfz' && `状态`='借书'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res))
                    {
            ?>   
                <div class="sfz">
                    <table class="xss" border="0" cellspacing="0" cellpadding="0">
                        <tr> 
                            <td class="ts">图书名称</td>
                            <td class="sf">身份证</td>
                            <td class="dh">电话号</td>
                            <td class="zt">状态</td>
                            </tr>
                        </table>
                            <table>
                            <tr>
                                <td class="tss"><?php echo $row['图书名称'] ?></td>
                                <td class="sff"><?php echo $row['身份证'] ?></td>
                                <td class="dhh"><?php echo $row['电话号'] ?></td>
                                <td class="ztt"><?php echo $row['状态'] ?></td>
                            </tr>
                        </table>
                </div>
            <?php
                };
                };
            ?>


            <?php
                if(isset($_POST['login'])){
                    $sql="SELECT `图书名称`,身份证,电话号,状态 FROM jieshu WHERE `状态`='借书'";
                    $res=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($res))
                        {
                ?>   
                    <div class="sfz">
                        <table class="xss" border="0" cellspacing="0" cellpadding="0">
                            <tr> 
                            <td class="ts">图书名称</td>
                            <td class="sf">身份证</td>
                            <td class="dh">电话号</td>
                            <td class="zt">状态</td>
                            </tr>
                        </table>
                            <table>
                            <tr>
                                <td class="tss"><?php echo $row['图书名称'] ?></td>
                                <td class="sff"><?php echo $row['身份证'] ?></td>
                                <td class="dhh"><?php echo $row['电话号'] ?></td>
                                <td class="ztt"><?php echo $row['状态'] ?></td>
                            </tr>
                        </table>
                    </div>
                <?php
                    };
                    };
                    
                ?>
    </div>
</body>
</html>