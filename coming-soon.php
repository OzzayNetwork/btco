<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Bravo |Page Launch Coming soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/apple-touch-icon-57x57-precomposed.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/bootstrap/css/coming-soon.css" rel="stylesheet">
    <link href="asset/fontello/css/fontello.css" rel="stylesheet" > 
    <link href="asset/fontello/css/animation.css" rel="stylesheet" > 
    
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
<div id="wrapper">
	<div id="main">
		<div class="container">
			
			<div class="row countdown d-flex justify-content-center">
            	<div class="col-md-12">
                	<div id="logo"><img src="img/logo.png" width="149" height="42" alt="" data-retina="true"></div>
                    <h1>We will be Back soon!</h1>
                    <h2>Meanwhile, you can make leave your email. We will advice when we will be online!</h2>
                </div>
				<div id="countdown_wp">
                    <div class="container_count"><div id="days">00</div>days</div>
                    <div class="container_count"><div id="hours">00</div>hours</div>
                    <div class="container_count"><div id="minutes">00</div>minutes</div>
                    <div class="container_count last"><div id="seconds">00</div>seconds</div>
                </div>
			</div>
            <div class="row d-flex justify-content-center">
						<div class="col-md-6 col-md-offset-3">
                        <div id="newsletter_wp" >
                            <form method="post" action="assets/newsletter.php" id="newsletter" name="newsletter"  autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-9 first-nogutter">
                                                <input name="email_newsletter" id="email_newsletter" type="email" placeholder="Your Email" class="form-control">
                                            </div>
                                            <div class="col-md-3 nogutter">
                                                    <button type="submit" class="btn-check" id="submit-newsletter">Subscribe</button>
                                            </div>
                                        </div>
                                            <div id="message-newsletter"></div>
                                </form>                         
                            </div>
                        </div>	
                    </div>
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Bravo 2020</p>
                    </div>            
		</div><!-- End container -->
	</div><!-- End main -->	
	</div>

<div id="slides">
	<ul class="slides-container">
		<li><img src="asset/img/slides/cooming-soon.jpg" alt=""></li>
		<li><img src="asset/img/slides/cooming-soon2.jpg" alt=""></li>
	</ul>
</div><!-- End background slider -->

<!-- JQUERY -->
<script src="asset/js/jquery-2.2.4.min.js"></script>
<script src="asset/js/jquery.easing.1.3.min.js"></script>
<script src="asset/js/jquery.animate-enhanced.min.js"></script>
<script src="asset/js/jquery.superslides.min.js"></script>
<script  type="text/javascript">
  $('#slides').superslides({
	  play: 6000,
	  pagination:false,
	  animation_speed: 800,
      animation: 'fade'
    });
</script>
<!-- OTHER JS --> 
<script src="asset/js/retina.min.js"></script>
<script  src="asset/js/functions.js"></script>
<script src="assets/validate.js"></script>
  </body>
</html>