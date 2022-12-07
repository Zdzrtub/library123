<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="vue.js"></script>
    <link rel="stylesheet" href="yonghu.css" type="text/css">
    <style>
      #dibu{
    position: relative;
    top: -10px;
    height: 50px;
    background-color:darkgrey;
    z-index: -1;
    width: 1473px;
    left: 65px;
    }
    #dibu span{
      position: relative;
      left: 550px;
      font-size: 20px;
    }
    .qqq{
      position: relative;
      left: 50px;
    }
    .mc{
        position: relative;
        left: 500px;
        /* background-color: red; */
        height: 50px;
        width: 50px;
    }
    .gr{
      width: 100px;
      position: relative;
      left: 670px;
      top: 20px;
      font-size: 20px;
      color: white;
    }
    .tx{
      width: 30px;
      height: 30px;
      position: relative;
      left: 630px;
      top: 12px;
      border-radius: 10px;
    }
    </style>
</head>
<body>

<?php 
        session_start();
        $servername='localhost';
        $username='root';
        $password='123456';
        $dbname='tsg';
        $user=$_SESSION['user'];
        $con=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT 名称,头像  FROM denglu ".
				"WHERE 账号='$user'";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($res);
    ?>
    <div id="a">
        <div id="broadside">                    <!--侧边栏-->
          <div id="rxx">
            <img src="img\telephone.png" alt="" id="dh">
            <span id="rx">热线:100-100-100<br/>人工客服:200-200-200</span>
          </div>
          <div id="wbb">
           <img src="img\wb.png" alt="" id="wb">
           <img src="img\ewm.png" alt="" id="weib">
          </div>
          <div id="gzhh">
           <img src="img\gzh.png" alt="" id="gzh">
           <img src="img\ewm.png" alt="" id="gongzh">
          </div>
          <div id="dyy">
           <img src="img\dy.png" alt="" id="dy">
           <img src="img\ewm.png" alt="" id="douy">
          </div>
          <div id="bzz">
           <img src="img\bz.png" alt="" id="bz">
           <img src="img\ewm.png" alt="" id="biz">
          </div>
          
        </div> 
        <div id="aa"></div>
        <div id="navigation">
        <ul id="app">
            <li><span>Z市图书馆</span></li>
            <li v-for="(data,index) in datalist"> 
              <a href="#" :target="frame1"  :class="current==index? 'active':'' " @click="dianji(index)">{{ data }}</a> <!--current=0 index等于0 所以运行active 两者不相等不运行active 为空-->
            </li> 
            <li class="gr"><?php echo $row['名称'] ?></li>
            <table >
              <td><img src="./yonghu/<?php echo $row['头像']?>" alt="" class="tx"></td>
            </table>
        </ul>
        </div> 
        <div id="index">
          <iframe :name="frame1" :src="lianjie[asd]"
          marginwidth="0" marginheight="0" frameborder="0"
          border="0" scrolling="no" height="auto" width=""></iframe>
          </div>
          <div id="dibu">
            <span>联系我们：热线:100-100-100      人工客服:200-200-200 </span><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>@2022 Z市图书馆   作者：张威炜</span>
          </div>
   </div>
    <script>
      var a = new Vue({
        el:"#a",
        data:{
          datalist:['首页','新闻','服务','关于Z馆','个人中心'],
          lianjie:['shouye.php','xinwen.php','fuwu.php','guanyu.php','grzx.php'],
          current:0,
          asd:0,
        },
        methods:{
          dianji:function(index){
            this.current = index;     //index的值传给current
            this.asd = index;
          }
        }
      })
    </script>
</body>
</html>