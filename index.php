<html lang="zh-CN">
<head>
<title>WHU搜索导航——只为更简洁</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" /> 
<link href="style.css" rel="stylesheet" type="text/css" />
<script class="cssdeck" src="jquery.min.js"></script>
</head>

<body>
<div align="center"><img src=img/logo.png height="50" width=auto ></div>
<!--<h1>百度</h1> -->
<div align="center"><img src=img/baidu.png height="24" width=auto ></div>
<form name="searchForm1" id="searchForm1" method="get" action="https://www.baidu.com/s" target="_blank"> 
<div class="field" id="searchform1">
  <input type="text" id="searchterm1" name="wd" placeholder="使用百度搜索引擎搜索" />
  <button onclick="searchForm1.submit()" type="button" id="search">Find!</button>
</div>
</form>

<!--<h1>Bing</h1> -->
<div align="center"><img src=img/bing.png height="24" width=auto ></div>
<form name="searchForm2" id="searchForm2" method="get" action="http://cn.bing.com/search" target="_blank"> 
<div class="field" id="searchform2">
  <input type="text" id="searchterm2" name="q" placeholder="使用必应搜索引擎搜索" />
  <button onclick="searchForm2.submit()" type="button" id="search">Find!</button>
</div>
</form>

<!--<h1>sogou</h1> -->
<div align="center"><img src=img/sogou.png height="24" width=auto ></div>
<form name="searchForm4" id="searchForm4" method="get" action="https://www.sogou.com/web" target="_blank"> 
<div class="field" id="searchform4">
  <input type="text" id="searchterm4" name="query" placeholder="使用搜狗搜索引擎搜索" />
  <button onclick="searchForm4.submit()" type="button" id="search">Find!</button>
</div>
</form>

<!--<h1>360</h1> -->
<div align="center"><img src=img/360.png height="24" width=auto ></div>
<form name="searchForm6" id="searchForm6" method="get" action="https://www.so.com/s" target="_blank"> 
<div class="field" id="searchform6">
  <input type="text" id="searchterm6" name="q" placeholder="使用360搜索引擎搜索" />
  <button onclick="searchForm6.submit()" type="button" id="search">Find!</button>
</div>
</form>

<!--<h1>有道</h1> -->
<div align="center"><img src=img/youdao.png height="24" width=auto ></div>
<script>
function load(){
var str = searchForm5.q.value;
//alert(str);
return str;
}

function openWin()
{
var str = load();
window.open ("http://m.youdao.com/dict?le=eng&q="+str+"", "newwindow");
}
//http://www.youdao.com/w/eng/
</script>
<form name="searchForm5"> 
<div class="field" id="searchform5">
  <input type="text" id="searchterm5" name="q" placeholder="使用有道搜索引擎搜索" />
  <button href="JavaScript:void(0)" onclick= "openWin()" type="button" id="search">Find!</button>
</div>
</form>

<!--<h1>Google</h1> -->
<div align="center"><img src=img/google.png height="24" width=auto ></div>
<form name="searchForm3" id="searchForm3" method="get" action="https://220.255.2.153/search" target="_blank"> 
<div class="field" id="searchform3">
  <input type="text" id="searchterm3" name="q" placeholder="需翻墙或修改本机HOST才能使用！" />
  <button onclick="searchForm3.submit()" type="button" id="search">Find!</button>
</div>
</form>

<center><p>Copyright©2016 so.whu.link 鄂ICP备14003738号 版权所有 All Rights Reserved Powered By <a href="http://blog.xyf.im" target="_blank">WHUER</a></p></center>
</body>
</html>
