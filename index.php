<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Homepage Template">
  <cms:editable name="blog_main_image" crop="1" type="image" />
  <cms:editable name="blog_title" type="text" />
  <cms:editable name="blog_excerpt" type="richtext" />
  <cms:editable name="blog_url" crop="1" type="image" />
</cms:template>

<?php
  require_once('header.php');
?>
          <div class="container-fluid noPadding dropShadowMain" id="home" style="max-width: 1200px;">
            <div id="mainCarousel" class="carousel slide hidden-xs" data-ride="carousel" style="z-index: 500;">
              <ol class="carousel-indicators" >
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
                <li data-target="#mainCarousel" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox" >
                <div class="item active migm-slide" >
                  <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="img/migmbanners2015a.jpg" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px;">
                    <h1 class="yellowFont">Celebrate Your Love for Gold!</h1>
                    <p>May is the time for Mother's Day, graduations, bridal showers, weddings and anniversaries... It also marks the beginning of our 12th annual <i>May is Gold Month</i> event where we celebrate everything we love about <i>Karat Gold</i>!</p>
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />" class="btn btn-default btn-lg slider-button-yellow">Win a $1000 shopping spree</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="blog.php"><img src="img/migmbanners2015c.jpg" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 350px; padding-top: 40px;">
                    <h1 class="whiteFont" style="font-weight: 100;">From the Experts</h1>
                    <p>Join us as we get the inside scoop from industry experts on why they love Karat Gold and how they love to wear it!</p>
                    <a href="blog.php" style="background: none; border: white solid 2px;" class="btn btn-default btn-lg">Read the Interviews</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="gold-guide.php"><img src="img/migmbanners2015b.jpg" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px; padding-top: 35px;">
                    <h1 class="yellowFont">Karat Gold 101</h1>
                    <p>The richness of Gold is more than just skin deep - learn more about the <i>history of Gold</i>, understanding <i>Karatage</i> and <i>Alloys</i>, and <i>how to care</i> for your Karat Gold.</p>
                    <a href="gold-guide.php" class="btn btn-default btn-lg slider-button-yellow">Read More</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="<cms:show k_site_link />#contests"><img src="img/migmbanners2015d.jpg" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px; padding-top: 30px;">
                    <h1 class="whiteFont" style="font-weight: 100;">Share Your Style</h1>
                    <p>Show us what inspires your gold style, what is on your must have list, and how you style your  own Karat Gold...<br>You just may win a piece of Karat Gold jewelry to add to your wardrobe!</p>
                    <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />" style="background: none; border: white solid 2px;" class="btn btn-default btn-lg">Pin to win</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />" style="background: none; border: white solid 2px;" class="btn btn-default btn-lg">Pic to win</a>
                  </div>
                </div>
              </div>
            </div>

            <div id="mainCarousel" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel" style="z-index: 500;">
              <ol class="carousel-indicators" >
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
                <li data-target="#mainCarousel" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox" >
                <div class="item active migm-slide">
                  <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="img/migmbanners2015a-mobile.png" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px;">
                    <h1 class="yellowFont" style="font-weight: 400;">Celebrate Your Love for Gold!</h1>
                    <p style="max-width: 220px;">Our 12th annual <i>May is Gold Month</i> is the event where we celebrate everything we love about <i>Karat Gold</i>!</p>
                    <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />" class="btn btn-default btn-sm slider-button-yellow">Enter to win $1000</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="blog.php"><img src="img/migmbanners2015c-mobile.png" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 350px; padding-top: 10px;">
                    <h1 class="brownFont" style="font-weight: 500;">From the Experts</h1>
                    <p class="brownFont" style="color: #684f40; font-weight: 400;">Get the inside scoop from industry experts on why they love and how they love to wear Karat Gold!</p>
                    <a href="blog.php" style="background: none; border: #684f40 solid 2px; color: #684f40; font-weight: 500;" class="btn btn-default btn-sm">Read the Interviews</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="gold-guide.php"><img src="img/migmbanners2015b-mobile.png" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px; padding-top: 10px;">
                    <h1 class="yellowFont" style="font-weight: 400;">Karat Gold 101</h1>
                    <p>Learn more about the <i>history of Gold</i>, <i>Karatage</i>, <i>Alloys</i>, and <i>how to care</i> for your Karat Gold jewelry.</p>
                    <a href="gold-guide.php" class="btn btn-default btn-sm slider-button-yellow">Read More</a>
                  </div>
                </div>
                <div class="item migm-slide">
                  <a href="<cms:show k_site_link />#contests"><img src="img/migmbanners2015d-mobile.png" alt="" class="slide"/></a>
                  <div class="slider-text text-center" style="max-width: 500px; padding-top: 10px;">
                    <h1 class="brownFont" style="font-weight: 500;">Share Your Style</h1>
                    <p class="brownFont" style="color: #684f40; font-weight: 400;">Show us what inspires your gold style... You just may win a piece of Karat Gold jewelry to add to your wardrobe!</p>
                    <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />" style="background: none; border: #684f40 solid 2px; color: #684f40; font-weight: 500;" class="btn btn-default btn-sm">Enter to win</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="row" id="retailers">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">PARTICIPATING RETAILERS</h2>
              </div>
            </div>
            
            <div class="container hidden-xs" style="padding-left: 120px;">
              <div class="row logos-top-row">
                <!-- <div class="col-md-1">
                </div> -->
                <div class="col-md-12 center-block" >
                  <div class="center-block">
                    <a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&amp;node=3246894011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=center-8&amp;pf_rd_r=0T592AMJ47KBGDR88BSV&amp;pf_rd_t=101&amp;pf_rd_p=1325992762&amp;pf_rd_i=3367581" target="_blank"><img class="logo" src="img/logos/amazonLogo.png" /></a>
                    <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a>
                    <a href="http://www.fingerhut.com/thumbnail/Jewelry-Watches/Fine-Jewelry/Fine-Gold/Mcatp/cat_8364/Mcatg/cat_8/8390.uts" target="_blank"><img class="logo" src="img/logos/fingerhutLogo.png" /></a>
                    <a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1" target="_blank"><img class="logo" src="img/logos/helzbergLogo.png" /></a>
                    <a href="http://www.hsn.com/shop/michael-anthony-jewelry-jewelry/j-31" target="_blank"><img class="logo" src="img/logos/hsnLogo.png" /></a>
                    <a href="http://www.jcpenney.com/jewelry-watches/fine-jewelry/infinite-gold/cat.jump?id=cat1004220047&deptId=dept20000020&cmJCP_T=G1&cmJCP_C=D11" target="_blank"><img class="logo" src="img/logos/jcpLogo.png" /></a>
                    <a href="http://www.kay.com/SterlingSearch?storeId=10101&amp;catalogId=10001&amp;langId=-1&amp;globalSearchText=14K%20yelllow%20gold%20hoops&amp;searchText=14K%20yelllow%20gold%20hoops" target="_blank"><img class="logo" src="img/logos/kayJewelerLogo.png"/></a>
                  </div>  
                </div>
<!--                 <div class="col-md-1">
                </div> -->
              </div>  
              <div class="row logos-bottom-row">
               <!--  <div class="col-md-1">
                </div> -->
                <div class="col-md-12">
                  <a href="http://www.kmart.com/jewelry-gold-jewelry/b-20098" target="_blank"><img class="logo" src="img/logos/kmartLogo.png" /></a>
                  <a href="http://www.kohls.com/catalog/gold-jewelry.jsp?CN=4294735791+4294719765" target="_blank"><img class="logo" src="img/logos/kohlsLogo.png" /></a>
                  <a href="http://www1.macys.com/shop/jewelry-watches/gold?id=2904&edge=hybrid&cm_sp=us_hdr-_-jewelry-%26-watches-_-2904_gold" target="_blank"><img class="logo" src="img/logos/macysLogo.png" /></a>
                  <a href="http://www.qvc.com/jewelry/eternagold/_/N-mfluZ1z141by/c.html" target="_blank"><img class="logo" src="img/logos/qvcLogo.png" /></a>
                  <a href="http://www.samsclub.com/sams/search/searchResults.jsp?searchCategoryId=all&searchTerm=14K+yellow+gold+hoops&fromHome=no&_requestid=87561" target="_blank"><img class="logo" src="img/logos/samsLogo.png" /></a>
                  <a href="http://www.sears.com/jewelry-gold-jewelry/b-1020189?adCell=Jewelry_gold" target="_blank"><img class="logo" src="img/logos/searsLogo.png" /></a>
                </div>
              </div>
              <div class="row" style="padding-left: 90px; padding-bottom: 30px;">
                <!-- <div class="col-md-1">
                </div> -->
                <div class="col-md-12">
                  <a href="http://www.zales.com/earrings/view-all-earrings/family.jsp?fd=Gold&fd=Taxonomy&fd=No+Stone&categoryId=2109138&categoryId=2109138&ff=PAD&ff=Taxonomy&ff=PAD&cp=13337270.3263625&fg=&fg=&fg=Stone+Type&fv=Metal+Type%2FGold&fv=2109138&fv=Stone+Type%2FNo+Stone&kpc=1&page=1" target="_blank"><img class="logo" src="img/logos/zales-diamond.png" /></a>
                  <a href="http://www.mappins.com/" target="_blank"><img class="logo" src="img/logos/mappins.png" /></a>
                  <a href="hhttp://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1" target="_blank"><img class="logo" src="img/logos/bjLogo.png" /></a>
                  <a href="http://www.jtv.com/gold-jewelry.html?mcid=PRM1802001" target="_blank"><img class="logo" src="img/logos/jtv.png" style="max-width: 100px;"/></a>
                  <a href="http://www.peoplesjewellers.com/family/index.jsp?page=1&cp=4425705&f=PAD%2fMetal+Type%2fGold&f=PAD%2fStone+Type%2fNo+Stone&categoryId=4357957" target="_blank"><img class="logo" src="img/logos/peoples.png" /></a>
                  <a href="http://www.walmart.com/browse/3891_1228254?cat_id=3891_1228254&grid=false&facet=brand:Simply%20Gold" target="_blank"><img class="logo" src="img/logos/walmartLogo.png" /></a>
                </div>
<!--                 <div class="col-md-1">
                </div> -->
              </div>
            </div>

            <div class="container visible-xs">
              <div id="header-logo-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&node=3246894011&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=center-8&pf_rd_r=0T592AMJ47KBGDR88BSV&pf_rd_t=101&pf_rd_p=1325992762&pf_rd_i=3367581" target="_blank"><img class="logo" src="img/logos/amazonLogo.png" /></a></li>
                      <li><a href="http://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1" target="_blank"><img class="logo" src="img/logos/bjLogo.png" /></a></li>
                      <li><a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a></li>
                      <li><a href="http://www.fingerhut.com/thumbnail/Jewelry-Watches/Fine-Jewelry/Fine-Gold/Mcatp/cat_8364/Mcatg/cat_8/8390.uts" target="_blank"><img class="logo" src="img/logos/fingerhutLogo.png" /></a></li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1" target="_blank"><img class="logo" src="img/logos/helzbergLogo.png" /></a></li>
                      <li><a href="http://www.hsn.com/shop/michael-anthony-jewelry-jewelry/j-31" target="_blank"><img class="logo" src="img/logos/hsnLogo.png" /></a></li>
                      <li><a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a></li>
                      <li><a href="http://www.kay.com/SterlingSearch?storeId=10101&catalogId=10001&langId=-1&globalSearchText=14K%20yelllow%20gold%20hoops&searchText=14K%20yelllow%20gold%20hoops" target="_blank"><img class="logo" src="img/logos/kayJewelerLogo.png" /></a></li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.kmart.com/jewelry-gold-jewelry/b-20098" target="_blank"><img class="logo" src="img/logos/kmartLogo.png" /></a></li>
                      <li><a href="http://www.kohls.com/catalog/gold-jewelry.jsp?CN=4294735791+4294719765" target="_blank"><img class="logo" src="img/logos/kohlsLogo.png" /></a></li>
                      <li><a href="http://www1.macys.com/shop/jewelry-watches/gold?id=2904&edge=hybrid&cm_sp=us_hdr-_-jewelry-%26-watches-_-2904_gold" target="_blank"><img class="logo" src="img/logos/macysLogo.png" /></a></li>
                      <li><a href="http://www.qvc.com/jewelry/eternagold/_/N-mfluZ1z141by/c.html" target="_blank"><img class="logo" src="img/logos/qvcLogo.png" /></a></li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.samsclub.com/sams/search/searchResults.jsp?searchCategoryId=all&searchTerm=14K+yellow+gold+hoops&fromHome=no&_requestid=87561" target="_blank"><img class="logo" src="img/logos/samsLogo.png" /></a></li>
                      <li><a href="http://www.sears.com/jewelry-gold-jewelry/b-1020189?adCell=Jewelry_gold" target="_blank"><img class="logo" src="img/logos/searsLogo.png" /></a></li>
                      <li><a href="hhttp://www.walmart.com/browse/3891_1228254?cat_id=3891_1228254&grid=false&facet=brand:Simply%20Gold" target="_blank"><img class="logo" src="img/logos/walmartLogo.png" /></a></li>
                      <li><a href="http://www.jtv.com/gold-jewelry.html?mcid=PRM1802001" target="_blank"><img class="logo" src="img/logos/jtv.png" style="max-width: 100px;"/></a></li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.zales.com/earrings/view-all-earrings/family.jsp?fd=Gold&fd=Taxonomy&fd=No+Stone&categoryId=2109138&categoryId=2109138&ff=PAD&ff=Taxonomy&ff=PAD&cp=13337270.3263625&fg=&fg=&fg=Stone+Type&fv=Metal+Type%2FGold&fv=2109138&fv=Stone+Type%2FNo+Stone&kpc=1&page=1" target="_blank"><img class="logo" src="img/logos/zales-diamond.png" /></a></li>
                      <li><a href="http://www.mappins.com" target="_blank"><img class="logo" src="img/logos/mappins.png" /></a></li>
                      <li><a href="http://www.peoplesjewellers.com/family/index.jsp?page=1&cp=4425705&f=PAD%2fMetal+Type%2fGold&f=PAD%2fStone+Type%2fNo+Stone&categoryId=4357957" target="_blank"><img class="logo" src="img/logos/peoples.png" /></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" id="contests">
              <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">SOCIAL MEDIA CONTESTS</h2>
              </div>
            </div>

           
            <div class="row text-center social-media-section">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row hidden-xs hidden-sm">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px; margin-bottom: 15px;">
                      <div class="clearfix">
                        <p class="pull-left margin-left brownFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 5px; opacity: 0.8;">PINTEREST</p>
                      </div>
                      <div>  
                        <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="img/pinterest-banner.png" class="img-responsive margin-left" style="max-width: 420px;"/></a>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="clearfix">
                        <p class="pull-left yellowFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 25px;">INSTAGRAM</p>
                      </div>
                      <div>
                        <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="img/instagram-banner.png" class="img-responsive" style="max-width: 420px; margin-left: 20px;"/></a>
                      </div>
                    </div>
                  </div>
                  <div class="row hidden-xs hidden-md hidden-lg">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px;">
                      <div class="clearfix"><p class="pull-left margin-left brownFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 5px;">PINTEREST</p></div>
                      <div><a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="img/pinterest-banner-a.png" class="img-responsive margin-left" style="max-width: 320px;"/></a></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="clearfix"><p class="pull-left yellowFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 25px;">INSTAGRAM</p></div>
                      <div><a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="img/instagram-banner-a.png" class="img-responsive" style="max-width: 320px; margin-left: 30px;"/></a></div>
                    </div>
                  </div>

                  <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px;">
                      <div class="clearfix"><p class="pull-left margin-left brownFont hidden-xs" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 5px;">PINTEREST</p></div>
                      <div><a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="img/pinterest-banner-b.png" class="img-responsive margin-left" style="max-width: 500px; margin: auto; padding-bottom: 50px; padding-left: 15px; padding-right: 15px;"/></a></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="clearfix"><p class="pull-left yellowFont hidden-xs" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 25px;">INSTAGRAM</p></div>
                      <div><a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="img/instagram-banner-b.png" class="img-responsive" style="max-width: 500px; margin: auto;"/></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         

            <div class="row" id="interviews">
              <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">EXPERT INTERVIEWS</h2>
              </div>
            </div>

            
            <div class="container">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">

                  <cms:pages masterpage="blog.php" limit='1'>
                  <div class="row ">
                    <div class="col-xs-12 col-sm-5" style="padding-left: 0px;">

                      <cms:php>
                        $pageDate = "<cms:show k_page_date />";

                        $pageDate = substr($pageDate, 0, strpos($pageDate, ' '));

                        $postedDate = new DateTime($pageDate);
                        $currDate = new DateTime();

                        $interval = intval($postedDate->diff($currDate)->format('%a'));

                        if($interval <= 4) {
                          echo("<div class='homeNewTag'><img src='img/newTag.png' class='img-responsive'></div>");
                        } elseif($interval > 300) {
                          echo("<div class='homeOldYear'><strong>2014</strong></div>");
                        }
                      </cms:php>                      

                      <img src="<cms:show blog_main_image />" class="img-responsive expert-image hidden-xs" id="new-expert-image" style="width:100%; height:auto; "/>
                      <img src="<cms:show blog_main_image />" class="img-responsive expert-image hidden-sm hidden-md hidden-lg" id="new-expert-image" style="max-width: 300px; height:auto; margin-left: 20px;"/>
                    </div>
                    <div class="col-xs-12 col-sm-7" id="new-expert-text">
                      <p id="new-expert-name" class="new-expert-name"><cms:show name /></p>
                      <p class="expert-title brownFont" style="font-size: 13.75px; font-weight: 600;"><cms:show professional_title /></p>
                      <cms:excerpt count='32'><cms:show blog_bio_info /></cms:excerpt>

                      <div class="row">
                        <div class="col-xs-12 ">
                          <a href="<cms:show k_page_link />" class="btn btn-default btn-lg brown-button" style="background: #684f40; border-radius: 4px; border-color: #e8b90e; margin-top: 50px;">
                            READ INTERVIEW
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </cms:pages>
                  <div class="row">
                    <div class="col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                      <hr>
                    </div>
                  </div>
                  
                  <div class="row visible-xs">
                  <cms:pages masterpage="blog.php" limit='2' offset='1'>
                    <div class="col-xs-6 col-sm-12">
                      <div class="row">
                        <div class="col-xs-12 col-sm-3" style="padding-left: 0px;">
  
                        <cms:php>
                          $pageDate = "<cms:show k_page_date />";

                          $pageDate = substr($pageDate, 0, strpos($pageDate, ' '));

                          $postedDate = new DateTime($pageDate);
                          $currDate = new DateTime();

                          $interval = intval($postedDate->diff($currDate)->format('%a'));

                          if($interval <= 4) {
                            echo("<div class='homeNewTag'><img src='img/newTag.png' class='img-responsive'></div>");
                          } elseif($interval > 300) {
                            echo("<div class='homeOldYear'><strong>2014</strong></div>");
                          }
                        </cms:php>
  
                         <img src="<cms:show blog_main_image />" class="img-responsive expert-image hidden-xs"/>
                         <img src="<cms:show blog_main_image />" class="img-responsive expert-image hidden-sm hidden-md hidden-lg" style="max-width: 200px; padding-left: 20px;"/>
                        </div>
                        <div class="col-xs-12 col-sm-9 expert-text">
                          <h5 class="brownFont" style="font-weight: 400;"><strong><cms:show name /></strong></h5>
                          <em class="brownFont hidden-xs" style="font-weight: 600"><small><cms:show professional_title /></small></em>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <a href="<cms:show k_page_link />" class="btn btn-default btn-sm brown-button" style="background: #684f40; border-color: #684f40; border-radius: 4px; margin-top: 19px; color: white; margin-left: 15px;">
                              READ INTERVIEW
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </cms:pages>
                  </div>
                  
                  <cms:pages masterpage="blog.php" limit='2' offset='1'>
                  <div class="row hidden-xs">

                    <div class="col-sm-3" style="padding-left: 0px;">

                      <cms:php>
                        $pageDate = "<cms:show k_page_date />";

                        $pageDate = substr($pageDate, 0, strpos($pageDate, ' '));

                        $postedDate = new DateTime($pageDate);
                        $currDate = new DateTime();

                        $interval = intval($postedDate->diff($currDate)->format('%a'));

                        if($interval <= 4) {
                          echo("<div class='homeNewTag'><img src='img/newTag.png' class='img-responsive'></div>");
                        } elseif($interval > 300) {
                          echo("<div class='homeOldYear'><strong>POSTED 2014</strong></div>");
                        }
                      </cms:php> 

                      <img src="<cms:show blog_main_image />" class="img-responsive expert-image"/>
                    </div>
                    <div class="col-sm-9">
                      <h3 class="brownFont" style="font-weight: 400; padding-top: 28px;"><cms:show name /></h3>
                      <em class="brownFont hidden-xs" style="font-weight: 600"><cms:show professional_title /></em></span>
                      <br><br>
                      <p class="brownFont"><cms:excerpt count='32'><cms:show blog_bio_info /></cms:excerpt></p>
                      <a href="<cms:show k_page_link />" class="btn btn-default btn-sm yellow-button" style="background: #684f40; border-radius: 4px; margin-top: 25px; color: white">
                        READ INTERVIEW
                      </a>
                    </div>
                  </div>
                  </cms:pages>


                  <div class="row">
                    <div class="col-sm-12">
                      <p class="link  text-center brownFont" style="margin-bottom: 20px;"><a href="blog.php" class="brown-link"><u>ALL INTERVIEWS</u></a></p>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <div class="row" id="education">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">KARAT GOLD EDUCATION</h2>
               
                  <a href="gold-guide.php"><img src="img/education/education-home-1.jpg" class="img-responsive hidden-xs" id="education-image"/></a>
                  <a href="gold-guide.php"><img src="img/education/education-home-mobile-1.png" class="img-responsive hidden-sm hidden-md hidden-lg" id="education-image"/></a>
              
              </div>
            </div>


            <div class="row" id="trends">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">TREND OF THE WEEK</h2>
              </div>
            </div>

            <div class="container-fluid"> 
              <div class="row">
                <div class="col-sm-12 text-right" >
                  <cms:pages masterpage="trendboard.php" limit='1'>
                  <div class="hidden-xs">
                    <p id="week-number"><b>WEEK <cms:show week_number/>:</b></p>
                    <p class="yellowFont uppercase" style="text-transform: uppercase;" id="trends-subtitle"><cms:show week_title /></p>
                  </div>
                  <a href="<cms:show trend_url />" target="_blank"><img src="<cms:show trend_image />" class="img-responsive hidden-xs" id="trends-image"/></a>
                  <a href="<cms:show trend_url />"><img src="<cms:show mobile_trend_image />" class="img-responsive hidden-sm hidden-md hidden-lg" id="trends-image" style="max-width: 400px"/></a>
                  <p class="link" id="trends-link" style="margin-bottom: 20px;"><a href="<cms:show trend_url />" target="_blank" class="brown-link"><u>VIEW THIS WEEKS'S TREND</u></a></p>
                  </cms:pages>
                </div>
              </div>
            </div> 


            <div class="row" id="about">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">ABOUT</h2>
              </div>
            </div>
            
            <div class="container-fluid"> 
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="about">  
                    <p class="about-subtitle yellowFont">Celebrate Your Love For Gold!</p>

                    <p>May is time for Mother's Day, graduations, bridal showers, weddings and anniversaries. It also marks the beginning of our 11th annual May is Gold Month event! This year's event offers more ways than ever before to show your&nbsp;love&nbsp;of&nbsp;Gold:</p>

                    <p><b>- Win $1000 Gold Shopping Spree from one of participating retailers</b> <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />" class="brownFont"><u>Learn&nbsp;More</u></a><br>
                    <b>- Check out the latest in gold trends and jewelry fashion<br>
                    - Educate yourself about gold by getting expert insight<br> 
                    - Share your gold style on Instagram and get a chance to win a 14k Gold Bracelet!</b> <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />" class="brownFont"><u>Learn&nbsp;More</u></a><br>
                    <b>- Discover new gold looks on Pinterest and get a chance to win 14k Gold Earrings!</b> <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />" class="brownFont"><u>Learn&nbsp;More</u></a><br>
                    <b>- Get an email update with the most current and interesting from May Is Gold Month</b></p> 
                       
                    <p class="about-subtitle yellowFont hidden-xs">Become an Insider</p>
                    <p class="hidden-xs">Receive a weekly update with the latest from May is Gold Month.</p>
                    <div class="row hidden-xs">
                      <div class="col-md-12">
                        <div class="input-group input-group-lg text-center" style="width: 500px; margin: auto" >

                          <div id="mc_embed">
                            <form action="//richlinegroup.us2.list-manage.com/subscribe/post?u=b6f74687c0d1b0a93dca80e4c&amp;id=94c40d7bcf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
                              <div id="mc_embed_signup_scroll" class="form-group form-group-lg">
                                <div class="col-sm-10 col-md-8">
                                  <input type="email" value="" name="EMAIL" class="form-control email input-lg col-lg-5" id="mce-EMAIL" placeholder="email address"  data-toggle="tooltip" data-placement="bottom" title="**Insiders will automatically be entered to win" required>
                                </div>
                                <div style="position: absolute; left: -5000px;"><input type="text" name="b_b6f74687c0d1b0a93dca80e4c_94c40d7bcf" tabindex="-1" value=""></div>
                                <input type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button btn-lg brownBackground yellowFont" style="right: 3.8em; position: absolute; border: 0; border-radius: 0;">
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <p class="brownFont note hidden-xs" style="padding-bottom: 40px;">**Insiders will automatically be entered to win a $1000 Gold Jewelry shopping spree!</p>
                    </p>
                  </div>  
                </div>
              </div>
            </div>
            
          </div>
        
          <?php include('footer.php'); ?>
          
          <script>
          vs_lightbox_start_off = true;

          if(!localStorage.getItem('vsPopup')){
            
            window.setTimeout(function(){
              vs_lightbox_on();
              localStorage.setItem('vsPopup', true);

            }, 5000);    
          }
          </script>

          <script type="text/javascript" src="https://www.viralsweep.com/lightbox-widget/wid-4685aaab-17128.js"></script>

        </div> 

</body>
</html>
<?php COUCH::invoke(); ?>
