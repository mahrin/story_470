<?php
require("../control/connection.php");


if (isset($_GET['recepie_id'])) {
    $recepie_id = $_GET['recepie_id'];
}

//$query = mysql_query("SELECT * from recepie ORDER BY upload_date DESC");
//$query = mysql_query("SELECT * FROM recepie INNER JOIN ratingtable ON recepie.recepie_id=ratingtable.recepie_id ORDER BY recepie.upload_date DESC , ratingtable.rate ASC  ");

$query = mysql_query("SELECT * FROM recepie INNER JOIN ratingtable ON recepie.recepie_id=ratingtable.recepie_id WHERE catagory='main_course'  AND   main_copy=1 ORDER BY upload_date DESC LIMIT 3");
$dessert = mysql_query("SELECT * FROM recepie INNER JOIN ratingtable ON recepie.recepie_id=ratingtable.recepie_id WHERE catagory='dessert' AND    main_copy=1 ORDER BY upload_date DESC  LIMIT 3");
$drink = mysql_query("SELECT * FROM recepie INNER JOIN ratingtable ON recepie.recepie_id=ratingtable.recepie_id WHERE catagory='drink' AND    main_copy=1 ORDER BY upload_date DESC  LIMIT 3");
$appetizer = mysql_query("SELECT * FROM recepie INNER JOIN ratingtable ON recepie.recepie_id=ratingtable.recepie_id WHERE catagory='appetizer' AND    main_copy=1 ORDER BY upload_date DESC  LIMIT 3");
$recepie_name = $cuisine = $price = $img_path = $catagory = $no_of_ingredients = $recepie_id = $rate = $time = $rate = "";
?>





<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Food Blog</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="css/fractionslider.css"/>
        <link rel="stylesheet" href="css/style-fraction.css"/>
        <link rel="stylesheet" href="css/style_footer.css"/>
        <link rel = "stylesheet" href = "css/description_style.css" type = "text/css">
        <link rel = "stylesheet" href = "css/data_show_box_style.css" type = "text/css">

    </head>
    <body>

        <?php include 'header.php'; ?>




        <div class="container">

            <section class="info_abt_me">
                <div class="title dividerHeading text-center"><h4>Trending Food Recipes</h4></div>    
                <div class='details' style="font-size: 15px; line-height:30px;">“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</div>
            </section>



            <section class="super_sub_content row">

                <div class="dividerHeading text-center">
                    <h4 style="text-transform: uppercase;"><span><?php echo 'Main Course' ?></span></h4>
                </div>

                <div class="print_data" style='margin:0px;padding: 0px;'>

                    <?php
                    while ($rows = mysql_fetch_array($query)) {
                        $recepie_id = $rows['recepie_id'];
                        $recepie_name = $rows['recepie_name'];
                        $cuisine = $rows['cuisine'];
                        $catagory = $rows['catagory'];
                        $no_of_ingredients = $rows['no_of_ingredients'];
                        $price = $rows['price'];
                        $path = 'images/food/' . $recepie_id . '.jpg';
                        $img_path = $path;
                        $time = $rows['upload_date'];
                        $rate = $rows['rate'];
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

                                            <b>Upload Time</b>:<big> <?php echo $time; ?> </big><br>
                                            <b>Rating</b>:<big> <?php echo $rate; ?> </big>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo "$recepie_id"; ?>"><br><br>
                                        <a class='details_button_link'href="description.php?id=<?php echo "$recepie_id"; ?>">View Details</a>
                                        </form> 

                                    </div>

                                </div>

                                <?php
                            }
                            ?>	

                        </div>   
                </div> 
            </section>




            <section class="super_sub_content row">
                <div class="dividerHeading text-center">
                    <h4 style="text-transform: uppercase;"><span><?php echo 'dessert' ?></span></h4>
                </div>

                <div class="print_data" style='margin:0px;padding: 0px;'>

                    <?php
                    while ($rows = mysql_fetch_array($dessert)) {
                        $recepie_id = $rows['recepie_id'];
                        $recepie_name = $rows['recepie_name'];
                        $cuisine = $rows['cuisine'];
                        $catagory = $rows['catagory'];
                        $no_of_ingredients = $rows['no_of_ingredients'];
                        $price = $rows['price'];
                        $path = 'images/food/' . $recepie_id . '.jpg';
                        $img_path = $path;
                        $time = $rows['upload_date'];
                        $rate = $rows['rate'];
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
                                            <b>Upload Time</b>:<big> <?php echo $time; ?> </big><br>
                                            <b>Rating</b>:<big> <?php echo $rate; ?> </big>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo "$recepie_id"; ?>"><br><br>
                                        <a class='details_button_link'href="description.php?id=<?php echo "$recepie_id"; ?>">View Details</a>
                                        </form> 

                                    </div>

                                </div>

                                <?php
                            }
                            ?>	

                        </div>   
                </div> 
            </section>

            <section class="super_sub_content row">
                <div class="dividerHeading text-center">
                    <h4 style="text-transform: uppercase;"><span><?php echo 'Drink' ?></span></h4>
                </div>

                <div class="print_data" style='margin:0px;padding: 0px;'>

                    <?php
                    while ($rows = mysql_fetch_array($drink)) {
                        $recepie_id = $rows['recepie_id'];
                        $recepie_name = $rows['recepie_name'];
                        $cuisine = $rows['cuisine'];
                        $catagory = $rows['catagory'];
                        $no_of_ingredients = $rows['no_of_ingredients'];
                        $price = $rows['price'];
                        $path = 'images/food/' . $recepie_id . '.jpg';
                        $img_path = $path;
                        $time = $rows['upload_date'];
                        $rate = $rows['rate'];
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
                                            <b>Upload Time</b>:<big> <?php echo $time; ?> </big><br>
                                            <b>Rating</b>:<big> <?php echo $rate; ?> </big>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo "$recepie_id"; ?>"><br><br>
                                        <a class='details_button_link'href="description.php?id=<?php echo "$recepie_id"; ?>">View Details</a>
                                        </form> 

                                    </div>

                                </div>

                                <?php
                            }
                            ?>	

                        </div>   
                </div> 
            </section>

            <section class="super_sub_content row">
                <div class="dividerHeading text-center">
                    <h4 style="text-transform: uppercase;"><span><?php echo 'Appetizer' ?></span></h4>
                </div>

                <div class="print_data" style='margin:0px;padding: 0px;'>

                    <?php
                    while ($rows = mysql_fetch_array($appetizer)) {
                        $recepie_id = $rows['recepie_id'];
                        $recepie_name = $rows['recepie_name'];
                        $cuisine = $rows['cuisine'];
                        $catagory = $rows['catagory'];
                        $no_of_ingredients = $rows['no_of_ingredients'];
                        $price = $rows['price'];
                        $path = 'images/food/' . $recepie_id . '.jpg';
                        $img_path = $path;
                        $time = $rows['upload_date'];
                        $rate = $rows['rate'];
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
                                            <b>Upload Time</b>:<big> <?php echo $time; ?> </big><br>
                                            <b>Rating</b>:<big> <?php echo $rate; ?> </big>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo "$recepie_id"; ?>"><br><br>
                                        <a class='details_button_link'href="description.php?id=<?php echo "$recepie_id"; ?>">View Details</a>
                                        </form> 

                                    </div>

                                </div>

                                <?php
                            }
                            ?>	

                        </div>   
                </div> 
            </section>



        </div> 

        <?php include 'footer.php'; ?>


    </body>
</html>
