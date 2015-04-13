<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Blog Template" clonable="1">
  <cms:editable name="name" type="text" />
  <cms:editable name="blog_main_image" crop='1' type='image' />
  <cms:editable name="blog_mobile_image" crop='1' type='image' />
  <cms:editable name="blog_quote_image" crop='1' type='image' />
  <cms:editable name="professional_title" type="text" />
  <cms:editable name="blog_bio_info" type="richtext" />
  <cms:editable name="interview_questions" type="richtext" />
  <cms:editable name="pinterest_heading" type="richtext" />
  <cms:editable name="pinterest_board_image" crop='1' type='image' />
  <cms:editable name="pinterest_board_url" type="text" />
  <cms:editable name="blog_quote" type="text" />
</cms:template>

<?php include_once('header.php'); ?>

<cms:if k_is_page>

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

        <div class="container-fluid noPadding dropShadowMain" id="home" style="max-width: 1200px;">
          <div class="row">
            <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="" onclick="history.back(-1)"><h5 class="hidden-xs pull-left header-backlink"><small class="brownFont">BACK</small></h5></a>
                    <h2 class="heading brownFont" style="background: #e8b90e;">EXPERT INTERVIEWS</h2>
                  </div>
                </div>

                <span class="hidden-xs hidden-sm"><br><br><br></span>

                
                <div class="row">
                  <div class="col-xs-12 col-md-10 col-md-offset-1 clearfix" style="padding-top: 30px;">
                    <ul class="list-inline">
                    <cms:if next_page_id>
                      <cms:pages id=next_page_id skip_custom_fields='1'>
                        
                          <li class="pull-left">
                            <span class="yellowFont" style="padding-left: 25px; "> < </span><a href="<cms:show k_page_link />" class="yellowFont">Previous</a>
                            
                          </li>
                      </cms:pages>
                    </cms:if>

                    <cms:if prev_page_id>
                      <cms:pages id=prev_page_id skip_custom_fields='1'>

                        <li class="pull-right">
                          <a href="<cms:show k_page_link />" class="yellowFont" >Next</a><span class="yellowFont" style="padding-right: 20px;"> > </span>
                        </li>
                      </cms:pages>
                    </cms:if>
                    </ul>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4" style="padding-left: 40px; padding-right: 40px;">
                    <div class="hidden-md hidden-lg">
                      <h1 class="yellowFont new-expert-name" style="display: inline-block; margin-top: 0px; padding-top: 0px;"><strong><cms:show k_page_title /></strong></h1>
                      
                      <h5 class="brownFont" style="text-transform: capitalize; font-size: 15px;"><i><strong><cms:show professional_title /></strong></i></h5>
                      <div class="" style="display: inline-block; margin-top: 13px;">
                        <ul class="list-inline">
                          <li><i class="fa fa-facebook fa-2x yellowFont"></i></li>
                          <li><i class="fa fa-twitter fa-2x yellowFont" style="padding-right: 20px;"></i></li>
                        </ul>
                      </div>

                      <br>

                      <div class="row">
                        <div class="col-xs-12 col-sm-5" >
                          <cms:php>
                            $pageDate = "<cms:show k_page_date />";

                            $pageDate = substr($pageDate, 0, strpos($pageDate, ' '));

                            $postedDate = new DateTime($pageDate);
                            $currDate = new DateTime();

                            $interval = intval($postedDate->diff($currDate)->format('%a'));

                            if($interval <= 4) {
                              echo("<div class='newTag'><img src='img/newTag.png' class='img-responsive'></div>");
                            } elseif($interval > 300) {
                              echo("<div class='oldYear'><strong>2014</strong></div>");
                            }
                          </cms:php>  

                          <img src="<cms:show blog_main_image />" class="dropShadow img-responsive center-block" style="width:100%; max-height:auto; margin: auto;"  alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                    <div class="hidden-xs hidden-sm" style="margin-right: 40px;"> 
                      <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-10 col-md-offset-1 margin-left" style="margin-top: 5px;">
                          <cms:php>
                            $pageDate = "<cms:show k_page_date />";

                            $pageDate = substr($pageDate, 0, strpos($pageDate, ' '));

                            $postedDate = new DateTime($pageDate);
                            $currDate = new DateTime();

                            $interval = intval($postedDate->diff($currDate)->format('%a'));

                            if($interval <= 4) {
                              echo("<div class='newTag'><img src='img/newTag.png' class='img-responsive'></div>");
                            } elseif($interval > 300) {
                              echo("<div class='oldYear'><strong>2014</strong></div>");
                            }
                          </cms:php>  
                          <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" style="width:350px; height:auto; margin-right: 0px; margin-bottom: 50px; " alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                    <div class="row hidden-sm hidden-xs">
                      <div class="col-xs-12 col-sm-4 col-md-10 col-md-offset-1 margin-left">
                        <picture>
                          <source srcset="<cms:show blog_mobile_img />">
                          <source media="(min-width:768px)" srcset="<cms:show blog_quote_image />">
                          <img src="<cms:show blog_quote_image />" class="img-responsive " style="width: 100%; height: auto;" />
                        </picture>

                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-8 leftBorderYellow" style="padding-left: 40px; padding-right: 75px;">
                    <div class="hidden-xs hidden-sm ">
                      <h1 class="brownFont new-expert-name noMargin noPadding"><cms:show k_page_title /></h1>
                      <h5 class="brownFont blog-page-prof-title noPadding" style="display: inline-block; font-size: 13.5"><i><strong><cms:show professional_title /></strong></i></h5>
                      <ul class="list-inline" style="padding-top: 10px;">
                        <li ><i class="fa fa-facebook fa-2x yellowFont"></i></li>
                        <li><i class="fa fa-twitter fa-2x yellowFont" style="padding-left: 10px;"></i></li>
                      </ul> 
                      <!-- <div class="pull-right" style="display: inline-block">
                        <ul class="list-inline">
                          <li ><i class="fa fa-facebook fa-2x yellowFont"></i></li>
                          <li><i class="fa fa-twitter fa-2x yellowFont" style="padding-right: 20px;"></i></li>
                        </ul>
                      </div> -->
                    </div>

                    <br><br>
                    <div class="row">
                      <div class="col-xs-12">
                       <p class="brownFont noPadding"><em><cms:show blog_bio_info /></em></p>
                      </div>
                    </div>

                    <cms:show interview_questions />
                  
                  </div>
                </div>


                <div class="row padding-bottom-standard hidden-sm" >
                  <div class="col-sm-12">
                    <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">More Expert Interviews</p>
                    <hr class="more-sweepstakes">
                  </div>
                </div>

                <div class="row hidden-sm">
                  <div class="col-xs-12">
                    <div id="interviewPanels" class="row">
                      <div id="my_post_container">
                        <cms:pages limit='3' paginate='1' id='NOT "<cms:get k_page_id />"'>
                          
                          <cms:if k_paginated_top && k_paginator_required>
                            <script type="text/javascript">
                            var my_ajax = {
                              startPage:"<cms:show k_current_page />",
                              maxPages:"<cms:show k_total_pages />",
                              nextLink:"<cms:show k_paginate_link_next />"
                            };
                            </script>
                          </cms:if>

                          <div class="col-xs-12 col-sm-3 col-md-3 my_post margin-left noPadding hidden-sm">
                            <div class="panel">
                              <div class="panel-body">
                                <img src="<cms:show blog_main_image />" class="img-responsive dropShadow noPadding noMargin" alt="" style="max-width: 280px;">
                                
                                <div class="hidden-xs hidden-small prevHoverQuote yellowFont">
                                  <cms:show blog_quote />
                                </div>
                              </div>

                              <div class="panel-footer">
                                <h4 class="brownFont" style="font-weight: 400; margin-top: 5px; margin-bottom: 0px;"><cms:show name /></h4>
                                <p class="brownFont" style="margin-bottom: 2px;"><i><small><cms:show professional_title /></small></i></p>

                                <a href="<cms:show k_page_link />" class="hidden-xs center-block btn btn-default brownBackground dropShadow brown-button"  >
                                  <span class="brownFont" style="color: white;">READ INTERVIEW</span>
                                </a>

                                <a href="<cms:show k_page_link />" class="hidden-sm hidden-md hidden-lg btn btn-default brownBackground dropShadow brown-button" >
                                  <span class="brownFont" style="color: white;"><small>READ INTERVIEW</small></span>
                                </a>
                              </div>
                            </div>
                          </div>

                          <cms:if k_paginated_bottom && k_paginator_required>
                            <div id="my_paginator">
                              <cms:paginator />
                            </div>
                          </cms:if>

                        </cms:pages>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-12">
                    <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                    <hr class="more-sweepstakes" style="padding-bottom: 15px;">
                  </div>
                </div>


              <div class="row center-block" style="margin-left: 60px;">
                <div class="col-sm-4">
                  <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="hidden-xs hidden-sm contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="<cms:show k_site_link />img/main-contest-button.png" class="contest-button  hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4">
                  <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class=" hidden-xs hidden-sm contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="<cms:show k_site_link />img/pic-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4">
                  <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class="hidden-xs hidden-sm contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="<cms:show k_site_link />img/pin-button.png" class=" hidden-md hidden-lg contest-button padding-top-standard padding-bottom-standard" style="padding-top: 40px; padding-bottom: 40px; margin-right: 20px;"></a>
                </div>
              </div>

            </div>
          </div>
        </div>
    
<cms:else />
  <cms:embed 'interview_list.php' />
</cms:if> 

  <?php include_once('footer.php'); ?>

  </body>
</html>

<?php COUCH::invoke(); ?>
