<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Blog Template" clonable="1">
  <cms:editable name="name" type="text" />
  <cms:editable name="blog_main_image" crop='1' type='image' />
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

        <div class="container bottomMargin">
          <div class="row">
            <div class="col-xs-12 text-center yellowBackground">
              <h1 class="brownFont">EXPERT INTERVIEWS</h1>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row topMargin">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="hidden-md hidden-lg">
                <h1><strong><cms:show k_page_title /></strong></h1>

                <span class="pull-right"><em>Published <cms:date k_page_date format='jS F, Y' /></em></span>
                
                <div class="row">
                  <div class="col-xs-12 img-responsive">
                    <img src="<cms:show blog_main_image />" class="dropShadow" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                  </div>
                </div>
              </div>

              <div class="hidden-xs hidden-sm"> 
                <div class="row">
                  <div class="col-xs-12 col-md-8 center-block">
                    <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                  </div>
                </div>
              </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 leftBorderYellow">
              <div class="hidden-xs hidden-sm">
                <h1 class="brownFont"><strong><cms:show k_page_title /></strong></h1>
                <h5 class="brownFont"><strong><cms:show professional_title /></strong></h5>
              </div>

              <br><br>
              <div class="row">
                <div class="col-xs-12">
                 <p><strong><em><cms:show blog_bio_info /></em></strong></p>
                </div>
              </div>

              <br><br>

              <cms:show interview_questions />
            
            </div>
          </div>

        </div>

        <div class="container">
          <div class="row topMargin">
            <div class="col-xs-12">
              <h3 class="yellowFont"><strong>More Expert Interviews</strong></h3>
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12 yellowBackground"></div>
                </div>
              </div>
              <br>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div id="interviewPanels" class="row">
                <div id="my_post_container">
                  <cms:pages limit='4' paginate='1' id='NOT "<cms:get k_page_id />"'>
                    
                    <cms:if k_paginated_top && k_paginator_required>
                      <script type="text/javascript">
                      var my_ajax = {
                        startPage:"<cms:show k_current_page />",
                        maxPages:"<cms:show k_total_pages />",
                        nextLink:"<cms:show k_paginate_link_next />"
                      };
                      </script>
                    </cms:if>

                    <div class="col-xs-6 col-sm-4 col-md-3 my_post">
                      <div class="panel">
                        <div class="panel-body">
                          <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" alt="">
                        </div>

                        <div class="panel-footer">
                          <h4 class="brownFont"><strong><cms:show name /></strong></h4>
                          <p class="brownFont"><small><cms:show professional_title /></small></p>

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

          <div class="row">
            <div class="col-xs-12">
              <h3 class="yellowFont visible-xs visible-sm"><strong>Additional Sweepstakes</strong></h3>
              <h3 class="yellowFont visible-md visible-lg"><strong>Participate In Our Sweepstakes and Win!</strong></h3>
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12 yellowBackground"></div>
                </div>
              </div>
              <br>
            </div>
          </div>

        </div>
<!--
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
>>>>>>> Stashed changes
                  </div>
                </div>

<<<<<<< Updated upstream
                <div class="row topMargin">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="hidden-md hidden-lg">
                      <h1><strong><cms:show k_page_title /></strong></h1>

                      <span class="pull-right"><em>Published <cms:date k_page_date format='jS F, Y' /></em></span>
                      
                      <div class="row">
                        <div class="col-xs-12 col-sm-8">
                          <img src="<cms:show blog_main_image />" class="dropShadow img-responsive" style="width:100%; height:auto;" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                    <div class="hidden-xs hidden-sm"> 
                      <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1">
                          <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" style="width:100%; height:auto;" alt="<cms:show name /><cms:php> echo("image"); </cms:php>" />
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-7 leftBorderYellow">
                    <div class="hidden-xs hidden-sm">
                      <h1 class="brownFont"><strong><cms:show k_page_title /></strong></h1>
                      <h5 class="brownFont"><strong><cms:show professional_title /></strong></h5>
                    </div>

                    <br><br>
                    <div class="row">
                      <div class="col-xs-12">
                       <p><strong><em><cms:show blog_bio_info /></em></strong></p>
                      </div>
                    </div>

                    <br><br>

                    <cms:show interview_questions />
                  
                  </div>
                </div>

                <div class="row topMargin">
                  <div class="col-xs-12">
                    <h3 class="yellowFont"><strong>More Expert Interviews</strong></h3>
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-12 yellowBackground"></div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <div id="interviewPanels" class="row">
                      <div id="my_post_container">
                        <cms:pages limit='4' paginate='1' id='NOT "<cms:get k_page_id />"'>
                          
                          <cms:if k_paginated_top && k_paginator_required>
                            <script type="text/javascript">
                            var my_ajax = {
                              startPage:"<cms:show k_current_page />",
                              maxPages:"<cms:show k_total_pages />",
                              nextLink:"<cms:show k_paginate_link_next />"
                            };
                            </script>
                          </cms:if>

                          <div class="col-xs-6 col-sm-4 col-md-3 my_post">
                            <div class="panel">
                              <div class="panel-body">
                                <img src="<cms:show blog_main_image />" class="img-responsive dropShadow" alt="">
                              </div>

                              <div class="panel-footer">
                                <h4 class="brownFont"><strong><cms:show name /></strong></h4>
                                <p class="brownFont"><small><cms:show professional_title /></small></p>

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

                <div class="row">
                  <div class="col-xs-12">
                    <h3 class="yellowFont visible-xs visible-sm"><strong>Additional Sweepstakes</strong></h3>
                    <h3 class="yellowFont visible-md visible-lg"><strong>Participate In Our Sweepstakes and Win!</strong></h3>
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-12 yellowBackground"></div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>

            </div>
          </div>
        </div>
=======
          <div class="row">
            <div class="medium-12 large-12 columns">
              <cms:show interview_questions /> <?php #Display the interview questions for this blog post ?>
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
        </div>
-->
>>>>>>> Stashed changes
    
<cms:else />
  <cms:embed 'interview_list.php' />
</cms:if> 

  <?php include_once('footer.php'); ?>

  </body>
</html>

<?php COUCH::invoke(); ?>
