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
            <img src="img/sliders/md.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          分子动力学模拟
        </h2>
        <p class="left">
          &nbsp;&nbsp;分子动力学（Molecular Dynamics, MD）模拟是一套分子模拟方法，该方法主要是依靠牛顿力学来模拟分子体系的不用状态构成的系统中抽取样本，从而计算体系的构型积分，并以构型积分的结果为基础进一步计算体系的热力学量和其他宏观性质。<br/>
          &nbsp;&nbsp;分子动力学模拟能够有效运用于：<br/>
          &nbsp;&nbsp;1、大分子与小分子相互作用，如：预测药物分子与蛋白/DNA的相互作用，材料吸附等;<br/>
          &nbsp;&nbsp;2、大分子之间的相互作用（蛋白-蛋白相互作用）;<br/>
          &nbsp;&nbsp;3、分子（药物、蛋白、材料分子）三维结构的优化，如优化同源模建的结构;<br/>
          &nbsp;&nbsp;4、结构与功能、性质的关系。
        </p>
        <h2 class="blue">
          服务内容
        </h2>
        <p>
          <img alt="140x140" src="img/contents/md.jpg" class="img-rounded" />
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
        <p class="centered">根据项目不同，需要时间大概在20-50天。</p>
        <h2 class="blue">
          服务价格
        </h2>
        <p class="centered">&nbsp;&nbsp;需要先对项目进行评估，如果具有可实施性，价格范围2w-5w。</p>
      </div>  
    </div>   
  </div>  
@endsection