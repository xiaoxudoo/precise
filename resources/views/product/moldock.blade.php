@extends('_layouts.default')

@section('content')

  <!--栅格系统， 全局CSS样式-栅格系统  -->
  <!--栅格系统放在container容器中-->
  <div class="body container-fluid">
    <!--添加一行占用12列，添加img-->
    <div class="row-fluid">
        <!--javascript插件，添加carousel轮播图-->
      <div id="carousel-example-generic" class="carousel slide others" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/sliders/dock.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          分子对接
        </h2>
        <p class="left">
          &nbsp;&nbsp;分子对接（molecular docking）是依据配体与受体作用的“锁-钥原理”
          （lock and key principle），模拟配体小分子与受体生物大分子相互作用。配体与受体相互作用是分子识别的过程，主要包括静电作用、氢键作用、疏水作用、范德华作用等。通过计算，可以预测两者间的结合模式和亲和力。<br/>
          &nbsp;&nbsp;分子对接能有效运用于：<br/>
          &nbsp;&nbsp;1、探索药物小分子和大分子受体的具体作用方式和结合构型;<br/>
          &nbsp;&nbsp;2、筛选可以与靶点结合的先导药物;<br/>
          &nbsp;&nbsp;3、解释药物分子产生活性的原因;<br/>
          &nbsp;&nbsp;4、指导合理地优化药物分子结构。
        </p>
        <h2 class="blue">
          服务内容
        </h2>
        <p>
          <img alt="140x140" src="img/contents/dock.jpg" class="img-rounded" />
        </p>
        <h2 class="blue">
          服务流程
        </h2> 
      </div>
      <div class="centered">  
        <p>
          <img alt="140x140" src="img/contents/pro.jpg" class="img-rounded" />
        </p>
      </div>
      <div class="centered col-md-6 col-md-offset-3"> 
        <h2 class="blue">
          项目周期
        </h2> 
        <p class="centered">10个工作日</p>
        <h2 class="blue">
          服务价格
        </h2>
        <p class="centered">2000元/对</p>
      </div> 
    </div>
  </div>

@endsection