<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Blog Template" clonable="1">
  <cms:editable name="name" type="text" />
  <cms:editable name="blog_main_image" crop='1' type='image' />
  <cms:editable name="blog_bio_info" type="richtext" />
  <cms:editable name="interview_questions" type="richtext" />
  <cms:editable name="pinterest_heading" type="richtext" />
  <cms:editable name="pinterest_board_image" crop='1' type='image' />
  <cms:editable name="pinterest_board_url" type="text" />
</cms:template>

<cms:if k_is_page>

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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <!-- Navigation -->
      <div class="show-for-medium-up transwhiteBackground navContainer fixed topPadding">
        <div class="row">
          <div class="medium-3 large-3 columns" style="padding-top:0.6em;">        
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
      </div>

        <cms:php>
           global $CTX;
           $page_ids = explode( ",", "<cms:pages ids_only='1' />" );
           $cur_page_id = "<cms:show k_page_id />";
           $pos = array_search( $cur_page_id, $page_ids ); 
           if( $pos!==FALSE ){
              if( $pos>0 ){
                 $prev_page_id = $page_ids[$pos-1];
                 $CTX->set( 'prev_page_id', $prev_page_id, 'global' );
              }
              if( $pos<count($page_ids)-1 ){
                 $next_page_id = $page_ids[$pos+1];
                 $CTX->set( 'next_page_id', $next_page_id, 'global' );
              }
           }
        </cms:php>

        <div class="secondSection hide-for-small">
          <div style="position:relative; height:4.0em; width: 100%;"></div>
          <div class="full-width transyellowBackground">
            <div class="row">
              <div class="medium-12 large-12 columns topPadding bottomPadding text-center uppercaseText">
                <h1><strong><cms:show k_page_title /></strong></h1>
              </div>
            </div>
          </div>  

          <br><br>

          <div class="row topPadding bottomPadding">
            <div class="medium-12 large-12 columns">
              <div class="row">
                <div class="medium-12 large-12 columns text-right">
                  <em>Published <cms:date k_page_date format='jS F, Y' /></em>
                </div>
              </div>

              <div class="row">
                <div class="medium-4 large-4 columns">
                  <img src="<cms:show blog_main_image />" class="dropShadow" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />

                  <div class="row">
                    <div class="medium-12 columns topPadding">
                      <div class="g-plus" data-action="share" data-annotation="none"></div>
                      <div class="fb-share-button" data-type="button"></div>
                      <a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-hashtags="migm">Tweet</a>
                    </div>
                  </div>
                </div>
                <div class="medium-8 large-8 columns">
                  <cms:show blog_bio_info />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="medium-12 large-12 columns">
              <cms:show interview_questions /> <!-- Display the interview questions for this blog post -->
            </div>
          </div>
      
          <div class="row">
            <div class="medium-12 large-12 columns">
              <ul class="medium-block-grid-3 large-block-grid-3">
                <cms:if next_page_id>
                  <cms:pages id=next_page_id skip_custom_fields='1'>
                    <li class="text-left">
                      <a href="<cms:show k_page_link />" class="button small radius noMargin"> Previous </a>
                    </li>
                  </cms:pages>
                </cms:if>

                <li class="text-center">
                  <a href="blog.php" class="button small radius noMargin">See all Gold Interviews </a>
                </li>
                
                <cms:if prev_page_id>
                  <cms:pages id=prev_page_id skip_custom_fields='1'>
                    <li class="text-right">
                      <a href="<cms:show k_page_link />" class="button small radius noMargin"> Next </a>
                    </li>
                  </cms:pages>
                </cms:if>
              </ul>
            </div>
          </div>

          <div class="row topPadding">
            <div class="medium-12 large-12 text-center">
              <a href="<cms:show pinterest_board_url />" target="_blank"><img src="<cms:show pinterest_board_image />" alt="Trend of the week" /></a>
            </div>
          </div>

          <div class="row">
            <div class="large-11 large-centered columns">
              <div class="medium-4 large-4 columns">
                <a href="/"><img src="img/shoppingSpreeButton.svg" /></a>
              </div>

              <div class="medium-4 large-4 columns">
                <a href="/#pinterest"><img src="img/pintoWinButton.svg" /></a>
              </div>

              <div class="medium-4 large-4 columns">
                <a href="/#instagram"><img src="img/pictoWinButton.svg" /></a>
              </div>
            </div>
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
            <div class="full-width medium-12 large-12 columns">
              <ul class="medium-block-grid-8">
                <?php include('retailerLinks.php'); ?>
              </ul>
            </div>
          </div>
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
   

      <!-- End Desktop Layout -->     


      <!-- Mobile Layout -->
      <div class="off-canvas-wrap show-for-small-only" data-offcanvas>
        <div class="inner-wrap">

          <nav class="tab-bar">
            <div class="row">
              <div class="small-10">
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
                <div class="small-6 small-centered columns">
                  <img src="<cms:show blog_main_image />" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                </div>
            </div>
            
            <div class="row">
                    <div class="medium-12 columns topPadding">
                      <div class="g-plus" data-action="share" data-annotation="none"></div>
                      <a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-hashtags="migm">Tweet</a>
                      <div class="fb-share-button" data-type="button"></div>
                    </div>
            </div>

            <div class="row">
              <div class="small-12 columns text-center">
                <cms:show blog_bio_info />
              </div>
            </div>

            <div class="row">
              <div class="small-12 columns">
                <cms:show interview_questions />
              </div>
            </div>

            <div class="row">
              <div class="small-12">
                <a href="<cms:show pinterest_board_url />" target="_blank"><img src="<cms:show pinterest_board_image />" alt="Trend of the week" /></a>
              </div>
            </div>

            <div class="row">
              <div class="small-12 text-center yellowBackground">
                <h3>INTERVIEWS & TRENDS</h3>
              </div>
            </div>

            <div class="row bottomMargin">
              <div class="small-11 small-centered columns">
                <div class="row">
                  <div class="small-6 columns noPadding">
                    <cms:pages masterpage="blog.php" limit='1' offset='1'>
                    <a class="imgLink right-off-canvas-toggle">
                      <img src="<cms:show blog_main_image />" alt="Trend Interviews">

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

            <div class="row">
              <div class="small-12 text-center yellowBackground">
                <h3>SWEEPSTAKES</h3>
              </div>
            </div>

            <div class="row">
              <div class="small-11 small-centered columns">
                <a href="/">
                  <img src="img/mobileSweepstakesBanner.gif" alt="$1000 Sweepstakes" />
                </a>
              </div>
            </div>

            <div class="row">
              <div class="small-12 text-center yellowBackground">
                <h3>ADDITIONAL CONTESTS</h3>
              </div>
            </div>
            
            <div class="row" style="margin-bottom: 4em;">
              <div class="small-11 small-centered columns">
                <div class="row">
                  <div class="small-6 columns">
                    <a href="pinterestcontest.php">
                      <img src="img/pintoWinButton.svg" alt="Pin to Win Sweepstakes">
                    </a>
                  </div>
                  <div class="small-6 columns">
                    <a href="instagramcontest.php">
                      <img src="img/pictoWinButton.svg" alt="Pic to Win Sweepstakes">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <a class="exit-off-canvas"></a>
        </div>
      </div>
      <!-- End Mobile Layout -->


      <div id="retailerList" class="mobileFooterMenu text-center show-for-small-only">
        <h4 class="whiteFont"><strong>OUR FEATURED RETAILERS<strong> <span class="upArrow"></span></h4>
        <div id="logoList" class="small-12 whiteBackground" style="display:none;">
          <div class="small-12">
            <ul class="small-block-grid-2 yellowFont noPadding">       
              <?php include('retailerLinks.php'); ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Mobile Layout -->


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.equalizer.js"></script>

  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/rem.min.js"></script>
  <![endif]-->

  <!-- Place this tag after the last share tag. -->

  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/platform.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

  <script>
    $(document).foundation();

    $(".flipClose").click(function(){
      $(".flip-container").removeClass("flip");
    });

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

<cms:else />
  <cms:embed 'interview_list.php' />
</cms:if> 

<?php COUCH::invoke(); ?>
