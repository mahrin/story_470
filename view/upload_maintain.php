
<?php
require("../control/connection.php");
?>




<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Food Blog</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">


        <link rel = "stylesheet" href = "css/drop_down_searching_style.css" type = "text/css">
        <link rel = "stylesheet" href = "css/data_show_box_style.css" type = "text/css">
        <link rel = "stylesheet" href = "css/upload_style.css" type = "text/css"> 
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style_footer.css"/>


    </head>

    <body>
<div class="container">
      <?php include 'header.php'; ?>
            <section class="super_sub_content row">
                <div class="dividerHeading text-center">
                    <h4><span><?php echo "<b>UPLOAD RECIPE</b>" ?></span></h4>
                </div>

                <div class="print_data" style='margin:0px;padding: 0px;'>

                <?php
                if (isset($_POST['register'])) {

                    $name = $_FILES["myfile"]["name"];
                    $type = $_FILES["myfile"]["type"];
                    $size = $_FILES["myfile"]["size"];
                    $temp = $_FILES["myfile"]["tmp_name"]; // temporary location to save the img
                    $error = $_FILES["myfile"]["error"];
                    //   $rasta = $name;


                    if ($error > 0) {   //conditions
                        die("error uploading file! code $error.");
                    } else {
                        if ($type == "image/jpg" || $type == "image/png" || $type = 'image/gif') {
                            move_uploaded_file($temp, "images/food/UPLOAD_TRY/" . $name);  //location where we want to save the img
//                            $rasta = "images/food/UPLOAD_TRY/" . $name;
                            ?>

                            <span style="color:black;font-size: 34px;font-family:Monotype Corsiva;text-align: center;margin-left: 40%;">  <?php echo "Upload Completed"; ?> </span>
                            <?php //echo "upload completed"; ?>

                            <?php
                        } else {
                            die("that format is not allowed");
                        }
                    }


                    $recepie_name = $_POST['recepie_name'];
                    $cuisine = $_POST['cuisine'];
                    $catagory = $_POST['catagory'];
                    $no_of_ingredients = $_POST['no_of_ingredients'];
                    $price = $_POST['price'];
                    $ingredients = $_POST['ingredients'];
                    $description = $_POST['description'];
                    //  $rasta=$_POST['img_path'];

                    $data1="INSERT INTO recepie VALUES (NULL, `$recepie_name`, `$ingredients`, `$no_of_ingredients`, `$cuisine`, `$catagory`, `$description`, `$price`, NULL,NULL )" ;

    // $data1 = "INSERT into recepie values (NULL, '$recepie_name', '$ingredients', $no_of_ingredients, '$cuisine', '$catagory', '$description', '$rasta', $price)";
                    $query1 = mysql_query($data1);

                    mysql_close($conn);
                }
                ?>





                <form  action="upload_maintain.php" method="POST" enctype="multipart/form-data"  name="myForm">


                    <div class="upload_4" style=" background-image:url('images/upload_image_1.png');background-size: contain;background-repeat: no-repeat; " >
                        <h2 style="font-weight:bolder;font-size: 29px;">Upload Image</h2>
                        <input  type='file' name='myfile' ><br><br>
                    </div>




                    <div class='upload_1 col-md-3' style=" ">
                        <label>Recipe Name:</label> <br> 
                        <input type="text" name="recepie_name" placeholder="Recipe name">
                        <br>

                        <label>Cuisine Type:</label> <br>
                        <select required name="cuisine" placeholder="Cuisine Type" style="color:black;" > 
                            <option value="american">American</option>
                            <option value="indian">Indian</option>
                            <option value="chinese">Chinese</option>
                            <option value="japanese">Japanese</option>
                            <option value="italian">Italian</option>
                            <option value="mexican">Mexican</option>
                        </select>

                        <br>

                        <label>Category Type:</label> <br>
                        <select required name="catagory" placeholder="Category Type" style="color:black;" > 
                            <option value="main_course">Main Course</option>
                            <option value="appetizer">Appetizer</option>
                            <option value="drink">Drink</option>
                            <option value="dessert">Dessert</option>
                        </select>

                        <br>


                        <label>Number of Ingredients:</label> <br>
                        <input type="text" name="no_of_ingredients" placeholder="Number of Ingredients">
                        <br>

                        <label>Making cost: </label><br>
                        <input type="text" name="price" placeholder="Making cost">
                        <br>



                    </div>

                    <div class="upload_2 col-md-4" style="">
                        <label>Ingredients:</label> <br>
                        <textarea ype="text" name="ingredients" placeholder="Write Ingredients" rows="12" cols="32"></textarea>

                        <br>
                    </div>
                    <div class="upload_3 col-md-5" style="">
                        <label> Recipe:</label> <br>

                        <textarea type="text" name="description" placeholder="Write Recipe" rows="12" cols="40"></textarea>
                        <br>

                    </div>

                    <br>
                    <button type="submit" class="details_button_link"  name="register">Upload Recipe</button>
                    <button type="reset" class="details_button_link" >Clear</button>
                </form>




            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>
