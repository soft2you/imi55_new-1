 <?php

 if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) { ?>

<div class="canvas" canvas="container" id="canvas">
   <div class="main-screen">
      <header class="header">
         <a href="<?php echo base_url()?>web/" class="header-button header-button-left" id="nav-btn">
         <span class="icon icon-navicon"></span>
         </a>
         <h1 class="header-title">
            <a href="<?php echo base_url()?>web/"><img alt="โลโก้ imiwinshop สมัครเอเย่นต์" src="<?php  echo $this->config->item('tem_frontend_img'); ?>logo.png"/></a>
         </h1>
         <a  class="header-button header-button-right open-right-sidebar hide"></span></a> 
      </header>
      <section class="body">
         <div class="banner-main">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" role="listbox" style="margin-top: 15px; size: 100%">
                  <div class="item active">
                    <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/agent.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                  </div>
                  <div class="item">
                    <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/football.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                  </div>
                  <div class="item">
                    <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/casino.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                  </div>
                  <div class="item">
                    <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/game.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                  </div>
                  <div class="item">
                    <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/lotto.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                  </div>
               </div>
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
            </div>
         </div>
         <div id="lazy-contain">
            <div class="dash-widgets css-loader-ready">
               <div class="container" style="background-color: #373737">
                  <div class="announcement-slide">
                     <a class="megaphone" href="#" onClick="showAnnouncement()">
                        <i class="icon-announcement-right"></i>
                        <div class="indicator icon-ballon"></div>
                     </a>
                     <div class="announcement-slide-box">
                        <ul class="announcement-slide-list">
                           <li>
                              <marquee  style="color: #fff">
                                 <b>ยินดีต้อนรับ IMIWINSHOP เว็บไซต์ที่ดีที่สุด. ยินดีต้อนรับ IMIWINSHOP เว็บไซต์ที่ดีที่สุด</b>
                              </marquee>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row container--dashboard" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
                  <div class="col-xs-4" >
                     <a  href="#" data-toggle="modal" data-target="#promo00" >
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่าสมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/imi.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">IMI</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a  href="#" data-toggle="modal" data-target="#promo11" >
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/system.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">API</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo22">
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/lotto.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">หวย</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo33">
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/auto1.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">ระบบออโต้</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo44">
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/ex.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center; ">ผลิตภัณฑ์</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="<?php echo base_url()?>web/promotion" target="_blank">
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/eexxx.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center; ">สูตร</h4>
                     </a>
                  </div>
               </div>
               <div class="container" style="background-color: #01002a">
                  <div class="announcement-slide"> 
                  </div>
               </div>
               <div class="row container--dashboard" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
                  <div class="col-xs-4">
                     <a href="<?php echo base_url()?>web/manual_marketing" target="_blank">
                        <br>
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/exxx.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;font-size: 1em;">แนวทาง<br>การตลาด</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="https://www.fanballshop.com/template/" target="_blank">
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>icon/icon8.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;font-size: 1em;">เว็บไซต์<br>ตัวอย่าง</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="line://ti/p/@imiwinshop" >
                        <img class="center" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>images/contt.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;font-size: 1em;">ติดต่อ<br>สอบถาม</h4>
                     </a>
                  </div>
               </div>
               <div class="module contact-bg">
                  <div class="module-header">
                     <div class="media">
                        <div class="media-body" align="center">
                           <h4 class="media-heading"><br><span style="color: #fff;text-align: center;">IMIWINSHOP</span></h4>
                           <p style="color: #fff">ยินดีต้อนรับสู่ IMIWINSHOP หนึ่งในผู้นำเว็บไซต์เดิมพันออนไลน์ของเอเชีย ที่ส่งตรงถึงบ้านคุณเพื่อให้ท่านได้รับประสบการณ์ที่ดีที่สุดกับการเดิมพันออนไลน์ ทางเว็บไซต์ของเราประกอบไปด้วย การเดิมพันกีฬา, เกมส์คาสิโนออนไลน์, คีโน, โป๊กเกอร์ออนไลน์, แฟลชเกมส์ และเกมส์เดิมพันออนไลน์ระดับโลกมากมาย</p>
                        </div>
                        <div class="media-right"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="home-footer">
            <p id="copyright">
            <h2><img src="<?php echo $this->config->item('tem_frontend_img'); ?>logo.png" alt="โลโก้ imiwinshop สมัครเอเย่นต์" class="img-responsive center-block" style="width: 80%;text-align: center;"></h2>
            </p>
         </div>
      </section>
   </div>
   <div class="canvas-overlay"></div>
</div>



<script type="text/javascript" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>js/vendor-m.js"></script> 
<script type="text/javascript" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>js/constants.js"></script> 
<script type="text/javascript" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>js/jquery.countdown.js"></script> 
<script type="text/javascript">
      $(function() {
        var endDate = "June 14, 2018 23:00:00";

        $('.countdown.simple').countdown({ date: endDate });

        $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>day</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hour</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>");
          }
        });

        $('.countdown.callback').countdown({
          date: +(new Date) + 10000,
          render: function(data) {
            $(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
          },
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        }).on("click", function() {
          $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
        });

        // End time for diff purposes
        var endTimeDiff = new Date().getTime() + 15000;
        // This is server's time
        var timeThere = new Date();
        // This is client's time (delayed)
        var timeHere = new Date(timeThere.getTime() - 5434);
        // Get the difference between client time and server time
        var diff_ms = timeHere.getTime() - timeThere.getTime();
        // Get the rounded difference in seconds
        var diff_s = diff_ms / 1000 | 0;
        
        var notice = [];
        notice.push('Server time: ' + timeThere.toDateString() + ' ' + timeThere.toTimeString());
        notice.push('Your time: ' + timeHere.toDateString() + ' ' + timeHere.toTimeString());
        notice.push('Time difference: ' + diff_s + ' seconds (' + diff_ms + ' milliseconds to be precise). Your time is a bit behind.');
        
        $('.offset-notice').html(notice.join('<br />'));
        
        $('.offset-server .countdown').countdown({
          date: endTimeDiff,
          offset: diff_s * 1000,
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        });
        
        $('.offset-client .countdown').countdown({
          date: endTimeDiff,
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        });

      });
    </script> 
<script type="text/javascript">
    window.betMobile = {};
    window.User = {};
  </script> 
<script type="text/javascript" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>js/main-m.js"></script> 
<script type="text/javascript">
    var loginObj = {};

    if(!bet_native.hasWrapper()){

      var loginBtn = $("a[data-i18n='LABEL_MENU_LOGIN']");
      if(loginBtn.length > 0){
        loginBtn.off("click").on("click", function(e){
          e.stopPropagation();
          e.preventDefault();
          amplify.publish("open-sidebar");
        })
      }
    }
  </script> 
<script type="text/javascript">
    $(document).ready(function () {
      $(".open-right-sidebar.hide").removeClass("hide");
      bet_menu.init();
    });
  </script>




<?php }else{ ?>

  <style>

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
   z-index: -1;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
 
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<main class="main">
   

<div class="container" style="margin-top: 60px">

   <section class="featured-procuts-section container" >
          <div class="featured-product">
            <div class="featured-list">
                    <div class="featured-division col-4">
                        <div class="featured-item">
                            <div class="title">
                                <h2 class="featured-title">IMIWIN</h2>
                                <div class="short-title"></div>
                            </div>
                            <div class="featured-blurb">
                                <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                            </div>
                            <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/imiwin.png" width="250" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                            <div class="featured-hover-wrapper">
                                <div class="featured-hover">                                  
                                    <span class="hover-center">
                                      <a class="btn btn-medium" href="<?php echo base_url()?>web/win">ดูผลิตภัณฑ์</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="featured-division stage-tile col-4">
                            <div class="featured-item">
                                <div class="title">
                                    <h2 class="featured-title">IMIPLUS</h2>
                                    <div class="short-title"></div>
                                </div>
                                <div class="featured-blurb">
                                    <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                                </div>
                                <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/imiplus.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                                <div class="featured-hover-wrapper">
                                    <div class="featured-hover">
                                        <span class="hover-center">
                                            <a id='tile-2' class="btn btn-medium" href="https://imiplus.com/" target="_blank">ดูผลิตภัณฑ์</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-division stage-tile col-4">
                            <div class="featured-item">
                                <div class="title">
                                    <h2 class="featured-title">API</h2>
                                    <div class="short-title"></div>
                                </div>
                                <div class="featured-blurb">
                                    <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                                </div>
                                <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/api.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                                <div class="featured-hover-wrapper">
                                    <div class="featured-hover">
                                        <span class="hover-center">
                                            <a id='tile-2' class="btn btn-medium" href="#popup1" target="_top">ดูผลิตภัณฑ์</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-division stage-tile col-4">
                            <div class="featured-item">
                                <div class="title">
                                    <h2 class="featured-title">หวย</h2>
                                    <div class="short-title"></div>
                                </div>
                                <div class="featured-blurb">
                                    <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                                </div>
                                <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/lotto.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                                <div class="featured-hover-wrapper">
                                    <div class="featured-hover">
                                        <span class="hover-center">
                                            <a id='tile-4' class="btn btn-medium" href="#popup222" target="_top">ดูผลิตภัณฑ์</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-division stage-tile col-4">
                            <div class="featured-item">
                                <div class="title">
                                    <h2 class="featured-title">ระบบออโต้</h2>
                                    <div class="short-title"></div>
                                </div>
                                <div class="featured-blurb">
                                    <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                                </div>
                                <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/auto1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                                <div class="featured-hover-wrapper">
                                    <div class="featured-hover">
                                        <span class="hover-center">
                                            <a id='tile-2' class="btn btn-medium" href="#popup3" target="_top">ดูผลิตภัณฑ์</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        
                        <div class="featured-division stage-tile col-4">
                            <div class="featured-item">
                                <div class="title">
                                    <h2 class="featured-title">แนวทางการตลาด</h2>
                                    <div class="short-title"></div>
                                </div>
                                <div class="featured-blurb">
                                    <p>IMIWINSHOP เว็บออนไลน์ที่ดีทีสุด</p>
                                </div>
                                <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/exx.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                                <div class="featured-hover-wrapper">
                                    <div class="featured-hover">
                                        <span class="hover-center">
                                            <a id='tile-4' class="btn btn-medium" href="<?php echo base_url()?>web/manual_marketing" target="_blank">ดูผลิตภัณฑ์</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
</div>
</main>


<div id="popup1" class="overlay">
  <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg); margin-top: 150px">
    <h1 style="color: white;">  ผลิตภัณฑ์ API</h1><a class="close" href="#">&times;</a>
      <div class="content">
    
      <div class="col-12">
      <center> <div class="featured-product">
            <div class="featured-list">
                    <div class="featured-division col-6">
                        <div class="featured-item">
                            <div class="title">
                                <h2 class="featured-title">SPORT</h2>
                                <div class="short-title"></div>
                            </div>                           
                            <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>icon/sport2.png" width="250" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                            <div class="featured-hover-wrapper">
                                <div class="featured-hover">                                  
                                    <span class="hover-center">
                                      <a class="btn btn-medium" href="<?php echo base_url()?>web/apisport" target="_blank">ดูผลิตภัณฑ์</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </center>
          <center>

          <div class="featured-product">
            <div class="featured-list">
                    <div class="featured-division col-6">
                        <div class="featured-item">
                            <div class="title">
                                <h2 class="featured-title">CASINO</h2>
                                <div class="short-title"></div>
                            </div>                           
                            <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>icon/casino2.png" width="250" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                            <div class="featured-hover-wrapper">
                                <div class="featured-hover">                                  
                                    <span class="hover-center">
                                      <a class="btn btn-medium" href="<?php echo base_url()?>web/apicasino" target="_blank">ดูผลิตภัณฑ์</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </center>
          <center>
          <div class="featured-product">
            <div class="featured-list">
                    <div class="featured-division col-6">
                        <div class="featured-item">
                            <div class="title">
                                <h2 class="featured-title">GAME</h2>
                                <div class="short-title"></div>
                            </div>                           
                            <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>icon/game2.png" width="250" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                            <div class="featured-hover-wrapper">
                                <div class="featured-hover">                                  
                                    <span class="hover-center">
                                      <a class="btn btn-medium" href="<?php echo base_url()?>web/apigame" target="_blank">ดูผลิตภัณฑ์</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </center>
        <center>
          <div class="featured-product">
            <div class="featured-list">
                    <div class="featured-division col-6">
                        <div class="featured-item">
                            <div class="title">
                                <h2 class="featured-title">PACKAGE</h2>
                                <div class="short-title"></div>
                            </div>                           
                            <p class="ambassador"><img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>icon/pack2.png" width="250" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></p>
                            <div class="featured-hover-wrapper">
                                <div class="featured-hover">                                  
                                    <span class="hover-center">
                                      <a class="btn btn-medium" href="<?php echo base_url()?>web/apipackage" target="_blank">ดูผลิตภัณฑ์</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
             
      </center></div>

      </div>      
  </div>
</div>











<div id="popup222" class="overlay">
    <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
        <h1 style="color: white;">  ผลิตภัณฑ์หวย</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
     
      <center> 
        <img src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/lotto57.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" width="50%">
      </center>  <br>      
   
         <div class="col-10">
           <center> 
            <h1><strong><span style="color: #ff0000;">สมัครเอเย่นต์<span style="color: #ffcc00;">IMIWINSHOP</span></span></strong></h1>
             <p style="text-align: left; color: white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เรายินดีต้อนรับทุกท่านในการเข้าร่วมเป็น เอเย่นต์ ภายใต้เงื่อนไขที่ดีที่สุด ที่ท่านจะไม่ได้รับจากที่ไหนในประเทศไทย ถือหุ้นสูงสุด โดยมีทีมงานมืออาชีพคอยให้คำปรึกษา และแก้ปัญหาให้แก่ท่านตลอด<span style="color: #ff0000; "><font size="5"> 24</font> </span> ชั่วโมง
             </p>
             <br>                                   
             <p style="text-align: left; color: white"><span style="color: #ffcc00;">Lotto57 </span> ป็นเว็บเดิมพันที่มั่นคง ปลอดภัย และ ถือหุ้นได้สูง ทางเรามีการดูแลอย่างมืออาชีพ ด้วยทีมงานคุณภาพ ที่คอยซัพพอร์ตลูกค้า</p>
             <br>                                   
             <p style="text-align: left; color: white"> สำหรับท่านที่ต้องการ สมัครเอเย่นต์ <strong><span style="color: #ffcc00;"> IMIWINSHOP</span></strong> และประสบความสำเร็จทางธุรกิจไปกับเรา เราขอเสนอผลประโยชน์ที่ลูกค้า agent พิเศษอย่างคุณจะได้รับ</p>
             <p style="text-align: left; color: white"><br><font size="4">-</font> &nbsp;&nbsp;&nbsp;สามารถเปิดบริการ <span style="color: #ffcc00;"><strong>lotto , หวย</strong></span>ได้ทันที
                <br><font size="4">-</font> &nbsp;&nbsp;&nbsp;วงเงินประกันเพียง <span style="color: #ff0000; "> <font size="4">50000 บาท </font> </span>และสามารถถือหุ้นได้สูงสุด<span style="color: #ff0000; "> <font size="4"> 90%</font></span>
                <br><font size="4">-</font> &nbsp;&nbsp;&nbsp;ได้รับเครดิตสูงสุดถึง <span style="color: #ff0000; "> <font size="4"> 200000 บาท </font></span>
                <br><font size="4">-</font> &nbsp;&nbsp;&nbsp;เครียยอดให้ทุกๆ วันอังคาร<font size="4"> </font>
                <br><font size="4">-</font> &nbsp;&nbsp;&nbsp;มีทีมงานซัพพอร์ตตลอด<span style="color: #ff0000; "><font size="4"> 24  </font> </span>ชั่วโมง
                <br>
             </p>
            </center>          
          </div>       
        </div>
    </div>
</div>


<div id="popup3" class="overlay">
  <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg); margin-top: 150px">
        <h1 style="color: white;">  ระบบออโต้</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
         <div class="col-12">
           
          <div class="featured-division col-6">
            <center><iframe width="460" height="415" src="https://www.youtube.com/embed/_-jsPoFdBZ8"></iframe></center>
          </div>

          <div class="featured-division col-6">
            <img class="lazy-loaded" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/11.jpg" width="100%" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
          </div>  

          </div>       
        </div>
    </div>
</div>


<div id="popup4" class="overlay">
    <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
        <h1 style="color: white;">  ผลิตภัณฑ์อื่น</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="grid">
          >
             <section class="col-4 site-keyword">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/betclic1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/isc8881.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/nova881.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/holiday1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/918kiss1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">


              </ul>              
            </section>
            <section class="col-4 text-center">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/sbo1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/siri3651.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/ufa1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/m1681.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/joker.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">



              </ul>          
            </section>
            <section class="col-4 text-center">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/928bet1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/sa361.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/gclub1.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/sexylug.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/imigame88.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า">
              </ul>         
           </section>
          </div>
        </div>
    </div>
</div>

<div id="popup5" class="overlay">
    <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
        <h1 style="color: white;">  ผลิตภัณฑ์ API</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="grid">
            <section class="col-4">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>api/sexy.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
             <section class="col-4">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>api/sexylug.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
             <section class="col-4">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>api/wmcasino.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
          </div>
        </div>
    </div>
</div>

<div id="popup6" class="overlay">
    <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
        <h1 style="color: white;">  ผลิตภัณฑ์ SYSTEM</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="grid">
            <section class="col-12">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>auto.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
          </div>
        </div>
    </div>
</div>

<div id="popup7" class="overlay">
    <div class="popup" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
        <h1 style="color: white;">  ผลิตภัณฑ์ SYSTEM</h1>
        <a class="close" href="#">&times;</a>
        <div class="content">
          <div class="grid">
            <section class="col-6">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>easy168.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
             <section class="col-6">
              <ul>
                <img src="<?php  echo $this->config->item('tem_frontend_img'); ?>sport/siri365.png" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"><br>
              </ul>              
            </section>
          </div>
        </div>
    </div>
</div>


<?php } ?>


<style type="text/css">
.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 50%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #FFFAF0;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>