![so_whu_logo](/img/logo.png)

多搜索引擎手机导航页面
=========================

[项目主页](http://so.whu.link)

目前支持的搜索引擎 : )

- 百度[网页/图片/知道/翻译/学术/地图]
- Bing[网页/图片/翻译/学术/地图]
- 搜狗[网页/图片/问问/学术/地图]
- 360[网页/图片/问答/学术/地图]
- 新浪爱问
- 知乎
- 有道翻译
- 珞珈学术搜索
- 武汉大学图书馆馆藏查询
- 金山词霸
- 高德地图
- 腾讯地图
- Google[网页/图片/翻译/学术/地图]
- Google国内镜像[网页/学术]

###### 备注：Google除地图服务国内能正常使用外，其余服务均被墙，请使用VPN或者修改本机HOST文件后访问！ Google网页搜索和学术搜索可使用国内镜像站点
###### 友情链接：获取最新翻墙HOST信息 [Github内部传送门](https://github.com/racaljk/hosts)

浏览器要求
------------
- 本页面目前专为手机浏览器开发，暂不建议PC的浏览器使用（只要你不嫌丑就好）
- 为了获得页面的最佳UI效果，强烈建议手机屏幕分辨率水平方向像素点不小于536px
- 为了保证页面的正常使用，手机屏幕分辨率水平方向像素点不应小于480px，否则页面元素无法完整地、正常地显示

###### 备注：鉴于2011年发布的小米手机1代的屏幕分辨率水平方向像素点已经达到480px，2014年发布的红米1S的屏幕分辨率水平方向像素点已经达到720px，已经远超建议配置了，所以只要你现在用的不是古董机，页面应该都能正常显示的）

环境要求
------------
- php

###### 备注：php环境不是必须的，我使用php的目的是为了加强对火狐浏览器使用“Enter”键发起搜索的兼容支持，我在代码头12-26行加入了php语言对浏览器的检测语句。没有php环境的同学可以将那部分代码删除，再将主页后缀改为html即可）

网站部署
------------
将文件直接放置在网站根目录即可

###### 备注：目前Github上的代码仅为WHU首页的代码。暂不包括新增加的“珞珈学术搜索手机版”和“WHU文献传递请求”的相关网页代码，因为新增加的页面刚刚开发，不少配置文件逻辑比较混乱，故暂时不宜上传，待我将文件条理整理清晰后，再一并开源

未来将会更新的地方
----------
- 单独设计电脑版UI
- 支持更多搜索引擎
- 可能增加个性化设置（从本人的能力来看，暂时不太现实，哈哈）

主要页面截图
-----------
#### WHU搜索导航
![Index](/img/s1.png)

#### WHU学术搜索
![Index](/img/s2.png)

#### WHU文献传递
![Index](/img/s3.png)

更新日志
-----------
20170108 更新 v1.3
- 首页顶部加入本地当前天气预报（初次使用可能无法正常显示，原因可能是天气代码还没完成定位确认）（还不是为了让搜索框位置下移2333）
- 应知友建议，现将搜索框位置进行了适当下移，方便输入
- 由于Google的国内镜像网站提供的服务均不稳定，现已更新为可用的新网站（如若失效，欢迎及时通知我~微笑脸2333）
- logo尺寸按比例在高向上调大了10px（为了让搜索框位置下移，我也是煞费苦心呐~）

20161102 更新 v1.2
- 首页logo增加指向自身的超链接
- 背景颜色改回白色
- 更新搜狗图片搜索请求链接为手机版
- 修复对火狐浏览器的兼容支持后引起的猎豹浏览器发起搜索时的异常
- 修复“珞珈学术搜索”直接点击无法打开的问题
- 学术搜索标签下增加独家提供的珞珈学术搜索的手机版支持
- 学术搜索标签下增加本站提供的知网、万方、维普数据库文献传递请求页面

20161102 更新 v1.1
- 对全部搜索引擎logo图片进行适应web优化，取消背景图片，提升加载速度，大幅减少流量消耗，整页图片加载大小由707KB降到143KB
- 启用新版logo，与页面主色调保持一致
- 修复分类导航标签宽度自适应
- 增加Google网页搜索和学术搜索的国内镜像支持
- 增加珞珈学术搜索和武汉大学图书馆馆藏搜索
- 加强对火狐浏览器使用“Enter”键发起搜索的兼容支持

20161102 更新 v1.0
- 增加对“Enter”键发起搜索的支持 
- 增加细化搜索内容的分类导航标签 
- 重新设计搜索页面UI
- 支持搜索引擎分类搜索

20161029 创建v0.1
- 框架预览版

交流讨论
----------
- QQ: 691066230
- email: admin@xyf.im
