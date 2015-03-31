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
            <div class="col-sm-12">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="" onclick="history.back(-1)"><h5 class="hidden-xs pull-left brownFont header-backlink"><small>BACK</small></h5></a>
                    <h2 class="heading brownFont yellowBackground">EXPERT INTERVIEWS</h2>
                  </div>
                </div>

                <span class="hidden-xs hidden-sm"><br><br><br></span>

                
                <div class="row">
                  <div class="col-xs-12 col-md-10 col-md-offset-1 clearfix">
                    <ul class="list-inline">
                    <cms:if next_page_id>
                      <cms:pages id=next_page_id skip_custom_fields='1'>
                        
                          <li class="pull-left">
                            <a href="<cms:show k_page_link />">< Previous </a>
                          </li>
                      </cms:pages>
                    </cms:if>

                    <cms:if prev_page_id>
                      <cms:pages id=prev_page_id skip_custom_fields='1'>

                        <li class="pull-right">
                          <a href="<cms:show k_page_link />"> Next ></a>
                        </li>
                      </cms:pages>
                    </cms:if>
                    </ul>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="hidden-md hidden-lg">
                      <h1 class="brownFont" style="display: inline-block"><strong><cms:show k_page_title /></strong></h1>
                      <div class="pull-right" style="display: inline-block; margin-top: 13px;">
                        <ul class="list-inline">
                          <li><i class="fa fa-facebook fa-2x yellowFont"></i></li>
                          <li><i class="fa fa-twitter fa-2x yellowFont" style="padding-right: 20px;"></i></li>
                        </ul>
                      </div>
                      <h5 class="brownFont"><strong><cms:show professional_title /></strong></h5>

                      <br>

                      <div class="row">
                        <div class="col-xs-12 col-sm-8">
                          <img src="<cms:show blog_main_image />" class="dropShadow img-responsive" style="width:100%; max-height:auto;" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                    <div class="hidden-xs hidden-sm" style="margin-right: 40px;"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1 margin-left" style="margin-top: 5px;">
                          <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" style="width:350px; height:auto; margin-right: 0px; margin-bottom: 50px; " alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12">
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
                      <h1 class="yellowFont new-expert-name noMargin noPadding"><cms:show k_page_title /></h1>
                      <h5 class="brownFont blog-page-prof-title noPadding" style="display: inline-block"><strong><cms:show professional_title /></strong></h5>

                      <div class="pull-right" style="display: inline-block">
                        <ul class="list-inline">
                          <li><i class="fa fa-facebook fa-2x yellowFont"></i></li>
                          <li><i class="fa fa-twitter fa-2x yellowFont" style="padding-right: 20px;"></i></li>
                        </ul>
                      </div>
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

                <!-- <div class="row topMargin">
                  <div class="col-xs-12">
                    <h3 class="yellowFont more-sweepstakes-title margin-left about-subtitle" style="text-transform: capitalize;"><strong>More Expert Interviews</strong></h3>
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-12 yellowBackground"></div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div> -->

                <div class="row padding-bottom-standard" >
                  <div class="col-sm-12">
                    <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">More Expert Interviews</p>
                    <hr class="more-sweepstakes">
                  </div>
                </div>

                <div class="row">
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

                          <div class="col-xs-6 col-sm-3 col-md-3 my_post margin-left noPadding">
                            <div class="panel">
                              <div class="panel-body">
                                <img src="<cms:show blog_main_image />" class="img-responsive dropShadow noPadding noMargin" alt="">
                              </div>

                              <div class="panel-footer">
                                <h4 class="yellowFont" style="font-weight: 400; margin-top: 5px; margin-bottom: 0px;"><cms:show name /></h4>
                                <p class="brownFont" style="margin-bottom: 2px;"><i><small><cms:show professional_title /></small></i></p>

                                <a href="<cms:show k_page_link />" class="hidden-xs center-block btn btn-default yellowBackground dropShadow">
                                  <span class="brownFont">READ INTERVIEW</span>
                                </a>

                                <a href="<cms:show k_page_link />" class="hidden-sm hidden-md hidden-lg center-block btn btn-default yellowBackground dropShadow">
                                  <span class="brownFont"><small>READ INTERVIEW</small></span>
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


             <!--  <div class="row">
                <div class="col-xs-12">
                  <h3 class="yellowFont visible-xs visible-sm"><strong>Additional Sweepstakes</strong></h3>
                  <h3 class="yellowFont visible-md visible-lg margin-left about-subtitle" style="text-transform: capitalize;"><strong>Participate In Our Sweepstakes and Win!</strong></h3>
                   <div class="col-xs-12">
                    <div class="row">
                      <div class="col-xs-12 yellowBackground"></div>
                    </div>
                  </div>
                </div> -->

                <div class="row">
                  <div class="col-sm-12">
                    <p class="about-subtitle yellowFont margin-left more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                    <hr class="more-sweepstakes" style="padding-bottom: 15px;">
                  </div>
                </div>
<!--                   <div class="row">
                    <div class="col-sm-12">
                      <p class="about-subtitle yellowFont margin-left" id="more-sweepstakes-title">Participate in Our Sweepstakes and Win</p>
                      <hr class="more-sweepstakes">
                    </div>
                    <br>
                  </div> -->
           <!--    </div> -->

              <div class="row center-block" style="margin-left: 60px;">
                <div class="col-sm-4">
                  <a href="#"><img src="img/main-contest-button.png" class="hidden-xs contest-button" style="padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="#"><img src="img/main-contest-button.png" class="contest-button hidden-sm hidden-md hidden-lg padding-top-standard padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="img/pic-button.png" class=" hidden-xs contest-button" style="margin-left: 55px; padding-top: 25px; padding-bottom: 40px;"></a>
                  <a href="#"><img src="img/pic-button.png" class="hidden-sm hidden-md hidden-lg contest-button padding-bottom-standard"></a>
                </div>
                <div class="col-sm-4">
                  <a href="#"><img src="img/pin-button.png" class="contest-button padding-top-standard pull-right" style="margin-right: 60px; padding-top: 25px; padding-bottom: 40px;"></a>
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
