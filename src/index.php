<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta content="telephone=no,email=no" name="format-detection" />
    <title>Market Knowledge Capital</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--lib-flexible (https://github.com/amfe/lib-flexible)-->
    <script>!function(a,b){function c(){var b=f.getBoundingClientRect().width;b/i>540&&(b=540*i);var c=b/10;f.style.fontSize=c+"px",k.rem=a.rem=c}var d,e=a.document,f=e.documentElement,g=e.querySelector('meta[name="viewport"]'),h=e.querySelector('meta[name="flexible"]'),i=0,j=0,k=b.flexible||(b.flexible={});if(g){console.warn("将根据已有的meta标签来设置缩放比例");var l=g.getAttribute("content").match(/initial\-scale=([\d\.]+)/);l&&(j=parseFloat(l[1]),i=parseInt(1/j))}else if(h){var m=h.getAttribute("content");if(m){var n=m.match(/initial\-dpr=([\d\.]+)/),o=m.match(/maximum\-dpr=([\d\.]+)/);n&&(i=parseFloat(n[1]),j=parseFloat((1/i).toFixed(2))),o&&(i=parseFloat(o[1]),j=parseFloat((1/i).toFixed(2)))}}if(!i&&!j){var p=(a.navigator.appVersion.match(/android/gi),a.navigator.appVersion.match(/iphone/gi)),q=a.devicePixelRatio;i=p?q>=3&&(!i||i>=3)?3:q>=2&&(!i||i>=2)?2:1:1,j=1/i}if(f.setAttribute("data-dpr",i),!g)if(g=e.createElement("meta"),g.setAttribute("name","viewport"),g.setAttribute("content","initial-scale="+j+", maximum-scale="+j+", minimum-scale="+j+", user-scalable=no"),f.firstElementChild)f.firstElementChild.appendChild(g);else{var r=e.createElement("div");r.appendChild(g),e.write(r.innerHTML)}a.addEventListener("resize",function(){clearTimeout(d),d=setTimeout(c,300)},!1),a.addEventListener("pageshow",function(a){a.persisted&&(clearTimeout(d),d=setTimeout(c,300))},!1),"complete"===e.readyState?e.body.style.fontSize=12*i+"px":e.addEventListener("DOMContentLoaded",function(){e.body.style.fontSize=12*i+"px"},!1),c(),k.dpr=a.dpr=i,k.refreshRem=c,k.rem2px=function(a){var b=parseFloat(a)*this.rem;return"string"==typeof a&&a.match(/rem$/)&&(b+="px"),b},k.px2rem=function(a){var b=parseFloat(a)/this.rem;return"string"==typeof a&&a.match(/px$/)&&(b+="rem"),b}}(window,window.lib||(window.lib={}));</script>
    <!-- lib-flexible end-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- build:css css/index.css -->
    <link rel="stylesheet" href="../bower_components/normalize-css/normalize.css" />
    <link rel="stylesheet" href="css/index.css">
    <!-- endbuild -->
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <div class="jumbotron__logo">
          <img src="images/logo.png" alt="" />
        </div>
        <div class="jumbotron__header">
          <h1>
            WE'RE COMING SOON
          </h1>
        </div>
        <div class="jumbotron__description">
          <p>
            We are currently working on our new website.
          </p>
          <p>
            We'll be here soon. Enter you email below to stay updated.
          </p>
        </div>
      </div>
      <div class="email-form col-xs-12">
        <div class="email-form__container">
          <input type="text" class="email-form--input" placeholder="Enter email address here" /><input type="submit" class="email-form--submit" value="GO" />
        </div>
        <div class="alert alert-success">

        </div>
      </div>

      <div class="social-links col-xs-12">
        <ul class="social-links__container">
          <li class="social-links__link">
            <img src="images/social/facebook.png" />
          </li>
          <li class="social-links__link">
            <img src="images/social/twitter.png" />
          </li>
          <li class="social-links__link">
            <img src="images/social/instagram.png" />
          </li>

        </ul>
      </div>
    </div>
    <!-- build:js js/index.js -->
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    <script src="js/index.js"></script>
    <!-- endbuild -->
  </body>
</html>
