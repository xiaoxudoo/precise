<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8"/>
  <!-- 这个属性主要是设置浏览器优先使用什么模式来渲染页面的-->
  <!-- #下面的meta标签告诉IE浏览器，IE8/9及以后的版本都会以最高版本IE来渲染页面。  -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!--移动设备都是这Viewport里面打开，width=device-width表示打开页面默认和设备一致，initial-scale=1表示页面不进行缩放   -->
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <meta name="description" content="普瑞赛思生物医药科技（北京）有限公司是一家专注于计算机辅助药物设计（CADD）的专业服务商。我们致力于提供最专业的计算药物解决方案，主要包括：虚拟筛选、分子对接、分子动力学模拟、化合物库构建。" />
  <meta name="keywords" content="CADD,virtual screen,molecular dynamics,molecular docking,protein docking,reverse docking,虚拟筛选,分子动力学模拟,分子对接,蛋白质对接,计算机辅助药物,反向虚拟筛选,普瑞赛思,普瑞赛思生物医药,普瑞赛思生物医药科技,普瑞赛思生物医药科技有限公司,普瑞赛思生物医药科技（北京）有限公司" />
  <!-- <link rel="shortcut icon" href="img/precise.ico" > -->
  <link rel="icon" href="img/precise.ico" type="image/x-icon">
  <!-- seo搜索优化 -->
  <title>普瑞塞思生物技术</title>
  <!-- Bootstrap -->
  <!--<link href="css/bootstrap.min.css" rel="stylesheet"/>-->
  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/common.css')}}" />
  <!-- 引入基础样式 -->
  <!--低版本浏览器如果支持HTML5需要添加以下js-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss .com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- 导航条  默认高度50px, 反色（黑色） 固定在顶部 -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <!--当浏览器宽度变窄的时候会显示这个Button按钮，并且会把data-target中的div中ul收缩导航到Button下方-->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <!--定义小按钮的样式-->
          <span class="sr-only">Toggle navigation</span>
          <!-- 页面变窄时 ， 按钮的3条横线 -->
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--Logo位置-->
        <a href="#" class="navbar-brand precise-title">
            <img class="logoImg" src="img/logo.png" width="150" height="50">
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li ><a href="{{url('/')}}">首页</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">产品与服务<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/virtualscreen')}}">虚拟筛选 </a></li>
              <li><a href="{{url('/moldynamic')}}">动力学模拟 </a></li>
              <li><a href="{{url('/moldock')}}">分子对接 </a></li>
              <li><a href="{{url('/pharm')}}">药效团筛选 </a></li>
              <li><a href="{{url('/model')}}">同源建模 </a></li>
              <li><a href="{{url('/valid')}}">实验验证 </a></li>
              <li><a href="{{url('/paper')}}">论文服务 </a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">客户与案例<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/customer')}}">合作客户</a></li>
              <li><a href="{{url('/case')}}">经典案例</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">相关资料<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/training')}}">常见问题</a></li>
              <li><a href="{{url('/material')}}">相关资料</a></li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">关于我们 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/company')}}">公司简介</a></li>
              <li><a href="{{url('/culture')}}">公司文化</a></li>
              <li><a href="{{url('/partner')}}">技术顾问</a></li>
              <li><a href="{{url('/join')}}">加入我们</a></li>
              <li><a href="{{url('/contact')}}">联系我们</a></li>
            </ul>
          </li>
          <li class="contact">
            <img src="img/tel.png" width="40" height="40">
            <span class="tel">010-57205685</span>
          </li> 
        </ul>
        <!--搜索表单-->
        <form class="navbar-form navbar-right" role="search" method="get" action="http://www.baidu.com/s" target="_blank">
          <div class="form-group">
            <input type="text" class="form-control" name="wd" placeholder="Search..." onclick="document.forms[0].wd.value=''"/>
          </div>
          <button type="submit" class="btn btn-primary" >搜索</button>
        </form>
       
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  @yield('content')
  <!-- footer -->
  <div class="footer container-fluid">
    <div class="row-fluid">
      <nav class="footer-nav flag col-md-3">
        <ul>
            <li class="footer-title">关于我们</li>
            <li><a href="{{url('/company')}}">公司简介</a></li>
            <li><a href="{{url('/culture')}}">公司文化</a></li>
            <li><a href="{{url('/partner')}}">技术顾问</a></li>
            <li><a href="{{url('/join')}}">加入我们</a></li>
            <li><a href="{{url('/contact')}}">联系我们</a></li>
        </ul>
        <ul>
            <li class="footer-title">科技服务</li>
            <li><a href="{{url('/virtualscreen')}}">虚拟筛选 </a></li>
            <li><a href="{{url('/moldynamic')}}">动力学模拟 </a></li>
            <li><a href="{{url('/moldock')}}">分子对接 </a></li>
            <li><a href="{{url('/pharm')}}">药效团筛选 </a></li>
            <li><a href="{{url('/model')}}">同源建模 </a></li>
            <li><a href="{{url('/valid')}}">实验验证 </a></li>
            <li><a href="{{url('/paper')}}">论文服务 </a></li>
        </ul>
      </nav>
      <nav class="footer-nav col-md-3">        
        <ul>
            <li class="footer-title">应用领域</li>
            <li><a>科研服务</a></li>
            <li><a>食品保健</a></li>
            <li><a>农业&环境</a></li>
        </ul>
        <ul>
            <li class="footer-title">内部链接</li>
            <li><a href="http://xiaoxudoo.cn/jsmol/jsmol.htm">JSmol视图</a></li>
        </ul>
      </nav>
      <div class="col-md-2">
        <section class="qr-code">
            <div class="qr-code-inner"></div>
            <p>关注微信公众平台</p>
        </section>
      </div>
      <div class="col-md-2">
        <section class="sns">
            <p class="footer-title">关注我们</p>
            <p class="sns-icons">
                <a href="#" target="_blank" ><span class="weibo"></span></a>
            </p>
            <p class="footer-title">客户意见反馈邮箱</p>
            <p><a style="color:#fff" href="mailto:info@precisedock.com">info@precisedock.com</a></p>
        </section>
      </div>
      <div class="col-md-2">  
        <section class="service-tel">
            <p class="footer-title">客服热线</p>
            <p class="tel-number">
                010-57205685
            </p>
            <p class="footer-title">工作时间</p>
            <p>09:00~21:00</p>
        </section>
      </div>
    </div>
  </div>
  <div class="copyrightbox container-fluid">
    <div class="row-fluid">
      <div class="col-md-12">
        <p class="copyright text-center">
          &copy;&nbsp;2016普瑞赛思生物医药科技（北京）有限公司 京ICP备16026270号
        </p>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap核心js依赖于jQuery,所以要先引用jQuery-->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
  <!-- 自己的js -->
</body>
</html>