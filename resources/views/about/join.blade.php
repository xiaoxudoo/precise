@extends('_layouts.default')

@section('content')

  <!--栅格系统， 全局CSS样式-栅格系统  -->
  <!--栅格系统放在container容器中-->
  <div class="body container-fluid">
    <!--添加一行占用12列，添加img-->
    <div class="row-fluid">
      <!--javascript插件，添加carousel轮播图-->
    <div class="row-fluid" >     
      <div class="centered">  
        <img src="img/sliders/join.jpg" />
      </div>
      <div class="centered col-md-8 col-md-offset-2">
        <h2 class="blue">
          加入我们
        </h2>
        <p class="left">
          &nbsp;&nbsp;员工是企业最宝贵的资源，是实现企业战略目标的重要保证，是企业持续发展的动力。普瑞赛思始终尊崇“以人为本”、“人尽其才，才尽其用”的人才理念。<br/><br/>
          &nbsp;&nbsp;因此，我们有责任：
        </p>
        <p class="question" style="text-align: left;">
          (1)尊重员工的个人尊严和价值
        </p>
        <p class="left">
          鼓励员工在友爱、公平、竞争、合作的环境中发挥最高的工作水平，实现自我价值。充分尊重个人权益，主管与下属坦诚地进行双向交流，引导他们完成工作和职业发展。       
        </p>
        <p class="question" style="text-align: left;">
          (2)鼓励员工的主动性和创造力
        </p>
        <p class="left">
          公司为员工提供一个既有策略导向又能发挥创造力的工作环境。创新精神永远是公司成长过程中不可缺少的条件，因此，在诚挚和互相尊重的前提下加以鼓励和支持。      
        </p>
        <p class="question" style="text-align: left;">
          (3)激发员工的个人潜力
        </p>
        <p class="left">
          尊重并结合员工自身的发展计划，以公司整体目标的实现来带动员工成长，不遗余力地使其潜能配合公司规划而得以最大发挥。       
        </p>
        <p class="question" style="text-align: left;">
          (4)与员工共享成功喜悦
        </p>
        <p class="left">
          公司为员工提供良好的工作环境和发展平台，努力实现员工与企业的共同发展和进步，并与员工充分分享企业发展成果，共享成功。     
        </p>
      </div>
      <div class="centered">  
        <img src="img/contents/join_pc.jpg" style="border-radius:10px;margin-bottom: 20px;" />
      </div>
    </div>
    </div>
  </div>
 
@endsection