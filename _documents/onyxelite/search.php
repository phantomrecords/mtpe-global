<!DOCTYPE html>
<html lang="en">
<head>
<title>Search results</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">   
<meta name = "format-detection" content = "telephone=no" /> 
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/camera.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/camera_small.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
        autoAdvance:false;
    });
</script> 
<!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="global bgColor">
<section class="slider slider-small">
    <h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
    <div class="camera_wrap">
         <div data-src="img/picture1.jpg"></div>
         <div data-src="img/picture1.jpg"></div>
    </div>
    <div class="cap"></div>
</section>
<!--header-->
<section class="container menu-cont margBot2">
    <header>
        <section id="menu">
            <div class="container">
                <div class="navbar navbar_ clearfix">
                    <div class="navbar-inner">      
                        <div class="clearfix">
                            <div class="nav-collapse nav-collapse_ collapse">
                                <ul class="nav sf-menu clearfix">
                                    <li><a href="index.html">main<em></em></a></li> 
                                    <li class="sub-menu"><a href="index-1.html">About Us<span></span><em></em></a>
                                        <ul class="submenu">
                                            <li><a href="#">profile</a></li>
                                            <li><a href="#">news<span></span></a>
                                                <ul class="submenu-1">
                                                    <li><a href="#">fresh</a></li>
                                                    <li><a href="#">archive</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">staff</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="index-2.html">blog<em></em></a></li> 
                                    <li><a href="index-3.html">gallery<em></em></a></li> 
                                    <li><a href="index-4.html">Contact us<em></em></a></li>                       
                                </ul>
                            </div>                                                                                                          
                        </div>
                    </div>  
                </div>
                <ul class="follow_icon">
                    <li><a href="#"><img src="img/follow_icon1.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon2.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon3.png" alt=""></a></li>
                    <li><a href="#"><img src="img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
        </section>
    </header>  
</section>
<!--content-->
<div class="container padBot content-padTop">
    <div class="row">
      <article class="span12">
        <h3>Search result:</h3>
        <div id="search-results"></div>
      </article>
    </div>
</div>
<section class="info-box">
    <div class="container">
        <div class="row">
            <article class="span3">
                <h3>fresh links</h3>
                <ul class="list2">
                    <li><a href="#">savertas derasesi</a></li>
                    <li><a href="#">taserto yaeala maseay</a></li>
                    <li><a href="#">mertae ntrias</a></li>
                    <li><a href="#">verode fase laiuasesi</a></li>
                    <li><a href="#">ferise aver leroses</a></li>
                    <li><a href="#">lasertry kuseytasas</a></li>
                    <li><a href="#">mertaeory lkauisyase</a></li>
                    <li><a href="#">verode mase</a></li>
                </ul>
            </article>
            <article class="span6">
                <h3>basic principles</h3>
                <div class="list3">
                    <ul>
                        <li >
                            <div class="badge">A</div>
                            <div class="extra-wrap">
                                <p><span>milsa ceryuas</span></p>
                                <p>ad minima venisciases laboriosam. Veasisi serasi uidmodi esenim.</p>
                            </div>
                        </li>
                        <li>
                            <div class="badge">B</div>
                            <div class="extra-wrap">
                                <p><span>setemast Vasre</span></p>
                                <p>ad minima venisciases laboriosam. Veasisi serasi uidmodi esenim.</p>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-primary">more</a>
                </div>
            </article>
            <article class="span2 offset1 locations-box">
                <h3>locations</h3>
                <figure><img src="img/foo_logo.png" alt=""></figure>
                <p>28 Jackson Blvd Ste 1020<br>Chicago<br>IL 60604-2340</p>
                <a href="#" class="mail-link">info@demolink.org</a>
            </article>
        </div>
    </div>
</section>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <article class="span12">
                <p>P<span>O</span>WER &copy; 2013 <span>&bull;</span> <br><a href="index-5.html">Privacy Policy</a></p>
            </article>                        
        </div>
    </div> 
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>