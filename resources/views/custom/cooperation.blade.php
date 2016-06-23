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
            <img src="img/sliders/cooperation.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          合作客户
        </h2>
        <p class="left">
          &nbsp;&nbsp;到目前为止，公司合作伙伴遍布全国，包括北京大学、清华大学、中国医学科学院药物研究所、北京中医药大学、中国科学院昆明植物研究所、中国药科大学、湖南中医药大学、中国农业大学、北京师范大学、军事医学科学院、武警总医院、301医院、浙江大学、华东师范大学、上海交通大学、华东理工大学等。已经完成和正在进行多项国家和省市重大或重点科研项目，受到合作伙伴的认同和好评。
        </p>
      </div>
    </div>
    <!-- 合作机构 -->
    <div class="row-fluid centered">
      <div class="col-md-12"> 
        <div id="cooperation" class="cooperation thumbnail">
          <img class="cop" alt="coopration" src="img/coorpration/coptext.png">
          <div class="caption">
            <h3>普瑞赛思的忠实合作伙伴</h3>
            <ul class="items list-inline">
              <li class="pekings r "></li>
              <li class="cmus r"></li>
              <li class="cass r"></li>
              <li class="bnus r"></li>
              <li class="caus"></li>
              <li class="tsinghuas r"></li>
              <li class="drugs r"></li>
              <li class="armys r"></li>
              <li class="polices r"></li>
              <li class="_301s"></li>
              <li class="shjiaotong r"></li>
              <li class="ecnu r"></li>
              <li class="zhejiang r"></li>
              <li class="ecst r"></li>
              <li class="bcm"></li>
            </ul>   
          </div>
        </div> 
      </div>
    </div>
  </div>
  @endsection