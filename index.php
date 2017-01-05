<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>WHU搜索导航——只为更简洁</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1, maximum-scale=1.0, user-scalable=no" /> 
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-tab.js"></script>
</head>

<?php
if(is_array($_POST)&&count($_POST)>0)//判断是否有POST参数 
{ 
	if(!empty($_POST['input']) || !isset($_POST["input"]))//判断所需要的参数是否存在，isset用来检测变量是否设置，返回true or false 
	{ 
		$url = 'https://www.baidu.com/s?wd='.$_POST['input'];
		echo "<meta http-equiv='Refresh' content='0;URL=$url'>"; 
		exit;
	}
}
?>

<body>
<div align="center"><a href="http://so.whu.link" title=""><img src=img/logo.png height="50" width=auto ></a></div>

<?php
//print_r($_SERVER);
if (stripos($_SERVER["HTTP_USER_AGENT"],"safari")){
	if (!stripos($_SERVER["HTTP_USER_AGENT"],"Chrome")){
?>
	<script>
	document.onkeydown = function(){
		if (event.keyCode==13) { 
			//alert("ok"); 
			openWin('baidu'); 
		} 
	}
	</script>
<?php
}
}
?>

<script>
function read_input(){
var str = searchForm.input.value;
//alert(str);
return str;
}

function openWin(name)
{
var str = read_input();
//alert(name);
//web
if (name == "baidu_web"){
	var so = "https://www.baidu.com/s?wd=";
}
else if (name == "bing_web"){
	var so = "http://cn.bing.com/search?q=";
}
else if(name == "sogou_web"){
	var so = "https://www.sogou.com/web?query=";
}
else if(name == "360_web"){
	var so = "https://www.so.com/s?q=";
}
else if(name == "youdao_web"){
	var so = "http://m.youdao.com/dict?le=eng&q=";
}
else if(name == "google_web"){
	var so = "https://www.google.com.hk/search?q=";
}
else if(name == "google_mirror_web"){
	var so = "https://g.starmoe.xyz/#q=";
}

//img
else if(name == "baidu_img"){
	var so = "http://image.baidu.com/search/wiseala?tn=wiseala&ie=utf8&from=index&fmpage=index&pos=top&active=1&word=";
}
else if (name == "bing_img"){
	var so = "http://cn.bing.com/images/search?q=";
}
else if(name == "sogou_img"){
	var so = "http://pic.sogou.com/pic/searchList.jsp?v=5&statref=index_form_1&keyword=";
}
else if(name == "360_img"){
	var so = "http://image.so.com/i?q=";
}
else if(name == "google_img"){
	var so = "https://www.google.com.hk/search?newwindow=1&safe=strict&site=imghp&tbm=isch&q=";
}

//AQ
else if(name == "baidu_aq"){
	var so = "https://zhidao.baidu.com/search?ct=17&pn=0&tn=ikaslist&rn=10&lm=0&ie=utf-8&word=";
}
else if(name == "sogou_aq"){
	var so = "http://wenwen.m.sogou.com/ms/search.jsp?key=";
}
else if(name == "360_aq"){
	var so = "http://wenda.so.com/search/?q=";
}
else if(name == "sina_aq"){
	var so = "http://m.iask.sina.com.cn/search/1.html?content=";
}
else if(name == "zhihu_aq"){
	var so = "https://www.zhihu.com/search?type=content&q=";
}

//translate
else if(name == "baidu_translate"){
	var so = "http://fanyi.baidu.com/#en/zh/";
}else if (name == "bing_translate"){
	var so = "http://cn.bing.com/dict/search?intlF=0&q=";
}
else if(name == "youdao_translate"){
	var so = "http://m.youdao.com/dict?le=eng&q=";
}
else if(name == "jinshan_translate"){
	var so = "http://www.iciba.com/";
}
else if(name == "google_translate"){
	var so = "https://translate.google.com.hk/?hl=zh-CN&tab=wT#auto/zh-CN/";
}

//scholar
else if(name == "baidu_scholar"){
	var so = "http://xueshu.baidu.com/s?wd=";
}
else if (name == "bing_scholar"){
	var so = "http://cn.bing.com/academic/search?intlF=0&q=";
}
else if(name == "sogou_scholar"){
	var so = "http://scholar.sogou.com/xueshu?ie=utf-8&query=";
}
else if(name == "360_scholar"){
	var so = "http://xueshu.so.com/s?ie=utf-8&shb=1&src=360sou_home&q=";
}
else if(name == "youdao_scholar"){
	var so = "http://m.youdao.com/dict?le=eng&q=";
}
else if(name == "google_scholar"){
	var so = "https://scholar.google.com.hk/scholar?q=";
}
else if(name == "google_mirror_scholar"){
	var so = "https://fq.yanke.info/scholar?hl=zh-CN&q=";
}
else if(name == "luojia_scholar"){
	var so = "http://cn.whu.findplus.cn/?h=search_list&action[addexpander][]=fulltext&query=";
}
else if(name == "whulib_scholar"){
	var so = "http://202.114.65.38:8080/search?xc=3&filed=wrd&app=null&base=whu01&kw=";
}
//whulib_pc http://opac.whu.findplus.cn/?h=search_list&query=

//map
else if(name == "baidu_map"){
	str = ""
	var so = "http://map.baidu.com";
}
else if(name == "gaode_map"){
	str = ""
	var so = "http://ditu.amap.com";
}
else if(name == "sogou_map"){
	str = ""
	var so = "http://map.sogou.com";
}
else if(name == "360_map"){
	str = ""
	var so = "http://ditu.so.com";
}
else if(name == "tencent__map"){
	str = ""
	var so = "http://map.qq.com";
}
else if (name == "bing_map"){
	str = ""
	var so = "http://cn.bing.com/ditu";
}
else if(name == "google_map"){
	str = ""
	var so = "http://www.google.cn/maps";
}
else{
	var so = "https://www.baidu.com/s?wd=";
}

var url = so + str + "";
window.open (url, "newwindow");
}
</script>

<form name="searchForm" id="searchForm" method="POST" target="_blank"> 
<div class="searchbox" id="searchform">
	<input type="text" value="" name="input" id="searchform" class="one" placeholder="请输入您想搜索的内容" />
</div>
</form>
</br>
<div class="htmleaf-container">
	<div class="container">
	  <div class="tab-group">
		<section id="tab1" title="网页">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_web')" align="left"><img src=img/baidu_web.png height="22" width=auto ></div></th>
				<th><!--<h1>Bing</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('bing_web')" align="left"><img src=img/bing.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>sogou</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sogou_web')" align="left"><img src=img/sogou_web.png height="22" width=auto ></div></th>
				<th><!--<h1>360</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('360_web')" align="left"><img src=img/360_web.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>Google</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_web')" align="left"><img src=img/google_hk.png height="22" width=auto ></div></th>
				<th><!--<h1>Google_mirror</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_mirror_web')" align="left"><img src=img/google_mirror.png height="22" width=auto ></div></th>
			</tr>
			</table>
			</center>
		</section>
		<section id="tab2" title="图片">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_img')" align="left"><img src=img/baidu_img.png height="22" width=auto ></div></th>
				<th><!--<h1>Bing</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('bing_img')" align="left"><img src=img/bing.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>sogou</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sogou_img')" align="left"><img src=img/sogou_img.png height="22" width=auto ></div></th>
				<th><!--<h1>360</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('360_img')" align="left"><img src=img/360_img.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>Google</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_img')" align="left"><img src=img/google_hk.png height="22" width=auto ></div></th>
			</tr>
			</table>
			</center>
		</section>
		<section id="tab3" title="问答">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_aq')" align="left"><img src=img/baidu_aq.png height="22" width=auto ></div></th>
				<th><!--<h1>sogou</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sogou_aq')" align="left"><img src=img/sogou_aq.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>360</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('360_aq')" align="left"><img src=img/360_aq.png height="22" width=auto ></div></th>
				<th><!--<h1>新浪</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sina_aq')" align="left"><img src=img/sina_aq.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>知乎</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('zhihu_aq')" align="left"><img src=img/zhihu_aq.png height="22" width=auto ></div></th>
			</tr>
			</table>
			</center>

		</section>
		<section id="tab4" title="翻译">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_translate')" align="left"><img src=img/baidu_translate.png height="22" width=auto ></div></th>
				<th><!--<h1>Bing</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('bing_translate')" align="left"><img src=img/bing.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>有道</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('youdao_translate')" align="left"><img src=img/youdao.png height="22" width=auto ></div></th>
				<th><!--<h1>金山</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('jinshan_translate')" align="left"><img src=img/jinshan.png height="22" width=auto ></div></th>
			</tr>
			<tr>

				<th><!--<h1>Google</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_translate')" align="left"><img src=img/google_hk.png height="22" width=auto ></div></th>
			</tr>
			</table>
			</center>

		</section>
		<section id="tab5" title="学术">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_scholar')" align="left"><img src=img/baidu_scholar.png height="22" width=auto ></div></th>
				<th><!--<h1>Bing</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('bing_scholar')" align="left"><img src=img/bing.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>sogou</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sogou_scholar')" align="left"><img src=img/sogou_scholar.png height="22" width=auto ></div></th>
				<th><!--<h1>360</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('360_scholar')" align="left"><img src=img/360_scholar.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>Google</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_scholar')" align="left"><img src=img/google_hk.png height="22" width=auto ></div></th>
				<th><!--<h1>Google_mirror</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_mirror_scholar')" align="left"><img src=img/google_mirror.png height="22" width=auto ></div></th>
			</tr>
			</tr>
				<th><!--<h1>luojia</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('luojia_scholar')" align="left"><img src=img/luojia.png height="22" width=auto ></div></th>
				<th><!--<h1>whulib</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('whulib_scholar')" align="left"><img src=img/whulib.png height="22" width=auto ></div></th>
			<tr>
			</table>
			<a href="request">WHU搜索导航——文献传递请求(FREE)</a>
			</center>
			
		</section>
		<section id="tab6" title="地图">
			<center>
			<table border="0" cellspacing="30">
			<tr>
				<th><!--<h1>百度</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('baidu_map')" align="left"><img src=img/baidu_map.png height="22" width=auto ></div></th>
				<th><!--<h1>高德</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('gaode_map')" align="left"><img src=img/gaode_map.png height="22" width=auto ></div></th>
			  </tr>
			<tr>
				<th><!--<h1>sogou</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('sogou_map')" align="left"><img src=img/sogou_map.png height="22" width=auto ></div></th>
				<th><!--<h1>腾讯</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('tencent_map')" align="left"><img src=img/tencent_map.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>360</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('360_map')" align="left"><img src=img/360_map.png height="22" width=auto ></div></th>
				<th><!--<h1>Bing</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('bing_map')" align="left"><img src=img/bing.png height="22" width=auto ></div></th>
			</tr>
			<tr>
				<th><!--<h1>Google</h1> -->
			<div href="JavaScript:void(0)" onclick="openWin('google_map')" align="left"><img src=img/google.png height="22" width=auto ></div></th>
			</tr>
			</table>
			</center>
			<p>注意：地图无法从上方搜索框搜索，请直接点击logo进入地图页面查找！</p>
		</section>
	  </div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		// Calling the plugin
		$('.tab-group').tabify();
	})
</script>

<p>使用方法：在上方搜索框输入您想搜索的内容，然后点击下方您想要使用的搜索引擎的logo即可搜索,输入内容后直接回车默认使用百度搜索网页</p>
<center><p>Copyright©2016 so.whu.link 鄂ICP备14003738号 版权所有 All Rights Reserved Powered By <a href="http://blog.xyf.im" target="_blank">WHUER</a> 本项目已在<a href="https://github.com/xuyuanfang/so.whu.link" target="_blank">Github</a>开源</p></center>
</body>
</html>
