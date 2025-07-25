## FastAdmin-Nova：更美观、简洁的FastAdmin界面！

本项目基于 [FastAdmin](https://doc.fastadmin.net) 进行二次开发，专注于优化 FastAdmin 的 UI 体验，以适配更现代的使用场景

在此衷心感谢 FastAdmin 原作者及其团队为开源社区所做出的杰出贡献

## 界面截图

* 登录页对比：

<img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/login_new.png" style="width:500px"> <img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/login_old.png" style="width:500px">

* 后台管理页对比：
  
<img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/admin_new.png" style="width:500px"> <img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/admin_old.png" style="width:500px">

* Layer弹窗对比：
  
<img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/layer_new.png" style="width:500px"> <img src="https://github.com/lrx1808/fastadmin-nova/blob/main/public/assets/img/readme/layer_old.png" style="width:500px">

## 已有的FastAdmin项目，如何升级成FastAdmin-Nova

1. 复制核心文件public/assets/css/fastadmin-nova.css，在你项目的application/admin/view/common/meta.html中引用该css

2. 复制皮肤文件public/assets/css/skins/skin-blue.css替换你项目的skin-blue.css

3. 在你项目的public/assets/css/backend.css中修改以下代码：

```html
// 在项目启动时引用新版skin-blue，修改完执行命令 php think min -m backend -r css 更新压缩文件
@import url("../css/skins/skin-blue.css");
```

4. 在你项目的application/admin/view/index/index.html中修改以下代码：
 
```html
// 设置系统默认皮肤为skin-blue
<body class="hold-transition {$Think.config.fastadmin.adminskin|default='skin-blue'} sidebar-mini {:$Think.cookie.sidebar_collapse?'sidebar-collapse':''} fixed {:$Think.config.fastadmin.multipletab?'multipletab':''} {:$Think.config.fastadmin.multiplenav?'multiplenav':''}" id="tabs">
```
5. 在你项目的application/admin/view/common/control.html中修改以下代码：

```html
// 重新定义皮肤列表中skin-blue的样式
<li><a href="javascript:;" data-skin="skin-blue" class="clearfix full-opacity-hover"><div><span style="width: 20%; height: 27px; background: #4b6095;"></span><span style="width: 80%; height: 27px; background: #f4f5f7;"></span></div></a><p class="text-center no-margin">Nova</p></li>
```
6. 复制登录页application/admin/view/index/login.html替换你项目的login.html
