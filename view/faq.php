<?php
require("../control/connection.php");
?>

<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Food Blog</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css" type="text/css"  media="screen" data-name="skins">



    <!-- <link rel="stylesheet" href="view/css/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>

    <link rel="stylesheet" href="css/style_footer.css"/>

</head>
<body>


    <!--Start Header-->

    <?php include 'header.php'; ?>

    <!--End Header-->



    <section class="wrapper container">



        <section class="info_abt_me">
            <div class="title dividerHeading text-center"><h4>Rules & Regulations of Posting</h4></div>    
            <div class='details'>
                <ul>
                    <li> 
                        <i class="fa fa-gg  fa-lg know_icon" aria-hidden="true"></i>
                        “It's the cycle rickshaws that do it for me in Bangladesh.
                    </li>
                    <li>
                        <i class="fa fa-gg  fa-lg know_icon" aria-hidden="true"></i>
                        They're works of art, from their brightly decorated handlebars and the struts of their canopies </li>
                    <li>
                        <i class="fa fa-gg  fa-lg know_icon" aria-hidden="true"></i>
                        displaying anything from mosques to Bangla film stars. To a soundtrack of bicycle bells,</li>
                    <li>
                        <i class="fa fa-gg  fa-lg know_icon" aria-hidden="true"></i>
                        they weave their way through roads as if the words 'traffic jam' were unknown. </li>
                    <li>
                        <i class="fa fa-gg  fa-lg know_icon" aria-hidden="true"></i>
                        It doesn't matter if you're in the smallest village trying to find some..</li>
                </ul>
            </div>
        </section>






        <div class="details" >


            <div style="margin-left: 30px;padding-top:30px;">


                <!--         QUES CODE     START                 -->
                <div id='comment_note'style="border:2px solid lightsteelblue;margin-left:20px;margin-right: 20px;">   
                    <h4 style='text-align: center;background-color: white;font-size: 30px;font-family:Monotype Corsiva;color: black;padding:20px;font-weight: bolder; '><b>Ask Question<b></h4>   

                                <?php
                                if (isset($_POST['submit'])) {

                                    $name = $_POST['name'];
                                    $comment = $_POST['comment'];

                                    if ($name && $comment) {

                                        $faqquery = "INSERT INTO faq VALUES (NULL, '$name', '$comment',0,0) ";
                                        $insert = mysql_query($faqquery);
                                        ?>
                                        <span style="color:white;font-size: 30px;font-family:Monotype Corsiva;"> <?php echo"Question Posted successfully! You will be replied soon"; ?> </span>



                                        <?php
                                    } else {
                                        echo "please fill out all fields";
                                    }
                                }
                                ?>






                                <br><br>
                                <div style="margin-left:25%;">
                                    <form action="faq.php" method="POST">
                                        <table>
                                            <tr><td><span style="font-family:Monotype Corsiva;color:white;font-weight: bolder;font-size: 25px;">Name:</span> <br><input placeholder="Write name" type="text" name="name"/></td></tr><br>
                                            <tr><td colspan="2"><span style="font-family:Monotype Corsiva;color:white;font-weight: bolder;font-size: 25px;">Write Question:</span> </td></tr>
                                            <tr><td colspan="5"><textarea name="comment" placeholder="Write question or recipe "rows="5" cols="50"></textarea></td></tr>
                                            <tr><td colspan="2"><input id='details_button_faq' type="submit" name="submit" value="submit"></td></tr>
                                        </table>
                                    </form>  
                                </div>
                                </div>      



                                <!--         QUES CODE     END               -->



                                <!--                          printing questions-->

                                <?php
                                mysql_connect("localhost", "root", "");
                                mysql_select_db("food_blog");


                                $dbLink = mysql_connect("localhost", "root", "");
                                mysql_query("SET character_set_results=utf8", $dbLink);
                                mb_language('uni');
                                mb_internal_encoding('UTF-8');

                                $faqquery = mysql_query("SELECT * FROM faq where accept=1 ORDER BY id DESC");
                                ?>

                                <div style="border:2px solid lightsteelblue;padding:20px;margin:20px;text-align: center;">
                                    <h4 style='text-align: center;background-color: white;font-size: 30px;font-family:Monotype Corsiva;color: black;padding:20px;font-weight: bolder; '>Previous Asked Question:</h4>   

                                    <?php
                                    while ($rows = mysql_fetch_assoc($faqquery)) {
                                        $id = $rows['id'];
                                        $name = $rows['name'];
                                        $comment = $rows['comment'];
                                        $admin_reply = $rows['admin_reply'];
                                        ?>


                                        <div style="border:1px solid grey ;padding:30px;margin-left:10%;margin-right: 20%;width: 85%;word-wrap: break-word;">
                                            <div style="word-wrap: break-word;background-color: #105378;padding:12px;">
                                                <span style=" word-wrap: break-word;color:white;text-transform: uppercase;font-size: 22px;font-family:Monotype Corsiva;font-weight: bolder; "> <?php echo $name; ?> : <span style="font-size: 12px;font-family: times new roman"><?php echo $comment; ?></span>  </span>
                                            </div>

                                            <div style="word-wrap: break-word;padding:20px;background-color: #8e96c5;">
                                                <span style="word-wrap: break-word;color:black;text-transform: uppercase;font-size: 15px;margin-top: 80px;font-family:Monotype Corsiva;font-weight: bolder; "> reply : <span style="font-size: 16px;font-family: times new roman"><?php echo $admin_reply; ?></span>  </span>
                                            </div>
                                        </div>
                                    
                                  
                                    

                                        <?php
                                    }
                                    ?>

                                </div>


                                <!--                          printing questions END-->

                                </div>

                                </div>









                                </section>
                                <!--   -------- footer started------------>



                                <?php include 'footer.php'; ?>


                                <!--   -------- footer ended------------>

                                <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                <script src="js/jquery.easing.1.3.js"></script>

                                <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
                                <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
                                <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
                                <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                                <script type="text/javascript" src="js/jflickrfeed.js"></script>
                                <script type="text/javascript" src="js/swipe.js"></script>
                                <script type="text/javascript" src="js/jquery.countTo.js"></script>
                                <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
                                <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
                                <script src="js/main.js"></script>
                                <script type="text/javascript" src="js/wow.min.js"></script>
                                <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
                                <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
                                <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
                                <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
                                <script src="js/retina-1.1.0.min.js"></script>
                                <script type="text/javascript" src="js/jquery.cookie.js"></script>



                                </body>
                                </html>