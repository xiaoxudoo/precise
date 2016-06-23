@extends('_layouts.default')

@section('content')

  <!--栅格系统， 全局CSS样式-栅格系统  -->
  <!--栅格系统放在container容器中-->
  <div class="body container-fluid">
    <!--添加一行占用12列，添加img-->
    <div class="row-fluid" >     
      <div class="centered">  
        <img src="img/sliders/partner.jpg" />
      </div>
      <div class="col-md-8 col-md-offset-2">
        <p class="question">
          顶级科学顾问团队
        </p>
        <p class="answer">
          • 由留学国内外等顶级学术机构的科研人员领衔<br/>
          • 全部具备资深的学科背景 
        </p>
        <p class="question">
          强大而高水平的技术团队
        </p>
        <p class="answer">
          • 50%以上具名校博士、博士后学历，100%具硕士以上学历<br/>
          • 多数具国家级及以上重点实验室科研经历 <br/>
          • 多数发表过多篇高水平SCI论文经历   
        </p>
        <p class="question">
          多学科全面覆盖 
        </p>
        <p class="answer">
           • 结构生物学、计算机辅助药物设计、生物信息学、病理学、免疫学、遗传学、
     疾病动物模型等
        </p>
        <hr/>
      </div>
      <!-- copy start -->
      <div class="col-md-8 col-md-offset-2">
        <div style="line-height:25px;padding-left:5px;">
          <p style="text-align:justify;">
            &nbsp;&nbsp; <img alt="" src="img/contents/zb.png" style="width: 250px; height: 310px; float: right; margin-left: 30px; margin-right: 30px;">
            <br />
            <span style="color:#0099cc;">
              <span style="font-size: 24px;">专职咨询团队价值优势</span>
            </span>
            <br />
          </p>
          <hr>
          <br/>
          <ul style="margin-left: -40px;">
            <li>
              <span style="color:#ff8c00;"><span style="font-size:20px;">提升创新性、把握科学性、评估可行性</span></span>
            </li>
            <li>
              <span style="color:#ff8c00;"><span style="font-size:20px;">提升科研深度及技术服务广度</span></span>
            </li>
          </ul>
          <br/>
          <span style="font-size:14px;">
            <strong>广度：</strong>多学科覆盖，更有利于学科边缘交叉地带的创新。<br>
            <strong>深度：</strong>咨询服务全程贯穿于科研项目始末，并根据实时结果进行深度分析和优化调整，确保整体项目进展科学、顺利，更有价值。
          </span>
          <br>
        </div> 
      </div> 
      <!-- copy end -->
    </div>
  </div>

@endsection