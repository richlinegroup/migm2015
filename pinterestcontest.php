<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Pinterest Mobile Template">
<cms:editable name="rules_text" type="richtext" />
</cms:template>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>MAY IS GOLD MONTH | Pin to Win</title>

    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/vendor/modernizr.js"></script>

  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    
   <div class="off-canvas-wrap hide-for-large" data-offcanvas>
    <div class="inner-wrap">

      <nav class="tab-bar">
        <div class="row">
          <div class="small-10 small-centered">
            <a href="/"><img src="img/migm_logo.svg" class="img-responsive" alt="MIGM Logo"></a>
          </div>
        </div>
        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon"><span></span></a>
        </section>
      </nav>

      <aside class="right-off-canvas-menu">

        <ul class="off-canvas-list">
          <li><label>Trend Interviews</label></li>
          <cms:pages masterpage="blog.php">
          <li>
            <div class="row">
              <div class="small-4 columns noPadding">
                <a href="<cms:show trend_url />">
                  <img src="<cms:show blog_main_image />" alt="">
                </a>
              </div>
              <div class="small-8 columns noPadding">
                <a href="<cms:show k_page_link />" style="padding-bottom: 1.18em; padding-top: 1.18em;">
                  <h4><strong><cms:show name /></strong></h4>
                  <span style="text-decoration: underline;">READ THE INTERVIEW</span>
                </a>  
              </div>

            </div>
          </li>
          </cms:pages>
        </ul>
      </aside>

      <section class="main-section">
        <div class="row">
          <div class="small-12 text-center yellowBackground">
            <h3>Get started with our <br> Gold inspirtaion</h3>
          </div>
        </div>

        <div class="row">
          <div class="small-12 columns">  
            <cms:show rules_text /> 
          </div>

          <div class="small-6 small-centered columns">
            <img src="img/PrizeEarrings.jpg" alt="Bangle Prize">
          </div>
        </div>

        <div class="row">
          <div class="small-12 columns">
            <ul class="rule-counter small-block-grid-1">
              <li>Complete our "Pin to Win" entry form between 12:00AM April 14th and 11:59PM May 31st, 2014.</li>
              <li>Find inspiration from any of our May is Gold Month Pinterest boards or the gold jewelry pages of our participating retail partners.</li>
              <li>Pin your favorite gold designs or create a board of your favorites.</li>
            </ul>
          </div>              
        </div>

        <div class="row">
          <div class="small-12 columns">
            <iframe src="http://contests.piqora.com/fb/contest/content/mayisgoldmonth.com/635" frameborder="0" style="border:0px;margin:0px; overflow: hidden;"></iframe>
          </div>
        </div>

        <div class="row">
          <div class="small-12 text-center yellowBackground">
            <h3>ADDITIONAL CONTESTS</h3>
          </div>
        </div>
  
        <div class="row bottomPadding">
          <div class="small-11 small-centered columns">
            <div class="row">
              <div class="small-6 columns text-center">
                <a href="index.php">
                  <img src="img/shoppingSpreeButton.svg" alt="Win $1000 Shopping Spree">
                </a>
              </div>
              <div class="small-6 columns">
                <a href="instagramcontest.php">
                  <img src="img/pictoWinButton.svg" alt="Pic to Win">
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="small-12 text-center yellowBackground">
            <h3>INTERVIEWS & TRENDS</h3>
          </div>
        </div>

        <div class="row"  style="margin-bottom: 4em;">
          <div class="small-11 small-centered columns">
            <div class="row">
              <div class="small-6 columns noPadding">
                <cms:pages masterpage="blog.php" limit='1'>
                <a href="<cms:show k_page_link />">
                  <img src="<cms:show blog_main_image />" class="dropShadow" alt="Main Blogger Image" />

                  <div class="topPadding" style="position: absolute; bottom: 0; width: 100%; height: 60px; background-color: rgba(255, 255, 255, 0.6); text-align: center;">
                    <strong><cms:show name /></strong>
                    <span style="text-decoration: underline; display: block;"><small>READ THE INTERVIEW</small></span>
                  </div>
                </a>
                </cms:pages>
              </div>
              <div class="small-6 columns">
                <cms:pages masterpage="trendboard.php" limit='1'>
                <a href="<cms:show trend_url />" target="_blank">
                  <img src="img/trendBoard.svg" alt="Pic to Win">
                </a>
                </cms:pages>
              </div>
            </div>
          </div>
        </div>
      </section>

      <a class="exit-off-canvas"></a>
    </div>
  </div>


  <div id="retailerList" class="mobileFooterMenu text-center">
    <h4 class="whiteFont"><strong>OUR FEATURED RETAILERS<strong> <span class="upArrow"></span></h4>

    <div id="logoList" class="small-12 whiteBackground" style="display:none;">
      <div class="small-12">
        <ul class="small-block-grid-2 yellowFont noPadding">
          <?php include('retailerLinks.php'); ?>
        </ul>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>

  <script>
    $(document).foundation();

    $("#retailerList").click(function(){
      $("#logoList").slideToggle(function(){
        $(".upArrow").toggleClass("downArrow");
      });
    });

    $("#logoList li").click(function(){
      $("#logoList").slideDown(function(){
        $(".downArrow").addClass("upArrow");
      });
    });
  </script>

<!-- Lightning Bolt Begins -->

 <script type="text/javascript"> 

 var lbTrans = '[TRANSACTION ID]'; 

 var lbValue = '[TRANSACTION VALUE]'; 

 var lbData = '[Attribute/Value Pairs for Custom Data]'; 

 var lb_rn = new String(Math.random()); var lb_rns = lb_rn.substring(2, 12); 

 var boltProtocol = ('https:' == document.location.protocol) ? 'https://' : 'http://'; 

 try { 

 var newScript = document.createElement('script'); 

 var scriptElement = document.getElementsByTagName('script')[0]; 

 newScript.type = 'text/javascript'; 

 newScript.id = 'lightning_bolt_' + lb_rns; 

 newScript.src = boltProtocol + 'network.realmedia.com/2/LB/' + lb_rns + '@x96?'; 

 scriptElement.parentNode.insertBefore(newScript, scriptElement); 

 scriptElement = null; newScript = null; 

 } catch (e) { } 

 </script> 

 <!-- Lightning Bolt Ends -->

</body>
</html>
<?php COUCH::invoke(); ?>
