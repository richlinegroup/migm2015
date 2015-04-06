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
              <a href="" onclick="history.back(-1)"><h5 class="hidden-xs pull-left header-backlink"><small class="brownFont">BACK</small></h5></a>
              <h2 class="heading brownFont yellowBackground">EXPERT INTERVIEWS</h2>
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
              <div class="col-md-8 col-xs-12">
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Pinterest Contest Rules</p>
                <hr class="thin margin-left" style="width: 550px; padding-bottom: 50px; margin-top: 0px;">
                <img src="<cms:show k_site_link />img/pinterest-contest-rules.png" class="margin-left"/>
              </div>
              <div class="col-md-4 col-xs-12">
                <p class="about-subtitle yellowFont more-sweepstakes-title">Sign Up</p>
                <hr class="thin margin-right" style="width: 310px; padding-bottom: 50px; margin-top: 0px;">
                <img src="<cms:show k_site_link />img/pinterest-form.png" class="img-responsive" style="max-width: 310px;"/>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                <hr class="more-sweepstakes">
              </div>
            </div>
            <div class="row center-block" style="margin-left: 60px;">
              <div class="col-sm-4" style="padding-top: 15px;">
                <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4" style="padding-top: 15px;">
                <a href="#"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs contest-button" style="margin-left: 45px; padding-top: 25px; padding-bottom: 40px;"></a>
                <a href="#"><img src="<cms:show k_site_link />img/check-trend-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
              </div>
              <div class="col-sm-4" style="padding-top: 15px;">
                <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
              </div>
            </div>
          </div>
        </div>
      <cms:else />
        <cms:if k_page_name == "main-contest">     
          <div class="row" id="main-contest">
            <div class="col-xs-12">
              <img src="<cms:show k_site_link />img/main-contest-rules.png" class="center-block"/>
              <img src="<cms:show k_site_link />img/sweepstakes-placeholder.png" class="center-block img-responsive" style="margin: auto; padding: 70px 75px 0px 75px"/>
              <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
              <hr class="more-sweepstakes">
              <div class="row center-block" style="margin-left: 60px;">
                <div class="col-sm-4" style="padding-top: 15px;">
                  <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4" style="padding-top: 15px;">
                  <a href="#"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs contest-button" style="margin-left: 45px; padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="#"><img src="<cms:show k_site_link />img/check-trend-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4" style="padding-top: 15px;">
                  <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
                </div>
              </div>
            </div>
          </div>
        <cms:else />
          <cms:if k_page_name == "instagram-contest">
            <div class="row" id="instagram-contest">
              <div class="col-xs-12">
                <img src="<cms:show k_site_link />img/instagram-contest-rules.png" class="center-block"/>
                <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                <hr class="more-sweepstakes">
                <div class="row center-block" style="margin-left: 60px;">
                  <div class="col-sm-4" style="padding-top: 15px;">
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
                  </div>
                  <div class="col-sm-4" style="padding-top: 15px;">
                    <a href="#"><img src="<cms:show k_site_link />img/check-trend-button.png" class=" hidden-xs contest-button" style="margin-left: 45px; padding-top: 25px; padding-bottom: 40px;"></a>
                    <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
                  </div>
                  <div class="col-sm-4" style="padding-top: 15px;">
                    <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
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
