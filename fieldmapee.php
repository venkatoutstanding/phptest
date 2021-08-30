<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
	
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/profile.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
<div class="wrapper">
    <?php include("header.php"); ?>

    <!--=== Profile ===-->
    <div class="container content profile">
    	<div class="row">
            
            <!-- Profile Content -->
            <div class="col-md-12">
                <div class="profile-body">
                    <!--Service Block v3-->
                    <div class="row margin-bottom-10">
                        <div class="col-sm-6 sm-margin-bottom-20">
                            <div class="service-block-v3 service-block-u">
                                <i class="icon-users"></i>
                                <span class="service-heading">Overall Visits</span>
                                <span class="counter">52,147</span>

                                <div class="clearfix margin-bottom-10"></div>

                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Last Week</small>
                                        <h4 class="counter">1,385</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Last Month</small>
                                        <h4 class="counter">6,048</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">67%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 67%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="67" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <small>11% less <strong>than last month</strong></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="service-block-v3 service-block-blue">
                                <i class="icon-screen-desktop"></i>
                                <span class="service-heading">Overall Page Views</span>
                                <span class="counter">324,056</span>

                                <div class="clearfix margin-bottom-10"></div>

                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Last Week</small>
                                        <h4 class="counter">26,904</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Last Month</small>
                                        <h4 class="counter">124,766</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">89%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 89%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="89" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <small>15% higher <strong>than last month</strong></small>
                                </div>
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!--End Service Block v3-->

                    <hr>
					
					
					<div class="cube-portfolio">
						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
							<div data-filter=".print" class="cbp-filter-item"> Products </div>
							<div data-filter=".web-design" class="cbp-filter-item"> Web Design </div>
							<div data-filter=".motion" class="cbp-filter-item"> Motion </div>
						</div><!--/end Filters Container-->

						<div id="grid-container" class="cbp-l-grid-gallery">
							<div class="cbp-item print motion">
								<a href="home/assets/ajax/project1.html" class="cbp-caption cbp-singlePageInline"
								   data-title="Fieldmapee<br>by GeoSymmetrik">
									<div class="cbp-caption-defaultWrap">
										<img src="home/assets/img/portfolio/1.jpg" alt="">
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignLeft">
											<div class="cbp-l-caption-body">
												<div class="cbp-l-caption-title">Fieldmapee</div>
												<div class="cbp-l-caption-desc">by GeoSymmetrik</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="cbp-item web-design">
								<a href="home/assets/ajax/project2.html" class="cbp-caption cbp-singlePageInline"
								   data-title="Bolt UI<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="home/assets/img/portfolio/1.jpg" alt="">
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignLeft">
											<div class="cbp-l-caption-body">
												<div class="cbp-l-caption-title">Fieldmapee</div>
												<div class="cbp-l-caption-desc">by GeoSymmetrik</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="cbp-item print motion">
								<a href="home/assets/ajax/project1.html" class="cbp-caption cbp-singlePageInline"
								   data-title="Fieldmapee<br>by GeoSymmetrik">
									<div class="cbp-caption-defaultWrap">
										<img src="home/assets/img/portfolio/1.jpg" alt="">
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignLeft">
											<div class="cbp-l-caption-body">
												<div class="cbp-l-caption-title">Fieldmapee</div>
												<div class="cbp-l-caption-desc">by GeoSymmetrik</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="cbp-item web-design">
								<a href="home/assets/ajax/project2.html" class="cbp-caption cbp-singlePageInline"
								   data-title="Bolt UI<br>by Tiberiu Neamu">
									<div class="cbp-caption-defaultWrap">
										<img src="home/assets/img/portfolio/1.jpg" alt="">
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignLeft">
											<div class="cbp-l-caption-body">
												<div class="cbp-l-caption-title">Fieldmapee</div>
												<div class="cbp-l-caption-desc">by GeoSymmetrik</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>

						
					</div>
       
					
					<hr>
					
                    <div class="row margin-bottom-20">
                        <!--Profile Post-->
                        <div class="col-sm-6">
                            <div class="panel panel-profile no-bg">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i>Notes</h2>
                                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                </div>
                                <div id="scrollbar" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
                                    <div class="profile-post color-one">
                                        <span class="profile-post-numb">01</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Creative Blog</a></h3>
                                            <p>How to market yourself as a freelance designer</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-two">
                                        <span class="profile-post-numb">02</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Codrops Collective #117</a></h3>
                                            <p>Web Design &amp; Development News</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-three">
                                        <span class="profile-post-numb">03</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Sketch Toolbox</a></h3>
                                            <p>Basic prototype of a package manager for Sketch</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-four">
                                        <span class="profile-post-numb">04</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Amazing Portfolio</a></h3>
                                            <p>Create a free online portfolio lookbook with Readz</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-five">
                                        <span class="profile-post-numb">05</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Discover New Features</a></h3>
                                            <p>More than 100+ amazing add-ons coming soon...</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-six">
                                        <span class="profile-post-numb">06</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Corporation Plans</a></h3>
                                            <p>Discussion of new corporation plans</p>
                                        </div>
                                    </div>
                                    <div class="profile-post color-seven">
                                        <span class="profile-post-numb">07</span>
                                        <div class="profile-post-in">
                                            <h3 class="heading-xs"><a href="#">Project Updates</a></h3>
                                            <p>New features of coming update</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Profile Post-->

                        <!--Profile Event-->
                        <div class="col-sm-6 md-margin-bottom-20">
                            <div class="panel panel-profile no-bg">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i>Upcoming Implementation</h2>
                                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                                </div>
                                <div id="scrollbar2" class="panel-body no-padding mCustomScrollbar" data-mcs-theme="minimal-dark">
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>25</span>
                                            <small>05, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">GitHub seminars in Japan.</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>31</span>
                                            <small>06, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">Bootstrap Update</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>07</span>
                                            <small>08, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">Apple Conference</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>22</span>
                                            <small>10, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">Backend Meeting</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>14</span>
                                            <small>11, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">Google Conference</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                    <div class="profile-event">
                                        <div class="date-formats">
                                            <span>05</span>
                                            <small>12, 2014</small>
                                        </div>
                                        <div class="overflow-h">
                                            <h3 class="heading-xs"><a href="#">FontAwesome Update</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Profile Event-->
                    </div><!--/end row-->

                    <hr>



                   
                </div>
            </div>
            <!-- End Profile Content -->
        </div>
    </div><!--/container-->
    <!--=== End Profile ===-->

    <?php include("footer.php"); ?>
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initScrollBar();
        Datepicker.initDatepicker();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>