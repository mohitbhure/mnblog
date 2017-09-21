<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;
HomeAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>
 new WOW().init();
</script>

</head>
<body>
<?php $this->beginBody() ?>
<div class="header" id="ban">
		<div class="container">
      <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<div class="header-search">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Search...">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
				</div>
			</div>
      <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="link-effect-7" id="link-effect-7">
            <ul class="nav navbar-nav">
              <li class="active act"><a href="index.html">Home</a></li>
               <li> <?= Html::a('About', ['/site/about'] )?> </li>
              <li><a href="features.html">Features</a></li>
              <li><a href="travel.html">Travel</a></li>
              <li><a href="fashion.html">Fashion</a></li>
              <li><a href="music.html">Music</a></li>
              <li><a href="codes.html">Codes</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      </div>
      <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
          <ul>
            <li><a href="#"> </a></li>
            <li><a href="#" class="pin"> </a></li>
            <li><a href="#" class="in"> </a></li>
            <li><a href="#" class="be"> </a></li>

            <li><a href="#" class="vimeo"> </a></li>
          </ul>
        </div>
      <div class="clearfix"> </div>
      </div>
    </nav>
    </div>
  </div>
  <!--start-main-->
  <div class="header-bottom">
    <div class="container">
      <div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <h1><a href="index.html">STYLE BLOG</a></h1>
        <p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
      </div>
    </div>
  </div>
  <div class="banner">
  <div class="container">
  		<h2>Contrary to popular belief, Lorem Ipsum simply</h2>
  		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  		<a href="singlepage.html">READ MORE</a>
  	</div>
  </div>
</div>
        <div class="clearfix"></div>
                <?= $content ?>
                <!-- technology-right -->
            		<div class="col-md-3 technology-right">


            				<div class="blo-top1">

            					<div class="tech-btm">
            					<div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<form action="#" method="post">
            								<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
            								<input type="submit" value=" ">
            							</form>
            						</div>
            					<h4>Popular Posts </h4>
            						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<div class="blog-grid-left">
            								<a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a>
            							</div>
            							<div class="blog-grid-right">

            								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
            							</div>
            							<div class="clearfix"> </div>
            						</div>
            						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<div class="blog-grid-left">
            								<a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a>
            							</div>
            							<div class="blog-grid-right">

            								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
            							</div>
            							<div class="clearfix"> </div>
            						</div>
            						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<div class="blog-grid-left">
            								<a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a>
            							</div>
            							<div class="blog-grid-right">

            								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
            							</div>
            							<div class="clearfix"> </div>
            						</div>
            						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<div class="blog-grid-left">
            								<a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a>
            							</div>
            							<div class="blog-grid-right">

            								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
            							</div>
            							<div class="clearfix"> </div>
            						</div>
            						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            							<div class="blog-grid-left">
            								<a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a>
            							</div>
            							<div class="blog-grid-right">

            								<h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
            							</div>
            							<div class="clearfix"> </div>
            						</div>
            						<div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            					<h4>Instagram</h4>
            						<ul>

            							<li><a href="singlepage.html"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
            							<li><a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
            						</ul>
            					</div>

            					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
            					<div class="twt">

            						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
            						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            					</div>
            					</div>
            				</div>
            		</div>
            		<div class="clearfix"></div>
            		<!-- technology-right -->
            	</div>
            </div>
                <div class="footer">
                		<div class="container">
                			<div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                				<h4>About Me</h4>
                				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                				<img src="images/t4.jpg" class="img-responsive" alt="">
                					<div class="bht1">
                						<a href="singlepage.html">Read More</a>
                					</div>
                			</div>
                			<div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                			<h4>Latest Tweet</h4>
                			<div class="mid-btm">
                				<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                				<a href="https://w3layouts.com/">https://w3layouts.com/</a>
                			</div>

                				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                				<a href="https://w3layouts.com/">https://w3layouts.com/</a>

                			</div>
                			<div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                				<h4>Newsletter</h4>
                				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                						<div class="name">
                							<form action="#" method="post">
                								<input type="text" placeholder="Your Name" required="">
                								<input type="text" placeholder="Your Email" required="">
                								<input type="submit" value="Subscribed Now">
                							</form>
                						</div>
                			</div>
                			<div class="clearfix"></div>
                		</div>
                	</div>
          	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
          				<div class="container">
          					<p>© 2016 Style Blog. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
          				</div>
          			</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
