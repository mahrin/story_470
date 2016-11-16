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


                <li class="active"><a href="../index.php">Home</a>
                </li>

                <li>
                    <a href="#">Category</a>
                    <ul class="dropdown-menu" style="z-index: 100;">
                        <li>
                            <form action="catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="main_course"><br><br>
                                <button class="menu_button" type="submit"  name="submit">Main Course</button>
                            </form>
                        </li>
                        <li>  <form action="catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="appetizer"><br><br>
                                <button  class="menu_button" type="submit"  name="submit">Appetizer</button>
                            </form>
                        </li>
                        <li>
                            <form action="catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="drink"><br><br>
                                <button class="menu_button"  type="submit"  name="submit">Drink</button>
                            </form>
                        </li>
                        <li>
                            <form action="catagory_search.php" method="POST"> 
                                <input type="hidden" name="rc" value="dessert"><br><br>
                                <button class="menu_button" type="submit"  name="submit">Dessert</button>
                            </form>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#">Cuisine</a>
                    <ul class="dropdown-menu">
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="american"><br><br>
                                <button id="menu_button" type="submit"  name="submit">American</button>
                            </form>
                        </li>
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="indian"><br><br>
                                <button id="menu_button" type="submit"  name="submit">Indian</button>
                            </form>
                        </li>
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="chinese"><br><br>
                                <button id="menu_button" type="submit"  name="submit">Chinese</button>
                            </form>
                        </li>
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="japanese"><br><br>
                                <button id="menu_button" type="submit"  name="submit">Japanese</button>
                            </form>
                        </li>
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="italian"><br><br>
                                <button id="menu_button" type="submit"  name="submit">Italian</button>
                            </form>
                        </li>
                        <li> 
                            <form action="cuisine_search.php" method="POST"> 
                                <input type="hidden" name="recepie_cuisine" value="mexican"><br><br>
                                <button id="menu_button" type="submit"  name="submit">Mexican</button>
                            </form>
                        </li>
                    </ul>
                </li>


                <li> 
                    <a href="faq.php">Faq</a>   
                </li>
                
                <li> 
                    <a href="report.php">Report</a>   
                </li>

                <li>
                    <a href="signin.php">Sign in</a>
                </li>

            </ul>
        </div>
    </div>
</header>