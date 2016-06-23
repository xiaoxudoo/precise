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
            <img src="img/sliders/model.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-6 col-md-offset-3">
        <h2 class="blue">
          同源建模
        </h2>
        <p class="left">
          &nbsp;&nbsp;蛋白质三维结构是理解其生物学功能和进行基于结构的药物设计的重要基础。但是很多蛋白并不能准确测定其三维结构，为了解决这一问题，科学家们通过计算模拟的手段来构建这些蛋白的三维结构，这就是所谓的同源建模(Homology Modeling)。<br/>
          &nbsp;&nbsp;目前常用的有两种方法来实现蛋白的三维结构模建：1、蛋白质从头模建，也叫从头预测法，从头预测是不依赖模板仅从氨基酸序列信息得到天然结构，它的关键是正确定义能量函数、精确选用计算机搜索算法来寻找能量最低值；2、蛋白质同源模建。这种方法基本假设是：如果未知结构蛋白A与已知结构蛋白B之间具有序列、结构和功能上的同源性，则蛋白A可以以蛋白B为模板来构建其全原子三维结构。<br/>
          &nbsp;&nbsp;高质量的同源建模的结果可以帮助研究人员了解目标蛋白的结构性质，分析与研究其“结构—功能”关系，以便研究蛋白-蛋白相互作用，蛋白-DNA、RNA和小分子药物、多肽相互作用。可用于阐明蛋白作用机制，药物的虚拟筛选，药物的设计，以发现某种疾病的潜在治疗药物。
        </p>
        <h2 class="blue">
          建模服务类型
        </h2>
        <div>
          <p class="centered bold">抗体建模</p>
          <p class="centered bold">GPCR蛋白建模</p>
          <p class="centered bold">激酶蛋白建模</p>
          <p class="centered bold">普通蛋白同源建模</p>
          <p class="centered bold">同源多聚体的蛋白同源模建</p>
          <p class="centered bold">异源多聚体的蛋白同源模建</p>         
        </div>
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
        <p class="centered">根据项目需要</p>
      </div> 
    </div>
  </div>
 
 @endsection