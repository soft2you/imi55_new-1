 <?php

 if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) { ?>

<div class="canvas" canvas="container" id="canvas">
  <div class="main-screen">
    <header class="header"> <a href="<?php echo base_url()?>web/" class="header-button header-button-left" id="nav-btn"><span class="icon icon-navicon"></span></a>
      <h1 class="header-title"><a href="<?php echo base_url()?>web/"><img alt="โลโก้ imiwinshop สมัครเอเย่นต์" src="<?php  echo $this->config->item('tem_frontend_img'); ?>logo.png"></a></h1>
      </header>
    <section class="body">
      <div class="banner-main">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox" style="margin-top: 15px; size: 100%">
            <div class="item active"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/agent.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></div>
            <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/football.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></div>
            <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/casino.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></div>
            <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/game.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></div>
            <div class="item"><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>slide/lotto.jpg" class="img-responsive" alt="สมัครเอเย่นต์ แทงบอล บาคาร่า"></div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
      <div id="lazy-contain">
        <div class="dash-widgets css-loader-ready">       

          <div class="panel panel-default panel-product">
            <div class="panel-heading">
              <h3 class="panel-title">IMIwin การสร้าง User ผู้ช่วย(พนักงาน)</h3>
            </div>
            <div class="panel-body">
             <iframe width="100%" src="https://www.youtube.com/embed/3JBD1jDQ2ik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>


          <div class="panel panel-default panel-product">
            <div class="panel-heading">
              <h3 class="panel-title">IMIwin ระบบหลังบ้านและหน้าบ้าน</h3>
            </div>
            <div class="panel-body">
             <iframe width="100%" src="https://www.youtube.com/embed/AXf2NRSg2_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="panel panel-default panel-product">
            <div class="panel-heading">
              <h3 class="panel-title">IMIwin เว็บไซต์เกมส์ออนไลน์</h3>
            </div>
            <div class="panel-body">
              <iframe width="100%" src="https://www.youtube.com/embed/yqJ8fZoDOWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
</div>
<div class="home-footer">
  <p id="copyright"><h2><img src="<?php  echo $this->config->item('tem_frontend_img'); ?>logo.png" alt="โลโก้ imiwinshop สมัครเอเย่นต์" class="img-responsive center-block" style="width: 80%;text-align: center;"></h2></p>
</div>
</section>
  </div>
  <div class="canvas-overlay"></div>
</div>

























<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  height:100vh;
  font-family: 'Open Sans', Helvetica, Arial, sans-serif;
  font-weight: 300;
  letter-spacing: 0.05em;
  background-image: linear-gradient(135deg, rgba(155, 89, 182,0.8) 0%,rgba(211, 84, 0,0.8) 100%), url("https://i.imgur.com/QRbwNvh.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  margin:0;
}

h1 {
  font-size: 1.5em;
  padding: 0.5em;
  text-align: center;
  font-weight:300;
  color:#444;
  background:#050354;
  border-radius:5px;
  margin-bottom:40px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.acc {
  dl {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    &:after {
      content: "";
      display: block;
      height: 1em;
      width: 100%;
      background-color: #2980b9;
    }
  }
  dt > a {
    text-align: center;
    font-weight: 300;
    padding: 2em;
    display: block;
    text-decoration: none;
    color: #fff;
    -webkit-transition: background-color 0.5s ease-in-out;
  }
  dd {
    background-color: #fff;
    font-size: 1em;
    line-height: 1.5em;
    background-image: linear-gradient(to bottom, #444 0%, #fff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    > p {
      padding: 1em 2em 1em 2em;
    }
  }
  position: relative;
  background-color: #fff;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding:40px 0 0 0;
}

.acc_title {
  background-color: #3498db;
  border-bottom: 1px solid #258cd1;
  &:before {
    content: "+";
    font-size: 1.5em;
    line-height: 0.5em;
    float: left;
    transition: transform 0.3s ease-in-out;
  }
  &:hover {
    background-color: #2980b9;
  }
}

.acc_title_active {
  background-color: #2980b9;
  &:before {
    transform: rotate(-225deg);
  }
}

.acc_panel {
  height: auto;
  overflow: hidden;
}

@media all {
  .acc_panel {
    max-height: 50em;
    transition: max-height 1s;
  }
}

@media screen and (min-width: 48em) {
  .acc_panel {
    max-height: 15em;
    transition: max-height 0.5s;
  }
}

.acc_panel_col {
  max-height: 0;
}

.anim_in {
  animation-name: acc_in;
  animation-duration: 0.65s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-timing-function: ease-in-out;
  animation-fill-mode: both;
  animation-delay: 0s;
}

.anim_out {
  animation-name: acc_out;
  animation-duration: 0.75s;
  animation-iteration-count: 1;
  animation-direction: alternate;
  animation-timing-function: ease-in-out;
  animation-fill-mode: both;
  animation-delay: 0s;
}


@keyframes acc_in {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}


@keyframes acc_out {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0.8);
  }
}
</style>

<script type="text/javascript">
  /*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 */


( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

//fake jQuery
var $ = function(selector){
  return document.querySelector(selector);
}
var accordion = $('.acc');





//add event listener to all anchor tags with accordion title class
accordion.addEventListener("click",function(e) {
  e.stopPropagation();
  e.preventDefault();
  if(e.target && e.target.nodeName == "A") {
    var classes = e.target.className.split(" ");
    if(classes) {
      for(var x = 0; x < classes.length; x++) {
        if(classes[x] == "acc_title") {
          var title = e.target;

          //next element sibling needs to be tested in IE8+ for any crashing problems
          var content = e.target.parentNode.nextElementSibling;
          
          //use classie to then toggle the active class which will then open and close the accordion
         
          classie.toggle(title, 'acc_title_active');
          //this is just here to allow a custom animation to treat the content
          if(classie.has(content, 'acc_panel_col')) {
            if(classie.has(content, 'anim_out')){
              classie.remove(content, 'anim_out');
            }
            classie.add(content, 'anim_in');

          }else{
             classie.remove(content, 'anim_in');
             classie.add(content, 'anim_out');
          }
          //remove or add the collapsed state
          classie.toggle(content, 'acc_panel_col');



          
        }
      }
    }
    
  }
});
</script>






















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




<!DOCTYPE html>
<html>
   <body >
      <section class="featured-procuts-section container" style="background-image: url(<?php  echo $this->config->item('tem_frontend_img'); ?>casinoBG.jpg);">
         <div class="row justify-content-center">
            <div class="text-center col-md-8 col-xl-6">
             
               <center>
                  <h1 class="heading-primary" style="color: white; margin-top: 50px">แนะนำผลิตภัณฑ์ IMIWIN</h1>
               </center>
              
            </div>
         </div>
         <div class="featured-product">
            <div class="featured-list">
               <div id="lazy-contain">
                  <div class="dash-widgets css-loader-ready">
                     <div class="featured-division stage-tile col-4">
                        <div class="featured-item">
                           <div class="title">
                              <h2 class="featured-title">IMIBET การสร้าง User ผู้ช่วย(พนักงาน)</h2>
                              <div class="short-title"></div>
                           </div>
                           <div class="featured-blurb">
                              <p>คลิปสอนใช้งาน IMIBET การสร้าง User ผู้ช่วย(พนักงาน)<img src="<?php echo $this->config->item('tem_frontend_img'); ?>cv.gif" width="35" height="35"></p>
                           </div>
                           <p class="ambassador">
                           <div class="panel-body">
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/3JBD1jDQ2ik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                           </p>
                        </div>
                     </div>
                     

                     <div class="featured-division stage-tile col-4">
                        <div class="featured-item">
                           <div class="title">
                              <h2 class="featured-title">  IMIWIN ระบบหลังบ้านและหน้าบ้าน</h2>
                              <div class="short-title"></div>
                           </div>
                           <div class="featured-blurb">
                              <p>คลิปสอนใช้งาน IMIWIN ระบบหลังบ้านและหน้าบ้าน<img src="<?php echo $this->config->item('tem_frontend_img'); ?>cv.gif" width="35" height="35"></p>
                           </div>
                           <p class="ambassador">
                           <div class="panel-body">
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/AXf2NRSg2_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                           </p>
                        </div>
                     </div>

                     <div class="featured-division stage-tile col-4">
                        <div class="featured-item">
                           <div class="title">
                              <h2 class="featured-title"> IMIWIN เว็บไซต์เกมส์ออนไลน์</h2>
                              <div class="short-title"></div>
                           </div>
                           <div class="featured-blurb">
                              <p>คลิปสอนใช้งานIMIWIN เว็บไซต์เกมส์ออนไลน์<img src="<?php echo $this->config->item('tem_frontend_img'); ?>cv.gif" width="35" height="35"></p>
                           </div>
                           <p class="ambassador">
                           <div class="panel-body">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/yqJ8fZoDOWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>
                           </p>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
           <div class="col-12">
            <center>
                <a class="w3-button w3-red" href="<?php echo base_url()?>web/manual_marketing">กลับ</a><br>
            </center><br>
        </div>
      </section>
   </body>
</html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
   .w3-button {width:150px;}
</style>


<?php } ?>

