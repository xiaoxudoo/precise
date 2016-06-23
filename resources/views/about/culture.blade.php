@extends('_layouts.default')

@section('content')

  <!--栅格系统， 全局CSS样式-栅格系统  -->
  <!--栅格系统放在container容器中-->
  <div class="body container-fluid">
    <!--添加一行占用12列，添加img-->
    <div class="row-fluid" >     
      <div class="centered">  
        <img src="img/sliders/culture.jpg" />
      </div>
      <div class="centered col-md-8 col-md-offset-2">
        <h2 class="blue">
          企业文化
        </h2>
        <p class="left">
          &nbsp;&nbsp;普瑞赛思是一家专注于计算机辅助药物设计的高科技公司，我们是国内制药行业、高校、研究院所的优秀外包伙伴。<br/><br/>
          &nbsp;&nbsp;我们的业务成功和快速成长有赖于我们专注精神和创新精神，并且始终如一地关注和满足客户的需求。<br/><br/>
          &nbsp;&nbsp;我们始终相信，专注和创新是一个企业的最佳生存法则。
        </p>
        <h2 class="blue">
          企业愿景
        </h2>
        <p class="centered">
          成为药物研发服务的标杆
        </p>
        <h2 class="blue">
          企业价值观
        </h2>
        <p class="centered">
          客户第一、团队合作、诚信、敬业
        </p>
      </div>
      <div class="centered">  
        <img src="img/contents/value.jpg" style="border-radius:10px;margin-bottom: 20px;" />
      </div>
    </div>
  </div>

@endsection