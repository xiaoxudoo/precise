@extends('_layouts.default')

@section('content')

  <!--栅格系统， 全局CSS样式-栅格系统  -->
  <!--栅格系统放在container容器中-->
  <div class="body container-fluid">
    <!--添加一行占用12列，添加img-->
    <div class="row-fluid" >     
      <div class="centered">  
        <img src="img/sliders/about.jpg" />
      </div>
      <div class="col-md-10 col-md-offset-1">
        <h2 class="blue centered">
          公司简介
        </h2>
        <div style="float: left;margin-right: 10px;">  
          <img src="img/contents/introduction.jpg" style="border-radius:10px;margin-bottom: 20px;" />
        </div>
        <p class="float">
          &nbsp;&nbsp;普瑞赛思生物医药科技（北京）有限公司是一家专注于计算机辅助药物设计（CADD）的高科技企业。我们致力于提供最专业的计算机辅助药物设计解决方案，业务主要涉及：虚拟筛选、动力学模拟、分子对接、药效团筛选、生物实验验证等。<br/>
          &nbsp;&nbsp;普瑞赛思核心团队是由国内外具有多年计算机辅助药物设计经验的专家组成。公司整个团队中硕士及以上学历成员占90%，博士学历占60%，是一支富有创造天赋的专业团队。我们还邀请了多位资深教授、研究员作为技术顾问，希望能提供最可靠的计算机辅助药物设计服务。<br/>
          &nbsp;&nbsp;我们在北京、上海、广州、武汉等地均有办事专员，可以提供便捷的专业服务。公司至今已为众多高校与科研院所提供了计算机辅助药物设计方面服务，合作伙伴遍布全国，包括：北京大学、清华大学、中国医学科学院药物研究所、北京中医药大学、中国科学院昆明植物研究所、中国药科大学、湖南中医药大学、中国农业大学、北京师范大学、军事医学科学院、武警总医院、301医院、浙江大学、华东师范大学、上海交通大学、华东理工大学等。<br/>
          &nbsp;&nbsp;科技成就梦想，计算成就未来，我们将始终致力于运用最尖端的技术和创新，为广大医药科研工作者提供最先进、最可靠、最高效的计算机辅助药物设计服务。<br/>
        </p>
      </div>

    </div>
  </div>

@endsection