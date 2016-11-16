

<?php
require("control/connection.php");

if (isset($_GET['recepie_id'])) {
    $recepie_id = $_GET['recepie_id'];
}

$query = mysql_query("SELECT * from recepie");
$recepie_name = $cuisine = $price = $img_path = $catagory = $no_of_ingredients = $recepie_id = $rate = "";
?>


<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Food Blog</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" type="text/css" href="view/css/style.css" media="screen" data-name="skins">



    <!-- <link rel="stylesheet" href="view/css/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="view/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="view/css/fractionslider.css"/>
    <link rel="stylesheet" href="view/css/style-fraction.css"/>

<!--    <script type="text/javascript" src="view/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet"  href="view/css/drop_down_menu.css" type="text/css" media="all">
    <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">-->


    <link rel="stylesheet" href="view/css/style_footer.css"/>
    <link rel = "stylesheet" href = "view/css/data_show_box_style.css" type = "text/css">
</head>
<body>


    <!--Start Header-->

    <?php include 'view/header_index.php'; ?>

    <!--End Header-->

    <div class="slider-wrapper row">
        <div class="slider">

            <div class="slide">
                <img src="view/images/slider/slider1.jpg" class='slide_img' data-in="left" data-out="fade" data-delay=""/>
                <p class="slide-1 " data-position="200,500" data-in="left" data-out="right" data-delay="2300">Strawberry Tart</p>
            </div>
            <div class="slide">
                <img src="view/images/slider/slider3.jpg" class='slide_img' data-in="left" data-out="fade" data-delay=""/>
                <p class="slide-1 " data-position="200,500" data-in="left" data-out="right" data-delay="2300">Chocolate cake </p>
            </div>
            <div class="slide">
                <img src="view/images/slider/slider2.jpg" class='slide_img' data-in="left" data-out="fade" data-delay=""/>
                <p class="slide-1 " data-position="200,500" data-in="left" data-out="right" data-delay="2300"> peanut biscuits</p>
            </div>
            <div class="slide">
                <img src="view/images/slider/slider4.jpg" class='slide_img' data-in="left" data-out="fade" data-delay=""/>
                <p class="slide-1 " data-position="200,500" data-in="left" data-out="right" data-delay="2300">Coffe </p>
            </div>

        </div>
    </div>
    <!--End Slider-->



    <section class="wrapper container">



        <section class="info_abt_me">
            <div class="title dividerHeading text-center"><h4>Why I love Food</h4></div>    
            <div class='details'>“Hello,I am Mahrin .I am a big foodie and that is why I like having food at different places and countries.
                And that is why I made up my mind to make a BLOG so that I can share my experience with food all around the world.
                Because I feel sharing is caring..</div>
        </section>





        <section class="row counter-parallax sub_content">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="count-box">
                    <span class="icon"><i class="fa fa-users  "></i></span>
                    <p><b class="timer" data-to="16000" data-speed="10000"></b></p>
                    <span class="title">Total Visitors</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="count-box">
                    <span class="icon"><i class="fa fa-comments"></i></span>
                    <p><b class="timer" data-to="63" data-speed="10000"></b>K</p>
                    <span class="title">Total Comments</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="count-box">
                    <span class="icon"><i class="fa fa-thumbs-up "></i></span>
                    <p><b class="timer" data-to="536" data-speed="10000"></b></p>
                    <span class="title">Ratings Given</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="count-box">
                    <span class="icon"><i class="fa fa-users "></i></span>
                    <p><b class="timer" data-to="63" data-speed="10000"></b></p>
                    <span class="title">Total Followers</span>
                </div>
            </div>
        </section>



        <section class="super_sub_content row">
            <div class="dividerHeading text-center">
                <h4><span>RECIPES</span></h4>
            </div>

            <div class="print_data">



                <?php
                while ($rows = mysql_fetch_array($query)) {
                    $recepie_id = $rows['recepie_id'];
                    $recepie_name = $rows['recepie_name'];
                    $cuisine = $rows['cuisine'];
                    $catagory = $rows['catagory'];
                    $no_of_ingredients = $rows['no_of_ingredients'];
                    $price = $rows['price'];
                    $path = 'view/images/food/' . $recepie_id . '.jpg';
                    $img_path = $path;
                    ?>

                    <form action="description.php" method="POST">

                        <div class="details_1">


                            <div id="product_div" style="display: inline;">


                                <div id='name'><?php echo $recepie_name; ?></div>


                                <div id="image_div">
                                    <img src="<?php echo"$img_path"; ?>"  style="width:295px;height: 250px;border:2px solid black;margin:1px;"> 
                                </div>

                                <div id="info_product">

                                    <div id='desc'>
                                        <b>Cuisine :</b> <?php echo $cuisine; ?> <br>
                                        <b>Category :</b> <?php echo $catagory; ?><br>
                                        <b>Number of Ingredients :</b> <?php echo $no_of_ingredients; ?><br>
                                        <b>Making Cost</b>:<big> <?php echo $price; ?> BDT</big>
                                    </div>

                                    <input type="hidden" name="id" value="<?php echo "$recepie_id"; ?>"><br><br>
                                    <a class='details_button_link'href="view/description.php?id=<?php echo "$recepie_id"; ?>">View Details</a>
                                    </form> 

                                </div>

                            </div>

                            <?php
                        }
                        ?>	

                    </div>   
            </div> 

        </section>





    </section>
    <!--   -------- footer started------------>



    <?php include 'view/footer.php'; ?>


    <!--   -------- footer ended------------>

    <script src="view/js/jquery-1.10.2.min.js" type="text/javascript" ></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/jquery.easing.1.3.js"></script>

    <script src="view/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="view/js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="view/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="view/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="view/js/swipe.js"></script>
    <script type="text/javascript" src="view/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="view/js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="view/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="view/js/main.js"></script>
    <script type="text/javascript" src="view/js/wow.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.matchHeight-min.js"></script>
    <script src="view/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="view/js/jquery.cookie.js"></script>

<!--    <script type="text/javascript" src="view/js/drop_down_menu.js"></script>
    <script type="text/javascript">
        $(function () {
            $('a[href="#"]').on('click', function (e) {
                e.preventDefault();
            });

            $('#menu > li').on('mouseover', function (e) {
                $(this).find("ul:first").show();
                $(this).find('> a').addClass('active');
            }).on('mouseout', function (e) {
                $(this).find("ul:first").hide();
                $(this).find('> a').removeClass('active');
            });

            $('#menu li li').on('mouseover', function (e) {
                if ($(this).has('ul').length) {
                    $(this).parent().addClass('expanded');
                }
                $('ul:first', this).parent().find('> a').addClass('active');
                $('ul:first', this).show();
            }).on('mouseout', function (e) {
                $(this).parent().removeClass('expanded');
                $('ul:first', this).parent().find('> a').removeClass('active');
                $('ul:first', this).hide();
            });
        });
    </script>-->


</body>
</html>