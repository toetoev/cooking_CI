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

        <header id="main_menu" class="header navbar-fixed-top" style="background-color: rgba(34, 61, 97, 0.64); height: 75px;">            
            <div class="main_menu_bg" >
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
        <div style="height:110px;"></div>
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                        <div class="head_title text-center">
                            <h2>Recipes</h2>
                        </div>               		

                        <div id="mixcontent" class="mixcontent">
                        	<?php
                                $id = $meals['meals_id'];
                                $name = $meals['meals_name'];
                                $photo = $meals['meals_photo'];
                                $instruction = $meals['meals_instruction'];
                                $ingredient = $meals['meals_ingredients'];
                                $link = $meals['meals_youtubelink'];
                                $category = $meals['categories_name'];
                                $country = $meals['countries_name'];
                        	?>
                            <div class="col-md-4 mix cat1 no-padding">

                                <div class="single_mixi_portfolio">
                                    <img src="<?=$photo?>" alt="" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h5 class="text-center"><?=$name?></h5>
                                <div style="padding-left: 30px;">
                                    <p>
                                        <b>Instructions: </b>
                                        <?=$instruction?>
                                    </p>
                                    <p>
                                        <b>Ingredients: </b>
                                        <?=$ingredient?>
                                    </p>
                                    <p>
                                        <b>Category: </b>
                                        <?=$category?>
                                    </p>
                                    <p>
                                        <b>Country: </b>
                                        <?=$country?>
                                    </p>
                                    <p>
                                        <b>Youtube Video: </b>
                                    </p>
                                    <iframe src="<?=$link?>"></iframe>                                    
                                </div>                                
                                                        
                            </div>
                            <div class="gap"></div> 
                        </div>
                                        
                </div>
            </div>
        </section> <!-- End of portfolio two Section -->   

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
