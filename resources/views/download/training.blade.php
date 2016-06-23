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
        Q: 普瑞赛思是一家怎样的公司？
      </p>
      <p class="answer">
        A: 普瑞赛思生物医药科技（北京）有限公司是一家专注于计算生物和化学（CADD）的专业服务商。我们致力于提供最专业的计算生物和化学设计解决方案，业务主要涉及：虚拟筛选、分子对接、分子动力学模拟、化合物库构建等。主要承担国内外药企、高校、研究院所等外包业务。       
      </p>
      <p class="question">
        Q: 普瑞赛思已经为哪些客户服务过？
      </p>
      <p class="answer">
        A: 公司合作伙伴遍布全国，包括北京大学、清华大学、中国医学科学院药物研究所、北京中医药大学、中国科学院昆明植物研究所、中国药科大学、湖南中医药大学、中国农业大学、北京师范大学、军事医学科学院、武警总医院、301医院、浙江大学、华东师范大学、上海交通大学、华东理工大学等。
      </p>
      <p class="question">
        Q: 普瑞赛思的服务周期是多长时间？
      </p>
      <p class="answer">
        A: 服务时间需要根据具体项目而定。      
      </p>
      <p class="question">
        Q: 普瑞赛思怎样保证我的课题内容结果不被外泄？
      </p>
      <p class="answer">
        A: 普瑞赛思是一个正规化国际性的医学科研服务公司，是一支具有专业素养的科研服务团队。在服务过程中严格遵循标准流程，并且在公司内部各环节有严格的监控。普瑞赛思和客户正式达成合作后都会签订具有法律效力的保密协议，保证课题内容和结果不被外泄。
      </p>
      <p class="question">
        Q: 普瑞赛思可以与客户商议讨论、设计和制定实验方案吗？
      </p>
      <p class="answer">
        A: 在双方诚意签订合作意向书及保密协议后，普瑞赛思技术团队会与客户进行充分交流，共同商议讨论、设计和制定实验方案，以确保为客户提供满意、优质、高效的咨询和技术服务。
      </p>
      <p class="question">
        Q: 委托普瑞赛思进行技术服务的流程是什么？
      </p>
      <p class="answer">
        A: 流程的开始很简单，客户只要电话或邮件联系普瑞赛思就可以了。接着，我们会安排客户与普瑞赛思的科研服务顾问进行交流洽谈。客户提出科研服务需求和要求，普瑞赛思为客户设计项目实施方案，双方确定科研内容和实验方案，普瑞赛思报服务周期和价格——双方同意确认——客户按合同约定支付费用——普瑞赛思按合同方案开始预试验和/或实验，过程中及时与客户反馈及交流信息——进入实验实施阶段——普瑞赛思将完整实验报告和原始数据、图片等相关信息提供给客户，客户满意后服务结束。
      </p>
      <p class="question">
        Q: 项目服务内容要求发给你们后，我多久可以收到回复？
      </p>
      <p class="answer">
        A: 普瑞赛思为您配备专业的项目小组负责您的项目沟通和实施。普瑞赛思会在接到任务内容的第一时间安排项目服务小组为您服务，制定实施方案。回复时间根据具体服务内容确定。回复时间周期由双方进行沟通确定。
      </p>
    </div>
    <div class="centered col-md-8 col-md-offset-2">
      <p>
        <img alt="140x140" src="img/contents/faq_end.jpg" class="img-rounded" />
      </p>
    </div>
  </div>
  @endsection