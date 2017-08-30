<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WELCOME PAGE</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

</head>
<style type="text/css">
body {
	margin-top: 0px;
	background-color:#FFF;
}
</style>

<body id="page1">
<table width="850" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" nowrap="nowrap" class="b1">UTCiya Amana Foundation</td>
  </tr>
  <tr>
    <td width="367" align="right">&nbsp;</td>
    <td align="right" nowrap="nowrap"><a href="home.php"><span class="green_bg">ENTER WEBSITE</span></a></td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="10" class="green_bg">
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="whit_bg">
      <tr>
        <td>
         <div class="row-3">
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
              <li><img src="images/slider-img1.jpg" alt=""> <strong class="banner"> <strong class="b1">our solidity</strong> <strong class="b2">is equality</strong> <strong class="b3">Innovation and flexibility, quick and<br>
                high results - oriented work</strong> </strong> </li>
              <li><img src="images/slider-img2.jpg" alt=""> <strong class="banner"> <strong class="b1">our watch-word</strong> <strong class="b2">slow & steady</strong> <strong class="b3">To conducting business affairs using<br>
                the highest standards</strong> </strong> </li>
              <li><img src="images/slider-img3.jpg" alt=""> <strong class="banner"> <strong class="b1">encourage</ strong> <strong class="b2">Business</strong> <strong class="b3">Success and growth with our<br>
                professionals of this sphere</strong> </strong> </li>
            </ul>
            <a class="prev" href="#">prev</a> <a class="next" href="#">prev</a> </div>
        </div>
      </div></td>
      </tr>
      
    </table></td>
  </tr>
</table>
<script type="text/javascript">Cufon.now();</script>
<br />
<br />
<table width="100%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
$(function () {
    $('.slider')._TMS({
        prevBu: '.prev',
        nextBu: '.next',
        playBu: '.play',
        duration: 800,
        easing: 'easeOutQuad',
        preset: 'simpleFade',
        pagination: false,
        slideshow: 3000,
        numStatus: false,
        pauseOnHover: true,
        banners: true,
        waitBannerAnimation: false,
        bannerShow: function (banner) {
            banner.hide().fadeIn(500)
        },
        bannerHide: function (banner) {
            banner.show().fadeOut(500)
        }
    });
})
</script>

</body>
</html>