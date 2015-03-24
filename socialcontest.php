<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Social Sweepstakes Contest">
  <cms:editable name="page_title" type="text" />
  <cms:editable name="rules_text" type="richtext" />
</cms:template>

<?php include_once('header.php'); ?>

    <div class="container dropShadowMain">
      <div class="row">
        <div class="xs-12">

          <div class="row">
            <div class="col-xs-12 text-center yellowBackground">
              <a href="" onclick="history.back(-1)"><h5 class="hidden-xs pull-left noMargin brownFont header-backlink"><strong>BACK</strong></h5></a>
              <h1 class="brownFont"><cms:show page_title /></h1>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              
            </div>
          </div>
        </div>        
      </div>
    </div>

  </body>
</html>

<?php COUCH::invoke(); ?>
