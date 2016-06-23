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
            <img src="img/sliders/valid.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          实验验证
        </h2>
        <p class="left">
          &nbsp;&nbsp;为了进一步服务好广大客户，本公司可以提供不同水平的试验验证，从小分子购买到后续的试验方案确定再到试验的实施及最后试验结果报告。我们都能提供全程服务。
        </p>
        <h2 class="blue">
          服务内容
        </h2>
        <p>
          <img alt="140x140" src="img/contents/valid.jpg" class="img-rounded" />
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
        <p class="centered">根据项目需要</p>
        <h2 class="blue">
          服务价格
        </h2>
        <p class="centered">根据项目而定</p>
      </div> 
    </div>
  </div>
 @endsection