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
                  <div class="item active"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/agent.jpg" class="img-responsive" alt="เอเย่นต์ แทงบอล บาคาร่า"></div>
                  <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/football.jpg" class="img-responsive" alt="เอเย่นต์ แทงบอล บาคาร่า"></div>
                  <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/casino.jpg" class="img-responsive" alt="เอเย่นต์ แทงบอล บาคาร่า"></div>
                  <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/game.jpg" class="img-responsive" alt="เอเย่นต์ แทงบอล บาคาร่า"></div>
                  <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/lotto.jpg" class="img-responsive" alt="เอเย่นต์ แทงบอล บาคาร่า"></div>
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
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/imi.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">IMI</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a  href="#" data-toggle="modal" data-target="#promo11" >
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/system.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">API</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo22">
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/lotto.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">หวย</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo33">
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/auto1.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">ระบบออโต้</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="#" data-toggle="modal" data-target="#promo44">
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/ex.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center; ">ผลิตภัณฑ์</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="<?php echo base_url()?>web/promotion" target="_blank">
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php echo $this->config->item('tem_frontend_img'); ?>btn/eexxx.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;">สูตร</h4>
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
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>btn/exxx.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;font-size: 1em;">แนวทาง<br>การตลาด</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="https://www.fanballshop.com/template/" target="_blank">
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_img'); ?>icon/icon8.png" style="width: 85%;"><br>
                        <h4 style="color: #fff;text-align: center;font-size: 1em;">เว็บไซต์<br>ตัวอย่าง</h4>
                     </a>
                  </div>
                  <div class="col-xs-4">
                     <a href="line://ti/p/@imiwinshop" >
                        <img class="center" alt="เอเย่นต์ แทงบอล บาคาร่า" src="<?php  echo $this->config->item('tem_frontend_mobile'); ?>images/contt.png" style="width: 85%;"><br>
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
<script type="text/javascript" src="<?php echo $this->config->item('tem_frontend_mobile'); ?>js/vendor-m.js"></script> 
<script type="text/javascript" src="<?php echo $this->config->item('tem_frontend_mobile'); ?>js/constants.js"></script> 
<script type="text/javascript" src="<?php echo $this->config->item('tem_frontend_mobile'); ?>js/jquery.countdown.js"></script> 
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
     var endTimeDiff = new Date().getTime() + 15000;
     var timeThere = new Date();
     var timeHere = new Date(timeThere.getTime() - 5434);
     var diff_ms = timeHere.getTime() - timeThere.getTime();
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
   .slideshow-container {
   max-width: 100%;
   position: relative;
   margin: auto;
   z-index: -1;
   }
   .text {
   color: #f2f2f2;
   font-size: 15px;
   padding: 8px 12px;
   bottom: 8px;
   width: 100%;
   text-align: center;
   }
   .numbertext {
   color: #f2f2f2;
   font-size: 12px;
   padding: 8px 12px;
   top: 0;
   }
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
   @media only screen and (max-width: 300px) {
   .text {font-size: 11px}
   }
</style>
<!DOCTYPE html>
<html>
<body>


</body>
</html>

<?php } ?>