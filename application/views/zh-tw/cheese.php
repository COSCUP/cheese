<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="COSCUP, COSCUP2010, COSCUP Cheese, 開源人年會, 开源人年会" />
<meta name="description" content="A platfrom that makes sharing photo in COSCUP easy." />
<meta name="robots" content="index, allow" />
<meta name="google-site-verification" content="dQCRnqBuMTfC4th8pDO8P-uq_B94p-fpieGQ9kuImrQ" />
<link type="image/x-icon" href="<?php echo base_url();?>image/cheese.ico" rel="shortcut icon" />
<title>COSCUP Cheese 2010</title>
<style>
body{
	overflow:hidden;
	color:#BE1622;
	margin-left: 0px;
	font-family: 'Apple LiGothic','LiHei Pro','文泉驛微米黑','Droid Sans Fallback','微軟正黑體', 'Lucida Sans',FreeSans,sans-serif,'新細明體';
	font-size: 15px;
}
a{
	color:#990000;
}
a:hover{
	color:#ffffff;
}
#banner{
	width: 100%;
	position:absolute;
	z-index: 1;
}
#banner_coscup{
	background-image: url(<?php echo base_url() ;?>image/banner_coscup.png);
	width: 180px;
	height: 180px;
	z-index: 6;
	left: 20px;
	position:absolute;
	top: -20px;
}
#banner_cheese{
	background-image: url(<?php echo base_url() ;?>image/banner_cheese.png);
	width: 232px;
	height: 69px;
	z-index: 2;
	position:absolute;
	left: 185px;
	top: 10px;
}
#banner_menu{
	background-color:	#F39200;
	border: 5px solid #F39200;
	border-radius: 10px;
	height: 30px;
    position: absolute;
    right: 0;
    top: 30px;
    width: 480px;
}
#help{
	width: 20px;
	background-color: #BE1622;
	color: #EFCD9C;
}
#canvas{
	display:block;
	overflow:scroll;
	overflow-y:hidden;
	width: 100%;
	height: 90%;
	position:absolute;
	margin-top: 60px;
}
#container{
	height: 500px;
	width: 100%;
	display: block;
	clear: both;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100% auto;
	background-image: url(<?php echo base_url() ;?>image/container_bg.png);
	background-color: #CEA967;
	background-position: 11% 0%;
	cursor:move;
}
#container p{
	position:absolute;
	vertical-align: middle;
	text-align: center;
	top: 52%;
	left: 38%;
}
#timeline{
	clear: both;
	height: 20px;
}
#loading{
	position: absolute;
	border: 0px;
	top: 50%;
	left: 50%;
	background-image: url(<?php echo base_url()?>image/ajax-loader.gif);
	width: 42px;
	height: 42px;
	margin: -21px 0px 0px -21px;
}
#showEvent{
	position: absolute;
	bottom: 40px;
	height: 20px;
}
#eventline{
	clear: both;
	height: 20px;
    position: absolute;
    top: 490px;
    width: 100px;
    z-index: 4;
}
#wrap{
	width: 100%;
	height: 100%;
	background-color:#666;
	opacity: 0.6;
	display: none;
	z-index: 1000;
	position: absolute;
	left:0px;
	top:0px;
}
#wrap2{
	opacity:1;
	width:100%;
	height:100%;
	z-index:2000;
	position:absolute;
	left: 0px;
	top: 0px;
}
#photobox{
	display: none;
	width: 750px;
	height: 580px;
	margin: -300px 0px 0px -375px;
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 1001;
	padding: 10px;
	border-radius: 10px;
	background-color: #F39200;
    border: 3px solid #F39200;
}
#photo_link{
	bottom: 10px;
    clear: right;
    cursor: pointer;
    float: right;
    position: absolute;
    right: 10px;
}
#shareLink{
	width: 250px;
}
#close{
	width:50px;
	height:50px;
	background-color:#BE1622;
	border-radius: 10px;
	border: 5px solid #BE1622;
	color:#FFFFFF;
	text-align: center;
	vertical-align: middle;
	position:absolute; top: -20px; left: 98%;
	font-size: 50px;
	cursor:pointer;
}
#innerbanner{
	background-color: #EFCD9C;
	border-radius: 10px;
	border: 5px solid #EFCD9C;
	height: 30px;
	width: 700px;
	margin-left: 20px;
	vertical-align: middle;
}
#innerbanner_left{
	float: left;
	font-size: 30px;
}
#innerbanner_right{
	float: right;
}
#innerbox{
	margin-top: 20px;
	margin-bottom: 10px;
	position: absolute;
	left: 50%;
}
#photo_line{
	margin-right: 10px
}
#footer{
	width: 600px;
	height: 20px;
	position: fixed;
	bottom: 13px;
	margin-left: -300px;
	left: 50%;
	border-radius: 10px 10px 0px 0px;
	background-color: #F39200;
    border: 3px solid #F39200;
	text-align: center;
}
#getInvolvedInfo{
	width:350px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
}
#timeselect{
	width: 250px;
	height: 650px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
	font-size: 12px;
}
#timeselect div{
	width: 110px;
}
#langselect{
	height: 100px;
	border:5px solid #BE1622;
	border-top: 0px;
	border-radius: 0px 10px 10px 10px;
	position: absolute;
	padding: 5px;
	display: none;
	background-color: #BE1622;
	z-index: 900;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
}
#langselect div{
	text-align:center;
	width: 80px;
}
#getInvolvedInfo p{
	color:#EFCD96;
}
#desc p{
	margin-left: 20px;
	margin-right: 20px;
	font-size: 18px;
}
#desc p img{
	float: left;
	margin: 10px;
}
#gplusone{
	bottom: 10px;
    position: absolute;
}
#arrow, #return{
	background-color: #F39200;
    border: 5px solid #F39200;
	color: #BE1622;
    font-family: Verdana,Geneva,sans-serif;
	font-weight: bolder;
	position: absolute;
	z-index: 100;
	box-shadow: 0px 5px 5px black;
	-moz-box-shadow: 0px 5px 5px black;
	-webkit-box-shadow: 0px 5px 5px black;
	cursor: pointer;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
	vertical-align: middle;
}
#arrow{
	border-radius: 50px 0 0 50px;
	padding-bottom: 4px;
    font-size: 80px;
    height: 100px;
    right: 0;
    text-align: left;
    top: 45%;
    width: 100px;
	padding-left: 10px;
}
#arrow:hover{
	width: 150px;
	background-color: #BE1622;
	border-color: #BE1622;
	color: #EFCD9C;
}
#return{
	width: 50px;
	height: 50px;
    border-radius: 0px 25px 25px 0px;
    font-size: 40px;
	text-align: right;
	left: 0px;
	bottom: 30%;
	padding-right: 5px;
}
#return:hover{
	width: 80px;
	background-color: #BE1622;
	border-color: #BE1622;
	color: #EFCD9C;
}
.day1{
	float: left;
}
.day2{
	float: right;
}
.banner_menu_option{
	background-color:#EFCD9C;
	border: 1px solid #EFCD9C;
	border-radius: 10px;
	height: 20px;
	margin-left: 8px;
    text-align: center;
    width: 100px;
	float: left;
	cursor: pointer;
}
.banner_menu_option:hover{
	background-color:#BE1622;
	border: 1px solid #BE1622;
	border-radius: 10px;
	height: 20px;
	margin-left: 8px;
    text-align: center;
    width: 100px;
	float: left;
	color:#EFCD9C;
	cursor: pointer;
}
.photo_grid{
	/*border: 1px solid;*/
	position:absolute;
	margin-top: 10px;
	/*disable select*/
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
	
}
.timetag{
    background-color: #F39200;
    border: 3px solid #F39200;
    border-radius: 0px 0px 5px 5px;
    position: absolute;
}
.thumbnail{
	width: 144px;
	float:right;
	border-radius: 10px;
	border:10px solid #F39200;
	z-index:3;
	-moz-box-shadow: 5px 5px 5px black;
	-webkit-box-shadow: 5px 5px 5px black;
	box-shadow: 5px 5px 5px black;
}
.author{
	float: left;
	position:absolute;
	border-radius: 5px;
	border: 5px solid #F39200;
	background-color:#EFCD9C;
	margin-left: 3px;
	margin-top: 8px;
	-moz-transform:rotate(10deg);
	-webkit-transform:rotate(10deg);
	-o-transform:rotate(10deg);
    width: 90px;
    z-index: 0;
}
.eventTag{
	position:absolute;
	border: 1px solid;
	text-align: center;
	height: 18px;
	overflow: hidden;
	background-color: #F39200;
    border: 3px solid #F39200;
    border-radius: 5px 5px 0px 0px;
}
.eventShower{
	position:absolute;
	width: 700px;
	overflow: visible;
	display: inline;
}
.photoview{
	margin-left: 2.5%;
}
.seperator{
	width: 100%;
	height: 10px;
	background-color: #F39200;
}
.select_option{
	margin-left: 5px;
	margin-top: 10px;
	background-color: #EFCD9C;
	border: 1px solid #EFCD9C;
	border-radius: 10px;
	border-bottom: 2px dotted #F39200;
	cursor: pointer;
}
</style>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.min.js" ></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script>

var arrX = new Array();
var arrY = new Array();

var data;
var data_length;
var least_spacing;
var size_x;
var size_y;

var draging = false;

var footer_flag = 0;

var COSCUP_api;
var site_url = "<?php echo site_url();?>cheese/";
var base_url = "<?php echo base_url();?>";
var img_url = "<?php echo base_url();?>image/";

var day1 = new Array();
var day2 = new Array();

var getInvolved_flag = 0;
var bounceTo_flag = 0;
var lang_flag = 0;
var pan_ID = 0;

$.getJSON(base_url+"api",
        function(returnData){
		  	data = returnData;
			$("#container").empty();
			enableButton();
		  	arrangePhoto();
			assignPhoto();
			pushEventTag();
			setInterval("footerSwitcher()", 10000);
			return;
        });
		
function enableButton(){
	$("#wrap2").css("display", "none");
	$(window).keypress(function(event){
		if(event.keyCode == 39 || event.keyCode == 32){
			document.getElementById('canvas').scrollLeft += 50;
		}else if(event.keyCode == 37){
			document.getElementById('canvas').scrollLeft -= 50;
		}else if(event.keyCode == 38 || event.keyCode == 40){
			document.getElementById('canvas').scrollLeft = 0;
		}
	});
	/*$(window).keyup(function(event){
		stopCanvas();
	});*/
			
}

function addZero(i){
	if(i<10){
		return "0"+i;
	}else{
		return i;
	}
}
//
function arrangePhoto(){
	data_length = $(data).length;
	
	var start_timestamp = data[0].timestamp;
	var end_timestamp = data[data_length-1].timestamp;
	least_spacing = 20;
	var max_x = 10000;
	var max_y = 500;
	size_x = 260;
	size_y = 170;
	var tmp = new Date();
	var tmp_left;
	var startX;
	var startLeft;
	//var footer_left = $("#footer").offset().left+300;
	
	arrX[0] = 0;
	arrY[0] = Math.floor(Math.random()*(max_y+1-size_y));
	tmp = new Date(parseInt(data[0].timestamp)*1000 + tmp.getTimezoneOffset() * 60000); //second -> millisecond
	
	$("#container").append('<div class="photo_grid" style="width: '+size_x+'px ; height: '+size_y+'px ; left: '+arrX[0]+'px ; top: '+arrY[0]+'px; "><div class="author">'+data[0].author+'</div><a onclick="openPhoto('+0+');" href="#"><img class="thumbnail" onmouseover="inPhotobox(0);" onmouseout="outPhotobox(0);" src="'+data[0].thumbnail+'" /></a></div>');
	$("#timeline").append('<div class="timetag" style="left: '+arrX[0]+'px;">'+addZero(tmp.getHours())+':'+addZero(tmp.getMinutes())+'</div>');
	
	for(var i = 1; i<data_length-1; i++){
		arrX[i] = arrX[i-1] + size_x * Math.floor(Math.random()*9+5)*0.1;
		var j = 0;
		do{
			arrY[i] = Math.floor(Math.random()*(max_y+1-size_y));
			j++;
			if(j>10){
				arrX[i] = arrX[i-1]+size_x+least_spacing;
				arrY[i] = Math.floor(Math.random()*(max_y+1-size_y));
				break;
			}
		}while(checkpt(arrX[i], arrY[i], i))
		//document.write(arrX[i]+' '+arrY[i]+'\n');
		tmp = new Date(parseInt(data[i].timestamp)*1000 + tmp.getTimezoneOffset() * 60000);
		$("#container").append('<div class="photo_grid" style="width: '+size_x+'px ; height: '+size_y+'px ; left: '+arrX[i]+'px ; top: '+arrY[i]+'px; "><div class="author">'+data[i].author+'</div><a onclick="openPhoto('+i+');" href="#"><img class="thumbnail" onmouseover="inPhotobox('+i+');" onmouseout="outPhotobox('+i+');" src="'+data[i].thumbnail+'" /></a></div>');
		$("#timeline").append('<div class="timetag" style="left: '+arrX[i]+'px;">'+addZero(tmp.getHours())+':'+addZero(tmp.getMinutes())+'</div>');
		
	}
	$("#container").css('width', arrX[i-1]+size_x);
	$(".seperator").css('width', arrX[i-1]+size_x);
        $("#canvas").mousedown(function(event){  
			/*if (document.documentElement && document.documentElement.scrollTop) {
				startLeft = document.documentElement.scrollLeft;
			} else if (document.body) {
				startLeft = document.body.scrollLeft;
			} else {
				startLeft= window.pageYOffset;
			}*/
            //startLeft = document.documentElement.scrollLeft; 
			startLeft = $("#canvas").scrollLeft();  
            startX = event.clientX;
			//$("#text").append(startLeft+' '+startX+'<br />');  
            draging = true;  
			//document.selection.empty();
        }).mousemove(function(event){  
            if (draging == false)return;  
            var deltaX = startX -  event.clientX;    
            tmp_left = startLeft + deltaX;  
            //$(this).css('left',tmp_left+'px');
			//document.getElementById('canvas').scrollTo(tmp_left, 0);
			document.getElementById('canvas').scrollLeft = tmp_left;
			//$("#footer").css("left", tmp_left+footer_left);
			//document.selection.empty();
        }).mouseup(function(event){  
            //window.scrollBy(tmp_left, 0); 
			draging = false;  
			//document.selection.empty();
        });  
		
		/*$("#canvas").scroll(function (event){
			document.getElementById('canvas').scrollLeft+=event.wheelDelta; 
			//alert(event.wheelDelta);
		});*/
		$(".photo_grid").select(function(){
			$(".photo_grid").select();
		});
}

function checkpt(x, y, till){
	for(var i=0; i<till; i++){ //check four points
		if(((x>=arrX[i]-least_spacing && x<=arrX[i]+size_x+least_spacing) && (y>=arrY[i]-least_spacing && y<=arrY[i]+size_y+least_spacing)) || ((x+size_x>=arrX[i]-least_spacing && x+size_x<=arrX[i]+size_x+least_spacing)&&(y+size_y>=arrY[i]-least_spacing && y+size_y<=arrY[i]+size_y+least_spacing)) || ((x+size_x>=arrX[i]-least_spacing && x+size_x<=arrX[i]+size_x+least_spacing) && (y>=arrY[i]-least_spacing && y<=arrY[i]+size_y+least_spacing)) || ((x>=arrX[i]-least_spacing && x<=arrX[i]+size_x+least_spacing) && (y+size_y>=arrY[i]-least_spacing && y+size_y<=arrY[i]+size_y+least_spacing))){
			return true;
		}
	}
	return false;
}

function arrangeEventTag(i, from, to, name, detail){
	var d = new Date();
	//var len = $(COSCUP_api).length;
	
	if(from > d.getTime()){
		return false;	
	}
	//var localOffset = d.getTimezoneOffset() * 60;
	var from_x = getXbyTimestamp(from)-10;
	var to_x = getXbyTimestamp(to)+10;
	var span = from_x - to_x;
	$("#eventline").append("<div id='eventTag_"+i+"' class='eventTag' style='left: "+to_x+"px; width: "+span+"px;'>"+name+"</div>");
	$("#eventTag_"+i).bind("mouseenter", {to: to_x, name: name, id: i, detail: detail}, showEvent);
	$("#eventTag_"+i).bind("mouseleave", {id: i}, removeEvent);
}

function openPhoto(id){
	draging = false;
	//
	var img = new Image();
	img.onload =function () {
		if(this.width < 600){
			$("#innerbox > img").css("width", 320);
			$("#innerbox > img").css("margin-left", '-160px');
		}else{
			$("#innerbox > img").css("width", 640);
			$("#innerbox > img").css("margin-left", '-320px');
		}
	}
	img.src = data[id].photo_url;
	$("#innerbox").html('<img class="photoview" src="'+data[id].photo_url+'" />');
	$("#innerbanner").html("<font id='innerbanner_left'>由 "+data[id].author+" 所拍攝</font><font id='innerbanner_right'><img src='"+img_url+"share.png' alt=''></img><a href='"+data[id].photo_link+"' target='_blank'>瀏覽這本相簿</a></font>");
	//$("g:plusone").attr("href", site_url+"view/"+data[id].photo_id);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url+"view/"+data[id].photo_id});
	$("#photo_link").attr("href", site_url+"view/"+data[id].photo_id);
	$("#shareLink").val(site_url+"view/"+data[id].photo_id);
	var purePhoto = data[id].photo_url.substr(0, data[id].photo_url.lastIndexOf('?'));
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(purePhoto)).concat(" ").concat(encodeURIComponent(site_url+'view/'+data[id].photo_id)).concat(' ').concat('(').concat('快到 COSCUP Cheese 瀏覽大家的笑容！').concat(")'))"));
	/*$("#photobox").dialog({
			width: 680,
			position: ['center', 20],
			modal: true
		});*/
	/*$("#photobox").css("width", $("#innerbox > img").width());
	$("#photobox").css("height", $("#innerbox > img").height() + 100);*/
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block");
}

function getIDbyPhotoID(photoID){
	for(var i=0; i<data_length; i++){
		//$("#text").append(data[i].photo_id+"<br />");
		if(data[i].photo_id == photoID){
			return i;
		}
	}
	return false;
}

function getXbyTimestamp(timestamp){
	var left = parseInt(data[0].timestamp);
	var left_x = 0;
	var right;
	var right_x;
	
	for(var i=0; i<data_length; i++){
		if(data[i].timestamp == timestamp){
			return arrX[i];
		}
		if( data[i].timestamp < left && data[i].timestamp > timestamp){
			left = parseInt(data[i].timestamp);
			left_x = arrX[i];
		}
		
		if(data[i].timestamp < timestamp){
			break;
		}
	}
	right = data[i].timestamp;
	right_x = arrX[i];
	
	timestamp = parseInt(timestamp);
	var tmp = Math.floor(-(left_x-right_x)*(left-timestamp) / (left-right)+left_x);
	//$("#text").append("<p>("+left+","+left_x+") > ("+timestamp+","+tmp+") > ("+right+","+right_x+")</p>");
	return tmp;
	//return (left_x+right_x)/2;
}

function showEvent(event){
	var tmp = event.data.to;
	if($("#canvas").scrollLeft() > tmp){
		tmp = $("#canvas").scrollLeft();
	}
	$("#showEvent").append("<div id='eventShower_"+event.data.id+"' class='eventShower' style='left: "+tmp+"px;'>"+"<b>"+event.data.name+" -- </b>"+event.data.detail+"</div>");
}

function removeEvent(event){
	$("#eventShower_"+event.data.id).remove();
}

function closePhoto(){
	$("#desc").empty();
	$("#wrap").css("display", "none");
	$("#photobox").css("display", "none");
	draging = false;
}

function pushEventTag(){
	for(var i=0; i<=17; i++){
		day1[i] = new Object();
	}
	
	day1[0].name = "開幕";
	day1[0].from =	1281777300;
	day1[0].to = 		1281778200;
	day1[0].detail = "Opening";
	
	day1[1].name = "全場大演講#1";
	day1[1].to =		1281781800;
	day1[1].detail = "HTML5 — More Web for More People";
	
	day1[2].name ="休息#1";
	day1[2].to =		1281783600;
	day1[2].detail =	"休息一下吧！";
	
	day1[3].name =	"議程#1";
	day1[3].to =		1281785400;
	day1[3].detail =	"HTML5 for Programmers | GNOME Foundation | Sahana Taiwan Development | OpenOffice.org 的 UNO 魔術 — 那些 MS Office 做不到的事";
	
	day1[4].name =	"議程#2";
	day1[4].to =		1281787200;
	day1[4].detail =	"HTML5: Building the Next Generation Web Application | GNOME in Education: a practical case study | 網頁設計師必備: CSS3 新功能大補帖 | 打雜的事情交給 Ant 吧";
	
	day1[5].name =	"午餐";
	day1[5].to =		1281790800;
	day1[5].detail =	"吃午餐囉！";
	
	day1[6].name = "全場大演講#2";
	day1[6].to =		1281793500;
	day1[6].detail ="Qt 應用於 Meego 開源生態系統";
	
	day1[7].name =	"休息";
	day1[7].to =		1281794400;
	day1[7].detail =	"Take a Break!";
	
	day1[8].name =	"議程#3";
	day1[8].to =		1281796200;
	day1[8].detail =	"社文字D:轟趴開交物語 | Linpus Lite MeeGo Edition: Enabling MeeGo for Production | 簡介 GNOME 輔助科技與建議改進事項 | Doxygen – 文件、程式一家親";
	
	day1[9].name =	"議程#4";
	day1[9].to =		1281798000;
	day1[9].detail =	"nodejs 於互動式網站之應用 | Nokia Symbian 新一代作業系統演進：從S60 5.0、Symbian^3 到 Symbian^4 | 不用 Framwork，一天完成網站的多國語系製作";
	
	day1[10].name =	"休息";
	day1[10].to =	1281799800;
	day1[10].detail =	"休息一下吧！";
	
	day1[11].name =	"議程#5";
	day1[11].to =	1281801600;
	day1[11].detail =	"Writing Web Applications in C++ | 自由軟體授權運用的重要概念、類型說明，以及常見爭議 | GNOME Accessibility Development and Testing | Processing — 專為設計師、建築師、藝術家設計的簡易又強大的數位藝術工具！";
	
	day1[12].name =	"議程#6";
	day1[12].to =	1281803400;
	day1[12].detail =	"Frontend Development Enviornment | Ensuring Freedom of Action in Free Software Through Collaboration & Partnership | 自由軟體於互動技術";
	
	day1[13].name =	"議程#7";
	day1[13].to =	1281805200;
	day1[13].detail =	"HTML5 電子書閱讀器 | GNU GPL Compliance in Embedded Devices | 以中文的名义，融入开源世界 | 我是 Programmer　我也想當 Musician";
	
	day1[14].name =	"議程#8";
	day1[14].to =	1281807000;
	day1[14].detail =	"Jetpack SDK: 瀏覽器擴充套件的新可能性 | Implementation of a FOSS License Compliance Program | 由馬鈴薯小子看軟體在地化 | Elements of Typographics Freedom";
	
	day1[15].name =	"Lightning";
	day1[15].to =	1281811500;
	day1[15].detail =	"Lightning Talks by COSCUP / GNOME.Asia All Star";
	
	day1[16].name =	"休息";
	day1[16].to =	1281812400;
	day1[16].detail =	"休息一下吧！";
	
	day1[17].name =	"BoF";
	day1[17].to =	1281819600;
	day1[17].detail =	"Birds Of a Feather";

	
	
	for(var i=0; i<=15; i++){
		day2[i] = new Object();
	}
	
	day2[0].name = "大會報告";
	day2[0].from = 	1281863700;
	day2[0].to = 		1281864600;
	day2[0].detail =	"Announcement";
	
	day2[1].name = "全場大演講#1";
	day2[1].to = 		1281868200;
	day2[1].detail = "Road to Gnome3";
	
	day2[2].name = "休息#1";
	day2[2].to = 		1281870000;
	day2[2].detail = "休息一下，吃個點心吧！";
	
	day2[3].name =	"議程#1";
	day2[3].to =		1281871800;
	day2[3].detail =	"Debugging: Linux Kernel by Ftrace | Introducing GStreamer, the Media Framework on GNU/Linux | Building and Using a Memory Profiler | How to Become a Debian Developer";
	
	day2[4].name =	"議程#2";
	day2[4].to =		1281873600;
	day2[4].detail = "ScalaTest－連貓都會的單元測試與 BDD | GNOME Build Environment on Solaris | xPad — Building Simple Tablet OS with Gtk/WebKit | Ubuntu Kernel Factory";
	
	day2[5].name =	"午餐";
	day2[5].to = 		1281877200;
	day2[5].detail =	"吃午餐的時間又到了！";
	
	day2[6].name =	"議程#3";
	day2[6].to =		1281879000;
	day2[6].detail =	"Exploring New Paradigms of Computing for GNOME | Bugzilla, Bug squad and GNOME 3 | The Culture of Sharing | Android Game Engine 比較";
	
	day2[7].name =	"議程#4";
	day2[7].to =		1281880800;
	day2[7].detail =	"Adapting UCD for Open Source Software Development | App Engine 大爆料 | 經驗分享：Porting a New Architecture to OpenWrt Project";
	
	day2[8].name = "議程#5";
	day2[8].to =		1281882600;
	day2[8].detail =	'Android UI Design Pattern | The NoSQL Movement: CouchDB as an example | Understanding Internals of WebKit/GTK+ | Be “Android”';
	
	day2[9].name =	"議程#6";
	day2[9].to =		1281884400;
	day2[9].detail ="Cloud Experience — from Google to Delta | Implementation of websocket server program | Have Fun on Andes Platform — Game Emulator an overview";
	
	day2[10].name = 	"休息#2";
	day2[10].to =	1281886200;
	day2[10].detail=	"Tea Break";
	
	day2[11].name = 	"議程#7";
	day2[11].to =	1281888000;
	day2[11].detail = 	"Building a Cloud Computing Platform by Using Open Source Software | Hybrid Desktop/Web applications with WebKitGTK+ | SFD 2010: Why and Where? | A Safe and Stateless Platform — Introduction to Google Chrome OS Security Model";
	
	day2[12].name =	"議程#8";
	day2[12].to =	1281889800;
	day2[12].detail =	"快速佈署叢集式的搜尋引擎 CrawlZilla | Javascript in Linux Desktop | 打造特製的 Android Toolchain";
	
	day2[13].name =	"議程#9";
	day2[13].to =	1281891600;
	day2[13].detail = "Yahoo Traffic Server, a Powerful Cloud Gatekeeper | eekboard | GNOME in Asia | OsmocomBB: An Open Source GSM Baseband Firmware";
	
	day2[14].name = "議程#10";
	day2[14].to =	1281893400;
	day2[14].detail = 	"Solr on Cassandra | Debian Policy — 5.6.12 Version | Hosting GNOME.Asia is Fun! | Android-x86 Open Source Project";
	
	day2[15].name = "閉幕";
	day2[15].to = 	1281895200;
	day2[15].detail =	"COSCUP / Gnome.Asia 閉幕";
	
	arrangeEventTag(100, day1[0].from, day1[0].to, day1[0].name, day1[0].detail);
	for(var i=1; i<day1.length; i++){
		arrangeEventTag(100+i, day1[i-1].to, day1[i].to, day1[i].name, day1[i].detail);
	}
	
	arrangeEventTag(200, day2[0].from, day2[0].to, day2[0].name, day2[0].detail);
	for(var i=1; i<day2.length; i++){
		arrangeEventTag(200+i, day2[i-1].to, day2[i].to, day2[i].name, day2[i].detail);
	}
	
	/*Date Tag*/
	arrangeEventTag(10, 1281744000, day1[0].from, "8/14", "Day 1");
	arrangeEventTag(20, 1281830400, day2[0].from, "8/15", "Day 2");
	
	
	/*
	arrangeEventTag(201, 1281863700, 1281864600, "Announcement", "Announcement");
	arrangeEventTag(202, 1281864600, 1281868200, "Keynote#1", "Road to Gnome3");
	arrangeEventTag(203, 1281868200, 1281870000, "休息#1", "Tea Break");
	arrangeEventTag(204, 1281870000, 1281871800, "議程#1", "Debugging: Linux Kernel by Ftrace | Introducing GStreamer, the Media Framework on GNU/Linux | Building and Using a Memory Profiler | How to Become a Debian Developer");*/
}

function footerSwitcher(){
	if(footer_flag){
		$("#footer > font").fadeOut(1000, 'linear', function(){
		$("#footer").html('<font class="footer_text">快到我們的 <a href="http://coscup.org/2010" target="_blank">網站</a> / <a href="http://blog.coscup.org" target="_blank">部落格</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube 頻道</a> / <a href="http://www.plurk.com/coscup" target="_blank">噗浪</a> / <a href="https://www.facebook.com/coscup">臉書</a> 逛逛吧！</font>');
		});
		footer_flag = 0;
	}else{
		$("#footer > font").fadeOut(1000, 'linear', function(){$("#footer").html('<font class="footer_text">We <font style="color: #FFCCFF;">(heart)</font> Open.</font>');});
		footer_flag = 1;
	}
}

function inPhotobox(id){
	$('.thumbnail').eq(id).css("border-color", "#BE1622");
	$('.author').eq(id).css("border-color", "#BE1622");
	$('.timetag').eq(id).css("border-color", "#BE1622").css("background-color", "#BE1622").css("color", "#F39200");
}

function outPhotobox(id){
	$('.thumbnail').eq(id).css("border-color", "#F39200");
	$('.author').eq(id).css("border-color", "#F39200");
	$('.timetag').eq(id).css("border-color", "#F39200").css("background-color", "#F39200").css("color", "#BE1622");
}

function selectTime(){
	//alert("!!");
	if(lang_flag==1){
		closeLang();
	}else if(getInvolved_flag==1){
		closeGetInvolved();
	}
	if(bounceTo_flag == 0){
		$("#bounceTo").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		//$("#timeselect").empty();
		
		$("#Day1").append("<div style='cursor: default; float: left; color: #FFF'>Day 1</div>");
		$("#Day2").append("<div style='cursor: default; float: right; color: #FFF'>Day 2</div>");
		
		var tmp = new Date();
		var starttime = new Date(day1[0].from*1000 + tmp.getTimezoneOffset() * 60000);
		$("#Day1").append("<div class='day1 select_option' onclick='panToTime("+day1[0].to+");'>"+addZero(starttime.getHours())+":"+addZero(starttime.getMinutes())+" - "+day1[0].name+"</div>");
		for(var i=1; i<day1.length; i++){
			var starttime = new Date(day1[i-1].to*1000 + tmp.getTimezoneOffset() * 60000);
			$("#Day1").append("<div class='day1 select_option' onclick='panToTime("+day1[i].to+");'>"+addZero(starttime.getHours())+":"+addZero(starttime.getMinutes())+" - "+day1[i].name+"</div>");
		}
		
		var starttime = new Date(day2[0].from*1000 + tmp.getTimezoneOffset() * 60000);
		$("#Day2").append("<div class='day2 select_option' onclick='panToTime("+day2[0].to+");'>"+addZero(starttime.getHours())+":"+addZero(starttime.getMinutes())+" - "+day2[0].name+"</div>");
		for(var i=1; i<day2.length; i++){
			var starttime = new Date(day2[i-1].to*1000 + tmp.getTimezoneOffset() * 60000);
			$("#Day2").append("<div class='day2 select_option' onclick='panToTime("+day2[i].to+");'>"+addZero(starttime.getHours())+":"+addZero(starttime.getMinutes())+" - "+day2[i].name+"</div>");
		}
		$("#Day2").append("<div class='day2 select_option' style='text-align: center;width: 80px; margin-top: 20px' onclick='closeTimeselect();'>關閉</div>");
		$("#timeselect").css("top", $("#bounceTo").offset().top + $("#bounceTo").height()).css("left", $("#bounceTo").offset().left).css("display", "block");
		bounceTo_flag = 1;
	}else if(bounceTo_flag == 1){
		$("#bounceTo").attr("style", "");
		$("#timeselect").css("display", "none");
		bounceTo_flag = 2;
	}else if(bounceTo_flag == 2){
		$("#bounceTo").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#timeselect").css("display", "block");
		bounceTo_flag = 1;
	}
	
		
}

function closeTimeselect(){
	bounceTo_flag = 1;
	selectTime();
}

function panToTime(timestamp){
	bounceTo_flag = 1;
	selectTime(); // to close it
	document.getElementById('canvas').scrollLeft = getXbyTimestamp(timestamp);
}

function showLang(){
	$("#language").text("正體中文");
}

function recoverLang(){
	$("#language").text("語言");
}

function changeLang(){
	if(bounceTo_flag == 1){
		closeTimeselect();
	}else if(getInvolved_flag == 1){
		closeGetInvolved();
	}
	if(lang_flag == 0){
		$("#language").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#langselect").empty();
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/zh-cn'>简体中文</a></div>");
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/en'>English</a></div>");
		$("#langselect").append("<div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeLang();'>取消</div>");
		$("#langselect").css("top", $("#language").offset().top + $("#language").height()).css("left", $("#language").offset().left).css("display", "block");
		lang_flag = 1;
	}else if(lang_flag == 1){
		$("#language").attr("style", "");
		$("#langselect").css("display", "none");
		lang_flag = 2;
	}else if(lang_flag == 2){
		$("#language").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#langselect").css("display", "block");
		lang_flag= 1;
	}
}

function closeLang(){
	lang_flag = 1;
	changeLang();
}

function getInvolved(){
	if(bounceTo_flag == 1){
		closeTimeselect();
	}else if(lang_flag == 1){
		closeLang();
	}
	if(getInvolved_flag == 0){
		$("#getInvolved").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#getInvolvedInfo").css("top", $("#getInvolved").offset().top + $("#getInvolved").height()).css("left", $("#getInvolved").offset().left).css("display", "block");
		getInvolved_flag = 1;
	}else if(getInvolved_flag == 1){
		$("#getInvolved").attr("style", "");
		$("#getInvolvedInfo").css("display", "none");
		getInvolved_flag = 2;
	}else if(getInvolved_flag == 2){
		$("#getInvolved").css('border-radius', '10px 10px 0px 0px').css('border-color', '#BE1622').css('background-color', '#BE1622').css('color', '#EFCD96');
		$("#getInvolvedInfo").css("display", "block");
		getInvolved_flag= 1;
	}
}

function closeGetInvolved(){
	getInvolved_flag=1;
	getInvolved();
}

function selectLink(){
	$("#shareLink").select();
}

function openAbout(){
	$("#innerbox").empty();
	$("#innerbanner").html("<div id='innerbanner_left'>關於 COSCUP Cheese</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p><img src='"+img_url+"coscup.png'/></p><p><b>COSCUP Cheese</b>，一個讓您輕鬆分享 COSCUP 照片的平台。這個計畫由 COSCUP 2011 行銷組主導。「起司」一詞意味著，我們希望每個 COSCUP 成員都能像起司一樣黏稠。我們也希望看到您參與 COSCUP 的每個笑容。</p><p>COSCUP Cheese 專案由 lRabbit 和 Toby 負責。感謝所有行銷組成員的協助，包括船長 BobChao、全能小秘書 Singing、小啄插圖者 為襄，以及 蝦蝦 、闇鴉的意見提供。最後，特別感謝網站組工頭 Timdream 和其他所有提供意見的朋友。</p><p>欲取得更多關於 COSCUP（Conference for Open Source Coders, Users, and Promoters）的資訊，請到 <a href='http://coscup.org/'>COSCUP 官方網站</a>。</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('快到 COSCUP Cheese 瀏覽大家的笑容！').concat(")'))"));
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block")
}

function openHelp(){
	$("#innerbox").empty();
	$("#innerbanner").html("<div id='innerbanner_left'>幫助</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p>A demo clip will be here soon.</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('快到 COSCUP Cheese 瀏覽大家的笑容！').concat(")'))"));
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block")
}

function panCanvas(){
	pan_ID = setInterval("document.getElementById('canvas').scrollLeft += 50;", 100);
}

function backCanvas(){
	pan_ID = setInterval("document.getElementById('canvas').scrollLeft -= 50;", 100);
}

function stopCanvas(){
	clearInterval(pan_ID);
}

function returnCanvas(){
	document.getElementById('canvas').scrollLeft = 0;
}

function assignPhoto(){
<?php
	if ($assignPhoto){
	?>
	var assign_id = getIDbyPhotoID("<?php echo $assignPhotoID ?>");
	if(assign_id != false){
		//$("#text").append(getXbyTimestamp(data[assign_id].timestamp));
		document.getElementById('canvas').scrollLeft = getXbyTimestamp(data[assign_id].timestamp);
		openPhoto(assign_id);
	}
<?php
	}
?>
}
</script>
</head>

<body>
<div id="banner">
<a href="<?php echo site_url()?>"><div id="banner_coscup"></div></a>
<a href="<?php echo site_url()?>"><div id="banner_cheese"></div></a>
<div id="banner_menu">
	<div id="getInvolved" class="banner_menu_option" onclick="getInvolved();">融入起司</div>
    <div id="bounceTo" class="banner_menu_option" onclick="selectTime();">跳躍起司</div>
    <div id="language" class="banner_menu_option" onmouseover="showLang();" onmouseout="recoverLang();" onclick="changeLang();">語言</div>
    <div id="about" class="banner_menu_option" onclick="openAbout();">關於</div>
    <div id="help" class="banner_menu_option" onclick='openHelp();'>?</div>
</div>
</div>
<div id="canvas">
<div class="seperator"></div>
<div id="container"><p>你的 COSCUP Cheese 正在熔化中，請耐心等待。</p><div id="loading"></div></div>
<div id="showEvent"></div>
<div id="eventline"></div>
<div class="seperator"></div>
<div id="timeline"></div>
<div id="footer"><font class="footer_text">快到我們的 <a href="http://coscup.org/" target="_blank">網站</a> / <a href="http://blog.coscup.org" target="_blank">部落格</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube 頻道</a> / <a href="http://www.plurk.com/coscup" target="_blank">噗浪</a> / <a href="https://www.facebook.com/coscup">臉書</a> 逛逛吧！</font></div>
</div>
<div id="photobox"><div id="innerbanner"></div><div id="innerbox"></div><div id="desc"></div><div id="close" onclick="closePhoto()">X</div><div id="gplusone"><div id="gbutton"></div><a id="plurk" href=""><img style="position:relative; top: 5px" width="32" src="<?php echo base_url();?>image/plurk.png" /></a></div><div id="photo_link" onclick="selectLink();"><img src="<?php echo base_url();?>image/at.png" />分享起司連結<input id="shareLink"  /></div></div>
<div id="getInvolvedInfo"><p>融入起司非常容易，只要 <a href="http://picasaweb.google.com" target="_blank" style="color:#FFF">上傳你在 COSCUP 照的照片到 Picasa</a> 並且加上 #COSCUP2010 標籤，然後這張照片就自然而然地與 COSCUP Cheese 混合了！</p><p>你也可以透過 Google +1 按鈕為其他的起司照片評分。</p><p>*請注意，由於我們對照片數量做了上限限制，您上傳的照片有可能不會被顯示出來。</p><div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeGetInvolved();'>關閉</div></div>
<div id="timeselect"><div id="Day1" class="day1"></div><div id="Day2" class="day2"></div></div>
<div id="langselect"></div>
<div id="wrap2"></div>
<div id="wrap" onclick="closePhoto();"></div>
<div id="text"></div>
<div id="arrow" onmousedown="panCanvas();" onmouseup="stopCanvas();" ontouchstart="panCanvas();" ontouchend = "stopCanvas();">►</div>
<div id="return" onclick="returnCanvas();">←</div>
</body>
</html>