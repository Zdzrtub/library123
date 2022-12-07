<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="vue.js"></script>
    <style>
        .quan{
            background-color: rgb(243, 237, 226);
        }
        .aaa{
            position: relative;
            width: 1000px;
            height: 1300px;
            left: 100px;
            top: 50px;
        }
        span{
           font-size: 20px;
        }
        h1{
            text-align: center;
        }
        .zhu{
            width: 750px;
            height: 450px;
            position: relative;
            left: 120px;
        }
        #you{
            position: relative;
            top: -200px;
            right: -65px;
            width: 50px;
            height: 50px;
        }
        #you:hover{
            background-color: darkgray;
        }
        #zuo:hover{
            background-color: darkgray;
        }
        #zuo{
            position: fixed;
            top: 970px;
            right: 930px;
            width: 50px;
            height:50px;
        }
    </style>
</head>
<body>
    <div class="quan">
    <div><h1>Z市图书馆简介</h1></div>
    <div class="aaa">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>
    Z市图书馆前身为宝安县图书馆，1986年，作为Z市市“八大文化设施”之一建成开馆。
    2006年，中心区新馆落成开放，位于Z市市行政文化中心区风景秀美的莲花山前，占地2.96万平方米，
    总建筑面积4.96万平方米，馆藏总量逾千万册（件），在全市设有200多台24小时城市街区自助图书馆，
    若干个分馆、图书服务站与“青少年阅读基地”，年均接待到馆读者约450万人次，实体文献外借服务总量近500万册次，
    已建立起由实体馆、网站、微信、微博、电话语音系统等构成的多元化服务平台。荣获全国文明单位、
    全国社会科学普及教育基地、全民阅读示范基地、全国“敬老文明号”、广东省文明单位、广东省首批人文社科普及示范基地、
    广东省特色文化品牌、Z市市市长质量奖鼓励奖等各级各类荣誉。官方微博连续多年被评为年度“全国十大图书馆微博”。
    </span><br><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
    秉承“服务立馆、技术强馆、文化新馆”的办馆理念，Z市图书馆在全国首倡开放、平等、免费服务，
    率先全面应用无线射频识别技术，自主研发图书馆自动化集成系统（ILAS），主导研制城市街区24小时自助图书馆，
    承担国家文化创新工程、国家文化科技提升计划等重大项目。创设南书房、讲读厅、创客空间、捐赠换书中心、
    Z市学派文献专区、全媒体工作室等十余个新型文化空间，参与举办“市民文化大讲堂”，
    策划打造“南书房家庭经典阅读书目推荐推广”“Z市学人·南书房夜话”“4·23共读半小时”“阅在深秋·公共读书活动”
    “人文讲坛”“从文献看湾区”等颇具特色和广泛影响力的阅读品牌，年举办各类阅读推广活动近2000场次。2013年，
    联合国教科文组织授予Z市“全球全民阅读典范城市”称号，充分肯定了Z市地区图书馆及社会各界力量在推动全民阅读方面取得的成果。
    </span><br><br><br>
    <span> 2023年，Z市图书馆北馆将建成开放，总建筑面积达7.2万平方米，设计藏书量800万册，
        承担起“一馆一库三中心”功能，即城市公共图书馆、全市文献调剂书库以及Z市“图书馆之城”联合采编中心、
        网络数据中心和文献调配中心。部署面向全场景的第五代“图书馆之城”中心管理系统（ULAS-V），
        建设协同工作的智能立体书库和全自动分拣系统，创设Z市文学馆、Z市学人书房等十余个特色馆中馆和交互式学习空间，
        将实现与Z市图书馆中心馆的功能衔接、整合，打造集文献收藏、全民阅读、社会教育、思想交流、
        文化传承与创意创造于一体的大型综合性、智慧型图书馆。
    </span>
    <div id="lbt">
            <img :src=imgtp[index] alt="" class="zhu">
            <img src="img/大于号.png" alt="" id="you" @click="you" v-if="index!=4">
            <img src="img/小于号.png" alt="" id="zuo" @click="zuo" v-if="index!=0">
    </div>
    
    </div>
    </div>
    <script>
        var aa = new Vue({
            el:".quan",
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
                you:function(){
                    if(this.index<4){
                    this.index++
                }
                },
                zuo:function(){
                    if(this.index>0){
                    this.index--
                }
                },
                
            }
        })
    </script>
</body>
</html>