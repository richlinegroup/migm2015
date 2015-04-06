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
            <div id="mainCarousel" class="carousel slide" data-ride="carousel" >
              <ol class="carousel-indicators" >
                <li data-target="mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="mainCarousel" data-slide-to="1"></li>
                <li data-target="mainCarousel" data-slide-to="2"></li>
                <li data-target="mainCarousel" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox" >
                <div class="item active" >
                  <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />"><img src="img/migmbanners2015a.jpg" alt="" class="slide"/></a>
                </div>
                <div class="item">
                  <img src="img/migmbanners2015c.jpg" alt="" class="slide"/>
                </div>
                <div class="item">
                  <img src="img/migmbanners2015b.jpg" alt="" class="slide"/>
                </div>
                <div class="item">
                  <img src="img/migmbanners2015d.jpg" alt="" class="slide"/>
                </div>
              </div>
            </div>


            <div class="row" id="retailers">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">PARTICIPATING RETAILERS</h2>
              </div>
            </div>
            
            <div class="container hidden-xs">
              <div class="row logos-top-row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <div class="center-block">
                    <a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&amp;node=3246894011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=center-8&amp;pf_rd_r=0T592AMJ47KBGDR88BSV&amp;pf_rd_t=101&amp;pf_rd_p=1325992762&amp;pf_rd_i=3367581" target="_blank"><img class="logo" src="img/logos/amazonLogo.png" /></a>
                    <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a>
                    <a href="http://www.fingerhut.com/category/Jewelry-Watches/Gold-Jewelry/Mcatp/cat_8/9263.uts" target="_blank"><img class="logo" src="img/logos/fingerhutLogo.png" /></a>
                    <a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1" target="_blank"><img class="logo" src="img/logos/helzbergLogo.png" /></a>
                    <a href="http://www.hsn.com/shop/gold-jewelry-hoop/j00141?take=35&amp;facet=4231" target="_blank"><img class="logo" src="img/logos/hsnLogo.png" /></a>
                    <a href="http://www.jcpenney.com/dotcom/jsp/search/results.jsp?fromSearch=true&amp;Ntt=14K+gold+hoops&amp;ruleZoneName=XGNSZone&amp;grView=&amp;_requestid=962465" target="_blank"><img class="logo" src="img/logos/jcpLogo.png" /></a>
                    <a href="http://www.kay.com/SterlingSearch?storeId=10101&amp;catalogId=10001&amp;langId=-1&amp;globalSearchText=14K%20yelllow%20gold%20hoops&amp;searchText=14K%20yelllow%20gold%20hoops" target="_blank"><img class="logo" src="img/logos/kayJewelerLogo.png" /></a>
                  </div>  
                </div>
<!--                 <div class="col-md-1">
                </div> -->
              </div>  
              <div class="row logos-bottom-row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <a href="http://www.kmart.com/jewelry-gold-jewelry/b-20098" target="_blank"><img class="logo" src="img/logos/kmartLogo.png" /></a>
                  <a href="http://www.kohls.com/catalog/gold-jewelry.jsp?CN=4294735791+4294719765" target="_blank"><img class="logo" src="img/logos/kohlsLogo.png" /></a>
                  <a href="http://www1.macys.com/shop/jewelry-watches/gold?id=2904&edge=hybrid&cm_sp=us_hdr-_-jewelry-%26-watches-_-2904_gold" target="_blank"><img class="logo" src="img/logos/macysLogo.png" /></a>
                  <a href="http://www.qvc.com/May+Is+Gold+Month.content.htmlmetaeSpot=1001%7C1001" target="_blank"><img class="logo" src="img/logos/qvcLogo.png" /></a>
                  <a href="http://www.samsclub.com/sams/search/searchResults.jsp?searchCategoryId=all&amp;searchTerm=14K+yellow+gold+hoops&amp;fromHome=no&amp;_requestid=87561" target="_blank"><img class="logo" src="img/logos/samsLogo.png" /></a>
                  <a href="http://www.sears.com/search=14k+yellow+gold+hoops?redirectType=CAT_REC_PRED&amp;viewItems=50&amp;autoRedirect=true&amp;storeId=10153&amp;levels=Jewelry" target="_blank"><img class="logo" src="img/logos/searsLogo.png" /></a>
                  <a href="http://www.walmart.com/cp/1224930?povid=cat3891-env528539-moduleB050114-lLinkZone2_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/walmartLogo.png" /></a>
                </div>
              </div>
              <div class="row" style="padding-left: 50px; padding-bottom: 30px;">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&amp;node=3246894011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=center-8&amp;pf_rd_r=0T592AMJ47KBGDR88BSV&amp;pf_rd_t=101&amp;pf_rd_p=1325992762&amp;pf_rd_i=3367581" target="_blank"><img class="logo" src="img/logos/zales-diamond.png"/></a>
                  <a href="http://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1" target="_blank"><img class="logo" src="img/logos/mappins.svg"/></a>
                  <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/peoples.png" /></a>
                  <a href="http://www.fingerhut.com/category/Jewelry-Watches/Gold-Jewelry/Mcatp/cat_8/9263.uts" target="_blank"><img class="logo" src="img/logos/zale-jewelers.png" /></a>
                  <a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1" target="_blank"><img class="logo" src="img/logos/signet.png" /></a>
                  <a href="http://www.hsn.com/shop/gold-jewelry-hoop/j00141?take=35&amp;facet=4231" target="_blank"><img class="logo" src="img/logos/jtv.svg" /></a>
                  <a href="http://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1" target="_blank"><img class="logo" src="img/logos/bjLogo.png" /></a>
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
                      <li>
                        <a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&amp;node=3246894011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=center-8&amp;pf_rd_r=0T592AMJ47KBGDR88BSV&amp;pf_rd_t=101&amp;pf_rd_p=1325992762&amp;pf_rd_i=3367581" target="_blank"><img class="logo" src="img/logos/amazonLogo.png" /></a>
                      </li>
                      <li>
                        <a href="http://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1" target="_blank"><img class="logo" src="img/logos/bjLogo.png" /></a>                   
                      </li>
                      <li>
                        <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a>
                      </li>
                      <li>
                        <a href="http://www.fingerhut.com/category/Jewelry-Watches/Gold-Jewelry/Mcatp/cat_8/9263.uts" target="_blank"><img class="logo" src="img/logos/fingerhutLogo.png" /></a>
                      </li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li>
                        <a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1" target="_blank"><img class="logo" src="img/logos/helzbergLogo.png" /></a>
                      </li>
                      <li>
                        <a href="http://www.hsn.com/shop/gold-jewelry-hoop/j00141?take=35&amp;facet=4231" target="_blank"><img class="logo" src="img/logos/hsnLogo.png" /></a>                   
                      </li>
                      <li>
                        <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a>
                      </li>
                      <li>
                        <a href="http://www.kay.com/SterlingSearch?storeId=10101&amp;catalogId=10001&amp;langId=-1&amp;globalSearchText=14K%20yelllow%20gold%20hoops&amp;searchText=14K%20yelllow%20gold%20hoops" target="_blank"><img class="logo" src="img/logos/kayJewelerLogo.png" /></a>
                      </li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.kmart.com/jewelry-gold-jewelry/b-20098" target="_blank"><img class="logo" src="img/logos/kmartLogo.png" /></a></li>
                      <li><a href="http://www.kohls.com/catalog/gold-jewelry.jsp?CN=4294735791+4294719765" target="_blank"><img class="logo" src="img/logos/kohlsLogo.png" /></a></li>
                      <li><a href="http://www1.macys.com/shop/jewelry-watches/gold?id=2904&edge=hybrid&cm_sp=us_hdr-_-jewelry-%26-watches-_-2904_gold" target="_blank"><img class="logo" src="img/logos/macysLogo.png" /></a></li>
                      <li><a href="http://www.qvc.com/May+Is+Gold+Month.content.htmlmetaeSpot=1001%7C1001" target="_blank"><img class="logo" src="img/logos/qvcLogo.png" /></a></li>
                    </ul>
                  </div>

                  <div class="item">
                    <ul class="list-inline text-center">
                      <li><a href="http://www.samsclub.com/sams/search/searchResults.jsp?searchCategoryId=all&amp;searchTerm=14K+yellow+gold+hoops&amp;fromHome=no&amp;_requestid=87561" target="_blank"><img class="logo" src="img/logos/samsLogo.png" /></a></li>
                      <li><a href="http://www.sears.com/search=14k+yellow+gold+hoops?redirectType=CAT_REC_PRED&amp;viewItems=50&amp;autoRedirect=true&amp;storeId=10153&amp;levels=Jewelry" target="_blank"><img class="logo" src="img/logos/searsLogo.png" /></a></li>
                      <li><a href="http://www.walmart.com/cp/1224930?povid=cat3891-env528539-moduleB050114-lLinkZone2_MayIsGoldMonth" target="_blank"><img class="logo" src="img/logos/walmartLogo.png" /></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" id="sweepstakes">
              <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">SOCIAL MEDIA SWEEPSTAKES</h2>
              </div>
            </div>

           
            <div class="row text-center social-media-section">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row hidden-xs hidden-sm">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px; margin-bottom: 15px;">
                      <p class="pull-left margin-left brownFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 5px;">PINTEREST</p>
                      <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />"><img src="img/pinterest-banner.png" class="img-responsive margin-left" style="max-width: 420px;"/></a>
                      <p class="pinterest-contest-text">Enter now for a chance to win <b>14K&nbsp;gold&nbsp;earrings!</b><br><small>(valued at $950)</small></p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p class="pull-left yellowFont" style="font-weight: 600; font-size: 24px; padding-bottom: 5px; padding-left: 25px;">INSTAGRAM</p>
                      <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />"><img src="img/instagram-banner.png" class="img-responsive" style="max-width: 420px; margin-left: 20px;"/></a>
                      <p class="instagram-contest-text">Enter now for a chance to win a <b> 14K&nbsp;gold&nbsp;bangle!</b><br><small>(valued at $1500)</small></p>
                    </div>
                  </div>
                  <div class="row hidden-md hidden-lg">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px;">
                      <p>PINTEREST CONTEST</p>
                      <img src="img/pinterest-banner.png" class="img-responsive margin-left" style="max-width: 320px; border: solid 1px silver;"/>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>INSTAGRAM CONTEST</p>
                      <img src="img/instagram-banner.png" class="img-responsive" style="max-width: 320px; margin-left: 30px; border: solid 1px silver;"/>
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
                      <img src="<cms:show blog_main_image />" class="img-responsive expert-image" id="new-expert-image" style="width:100%; height:auto;"/>
                    </div>
                    <div class="col-xs-12 col-sm-7" id="new-expert-text">
                      <p id="new-expert-name" class="new-expert-name"><cms:show name /></p>
                      <p class="expert-title brownFont" style="font-size: 13.75px;"><cms:show professional_title /></p>
                      <cms:excerpt count='32'><cms:show blog_bio_info /></cms:excerpt>

                      <div class="row">
                        <div class="col-xs-12 ">
                          <a href="<cms:show k_page_link />" class="btn btn-default btn-lg yellow-button" style="background: #e8b90e; border-radius: 0px; border-color: #e8b90e; margin-top: 50px;">
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
                         <img src="<cms:show blog_main_image />" class="img-responsive expert-image"/>
                        </div>
                        <div class="col-xs-12 col-sm-9 expert-text">
                          <h5 class="yellowFont" style="font-weight: 400;"><strong><cms:show name /></strong></h5>
                          <em class="brownFont"><small><cms:show professional_title /></small></em>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <a href="<cms:show k_page_link />" class="btn btn-default btn-sm yellow-button" style="background: #e8b90e; border-radius: 0px; border-color: #e8b90e; margin-top: 19px;">
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
                      <img src="<cms:show blog_main_image />" class="img-responsive expert-image"/>
                    </div>
                    <div class="col-sm-9">
                      <h3 class="yellowFont" style="font-weight: 400; padding-top: 28px;"><cms:show name /></h3>
                      <em class="brownFont" style="font-weight: 300"><cms:show professional_title /></em></span>
                      <br><br>
                      <p class="brownFont"><cms:excerpt count='32'><cms:show blog_bio_info /></cms:excerpt></p>
                      <a href="<cms:show k_page_link />" class="btn btn-default btn-sm yellow-button" style="background: #e8b90e; border-radius: 0px; border-color: #e8b90e; margin-top: 25px;">
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
                <img src="img/education-banner.jpg" class="img-responsive" id="education-image"/>
                <p class="education-title whiteFont">HOW TO BUY GOLD JEWELRY?</p>

                <p class="education-quote whiteFont hidden-xs">“...purchasing gold jewelry can be a delightful experience... Because this special purchase is an investment that can last a lifetime, learning how to buy gold jewelry will help you find quality pieces that will bring years of enjoyment.”</p>

                <a href="gold-guide.php" class="whiteFont education-link"><u>READ ARTICLE</u></a>

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
                  <div>
                    <p id="week-number"><b>WEEK 1:</b></p>
                    <p class="yellowFont" id="trends-subtitle">BANGLES</p>
                  </div>
                  <a href="#"><img src="img/trends-images/trend-banner-1.jpg" class="img-responsive" id="trends-image"/></a>
                  <p class="link" id="trends-link" style="margin-bottom: 20px;"><a href="#" class="brown-link"><u>VIEW THIS WEEKS'S TREND</u></a></p>
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

                    <p><b>- Win $1000 Gold Shopping Spree from one of participating retailers</b> <a href="<cms:link masterpage='socialcontest.php' page='main-contest' />" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Check out the latest in gold trends and jewelry fashion<br>
                    - Educate yourself about gold by getting expert insight<br> 
                    - Share your gold style on Instagram and get a chance to win a 14k Gold Bracelet!</b> <a href="<cms:link masterpage='socialcontest.php' page='instagram-contest' />" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Discover new gold looks on Pinterest and get a chance to win 14k Gold Earrings!</b> <a href="<cms:link masterpage='socialcontest.php' page='pinterest-contest' />" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Get an email update with the most current and interesting from May Is Gold Month</b></p> 
                       
                    <p class="about-subtitle yellowFont">Become an Insider</p>
                    <p>Receive a weekly update with the latest from May is Gold Month.</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group input-group-lg text-center" style="width: 500px; margin: auto" >
                          <input type="email" class="form-control email-field-footer" placeholder="Enter Email Address" style="height: 60px; border: 1px solid #684f40; border-radius: 0px; font-size: 16px; margin-top: 15px;">
                          <span class="input-group-btn">
                            <button class="btn btn-default sign-up-footer yellowFont brown-button" type="button" style="height: 60px; border: 1px solid #684f40; border-radius: 0px; font-size: 16px; margin-top: 15px; background: #684f40">SIGN UP</button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <p class="brownFont note" style="padding-bottom: 40px;">**Insiders will automatically be entered to win a $1000 Gold Jewelry shopping spree!</p>
                    </p>
                  </div>  
                </div>
              </div>
            </div>
            
          </div>
        
          <?php include('footer.php'); ?>
        </div>    
</body>
</html>
<?php COUCH::invoke(); ?>
