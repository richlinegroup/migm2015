<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Social Sweepstakes Contest" clonable="1">
  <cms:editable name="page_title" type="text" />
  <cms:editable name="rules_text" type="richtext" />
</cms:template>

<?php include_once('header.php'); ?>

    <div class="container-fluid noPadding dropShadowMain" id="home" style="max-width: 1200px;">
      <div class="row">
<!--         <div class="col-xs-12">

          <div class="row"> -->
        <div class="col-xs-12 text-center yellowBackground">
          <a href="" onclick="history.back(-1)"><h5 class="hidden-xs pull-left noMargin brownFont header-backlink"><strong>BACK</strong></h5></a>
          <h1 class="brownFont heading"><cms:show page_title /></h1>
        </div>
      </div>  

      <div class="row text-center">
        <div class="col-xs-12 text-center">
          <cms:show rules_text />
        </div>
      </div>

      <div class="row" id="instagram-contest">
        <div class="col-xs-12">
          <img src="img/instagram-rules-image.png" class="center-block"/>
          <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
          <hr class="more-sweepstakes">
          <div class="row center-block" style="margin-left: 60px;">
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pic-button.png" class=" hidden-xs contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/pic-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="pinterest-contest">
        <div class="col-xs-12">
          <img src="img/instagram-rules-image.png" class="center-block"/>
          <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
          <hr class="more-sweepstakes">
          <div class="row center-block" style="margin-left: 60px;">
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pic-button.png" class=" hidden-xs contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/pic-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="main-contest">
        <div class="col-xs-12">
          <img src="img/instagram-rules-image.png" class="center-block"/>
          <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
          <hr class="more-sweepstakes">
          <div class="row center-block" style="margin-left: 60px;">
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pic-button.png" class=" hidden-xs contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
              <a href="#"><img src="img/pic-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
            </div>
            <div class="col-sm-4" style="padding-top: 15px;">
              <a href="#"><img src="img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
            </div>
          </div>
        </div>
      </div>


    <!--   </div>
    </div> -->

  </body>
</html>

<?php COUCH::invoke(); ?>
