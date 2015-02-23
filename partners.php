<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>MAY IS GOLD MONTH </title>

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


  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <!-- Navigation -->
    <div class="show-for-medium-up transwhiteBackground navContainer fixed">
      <div class="row">
        <div class="medium-3 large-3 columns" style="padding-top: 0.65em;">        
          <a href="/"><img src="img/migm_logo.svg" class="img-responsive" alt="MIGM Logo"></a>
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
    </div>

    <div style="position:relative; height:4.0em; width: 100%;"></div>
    <div class="full-width transyellowBackground">
      <div class="row">
        <div class="large-12 columns topPadding bottomPadding text-center uppercaseText">
          <h1><strong>OUR FEATURED RETAILERS</strong></h1>
        </div>
      </div>
    </div> 

    <div class="row topMargin">
      <div class="medium-10 medium-centered columns">
        <ul class="medium-block-grid-2 noPadding text-center">
          <?php include('retailerLinks.php'); ?>
        </ul>
      </div>
    </div>

    <footer class="hide-for-small">
      <hr>
      <div class="row">
        <div class="small-12 medium-10 large-8 medium-centered large-centered columns">
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

      <br>

      <div class="row">
        <div class="large-12 text-center">
          <small>Copyright © <?php echo Date('Y'); ?> Richline Group. All rights reserved. This website, and the images, designs, logos, trademarks and trade names contained herein, other than those of our participating retailers, are the exclusive property of Richline Group, Inc. 
          Any unauthorized use will be prosecuted to the fullest extent of the law.</small>
          <br>
          <small><strong>Powered by <a href="http://www.couchcms.com/" title="CouchCMS - Simple Open-Source Content Management">CouchCMS</a></strong></small>
          <br>  
        </div>
      </div>
    </footer>
   

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/rem.min.js"></script>
  <![endif]-->
  
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/platform.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


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

