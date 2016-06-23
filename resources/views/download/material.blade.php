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
            <img src="img/sliders/train.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-8 col-md-offset-2">
      <p class="question">
        Q: 请问，有没有动力学相关的资料包，作为参考学习？
      </p>
      <p class="answer">
        A: 动力学一般以amber为上手最佳选择，现提供一些基础的学习资料，请点击<a href="{{asset('matters/amber_doc.rar')}}"><strong>这里</strong></a>
      </p>
    </div>

  </div>

@endsection