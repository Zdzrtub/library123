<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
    <style>
        .shouye{
            background-color: rgb(243, 237, 226);
            position: absolute;
            width: 1500px;
            top: 0px;
            height: 550px;
        }
        ul{
            position: relative;
            left: 170px;
            display:inline
        }
        .zxc input{
            position: relative;
            width: 750px;
            left: -150px;
            border-radius: 8px;
            padding: 20px 25px; 
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s; 
            font-size: 20px;
        }
        .zxc input:focus {
            border: 3px solid #555;
        }
        li img{
            position: relative;
            width: 50px;
            height: 50px;
            top: 7px;
        }
        .ss{
            list-style:none;
            float:left;
        }
        li{
            float: left;
        }
        .qwe input{
            position: relative;
            font-size: 30px;
            width: 50xp;
            border-radius: 8px;
            border: 0px;
            font-size: 35px;
            top: -5px;
        }
        .qwe{
            position: relative;
            top: 1px;
            padding: 3px;
            right: 150px;
        }
        .qwe:hover{
            background-color: #f3a683;
            border-radius: 8px;
            height: 57px;
        }
        #asd{
            position: relative;
            top: 15px;
            padding: 5px;
            height: 90px;
            width: 1000px;
            left: 110px;
            background-color: bisque;
        }
        input{
            background-color: bisque;
        }
        #lbt{
            height: 360px;
            width: 1010px;
            position: relative;
            top: 40px;
            left: 80px;
        }
        #lbt img{
            position: relative;
            width: 650px;
            height: 360px;
            top: -6px;
        }
        #dy img{
            position: relative;
            height: 50px;
            width: 50px;
            top: -200px;
            left: 600px;
        }
        #dy img:hover{
            background-color: #ccc;
        }
        #xy img:hover{
            background-color: #ccc;
        }
        #xy img{
            position:relative;
            height: 50px;
            width: 50px;
            top: -255px;
        }
        .xw{
            width: 360px;
            height: 360px;
            position: relative;
            left: 710px;
            top: -355px;
        }
        .xw ul{
            list-style: none;
        }
        .xw li{
            width: 320px;
            position: relative;
            top: -20px;
            line-height: 55px;
        }
        .xw p{
            text-align: center;
            font-size: 35px;
        }
        .div{
            position: relative;
            left: 300px;
            top: -50px;
            line-height: 5px;
        }
        .li{
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .li a{
            text-decoration: none;
            color: black;
        }
        .li a:hover{
            text-decoration: underline;
            color: blue;

        }
        .tushusx{
            position: relative;
            top: -355px;
            height: 600px;
            background-color: rgb(243, 237, 226);
        }
        .fgx{
            background-color: wheat;
            position: relative;
            top: 50px;
            height: 40px;
        }
        .fgx span{
            position: relative;
            font-size: 25px;
            top: 5px;
            left: -300px;
        }
        .tushusx ul{
            list-style: none;
        }
        .rxtp{
            position: relative;
            top: 50px;
            padding-left: 50px;
            text-decoration: none;
            text-overflow: ellipsis;
        }
        .rxtp img{
            position: relative;
            top: 10px;
            width:95px;
            height:150px;
            left: -70px;

        }
        .rxmc{
            position: relative;
            top: 220px;
            left: -155px;
        }
        .rxmc a{
            text-decoration: none;
            color: black;
        }
        .fgxx{
            background-color: wheat;
            position: relative;
            top: -280px;
            height: 40px;
        }
        .fgxx span{
            position: relative;
            font-size: 25px;
            top: 5px;
            left: 45px;
        }
        .sxtp{
            position: relative;
            top: -250px;
            left: -50px;
        }
        .sxtp img{
            width:95px;
            height:150px;
            padding-left: 40px;
        }
        .sxmc{
            position: relative;
            top: -80px;
            left: -135px;
        }
        .sxmc a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="shouye">
        <div id="asd">
            <form action="shouye.php" method="post">
        <ul class="ss">
            <li class="zxc"> <input type="text" name="ssts" placeholder="请输入图书名称"> </li>
            <li class="qwe"> <img src="img/ss.png" alt=""><input type="submit" name="login" value="搜索"></li>
        </ul>
            </form>
            <?php
                 session_start();
                 $servername='localhost';
                 $username='root';
                 $password='123456';
                 $dbname='tsg';
                 $con=new mysqli($servername,$username,$password,$dbname);
                 if(isset($_POST['login'])){
                     $ssts=$_POST['ssts'];
                     $sql="SELECT * FROM tushu WHERE `图书名称`='$ssts'";
                     $res=mysqli_query($con,$sql);                        //发送数据库语句while($row=mysqli_fetch_assoc($res)){
                     $row=mysqli_fetch_assoc($res);
                     $_SESSION['ssts']=$ssts;
                     echo "<script language=\"javascript\">window.open ('ssts.php', '_self')</script>";
                 }
            ?>
        </div>
        <div id="lbt">
            <img :src=imgtp[index] alt="">
            <div id="dy" @click="dy" v-if="index!=4"><img src="img/大于号.png"></div>
            <div id="xy" @click="xy" v-if="index!=0"><img src="img/小于号.png"></div>
        </div>
            <div class="xw">
                <p>新闻</p>
                <ol>
                <?php
                $servername='localhost';
                $username='root';
                $password='123456';
                $dbname='tsg';
                $con=new mysqli($servername,$username,$password,$dbname);
                $sql="SELECT `新闻名`,链接,发布时间,numb FROM xw ORDER BY numb DESC LIMIT 0,5";
                $res=mysqli_query($con,$sql);            //发送数据库语句
                while($row=mysqli_fetch_assoc($res))
                {
                ?>
                <li class="li">
                <a href="xw.php?on=1&name=<?php echo $row['新闻名']?>"><?php echo $row['新闻名'] ?></a>
                </li>
                <div class="div"> <?php echo $row['发布时间']; ?></div>
                <?php
                }
                ?>
                </ol>
            </div>

            <div class="tushusx">
                <div class="fgx">
                    <span>热销图书</span>
                </div>
                <div class="rxsj">
                    <ul>
                    <?php
                        $servername='localhost';
                        $username='root';
                        $password='123456';
                        $dbname='tsg';
                        $con=new mysqli($servername,$username,$password,$dbname);
                        $sql="SELECT * from rxtushu ORDER BY id DESC LIMIT 0,5";
                        $res=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res))
                        {   
                    ?>
                        <li class="rxtp">
                            <a href="ts.php?on=1&name=<?php echo $row['图书名称']?>"><img src="rxtushu\<?php echo $row['图书封面']; ?>" alt=""></a>
                        </li>
                        <li class='rxmc'>
                            <a href="ts.php?on=1&name=<?php echo $row['图书名称']?>"><?php echo $row['图书名称'] ?></a>
                        </li>
                        <?php
                            }
                        ?>
                </ul>
                </div>
            </div>
            <!-- 上新图书 -->
            <div class="tushusx">
                <div class="fgxx">
                    <span>上新图书</span>
                </div>
                <div class="sxsj">
                    <ul>
                    <?php
                        $servername='localhost';
                        $username='root';
                        $password='123456';
                        $dbname='tsg';
                        $con=new mysqli($servername,$username,$password,$dbname);
                        $sql="SELECT * from sxtushu ORDER BY id DESC LIMIT 0,5";
                        $res=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_assoc($res))
                        {   
                    ?>
                        <li class="sxtp">
                            <a href="ts.php?on=1&name=<?php echo $row['图书名称']?>"><img src="sxtushu\<?php echo $row['图书封面']; ?>" alt=""></a>
                        </li>
                        <li class='sxmc'>
                            <a href="ts.php?on=1&name=<?php echo $row['图书名称']?>"><?php echo $row['图书名称'] ?></a>
                        </li>
                        <?php
                            }
                        ?>
                </ul>
                </div>
            </div>
        
    </div>
    <script>
        var a = new Vue({
            el:"#lbt",
            data:{
                imgtp:[
                "img/R-C.jpg",
                "img/tsg1.jpg",
                "img/tsg2.jpg",
                "img/tsg4.jpg",
                "img/tsg3.jpg"
                ],
                index:0,
            },
            methods:{
                dy:function(){
                    if(this.index<4){
                    this.index++
                }
                },
                xy:function(){
                    if(this.index>0){
                    this.index--
                }
                },
                
            }
        })
    </script>
</body>
</html>