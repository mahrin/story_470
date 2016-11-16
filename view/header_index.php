<header id="header">



    <div class="col-sm-5 pull-left">
        <div id="logo">
            <h1><a href="../index.php">
                    <div class="logo">Food <span>B</span>log</div>
                </a></h1>
        </div>
    </div> 


    <div class="header navbar navbar-default navbar-static-top col-sm-7 pull-right" role="navigation">

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


                <li class="active"><a href="index.php">Home</a>
                </li>

                <li>
                    <a href="#">Category</a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="view/catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="main_course"><br><br>
                                <button class="menu_button" type="submit"  name="submit">Main Course</button>
                            </form>
                        </li>
                        <li>  <form action="view/catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="appetizer"><br><br>
                                <button  class="menu_button" type="submit"  name="submit">Appetizer</button>
                            </form>
                        </li>
                        <li>
                            <form action="view/catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="drink"><br><br>
                                <button class="menu_button"  type="submit"  name="submit">Drink</button>
                            </form>
                        </li>
                        <li>
                            <form action="view/catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="dessert"><br><br>
                                <button class="menu_button" type="submit"  name="submit">Dessert</button>
                            </form>
                        </li>
                    </ul>
                </li>


                <li> 
                    <a href="view/faq.php">Faq</a>   
                </li>

                <li>
                    <a href="view/signin.php">Sign in</a>
                </li>
              
            </ul>
        </div>
    </div>
</header>