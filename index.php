<?php
  require_once('./function.php');
  $ip = GetIp();

  $info = GetIpLookup($ip);
  if(!$info){
    $info['province'] = '北京';
    $info['city'] = '北京';
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0036)http://27.102.66.204/one/index-1.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="ie-comp">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

<title>十三交友平台</title>
<meta name="keywords" content="约炮,一夜情">
<meta name="description" content="约炮一夜情">
<link href="./static/css/css-1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.12.0/jquery.js"></script>
<script type="text/javascript" src="./static/js/third/jquery.timers-1.2-1.js"></script>
<script type="text/javascript" src="./static/js/third/jquery.SuperSlide.2.1.1-1.js"></script>
</head>
<body>

<div class="bodybj" id="bodybj" style="background:url('./static/img/index/bg1-1.jpg')">
  <div class="top" id="top">
    <div class="w1000"> </div>
  </div>
  <div class="main">
    <div class="w1000">
      
      <div class="login_box" id="box0">
        <div class="people_num">
          <h2 class="h2tit"></h2>
          <div class="numbox"> <span>0</span> <span>0</span> <span>4</span> <span>2</span> <span>0</span> <span>3</span> <span>5</span> </div>
        </div>
        <div class="line"></div>
        <div class="people_num ml0">
          <h2 class="h2tit man"></h2>
          <div class="numbox"> <span>3</span> <span>2</span> <span>9</span> <span>6</span> <span>2</span> <span>6</span> <span>8</span> </div>
        </div>
        <div class="clear"></div>
        <div class="pageone_title"></div>
        <div class="yanzheng"> <a href="javascript:;" id="b"></a> </div>
      </div>  
    
    
      <div class="login_box" id="box1" style="display: none;">
        <div class="question">
          <h2 class="h2tit"> </h2>
          <div class="nr"> </div>
          <div class="yes_No">
            <div class="box"> <a href="javascript:;" class="yes btn"></a> <a href="javascript:;" class="no btn"></a> </div>
          </div>
        </div>
      </div>
      
      
      <div class="login_box" id="box2" style="display: none;">
        <div class="question">
          <h2 class="h2tit q_two"> </h2>
          <div class="nr nr_two"> </div>
          <div class="yes_No">
            <div class="box"> <a href="javascript:;" class="yes btn"></a> <a href="javascript:;" class="no btn"></a> </div>
          </div>
        </div>
      </div>
      
      
      <div class="login_box" id="box3" style="display: none;">
        <div class="question">
          <h2 class="h2tit q_three"> </h2>
          <div class="nr nr_three"> </div>
          <div class="yes_No">
            <div class="box"> <a href="javascript:;" class="yes btn a"></a> <a href="javascript:;" class="no btn a"></a> </div>
          </div>
        </div>
      </div>
      
      
      <div class="login_box" id="box4" style="display: none;">
        <div class="loading">
          <h2 class="h2tit"> </h2>
          <div class="loading_pic"> <img src="https://image.51payo.com/home/xuanchuan/loading-1.gif" alt="约炮一夜情"> </div>
        </div>
      </div>
      
      
      <div class="login_box" id="box5" style="display: none;">
        <div class="loading">
          <h2 class="h2tit pp"> </h2>
          <div class="loading_pic"> <img src="https://image.51payo.com/home/xuanchuan/loading-1.gif" alt="约炮一夜情"> </div>
        </div>
      </div>
      
      
      <div class="login_box" id="box6" style="display: none;">
        <div class="loading">
          <h2 class="h2tit success"> </h2>
          <div class="loading_pic"> <img src="https://image.51payo.com/home/xuanchuan/loading-1.gif" alt="约炮一夜情"> </div>
        </div>
      </div>
      
      
      <div class="last_page" id="box7" style="display: none; margin-top: 0px;">
        <div class="imgbox"> <a href="javascript:;"><img src="./static/img/index/pic-1.png" alt="约炮一夜情"></a> </div>
        <h2 class="h2tit"> </h2>
        <div class="intro"> <span class="age">24岁</span> <span class="location">
    <?php echo $info['province'].$info['city']?>市</span> <span class="state">正在聊天室聊天</span> </div>
        <div class="btn_box"> <a href="./brand.html"></a> </div>
        <div class="total">
          <p class="p1">目前有<span class="num">12331</span>名女性适合你</p>
          <p class="p2">现在苏州共有<span class="num">1129</span>名女性在线</p>
          <p class="p3">本站明天关闭开放注册</p>
        </div>
      </div>
      
      
      
    </div>
  </div>
  <div class="footer">
    <div class="w1000">
      <h2 class="h2tit"> </h2>
      <ul>
        <li> <a href="javascript:;"><img src="./static/img/index/f1-1.png" alt="约炮一夜情"></a> </li>
        <li> <a href="javascript:;"><img src="./static/img/index/f2-1.png" alt="约炮一夜情"></a> </li>
        <li> <a href="javascript:;"><img src="./static/img/index/f3-1.png" alt="约炮一夜情"></a> </li>
        <li> <a href="javascript:;"><img src="./static/img/index/f4-1.png" alt="约炮一夜情"></a> </li>
        <li> <a href="javascript:;"><img src="./static/img/index/f5-1.png" alt="约炮一夜情"></a> </li>
      </ul>
    </div>
  </div>
</div>
<script>


  $(document).ready(function(){

    $('#box1').css("display","none");
    $('#box2').css("display","none");
    $('#box3').css("display","none");
    $('#box4').css("display","none");
    $('#box5').css("display","none");
    $('#box6').css("display","none");
    $('#box7').css("display","none");
    $('#box7').css("margin-top","0px");
  
    $('#b').click(function(){
      
      $('#box0').css("display","none");
      $('#box1').css("display","block");
      
    
      $('.btn').click(function(){
        $('#box1').css("display","none");
        $('#box2').css("display","block");
        
        $('.btn').click(function(){
          
          $('#box2').css("display","none");
          $('#box3').css("display","block");
          
          $('.a').click(function(){
            
            $('#box3').css("display","none");
            
            $('#box4').css("display","block");
            
            $('#box4').oneTime('1s',function(){
              $('#box4').css("display","none");
              $('#box5').css("display","block");
            });
            $('#box5').oneTime('2s',function(){
              $('#box5').css("display","none");
              $('#box6').css("display","block");
            });
            $('#box6').oneTime('3s',function(){
              $('#box6').css("display","none");
              $('#box7').css("display","block");
              $('#top').css("display","none");
            });

          })
        })
      })
    })  
});

</script>

<div style="display:none;">


</div>


</body></html>