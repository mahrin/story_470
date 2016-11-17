
<?php
require("../control/connection.php");

$recepie_id = $_GET['id'];


if (isset($_POST['commenting'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    if ($name && $comment) {
        $query = "INSERT INTO commenttable VALUES (NULL, '$name', '$comment',$recepie_id,0) ";
        $insert = mysql_query($query);
    } else {
        echo "please fill out all fields";
    }
}




if (isset($_POST['rating'])) {

    $rate = $_POST['rate'];
    if ($rate) {
        $query1 = "INSERT INTO ratingtable VALUES (NULL, $rate,$recepie_id) ";
        $insert = mysql_query($query1);
    } else {
        echo "please fill out all fields";
    }
}


$recepie_name = $cuisine = $price = $img_path = $catagory = $no_of_ingredients = $description = $ingredients = $recepie_id = "";

$query = mysql_query("SELECT * from recepie where main_copy=1 AND  recepie_id=" . $_GET["id"]);
?>





<!DOCTYPE html>
<html lang = "en">
    <head>

        <title>Food Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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

    </head>
    <body>


        <?php include 'header.php'; ?>


        <div class="container">


            <div class="print_data">

                <?php
                //PRINTING RECIPE

                while ($rows = mysql_fetch_array($query)) {

                    $recepie_id = $rows['recepie_id'];
                    $recepie_name = $rows['recepie_name'];
                    $cuisine = $rows['cuisine'];
                    $catagory = $rows['catagory'];
                    $no_of_ingredients = $rows['no_of_ingredients'];
                    $price = $rows['price'];
                    $description = $rows['description'];
                    $ingredients = $rows['ingredients'];
                    ?>


                    <div id="recepie_div" style="display: inline;">
                        <div id="recepie_name"><?php echo $recepie_name; ?></div>




                        <div class="recepie_image" >
                            <?php $path = 'images/food/' . $recepie_id . '.jpg' ?>
                            <img  src="<?php echo $path ?>"  > 
                        </div>
                        <div id="info_recepie" >
                            <div id="details">
                                <div class='desc'> 


                                    <div class='details_recipe'><b>Cuisine :</b> <?php echo $cuisine; ?> <br></div>
                                    <div class='details_recipe'><b>Category :</b> <?php echo $catagory; ?><br></div>
                                    <div class='details_recipe'><b>Number of Ingredients :</b> <?php echo $no_of_ingredients; ?><br></div>
                                    <div class='details_recipe'><b>Making Cost</b>:<big> <?php echo $price; ?> BDT</big></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class='details'>
                                <big><b>Ingredients : </b></big> <br>
                                <div class='detils_moshla'><?php echo $ingredients; ?></div>
                            </div>
                            <div id='details'>
                                <big><b>Recipe :</b></big> <br>
                                <?php echo $description; ?> 
                            </div>





                            <!--                            recipe details end-->






                            <!--         RATING CODE     START                 -->
                            <br>

                            <div>
                                <div class="rating_div"> 

                                    <div class='rating_show'>

                                        <?php
                                        mysql_connect("localhost", "root", "");
                                        mysql_select_db("food_blog");
                                        $db = mysql_connect("localhost", "root", "");
                                        mysql_query("SET character_set_results=utf8", $db);
                                        $ratingquery = mysql_query("SELECT rate FROM ratingtable where recepie_id=$recepie_id");
                                        ?>

                                        <?php
                                        $rate_sum = 0;
                                        $row_count = 0;
                                        while ($rows = mysql_fetch_assoc($ratingquery)) {
                                            $rate = $rows['rate'];
                                            $rate_sum = $rate_sum + $rate;
                                            $row_count = $row_count + 1;
                                            ?>
                                            <?php
                                        }

                                        if (!$row_count == 0) {
                                            $current_rating = $rate_sum / $row_count;

                                            echo "<b>CURRENT RATING : ";
                                            echo round($current_rating, 2) . "</b>";

                                            echo "</br>" . "TOTAL HITS: " . $row_count;
                                        } else {
                                            echo "<b>CURRENT RATING : 0 </b>";

                                            echo "</br>" . "TOTAL HITS: " . $row_count;
                                        }
                                        ?>

                                    </div>

                                    <!--                                    <div class='rating_show' style="float:right">
                                                                            <form action="description.php?id=<?php // echo "$recepie_id";  ?>" method="POST">
                                                                                <table>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <select name='rate' style="padding: 10px 40px 7px;">
                                                                                                <option value="1">1  <span>☆</span></option>
                                                                                                <option value="2">2 <span>☆</span><span>☆</span></option>
                                                                                                <option value="3">3 <span>☆</span><span>☆</span><span>☆</span></option>
                                                                                                <option value="4">4 <span>☆</span><span>☆</span><span>☆</span><span>☆</span></option>
                                                                                                <option value="5">5  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></option>
                                                                                            </select>
                                    
                                                                                            <input type="submit" id='comment_button' name="rating" value="rating">
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </form>   
                                                                        </div>-->
                                </div>

                            </div>

                            <!--         RATING CODE  END                -->






                            <!--         COMMENT CODE     START                 -->

                            <div id='comment_note'style="border:2px solid lightsteelblue;margin-left:20px;margin-right: 20px;">   
                                <h4 class='comment_header'> Write Comment</h4>   

                             
                                            <div style="margin-left:25%;">
                                                <form action="description.php?id=<?php echo "$recepie_id"; ?>" method="POST">
                                                    <table>
                                                        <tr><td><span style="font-family:Monotype Corsiva;color:white;font-weight: bolder;font-size: 25px;">Name:</span> <br><input placeholder="Write name" type="text" name="name"/></td></tr>
                                                        <tr><td colspan="2"><span style="font-family:Monotype Corsiva;color:white;font-weight: bolder;font-size: 25px;">Write Comment:</span>  </td></tr>
                                                        <tr><td colspan="5"><textarea name="comment" placeholder="Write comment "rows="3" cols="50"></textarea></td></tr>
                                                        <tr><td colspan="2"><input id='details_button' type="submit" name="commenting" value="commenting"></td></tr>
                                                    </table>
                                                </form>  
                                            </div>
                                            </div>





                                            <?php
                                            mysql_connect("localhost", "root", "");
                                            mysql_select_db("food_blog");


                                            $dbLink = mysql_connect("localhost", "root", "");
                                            mysql_query("SET character_set_results=utf8", $dbLink);
                                            mb_language('uni');
                                            mb_internal_encoding('UTF-8');

                                            $getquery = mysql_query("SELECT * FROM commenttable where recepie_id=$recepie_id and accept=1 ORDER BY id DESC");
                                            ?>

                                            <div style="border:2px solid lightsteelblue;padding:20px;margin:20px;">
                                                <h4 class='comment_header'>PREVIOUS COMMENTS</h4>   
                                                <?php
                                                while ($rows = mysql_fetch_assoc($getquery)) {
                                                    $id = $rows['id'];
                                                    $name = $rows['name'];
                                                    $comment = $rows['comment'];
                                                    ?>


                                                    <div class='prev_comment'>
                                                        <span id='left_span'> NAME : <span style="font-size: 12px;font-family: times new roman"><?php echo $name; ?></span>  </span>
                                                        </br>
                                                        <div style="word-wrap: break-word;padding:20px;background-color: #8e96c5;">
                                                            <span style="word-wrap: break-word;color:black;text-transform: uppercase;font-size: 14px;font-family:Monotype Corsiva;font-weight: bolder; "> Comment : <span style="font-size: 16px;font-family: times new roman"><?php echo $comment; ?></span>  </span>
                                                        </div>
                                                    </div>
           
                                                    <?php
                                                }
                                                ?>

                                            </div></div> </div>

                                            <?php
                                        }
                                        ?>


                                        </div>
                                        </div>
                                        </div>


                                        <?php include 'footer.php'; ?>


                                        </body>
                                        </html>
