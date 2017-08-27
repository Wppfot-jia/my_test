<?php
header("content-type:text/html;charset=utf-8");
$rows = [];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=forecast', 'root', '');
    foreach($dbh->query('select * from data') as $row) {
        array_push($rows,$row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimum-scale=1.0">
        <title></title>
        <link href="css/index.css" rel="stylesheet" type="text/css"></link>
        <script type="text/javascript">
            var designWidth = 375, rem2px = 100;
            if(window.innerWidth < 640 ){
                document.getElementsByTagName("html")[0].style.fontSize = document.documentElement.clientWidth/10 + "px";
            }else {
                document.getElementsByTagName("html")[0].style.fontSize = "300px";
            }
        </script>

    </head>
    
    <body> 
        <div class="contain">
            <div class="top">
                <div class="top_cqtq">重庆天气</div>
                <div class="top_local">对比本地天气></div>
                <div class="top_up_time">5分钟前更新</div>
                <div class="top_tianqi">多云</div>
                <div class="top_weather">
                    <div class="top_font">36</div>
                    <div class="top_du">。</div>
                    <div class="top_mess1">25~26</div>
                    <div class="top_mess2">东南风 2级 湿度0%</div>
                    <div class="top_du2">。</div>
                </div>
                <div class="top_time">
                    <div class="top_time_ifo">08月26日 星期六 农历七月初五</div>
                    <div class="top_time_24">24小时天气</div>
                    <div class="top_time_kq">28 优</div>
                </div>
            </div>

            <div class="center">
                <ul>
                    <?php foreach($rows as $k=>$v):?>
                        <?php
                            if($v['max_temp'] == "10.2"){
                                continue;
                            }
                        ?>

                    <li>
                        <div class="li_top"></div>
                        <div class="li_center iconfont">&#xe607;</div>
                        <div class="li_bottom"></div>
                    </li>

                    <?php endforeach;?>
                   
                </ul>

                <div class="canvas">
                    <ul class="max_temp">
                        <?php foreach($rows as $k=>$v):?>
                        <?php
                            if($v['max_temp'] == "10.2"){
                                continue;
                            }
                        ?>
                        <li><?php echo $v['max_temp']?></li>

                    <?php endforeach;?>
                    </ul>
                    
                    <ul class="min_temp">
                        <?php foreach($rows as $k=>$v):?>
                        <?php
                            if($v['max_temp'] == "10.2"){
                                continue;
                            }
                        ?>
                        <li><?php echo $v['min_temp']?></li>

                    <?php endforeach;?>
                    </ul>
                    <canvas id="canvas" ></canvas>
                
                </div>
            </div>
            <div class="bottom">
                <div class=""></div>
            </div>
        </div>
    </body>

    <script src="js/index.js" type="text/javascript"></script>
  
</html>





