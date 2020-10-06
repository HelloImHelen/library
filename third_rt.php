<!DOCTYPE html>
<!--[if IE 9 ]>    <html lang="ru" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ru" class="no-js">
<!--<![endif]--><!-- head
    ============================================================================ --><head>


        <!-- Basic Info
        ======================================================================== -->
        <title>book and &</title>
        <meta charset="utf-8">
        <meta name="author" content="www.lazukin.net">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="keywords" content="321">
        <meta name="description" content="qwe">

        <!-- Mobile Configurations
        ======================================================================== -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">  

        <!--  CSS Files
        ======================================================================== -->
        <link rel="stylesheet" href="js/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/social-icons.css">
        <link rel="stylesheet" href="js/plugins/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="js/plugins/mediaelement/css/mediaelementplayer.min.css">
        <link rel="stylesheet" href="js/plugins/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="js/plugins/wow/css/animate.min.css">
        <link rel="stylesheet" href="css/style11.css">
		<link id="changeable-colors" rel="stylesheet" href="css/css/green.css">
        <link rel="stylesheet" href="css/responsive.css">




        <!--  Head JS Libs
        ======================================================================== -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script src="js/vendor/modernizr-custom.js"></script>


    </head><!-- /End head -->




    <!-- body
    ============================================================================ -->
    <body class="nbs-10" data-spy="scroll" data-target=".header-menu-container" data-offset="61">
    <?php
    require_once 'connection.php';
    require_once 'some_results.php';
?>



        <!-- UP Button
        ======================================================================== -->
        <div id="up-button"><a href="#" title="To Top"><i class="fa fa-angle-up"></i></a></div>




        <!-- Main Wrapper
        ======================================================================== -->
        <div id="main-wrapper">
		
        <!-- FAQ 3
            ==================================================================== -->
            <div id="faq-section-3" class="faq-section white-section">
                <!-- Section Container -->
                <div class="section-container">


                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">


                            <!-- Title Block -->
                            <div class="col-lg-10 col-lg-offset-1 col-md-12 title-block">
                                <!-- Title Block Container -->
                                <div class="title-block-container text-center">

                                    <!-- Title -->
                                    <h2>Результат запроса</h2>
                                    <div class="line-separator"></div>

                                </div><!-- /End Title Block Container -->
                            </div><!-- /End Title Block -->


                            <?php 
                             $tr = get_third();
                            ?>

                            <?php foreach($tr as $trs): ?>
                            <!-- FAQ Block -->
                            <div class="col-lg-4 col-md-6 faq-block faq-block-style-1">
                                <!-- FAQ Block Container -->
                                <div class="faq-block-container" style="height: auto">

                                <h4>Инвентарный номер: <?=$trs['id_exmpl']?></h4>
                                    <!-- Description -->
                                    <p>Книга: <?=$trs['name_book']?></p>        
                                </div><!-- /End FAQ Block Container -->
                            </div><!-- /End FAQ Block -->
                            <?php endforeach; ?>


                        </div><!-- /End row -->
                    </div><!-- /End container -->


                </div><!-- /End Section Container -->
            </div><!-- /End FAQ 3 --><!-- Copyright 3
            ==================================================================== -->
            




        <!-- Java Script Files		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>		
        ======================================================================== -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/mobile/mobile.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="https://lpbuilder.pro/js/app.js"></script>
		</body>
		</html>