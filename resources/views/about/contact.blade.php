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
          <div class=" item active">
            <img src="img/sliders/contact.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-2">  
        <h2 class="blue">普瑞赛思生物医药科技（北京）有限公司</h2>
        <p class="question">
          地址：北京市经开区科创十二街云狐时代中心A座8层
        </p>
        <p class="question">
          电话：86-010-57205685
        </p>
        <p class="question">
          邮箱：info@precisedock.com
        </p>
        <p class="question">
          网址：www.precisedock.com
        </p>
        <p class="question">
          邮编：100176
        </p>
        <p>
          <img alt="140x140" src="img/contents/address.jpg" class="img-rounded" />
        </p>
      </div>
    </div>
  </div>
@endsection