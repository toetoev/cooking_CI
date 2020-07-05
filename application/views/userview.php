<!doctype html>
<html class="no-js" lang="">
    <head>
    	<base href="<?php echo base_url(); ?>">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tasty Food</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?=base_url('frontend/assets/images/favicon.ico')?>">

		<link rel="stylesheet" type="text/css" href="<?=base_url('frontend/assets/css/navmenu/styles.css')?>">

        <!--Google fonts Link-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/skills/progressbar.css')?>">
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/skills/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/fonticons.css')?>">
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/bootstrap.min.css')?>">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/teamslide.css')?>">
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/plugins.css')?>">

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/style.css')?>">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?=base_url('frontend/assets/css/responsive.css')?>">

        <script src="<?=base_url('frontend/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <img src="frontend/assets/images/logo.png"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home" class="nav-link">Home</a></li>
                                            <li><a href="#about" class="nav-link"> About us</a></li> 
                                            <li><a href="#portfolio">Recipes</a></li>          
                                            <li><a href="#contact">Contact</a></li>
                                            <li><a href="<?=base_url('logout')?>">Logout</a></li>

                                            <li>
                                                <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fa fa-search"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <form class="navbar-form" role="search">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>


                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->

        <section id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>TASTY FOOD</h1>
                                        <p class="subtitle">How to make a meal?</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-primary">LEARN MORE</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>COOKING SCHOOL FREE PSD TEMPLATE</h1>
                                        <p class="subtitle">graphicsdrawer.com</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-primary">LEARN MORE</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>COOKING SCHOOL FREE PSD TEMPLATE</h1>
                                        <p class="subtitle">graphicsdrawer.com</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-primary">LEARN MORE</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="main_about sections">
                        <div class="head_title text-center">
                            <h2>About us</h2>
                            <div class="separator"></div>
                        </div>

                        <div class="main_about_content_area">
                            <div class="single_about_left_img">
                                <img src="frontend/assets/images/ab.jpg" alt="" />
                            </div> 


                            <!-- bar 1 -->
                            <div class="col-sm-8 col-sm-offset-4">
                                <div class="single_about_right_content">
                                    <div class="demo4">
                                        <div class="right_single_about_skill">
                                            <div class="right_about_top_cotent">
                                                <div class="right_about_top_img">
                                                    <img src="assets/images/s_ab1.png" alt="" />
                                                </div>
                                                <div class="right_about_top_content">
                                                    <h3>What we offer?</h3>
                                                    <p>
                                                    	If you've ever wanted to learn how to cook, this is the good site for you! By following along with us, you'll learn all the fundamentals of cooking you need to create delicious meal.
                                                    </p>
                                                    <p>
                                                    	Once we've covered the basics, We'll guide you through eight different cooking techniques that will improve every meal you make! Each cooking technique is also paired with a recipe collection so you can practice these techniques while making a delicious meal. Nearly every recipe used in this class is one of mine, so you can be sure they've been tried and tested. :D
                                                    </p>
                                                    <p>
                                                    	We hope you will be feeling like a gerat cook in no time!
                                                    </p>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    </div>
                                </div>   

                            </div>
                        </div>
                    </div>                    

                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center sections">
                        <div class="head_title">
                            <h2>Recipes</h2>
                        </div>               		

                        <div id="mixcontent" class="mixcontent">
                        	<?php
                        		foreach($meals as $meal):
                        		$id = $meal->meals_id;
								$name = $meal->meals_name;
								$photo = $meal->meals_photo;
                        	?>
                            <div class="col-md-4 mix cat1 no-padding">

                                <div class="single_mixi_portfolio">
                                    <img src="<?=$photo?>" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2><?=$name?></h2>
                                            <p>More Details?</p>
                                            <a href="<?=base_url('user/detail/'.$id)?>"><i class="lnr lnr-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="portfolio_btn_area">
                                <a href="" class="btn btn-md">LOAD MORE</a>
                            </div>
                            <div class="gap"></div> 
                        </div>
                    </div>                     
                </div>
            </div>
        </section> <!-- End of portfolio two Section -->        

        <section id="counter" class="counter">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_counter sections">
                        <div class="single_left_counter_bg">
                            <div class="col-sm-12 col-xs-12">
                                <div class="single_counter_left">
                                    <h2>OUR <br /> NUMBERS <br /> OF COOKING</h2>
                                    <p>salt and pepper</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="single_counter_right_area text-center">
                                <div class="row">
                                    <div class="col-sm-4 ">
                                        <div class="single_counter_right">
                                            <i class="fa fa-comments-o"></i>
                                            <h2 class="statistic-counter">423</h2>
                                            <p>COMMENTS</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single_counter_right">
                                            <i class="fa fa-life-ring"></i>
                                            <h2 class="statistic-counter">1,423</h2>
                                            <p>RECIPES</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single_counter_right">
                                            <i class="fa fa-heart-o"></i>
                                            <h2 class="statistic-counter">423</h2>
                                            <p>LOVERS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="main_widget">
                        <div class="row">

                            <div class="col-sm-4  col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">CONTACT</h4>
                                    <div class="separator4"></div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-envelope"></i> shwesin79999@gmail.com</a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> +95 9689814635</a></li>
                                        <li><a href=""><i class="fa fa-map-marker"></i> No(28), Ganamar Road, Near U Ba Han busstop, ThaMaing, Yangon</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">Meals</h4>
                                    <div class="separator4"></div>

                                    <div class="footer_gellary">
                                        <img src="frontend/assets/images/fg1.jpg" alt="" />
                                        <img src="frontend/assets/images/fg2.jpg" alt="" />
                                        <img src="frontend/assets/images/fg3.jpg" alt="" />
                                        <img src="frontend/assets/images/fg4.jpg" alt="" />
                                        <img src="frontend/assets/images/fg5.jpg" alt="" />
                                        <img src="frontend/assets/images/fg6.jpg" alt="" />
                                        <img src="frontend/assets/images/fg7.jpg" alt="" />
                                        <img src="frontend/assets/images/fg8.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo">
                                        <img src="frontend/assets/images/footerlogo.png" alt="" />
                                    </div>
                                    <p>This site represents how to make a meal. We provide the meal with detail description as well as videos.</p>
                                   
                                    <p>You can search as you want. We hope this site will be effective for you.</p>
                                    <a class="weblink" href="http://cooking.shwesintoe.me">www.cooking.shwesintoe.me</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text">
                                <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="footer_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="<?=base_url('frontend/assets/js/vendor/jquery-1.11.2.min.js')?>"></script>
        <script src="<?=base_url('frontend/assets/js/vendor/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('frontend/assets/js/jquery.easypiechart.min.js')?>"></script>
        <script src="<?=base_url('frontend/assets/js/jquery.mixitup.min.js')?>"></script>
        <script src="<?=base_url('frontend/assets/js/jquery.easing.1.3.js')?>"></script>
        <script src="<?=base_url('frontend/assets/css/skills/inview.min.js')?>"></script>
		<script src="<?=base_url('frontend/assets/css/skills/progressbar.js')?>"></script>
		<script src="<?=base_url('frontend/assets/css/skills/main.js')?>"></script>

        <script src="<?=base_url('frontend/assets/js/plugins.js')?>"></script>
        <script src="<?=base_url('frontend/assets/js/main.js')?>"></script>

    </body>
</html>