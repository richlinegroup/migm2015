<?php //require_once( 'portal/cms.php' ); ?>

<!-- <cms:template title="Homepage Template">
  <cms:editable name="blog_main_image" crop="1" type="image" />
  <cms:editable name="blog_title" type="text" />
  <cms:editable name="blog_excerpt" type="richtext" />
  <cms:editable name="blog_url" crop="1" type="image" />
</cms:template> -->

<?php
  require_once('header.php');
?>

    <div class="container-fluid">
      <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="mainCarousel" data-slide-to="0" class="active"></li>
          <li data-target="mainCarousel" data-slide-to="1"></li>
          <li data-target="mainCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="" alt="" />
          </div>
          <div class="item">
            <img src="" alt="" />
          </div>
          <div class="item">
            <img src="" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>PARTICIPATING RETAILERS</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <!-- *** Retailer logos go here *** -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>SOCIAL MEDIA SWEEPSTAKES</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <!-- ** PIN TO WIN ** -->
        </div>

        <div class="col-sm-6 col-md-6">
          <!-- ** PIC TO WIN ** -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h2>EXPERT INTERVIEWS</h2>
        </div>
      </div>
    </div>

    <div class="container">

    </div>

    <?php include('footer.php'); ?>
</body>
</html>
<?php //COUCH::invoke(); ?>
