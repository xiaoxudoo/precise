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
            <img src="img/sliders/case.jpg" />
            <div class="carousel-caption">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="centered col-md-8 col-md-offset-2">
        <h2 class="blue">
          （一）虚拟筛选案例情景
        </h2>
        <p class="left">
          &nbsp;&nbsp;A老师对蛋白α 已经有了较深的研究，A已经通过研究知道蛋白α在某种疾病种起到关键作用，并且蛋白α有解析结构。A想要找到某种抑制剂抑制蛋白α，从而达到疾病的治疗，通过大规模的筛选是找到这种抑制剂最直接的方法，但是考虑到高通量筛选方法的成本、时间等方面的因素，A想先通过虚拟筛选的方法先筛选先找到可能潜在的小分子，然后再进一步进行试验验证，做到投入产出比最大化。A的方案如下：<br/>
        </p>
        <p>
          <img alt="140x140" src="img/contents/anlivs.jpg" class="img-rounded" />
        </p>
        <p class="left">
          &nbsp;&nbsp;A老师通过上面的方案最终发现了一些具有较好活性的小分子，并且这些小分子结构上都是比较新颖的，A老师发表较高影响因子的论文同时也申请了相关专利。在这些研究基础上，A老师也获得了更多的基金支持用来做进一步研究。
        </p>
      </div>
      <div class="centered col-md-8 col-md-offset-2">
        <h2 class="blue">
          （二）动力学模拟案例情景
        </h2>
        <p class="left">
          &nbsp;&nbsp;B老师已经知道蛋白质β和小分子a能够相互作用，这对某种神经类疾病具有重要的作用，但是B并不了解小分子a和蛋白质β的具体作用机制，B想要从微观结构上来阐述小分子a和蛋白β的作用机理，因此他想到分子动力学的方法，这种方法能合理预测药物和标靶蛋白的结合机理，一般流程如下：<br/>
        </p>
        <p>
          <img alt="140x140" src="img/contents/anlimd.jpg" class="img-rounded" />
        </p>
        <p class="left">
          &nbsp;&nbsp;通过动力学模拟，B老师对蛋白质β和小分子a的作用机制有了清晰明了的理解，同时发表了高影响因子的论文。
        </p>
      </div>
    </div>
  </div>
  @endsection