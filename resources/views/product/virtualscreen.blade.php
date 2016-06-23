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
            <img  src="img/sliders/vs.jpg" />
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          基于结构的虚拟筛选
        </h2>
        <p class="left">
          &nbsp;&nbsp;&nbsp;&nbsp;该技术广泛应用于小分子发现的早起过程中。通过分子对接软件模拟靶点受体蛋白质与多个化合物之间进行相互作用配体，计算两者之间的亲和力大小，从而预测可能的潜在小分子。虚拟筛选技术已经成为当今小分子研发的重要手段，它能大大缩减传统实验筛选带来的财力、精力、时间上的消耗。<br/>
          &nbsp;&nbsp;&nbsp;&nbsp;本公司已经构建一个含有30万个小分子化合物数据库，运用最新的分子对接软件，可以快速实现寻找潜在先导化合物。
        </p>
        <h2 class="blue">
          服务内容
        </h2>
        <p>
          <img alt="140x140" src="img/contents/VS.jpg" class="img-rounded" />
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
        <p class="centered"> 30天 </p>
        <h2 class="blue">
          服务价格
        </h2>
        <p class="left">&nbsp;&nbsp;&nbsp;&nbsp;对项目进行了基本调研后，如果项目具有可实施性，统一价格3万元。同时我们也接受个性化定制筛选服务，价格根据项目而定。</p>
      </div>
    </div>
    
  </div>

@endsection