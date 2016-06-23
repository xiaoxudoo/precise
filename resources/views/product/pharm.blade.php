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
            <img src="img/sliders/pharm.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          药效团筛选
        </h2>
        <p class="left">
          &nbsp;&nbsp;药效团筛选可以分为基于配体和基于受体的筛选两种。基于配体就是根据训练集分子得到的药效特征元素去筛选化学物；基于受体的就是根据与配体的相互作用的蛋白活性位点中心的一些关键氨基酸得到官能团筛选配体，如果有靶标蛋白结的晶结构一般用基于受体的方法如果没有用基于配体的方法。<br/><br/>
          &nbsp;&nbsp;药效团是一种与生物活性相关的抽象分子特征的表示方法。这些抽象分子特征包括三维的（亲疏水性基团、带电/可离子化基团、氢键供体/受体等），二维的（子结构）和一维的（物化和生物性质）。一个三维的药效团模型给出了这些药效基团之间的特定三维排列方式。利用一系列结构和生物活性具有一定差别的化合物数据集构建一、二和三维药效团模型，这些模型可用于药效团筛选。
        </p>
        <h2 class="blue">
          服务内容
        </h2>
        <p>
          <img alt="140x140" src="img/contents/pharm.jpg" class="img-rounded" />
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
        <p class="centered">20个工作日</p>
        <h2 class="blue">
          服务价格
        </h2>
        <p class="centered">需要先对项目进行评估，如果具有可实施性，价格范围1w-3w。</p>
      </div> 
    </div>
  </div>
@endsection