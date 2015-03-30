<?php require_once( 'portal/cms.php' ); ?>

<?php include_once('header.php'); ?>

    <div class="container-fluid bottomMargin">
      <div class="row  padding-bottom-standard">
        <div class="col-xs-12 text-center yellowBackground" style="padding: -15px">
          <h1 class="brownFont">ALL EXPERT INTERVIEWS</h1>
        </div>
      </div>
    </div> 

    <div class="container">
      <div class="row">
        <cms:pages masterpage="blog.php" limit='10'>
          <div class="col-xs-6 col-sm-4 col-md-2">

            <div style="position: relative;">
              <img src="<cms:show blog_main_image />" alt="">
          
              <div class="topPadding" style="position: absolute; bottom: 0; width: 100%; height: 100px; background-color: rgba(255, 255, 255, 0.6); text-align: center;">
                <a href="<cms:show k_page_link />">
                  <h4><strong><cms:show name /></strong></h4>
                  <span style="text-decoration: underline;">READ THE INTERVIEW</span>
                </a>  
              </div>
            </div>
                    
          </div>
        </cms:pages>
      </div>
    </div>

<!--     <div class="row topPadding">	
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
    </div> -->

    <?php include_once('footer.php'); ?>

  </body>
</html>

<?php COUCH::invoke(); ?>
