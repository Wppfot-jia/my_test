var ali_bottom = document.querySelectorAll(".li_bottom"),
    ali_center = document.querySelectorAll(".li_center"),
    li_top = document.querySelectorAll(".li_top"),
    canvas = document.querySelector("#canvas"),
    clientWidth = document.documentElement.clientWidth;

var arr=["昨天","星期六","星期日","星期一","星期二","星期三"];
var arr_wea = ["多云","晴","暴雨","冰雹","沙尘暴","台风","雾霾"];


for(var i = 0;i<ali_bottom.length;i++){
    ali_bottom[i].innerHTML = arr_wea[i];
}


for(var i = 0;i<ali_bottom.length;i++){
	ali_bottom[i].i = i;
    li_top[i].innerHTML = arr[i];
    var weather = ali_bottom[i].innerHTML;
    switch(weather){
    	case "暴雨":
            ali_center[i].innerHTML = "&#xe603;";
            break;
        case "冰雹":
            ali_center[i].innerHTML = "&#xe881;";
            break;
        case "沙尘暴":
            ali_center[i].innerHTML = "&#xe63e;";
            break;
        case "台风":
            ali_center[i].innerHTML = "&#xe613;";
            break;
        case "雾霾":
            ali_center[i].innerHTML = "&#xe6fb;";
            break;
        case "多云":
            ali_center[i].innerHTML = "&#xe607;";
            break;
        case "晴":
            ali_center[i].innerHTML = "&#xe8b9;";
            break;
    }
}
 


var  clientWidth = document.documentElement.clientWidth;
//根据设计图中的canvas画布的占比进行设置
canvas.setAttribute('width',clientWidth+'px');
canvas.setAttribute('height',clientWidth/3.5+'px');
//translate方法也可以直接传入像素点坐标
var my_huabi = canvas.getContext("2d");

my_huabi.fill();

my_huabi.strokeStyle = "#fff";
my_huabi.beginPath();
my_huabi.moveTo(clientWidth/10+(clientWidth/6)*0,clientWidth/7-clientWidth/20*1);
my_huabi.lineTo(clientWidth/10+(clientWidth/6)*1,clientWidth/7-clientWidth/20*0.7);
my_huabi.lineTo(clientWidth/10+(clientWidth/6)*2,clientWidth/7-clientWidth/20*1.26);
my_huabi.lineTo(clientWidth/10+(clientWidth/6)*3,clientWidth/7-clientWidth/20*1.07);
my_huabi.lineTo(clientWidth/10+(clientWidth/6)*4,clientWidth/7-clientWidth/20*0.32);
my_huabi.lineTo(clientWidth/10+(clientWidth/6)*5,clientWidth/7-clientWidth/20*0.45);
my_huabi.stroke();

