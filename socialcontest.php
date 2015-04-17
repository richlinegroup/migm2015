<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Social Sweepstakes Contest" clonable="1">
  <cms:editable name="page_title" type="text" />
  <cms:editable name="rules_text" type="richtext" />
</cms:template>

<?php include_once('header.php'); ?>

    <div class="container-fluid noPadding dropShadowMain" id="home" style="max-width: 1200px;">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-12 text-center">
              <a href="" onclick="history.go(-1); return false;"><h5 class="hidden-xs pull-left header-backlink"><small class="brownFont">BACK</small></h5></a>

              <h2 class="heading brownFont" style="background: #e8b90e;">CONTESTS AND SWEEPSTAKES</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="row text-center">
        <div class="col-xs-12 text-center">
          <cms:show rules_text />
        </div>
      </div>

      <cms:if k_page_name == "pinterest-contest">
        <div class="row" id="pinterest-contest">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-md-7 col-xs-12 col-sm-12">
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Pinterest Contest Rules</p>
                <hr class="thin margin-left" style="width: 550px; padding-bottom: 50px; margin-top: 0px;">
                <img src="<cms:show k_site_link />img/pinterest-contest-rules.png" class="margin-left hidden-xs"/>
                <div class="contest-text hidden-sm hidden-md hidden-lg">
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">1.</span><br>Complete out <b>"Pin to Win"</b> entry form to the right between 12AM April 14th and 11:59PM May 31st, 2015.</p>
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">2.</span><br>Finish inspiration from any of our  <b>May Is Gold Month Pinterest</b> boards or the gold jewelry pages of our participating retail partners.</p>
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">3.</span><br><b>Pin</b> your favorite gold designs or create a board of your favorites.</p>
                </div>  
              </div>
              <div class="col-md-4 col-xs-12 col-sm-12">
                <p class="about-subtitle yellowFont more-sweepstakes-title">Sign Up</p>
                <hr class="thin margin-right pull-left" style="width: 310px; padding-bottom: 50px; margin-top: 0px;">

                <script type="text/javascript">
                var cnt_id = "cdaf785e-17124";
                </script>
                <script type="text/javascript" src="https://www.viralsweep.com/external/widget.js"></script>
      
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                <hr class="more-sweepstakes">
              </div>
            </div>
            <div class="row center-block" style="margin-left: 60px;">
              <div class="col-sm-4">
                <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="hidden-xs hidden-sm contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="contest-button  hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4">
                <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs hidden-sm contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4">
                <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="hidden-xs hidden-sm contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard" style="padding-top: 40px; padding-bottom: 40px; margin-right: 20px;"></a>
              </div>
            </div>
          </div>
        </div>
      <cms:else />
        <cms:if k_page_name == "main-contest">     
          <div class="row" id="main-contest">
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-sm-4 col-sm-offset-4">
                  <script type="text/javascript">
                  var cnt_id = "4685aaab-17128";
                  </script>
                  <script type="text/javascript" src="https://www.viralsweep.com/external/widget.js"></script>
                </div>
              </div>
            <div class="col-xs-12">
              <p class="about-subtitle yellowFont text-center">Main Sweepstakes Rules</p>

              <hr class="thin" style="margin-top: 0px; margin-bottom: 50px;" />
              <img src="<cms:show k_site_link />img/main-contest-rules.png" class="center-block hidden-xs"/>

              <div class="contest-text hidden-sm hidden-md hidden-lg">
                <p class="text-center"><span class="yellowFont" style="font-size: 40px;">1.</span><br>Complete the online <b>entry form</b> below, including first name, last name and email address before May 31st 11:59pm for a chance to win $1000 shopping Karat Gold shopping spree with one of our participating retailers.</p>
                <p class="text-center"><span class="yellowFont" style="font-size: 40px;">2.</span><br>You may earn <b>additional entries</b> by visiting any of our 19 partner retailer sites.</p>
                <p class="text-center"><span class="yellowFont" style="font-size: 40px;">3.</span><br>You will receive <b>weekly updates</b> on Karat Gold trends and educational tips throughout the month of May.</p>
              </div>

            <div class="text-center;">
              <br>
              <p class="text-center;" style="line-height: 17px; padding: 0px 50px 5px 50px; max-width: 480px; font-size: 11px; margin: auto; text-align: center;">No purchase necessary. Open to legal U.S. residents age 18 and over (excluding U.S. Territories other than the District of Columbia and Puerto Rico). Limit 1 entry per person. Odds depend on number of entries received. Void where prohibited by law.</p>
            </div>

              <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
              <hr class="more-sweepstakes">
              <div class="row center-block" style="margin-left: 60px;">
              <div class="col-sm-4">
                <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="hidden-xs hidden-sm contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="contest-button  hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4">
                <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs hidden-sm contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4">
                <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="hidden-xs hidden-sm contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard" style="padding-top: 40px; padding-bottom: 40px; margin-right: 20px;"></a>
              </div>
            </div>
          </div>
        <cms:else />
          <cms:if k_page_name == "instagram-contest">

            <div class="row" id="instagram-contest">
              <div class="col-xs-12">
                <img src="<cms:show k_site_link />img/instagram-contest-rules.png" class="center-block hidden-xs"/>
                <div class="contest-text hidden-sm hidden-md hidden-lg">
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">1.</span><br>Choose a gold piece from your personal collection or pick your favorite from a participating partner's gold case.</p>
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">2.</span><br>Put it on and take a selfie or show off a stylized gold shot.</p>
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">3.</span><br>Share your shot on <b>Instagram.</b></p>
                  <p class="text-center"><span class="yellowFont" style="font-size: 40px;">4.</span><br>Include the hashtag <b>#MIGMcontest.</b></p>
                </div>
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                <hr class="more-sweepstakes">
                <div class="row center-block" style="margin-left: 60px;">
                  <div class="col-sm-4">
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="hidden-xs hidden-sm contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="contest-button  hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
                  </div>
                  <div class="col-sm-4">
                    <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs hidden-sm contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
                    <a href="<cms:show k_site_link />#trends"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard"></a>
                  </div>
                  <div class="col-sm-4">
                    <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="hidden-xs hidden-sm contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
                    <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard" style="padding-top: 40px; padding-bottom: 40px; margin-right: 20px;"></a>
                  </div>
                </div>
              </div>
            </div>

          </cms:if>
        </cms:if>
      </cms:if>


      <?php include('footer.php'); ?>

  </body>
</html>

<?php COUCH::invoke(); ?>
