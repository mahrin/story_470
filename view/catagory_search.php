<?php
require("../control/connection.php");

if (isset($_POST['submit'])) {
    $recepie_catagory = $_POST['rc'];
    $recepie_name = $cuisine = $price = $catagory = $no_of_ingredients = $description = $ingredients = $recepie_id = "";
    $query = mysql_query("SELECT * from recepie where catagory='" . $_POST["rc"] . "'");
}
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
            <section class="super_sub_content row">
                <div class="dividerHeading text-center">
                    <h4><span><?php echo $recepie_catagory; ?></span></h4>
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
