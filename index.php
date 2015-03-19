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

          <div class="container noPadding dropShadowMain">
            <div id="mainCarousel" class="carousel slide" data-ride="carousel" >
              <ol class="carousel-indicators" >
                <li data-target="mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="mainCarousel" data-slide-to="1"></li>
                <li data-target="mainCarousel" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox" >
                <div class="item active" >
                  <img src="img/main-banner-1.png" alt="" class="slide"/>
                </div>
                <div class="item">
                  <img src="img/main-banner-1.png" alt="" class="slide"/>
                </div>
                <div class="item">
                  <img src="img/main-banner-1.png" alt="" class="slide"/>
                </div>
              </div>
            </div>


           
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">PARTICIPATING RETAILERS</h2>
              </div>
            </div>

            <div class="container">
              <div class="row logos-top-row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                  <a href="http://www.amazon.com/b/ref=amb_link_357792882_10?ie=UTF8&amp;node=3246894011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=center-8&amp;pf_rd_r=0T592AMJ47KBGDR88BSV&amp;pf_rd_t=101&amp;pf_rd_p=1325992762&amp;pf_rd_i=3367581"><img class="logo" src="img/logos/amazonLogo.png" /></a>
                  <a href="http://www.bjs.com/gold-jewelry/gold-earrings.category.28009.26002.2003492.1"><img class="logo" src="img/logos/bjLogo.png" /></a>
                  <a href="http://www.fredmeyerjewelers.com/mayisgoldmonth?CID=2L_MayIsGoldMonth"><img class="logo" src="img/logos/fredMeyerLogo.png" /></a>
                  <a href="http://www.fingerhut.com/category/Jewelry-Watches/Gold-Jewelry/Mcatp/cat_8/9263.uts"><img class="logo" src="img/logos/fingerhutLogo.png" /></a>
                  <a href="http://www.helzberg.com/category/collections/endura+gold.do?nType=1"><img class="logo" src="img/logos/helzbergLogo.png" /></a>
                  <a href="http://www.hsn.com/shop/gold-jewelry-hoop/j00141?take=35&amp;facet=4231"><img class="logo" src="img/logos/hsnLogo.png" /></a>
                  <a href="http://www.jcpenney.com/dotcom/jsp/search/results.jsp?fromSearch=true&amp;Ntt=14K+gold+hoops&amp;ruleZoneName=XGNSZone&amp;grView=&amp;_requestid=962465"><img class="logo" src="img/logos/jcpLogo.png" /></a>
                  <a href="http://www.kay.com/SterlingSearch?storeId=10101&amp;catalogId=10001&amp;langId=-1&amp;globalSearchText=14K%20yelllow%20gold%20hoops&amp;searchText=14K%20yelllow%20gold%20hoops"><img class="logo" src="img/logos/kayJewelerLogo.png" /></a>
                </div>
                <div class="col-md-1">
                </div>
              </div>  
              <div class="row logos-bottom-row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                  <a href="http://www.kmart.com/jewelry-gold-jewelry/b-20098"><img class="logo" src="img/logos/kmartLogo.png" /></a>
                  <a href="http://www.kohls.com/catalog/gold-jewelry.jsp?CN=4294735791+4294719765"><img class="logo" src="img/logos/kohlsLogo.png" /></a>
                  <a href="http://www1.macys.com/shop/jewelry-watches/gold?id=2904&edge=hybrid&cm_sp=us_hdr-_-jewelry-%26-watches-_-2904_gold"><img class="logo" src="img/logos/macysLogo.png" /></a>
                  <a href="http://www.qvc.com/May+Is+Gold+Month.content.htmlmetaeSpot=1001%7C1001"><img class="logo" src="img/logos/qvcLogo.png" /></a>
                  <a href="http://www.samsclub.com/sams/search/searchResults.jsp?searchCategoryId=all&amp;searchTerm=14K+yellow+gold+hoops&amp;fromHome=no&amp;_requestid=87561"><img class="logo" src="img/logos/samsLogo.png" /></a>
                  <a href="http://www.sears.com/search=14k+yellow+gold+hoops?redirectType=CAT_REC_PRED&amp;viewItems=50&amp;autoRedirect=true&amp;storeId=10153&amp;levels=Jewelry"><img class="logo" src="img/logos/searsLogo.png" /></a>
                  <a href="http://www.walmart.com/cp/1224930?povid=cat3891-env528539-moduleB050114-lLinkZone2_MayIsGoldMonth"><img class="logo" src="img/logos/walmartLogo.png" /></a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">SOCIAL MEDIA SWEEPSTAKES</h2>
              </div>
            </div>

           
            <div class="row text-center social-media-section">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <img src="img/pinterest-banner.png" class="img-responsive" />
              </div>

              <div class="col-xs-12 col-sm-6 col-md-6">
                <img src="img/instagram-banner.png" class="img-responsive" />
              </div>
            </div>
         

            <div class="row">
              <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">EXPERT INTERVIEWS</h2>
              </div>
            </div>

            
            <div class="container">
              <cms:pages masterpage="blog.php" limit='1'>
              <div class="row ">
                <div class="col-xs-9 col-sm-5">
                  <a href="#"><img src="<cms:show blog_main_image />" class="img-responsive expert-image" id="new-expert-image" style="width:100%; height:auto;"/></a>
                </div>
                <div class="col-xs-12 col-sm-7" id="new-expert-text">
                  <p id="new-expert-name"><cms:show name /></p>
                  <p class="expert-title"><cms:show professional_title /></p>
                  <cms:excerpt count='140'><cms:show interview_questions /></cms:excerpt>
                  <a href="<cms:show k_page_link />" class="btn btn-default btn-lg dropShadowButton" style="background: #e8b90e; border-radius: 0px; border-color: #e8b90e; margin-top: 70px;">
                    READ INTERVIEW
                  </a>
                </div>
              </div>
              </cms:pages>
              <div class="row">
                <div class="col-xs-12">
                  <hr>
                </div>
              </div>

              <cms:pages masterpage="blog.php" limit='2' offset='1'>
              <div class="row">
                <div class="col-xs-6 col-sm-3">
                  <a href="#"><img src="<cms:show blog_main_image />" class="img-responsive expert-image"/></a>
                </div>
                <div class="col-sm-9 expert-text">
                  <p id="new-expert-name"><cms:show name /></p>
                  <p class="expert-title"><cms:show professional_title /></p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  <a href="<cms:show k_page_link />" class="btn btn-default btn-sm dropShadowButton" style="background: #e8b90e; border-radius: 0px; border-color: #e8b90e; margin-top: 19px">
                    READ INTERVIEW
                  </a>
                </div>
              </div>
              </cms:pages>
              <div class="row">
                <div class="col-sm-12">
                  <p class="link text-center"><a href="blog.php"><u>ALL INTERVIEWS</u></a></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">GOLD EDUCATION</h2>
                <img src="img/education-banner.png" class="img-responsive" id="education-image"/>
                <p class="education-title whiteFont">HOW TO BUY GOLD JEWELRY?</p>
                <p class="education-quote whiteFont">“...purchasing gold jewelry can be a delightful experience... Because this special purchase is an investment that can last a lifetime, learning how to buy gold jewelry will help you find quality pieces that will bring years of enjoyment.”</p>
                <a href="#" class="whiteFont education-link"><u>READ ARTICLE</u></a>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">TREND OF THE WEEK</h2>
              </div>
            </div>

            <div class="container-fluid"> 
              <div class="row">
                <div class="col-sm-12 text-right">
             
                  <p id="week-number"><b>WEEK 1:</b></p>
                  <p class="yellowFont" id="trends-subtitle">BANGLES</p>

                  <a href="#"><img src="img/trend-banner.png" class="img-responsive" id="trends-image"/></a>
                  <p class="link" id="trends-link"><a href="#"><u>VIEW THIS WEEKS'S TREND</u></a></p>
                </div>
              </div>
            </div> 

            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="heading brownFont yellowBackground">ABOUT</h2>
              </div>
            </div>

            <div class="container-fluid"> 
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="about">  
                    <p class="about-subtitle yellowFont">Celebrate Your Love For Gold!</p>

                    <p>May is time for Mother's Day, graduations, bridal showers, weddings and anniversaries. It also marks the beginning of our 11th annual May is Gold Month event! This year's event offers more ways than ever before to show your love of Gold:</p>

                    <p><b>- Win $1000 Gold Shopping Spree from one of participating retailers</b> <a href="#" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Check out the latest in gold trends and jewelry fashion<br>
                    - Educate yourself about gold by getting expert insight<br> 
                    - Share your gold style on Instagram and get a chance to win a 14k Gold Bracelet!</b> <a href="#" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Discover new gold looks on Pinterest and get a chance to win 14k Gold Earrings!</b> <a href="#" class="brownFont"><u>Learn More</u></a><br>
                    <b>- Get an email update with the most current and interesting from May Is Gold Month</b></p> 
                       
                    <p class="about-subtitle yellowFont">Become an Insider</p>
                    <p>Receive a weekly update with the latest from May is Gold Month.</p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group input-group-lg text-center" style="width: 500px; margin: auto" >
                          <input type="email" class="form-control email-field-footer" placeholder="Enter Email Address" style="height: 60px; border: 1px solid #684f40; border-radius: 0px; font-size: 16px; margin-top: 15px;">
                          <span class="input-group-btn">
                            <button class="btn btn-default sign-up-footer yellowFont" type="button" style="height: 60px; border: 1px solid #684f40; border-radius: 0px; font-size: 16px; margin-top: 15px; background: #684f40">SIGN UP</button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <p class="brownFont note">**Insiders will automatically be entered to win a $1000 Gold Jewelry shopping spree!</p>
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
