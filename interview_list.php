<?php require_once( 'portal/cms.php' ); ?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>MAY IS GOLD MONTH | <cms:show k_page_title /></title>

    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/vendor/modernizr.js"></script>

    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript"> 
    var $buoop = {}; 
    $buoop.ol = window.onload; 
    window.onload=function(){ 
     try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
     var e = document.createElement("script"); 
     e.setAttribute("type", "text/javascript"); 
     e.setAttribute("src", "//browser-update.org/update.js"); 
     document.body.appendChild(e); 
    } 
    </script> 
  </head>
  <body>
  <?php include_once("analyticstracking.php") ?>

    <div class="row topPadding">
      <div class="medium-3 large-3 columns" style="padding-top: 0.65em;">        
        <a href="/"><img src="img/migm_logo.png" class="img-responsive" alt="MIGM Logo"></a>
      </div>

      <div class="small-12 medium-9 columns end">
        <nav class="top-bar" data-topbar>
          <ul class="title-area"></ul>

          <section class="top-bar-section">
            <ul class="right">
              <li data-magellan-arrival="sweepstakes"><a href="/#sweepstakes">SWEEPSTAKES</a></li>
              <li><a href="partners.php">RETAILERS</a></li>
              <li class="has-dropdown" data-magellan-arrival="social">
                <a href="/#social">PIC OR PIN</a>
                <ul class="dropdown">
                  <li data-magellan-arrival="pinterest"><a id="pinterestLink" href="/#pinterest">PINTEREST</a></li>
                  <li data-magellan-arrival="instagram"><a id="instagramLink" href="/#instagram">INSTAGRAM</a></li>
                </ul>
              </li>
              <li data-magellan-arrival="trends"><a href="/#trends">TRENDS</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>

    <div class="full-width transyellowBackground">
      <div class="row">
        <div class="large-12 columns topPadding bottomPadding text-center uppercaseText">
          <h1><strong>TREND INTERVIEWS</strong></h1>
        </div>
      </div>
    </div> 

    <div class="row topPadding">	
		<div class="medium-10 medium-centered columns">           
			<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3">
			  <cms:pages masterpage="blog.php" limit='10'>
			  <li>
			    <div style="position: relative;">
			      <img src="<cms:show blog_main_image />" alt="">
			  
					<div class="topPadding" style="position: absolute; bottom: 0; width: 100%; height: 100px; background-color: rgba(255, 255, 255, 0.6); text-align: center;">
					<a href="<cms:show k_page_link />">
					  <h4><strong><cms:show name /></strong></h4>
					  <span style="text-decoration: underline;">READ THE INTERVIEW</span>
					</a>  
					</div>
			    </div>
			  </li>
			  </cms:pages>
			</ul>
		</div>
    </div>

	<footer>
	<hr>
	<div class="row">
	  <div class="large-8 large-centered columns text-center">
	    <ul class="inline-list">
	      <li><a href="/">HOME</a></li>
        <li><a href="/#sweepstakes">SWEEPSTAKES</a></li>
        <li><a href="partners.php">RETAILERS</a></li>
        <li><a href="/#social">PIC OR PIN</a></li>
        <li><a href="/#trends">TRENDS</a></li>
        <li><a href="mailto:migm@richlinegroup.com">CONTACT US</li>
	    </ul>
	  </div>
	</div>

	<div class="row">
	  <div class="full-width medium-10 medium-centered columns">
      <ul class="medium-block-grid-8">
        <?php include('retailerLinks.php'); ?>
      </ul>
	  </div>
	</div>
	<br>
	<div class="row">
	  <div class="large-12 text-center">
	    <small>Copyright ©<?php echo Date('Y'); ?> Richline Group. All rights reserved. This website, and the images, designs, logos, trademarks and trade names contained herein, other than those of our participating retailers, are the exclusive property of Richline Group, Inc. 
              Any unauthorized use will be prosecuted to the fullest extent of the law.</small>
	    <br>
	    <small><strong>Powered by <a href="http://www.couchcms.com/" title="CouchCMS - Simple Open-Source Content Management">CouchCMS</a></strong></small>
	    <br>  
	  </div>
	</div>
	</footer>

  </body>
</html>

<?php COUCH::invoke(); ?>
