<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="COSCUP, COSCUP2010, COSCUP Cheese, 開源人年會, 开源人年会" />
<meta name="description" content="A platfrom that makes sharing photo in COSCUP easy." />
<meta name="robots" content="index, allow" />
<meta name="google-site-verification" content="dQCRnqBuMTfC4th8pDO8P-uq_B94p-fpieGQ9kuImrQ" />
<link type="image/x-icon" href="<?php echo base_url();?>image/cheese.ico" rel="shortcut icon" />
<title>COSCUP Cheese 2011</title>
<style>
body{
	overflow:hidden;
	color:#BE1622;
	margin-left: 0px;
	font-family: "Apple LiGothic", "LiHei Pro", "文泉驛微米黑", "Droid Sans Fallback", "微軟正黑體", "Lucida Sans", FreeSans, sans-serif, "新細明體";
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
	font-size: 10px;
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25227452-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25157404-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>

var arrX = new Array();
var arrY = new Array();

var data;
var data_length;
var least_spacing;
var size_x;
var size_y;

var draging = false;

var footer_flag = 2;

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
	
	if(from*1000 > d.getTime()){
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
	$("#innerbanner").html("<font id='innerbanner_left'>Photo by "+data[id].author+"</font><font id='innerbanner_right'><img src='"+img_url+"share.png' alt=''></img><a href='"+data[id].photo_link+"' target='_blank'>Browse this album</a></font>");
	//$("g:plusone").attr("href", site_url+"view/"+data[id].photo_id);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href": site_url+"view/"+data[id].photo_id});
	$("#photo_link").attr("href", site_url+"view/"+data[id].photo_id);
	$("#shareLink").val(site_url+"view/"+data[id].photo_id);
	var purePhoto = data[id].photo_url.substr(0, data[id].photo_url.lastIndexOf('?'));
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(purePhoto)).concat(" ").concat(encodeURIComponent(site_url+'view/'+data[id].photo_id)).concat(' ').concat('(').concat('Check out every smiles in COSCUP Cheese !').concat(")'))"));
	
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
	for(var i=0; i<=16; i++){
		day1[i] = new Object();
	}
	
	day1[0].name = "Registration";
	day1[0].from =	1313828100;
	day1[0].to = 		1313831400;
	day1[0].detail = "Attendee Registration";
	
	day1[1].name = "Opening";
	day1[1].to =		1313832600;
	day1[1].detail = "COSCUP Organizer";
	
	day1[2].name ="Keynote#1";
	day1[2].to =		1313836200;
	day1[2].detail =	"Keynote: Arduino in the DIY Classroom";
	
	day1[3].name =	"Break";
	day1[3].to =		1313838000;
	day1[3].detail =	"Take a break!";
	
	day1[4].name =	"Talk#1";
	day1[4].to =		1313839800;
	day1[4].detail =	"使用 Arduino 開放平台建置智慧型插座 | ARM x Cloud = Next Generation Server | Using the Web in the GNOME Platform | 跨平台行動應用程式使用者介面開發—以 Titanium Mobile 為例";
	
	day1[5].name =	"Talk#2";
	day1[5].to =		1313841600;
	day1[5].detail =	"羊逃成熟時-以Arduino開發的互動設計商品 | A virtual storage appliance based on GlusterFS and OpenStack | My sofa wants a new form factor (GNOME for tablets) | Openframeworks x Smartphone!!!";
	
	day1[6].name = "Talk#3";
	day1[6].to =		1313843400;
	day1[6].detail ="RepRap 3D Printer | 運用企鵝龍打造多人 Hadoop 叢集 -- hadoop.nchc.org.tw 營運經驗分享 | Plasma Active: A Truly Open and Innovative Solution for Consumer Devices | Open Source, Mobile, Cloud, and Medical Images";
	
	day1[7].name =	"Lunch";
	day1[7].to =		1313848800;
	day1[7].detail =	"Take a rest and have a lunch!";
	
	day1[8].name =	"Keynote#2";
	day1[8].to =		1313852400;
	day1[8].detail =	"Keynote: Intel - Multiplying Opportunities for your Apps";
	
	day1[9].name =	"Break";
	day1[9].to =		1313854200;
	day1[9].detail =	"Take a break!";
	
	day1[10].name =	"Talk#4";
	day1[10].to =	1313856000;
	day1[10].detail =	"MeeTo: Android meets MeeGo ( on NOOK Color ) | The Kernel Report, 20th Anniversary Edition | Shuttle: How we build up MaDaCo community, the new era of gadgets | ezScrum 團隊 - 每旋轉一圈我們就更向前一步";
	
	day1[11].name =	"Talk#5";
	day1[11].to =	1313857800;
	day1[11].detail =	"Wayland and EGL | 自由軟體授權資訊的標示與SPDX | 使用 Jenkins 持續集成與發佈 Android 應用程式";
	
	day1[12].name =	"Talk#6";
	day1[12].to =	1313859600;
	day1[12].detail =	"開放電腦計畫 | Contribute to Linux Kernel | LibreOffice 在地化 - 談 LibreOffice 歷史與臺灣區發展困境 | Now.in 背後的技術 - Python軍火庫";
	
	day1[13].name =	"Talk#7";
	day1[13].to =	1313861400;
	day1[13].detail =	"Liquid Galaxy | Device Tree on ARM | OpenOffice.org 的魔術沙盒—繽紛的零 | OpenJDK 7: The universal language runtime";
	
	day1[14].name =	"Lightning Show";
	day1[14].to =	1313863200;
	day1[14].detail =	"Lightning Talk Speakers";
	
	day1[15].name =	"BOF Announcement";
	day1[15].to =	1313864100;
	day1[15].detail =	"COSCUP Organizer";
	
	day1[16].name =	"BoF, Birds of a Feather";
	day1[16].to =	1313874000;
	day1[16].detail =	"BoF Organizers";
	
	
	
	for(var i=0; i<=15; i++){
		day2[i] = new Object();
	}
	
	day2[0].name = "Registration";
	day2[0].from = 	1313914500;
	day2[0].to = 		1313918100;
	day2[0].detail =	"Attendee Registration";
	
	day2[1].name = "Announcement";
	day2[1].to = 		1313919000;
	day2[1].detail = "COSCUP Organizer";
	
	day2[2].name = "Keynote#3";
	day2[2].to = 		1313922600;
	day2[2].detail = "Keynote: 0xlab 開放原始碼作為新事業：台灣本土經驗談";
	
	day2[3].name =	"Break";
	day2[3].to =		1313924400;
	day2[3].detail =	"Take a rest!";
	
	day2[4].name =	"Talk#8";
	day2[4].to =		1313926200;
	day2[4].detail = "HTML5 and Friends: intelligence client side | 0xlab : Android 自動化測試與 QA 輔助工具 | SVG 和 OpenVG 的實機範例 | Unconference";
	
	day2[5].name =	"Talk#9";
	day2[5].to = 		1313928000;
	day2[5].detail =	"Testdroid - Test And Promote Your Android | AndroidVG: The power of OpenVG on Android | Unconference";
	
	day2[6].name =	"Talk#10";
	day2[6].to =		1313929800;
	day2[6].detail =	"Yahoo: 無名小站的行動應用服務 (Mobile service)與實作經驗分享 | How to prevent fragmentation using Fragment | Programming for the Future, Introduction to the Actor Model and Akka Framework | Unconference";
	
	day2[7].name =	"Lunch";
	day2[7].to =		1313935200;
	day2[7].detail =	"Let's have lunch!";
	
	day2[8].name = "Keynote#4";
	day2[8].to =		1313938800;
	day2[8].detail =	'HTC Keynote: Open Source at HTC: Beyond Android';
	
	day2[9].name =	"Break";
	day2[9].to =		1313940600;
	day2[9].detail ="Take a look at stalls";
	
	day2[10].name = 	"Talk#11";
	day2[10].to =	1313942400;
	day2[10].detail=	"Kinect x Android x beagleboard-xM = Auto Chasing Turtle | PIXNET: Web Development on Cloud Platform | HTC: Mobile Services UI Test Automation Using Open Source Tools | Unconference ";
	
	day2[11].name = 	"Talk#12";
	day2[11].to =	1313944200;
	day2[11].detail = 	"Printing Solution on Android Platform | New Stage ，New Game -- 浅谈 HTML5游戏 在 移动平台的应用 | 淺談 GCC 編譯技術 - Break Compilation Boundaries with GCC | Unconference";
	
	day2[12].name =	"Talk#13";
	day2[12].to =	1313946000;
	day2[12].detail =	"Porting android to brand-new CPU architecture | 讓 Django 專案直接開上GAE | KKBOX: 從一格空格說起... 淺談 debug | Unconference";
	
	day2[13].name =	"Talk#14";
	day2[13].to =	1313947800;
	day2[13].detail = "Android Open Accessory API and ADK | WAI-ARIA is more than accessibility | Trend Micro: 開源工具：好神的軟體養成計劃 | Unconference";
	
	day2[14].name = "Lightning Show";
	day2[14].to =	1313949600;
	day2[14].detail = 	"Lightning Talk Speakers";
	
	day2[15].name = "Closing";
	day2[15].to = 	1313950500;
	day2[15].detail =	"COSCUP Organizer";
	
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
	arrangeEventTag(203, 1281868200, 1281870000, "TeaBreak#1", "Tea Break");
	arrangeEventTag(204, 1281870000, 1281871800, "Section#1", "Debugging: Linux Kernel by Ftrace | Introducing GStreamer, the Media Framework on GNU/Linux | Building and Using a Memory Profiler | How to Become a Debian Developer");*/
}

function footerSwitcher(){
	
	if(footer_flag == 0){
		$("#footer > font").fadeOut(1000, 'linear', function(){
		$("#footer").html('<font class="footer_text">Check out our <a href="http://coscup.org/" target="_blank">Website</a> / <a href="http://blog.coscup.org" target="_blank">Blog</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube Channel</a> / <a href="http://www.plurk.com/coscup" target="_blank">Plurk</a> / <a href="https://www.facebook.com/coscup">Facebook</a> .</font>');
		});
		footer_flag = 1;
	}else if(footer_flag == 1){
		$("#footer > font").fadeOut(1000, 'linear', function(){$("#footer").html('<font class="footer_text">We <font style="color: #FFCCFF;">(heart)</font> Open.</font>');});
		footer_flag = 2;
	}else if(footer_flag == 2){
		$("#footer > font").fadeOut(1000, 'linear', function(){$("#footer").html('<font class="footer_text">Also take a look at<a href="http://coscup.org/cheese/2010">COSCUP Cheese 2010</a> 、 <a href="http://coscup.org/cheese/event">TOGETHER say Cheese!</a>  :-) ！</font>');});
		footer_flag = 0;
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
		$("#Day2").append("<div class='day2 select_option' style='text-align: center;width: 80px; margin-top: 20px' onclick='closeTimeselect();'>Close</div>");
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
	$("#language").text("English");
}

function recoverLang(){
	$("#language").text("Language");
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
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/zh-tw'>正體中文</a></div>");
		$("#langselect").append("<div class='select_option'><a href='"+site_url+"lang/zh-cn'>简体中文</a></div>");
		$("#langselect").append("<div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeLang();'>Cancel</div>");
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
	$("#innerbanner").html("<div id='innerbanner_left'>About COSCUP Cheese</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p><img src='"+img_url+"coscup.png'/></p><p><b>COSCUP Cheese</b>, is a platform launched by COSCUP's marketing team which makes sharing COSCUP photos easy. The name \"Cheese\" represents our dedication to create a bonding experience for COSCUP members. We look forward to you saying Cheese when taking photos at COSCUP.</p><p>The COSCUP Cheese project is lead by lRabbit and Toby, in association with all the Marketing members, including Captain BobChao, CodePecker Illustrator Mini, Assistant Singing, and Advisors ShiaShia, Yinguichen. Special thanks to the Website Team lead, Timdream, and other advisors. </p><p>For more information about COSCUP, Conference for Open Source Coders, Users, and Promoters, please pay a visit to COSCUP's official website.</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('Check out every smiles in COSCUP Cheese !').concat(")'))"));
	$("#wrap").css("display", "block");
	$("#photobox").css("display", "block")
}

function openHelp(){
	$("#innerbox").empty();
	$("#innerbanner").html("<div id='innerbanner_left'>Help</div>");
	//$("g:plusone").attr("href", site_url);
	gapi.plusone.render('gbutton',{"size": "standard", "count": "true", "href":  site_url});
	$("#photo_link").attr("href", site_url);
	$("#shareLink").val(site_url);
	$("#desc").html("<p>A demo clip will be here soon.</p>");
	$("#plurk").attr("href", "javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=".concat(encodeURIComponent(img_url+'banner_coscup.png')).concat(" ").concat(encodeURIComponent(site_url)).concat(' ').concat('(').concat('Check out every smiles in COSCUP Cheese !').concat(")'))"));
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
	<div id="getInvolved" class="banner_menu_option" onclick="getInvolved();">Get Involved</div>
    <div id="bounceTo" class="banner_menu_option" onclick="selectTime();">Bounce to</div>
    <div id="language" class="banner_menu_option" onmouseover="showLang();" onmouseout="recoverLang();" onclick="changeLang();">Language</div>
    <div id="about" class="banner_menu_option" onclick="openAbout();">About</div>
    <div id="help" class="banner_menu_option" onclick='openHelp();'>?</div>
</div>
</div>
<div id="canvas">
<div class="seperator"></div>
<div id="container"><p>Your COSCUP Cheese is baking for you, please wait patiently.</p><div id="loading"></div></div>
<div id="showEvent"></div>
<div id="eventline"></div>
<div class="seperator"></div>
<div id="timeline"></div>
<div id="footer"><font class="footer_text">Check out our <a href="http://coscup.org/2010" target="_blank">Website</a> / <a href="http://blog.coscup.org" target="_blank">Blog</a> / <a href="http://www.youtube.com/user/coscup2011" target="_blank">YouTube Channel</a> / <a href="http://www.plurk.com/coscup" target="_blank">Plurk</a> / <a href="https://www.facebook.com/coscup">Facebook</a> .</font></div>
</div>
<div id="photobox"><div id="innerbanner"></div><div id="innerbox"></div><div id="desc"></div><div id="close" onclick="closePhoto()">X</div><div id="gplusone"><div id="gbutton"></div><a id="plurk" href=""><img style="position:relative; top: 5px" width="32" src="<?php echo base_url();?>image/plurk.png" /></a></div><div id="photo_link" onclick="selectLink();"><img src="<?php echo base_url();?>image/at.png" />Share the Cheese Link<input id="shareLink"  /></div></div>
<div id="getInvolvedInfo"><p>It's easy to get involved! Just <a href="http://picasaweb.google.com" target="_blank" style="color:#FFF">upload your COSCUP Cheese photo to Picasa</a> and tag it with #COSCUP2010, then it will be automatically added to COSCUP Cheese.</p><p>In addition, you can rate others' Cheese photos using Google's +1 button.</p><p>*Notice that the photo you uploaded may not appear due to the limited amount of display space.</p><div class='select_option' style='clear: both;text-align: center;width: 80px; margin-top: 20px' onclick='closeGetInvolved();'>Close</div></div>
<div id="timeselect"><div id="Day1" class="day1"></div><div id="Day2" class="day2"></div></div>
<div id="langselect"></div>
<div id="wrap2"></div>
<div id="wrap" onclick="closePhoto();"></div>
<div id="text"></div>
<div id="arrow" onmousedown="panCanvas();" onmouseup="stopCanvas();" ontouchstart="panCanvas();" ontouchend = "stopCanvas();">►</div>
<div id="return" onclick="returnCanvas();">←</div>
</body>
</html>
