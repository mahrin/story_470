<div id="header">

    <div class="col-sm-5 pull-left">
        <div id="logo">
            <h1><a href="index.php">
                    <div class="logo">Food <span>B</span>log</div>
                </a></h1>
        </div>
    </div> 


    <div class="pull-right navbar navbar-default navbar-static-top col-sm-7">
        <ul class="nav ">

            <li class="active">
                <a href="index.php">Home</a>
            </li>


            <li>
                <a href="#">Category</a>
                <ul>
                    <li>
                        <form action="view/catagory_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="rc" value="main_course">
                            <button class="menu_button" type="submit"  name="submit">Main Course</button>
                        </form>


                        <ul>
                            <li>
                                <form action="view/catagory_search_main_course.php" method="POST" target="_blank"> 
                                    <input type="hidden" name="recepie_cuisine" value="american">
                                    <button class="menu_button" type="submit"  name="submit">American</button>
                                </form>
                            </li>
                            <li>
                                <form action="view/catagory_search_main_course.php" method="POST" target="_blank"> 
                                    <input type="hidden" name="recepie_cuisine" value="indian">
                                    <button class="menu_button" type="submit"  name="submit">Indian</button>
                                </form>
                            </li>
                            <li> 
                                <form action="view/catagory_search_main_course.php" method="POST" target="_blank"> 
                                    <input type="hidden" name="recepie_cuisine" value="italian">
                                    <button class="menu_button" type="submit"  name="submit">Italian</button>
                                </form>
                            </li>
                            <!--                            <li>
                                                            <form action="view/catagory_search_main_course.php" method="POST" target="_blank"> 
                                                                <input type="hidden" name="recepie_cuisine" value="chinese">
                                                                <button class="menu_button" type="submit"  name="submit">Chinese</button>
                                                            </form>
                                                        </li>-->
                        </ul>
                    </li>


                    <li>
                        <form action="view/catagory_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="rc" value="appetizer">
                            <button  class="menu_button" type="submit"  name="submit">Appetizer</button>
                        </form>

                        <ul>

                            <li>
                                <form action="view/catagory_search_appetizer.php" method="POST" target="_blank"> 
                                    <input type="hidden" name="recepie_cuisine" value="chinese">
                                    <button class="menu_button" type="submit"  name="submit">Chinese</button>
                                </form>
                            </li>
                            <li>
                                <form action="view/catagory_search_appetizer.php" method="POST" target="_blank"> 
                                    <input type="hidden" name="recepie_cuisine" value="japanese">
                                    <button class="menu_button" type="submit"  name="submit">Japanese</button>
                                </form>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <form action="view/catagory_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="rc" value="drink">
                            <button class="menu_button"  type="submit"  name="submit">Drink</button>
                        </form>

                    </li>
                    <li>
                        <form action="view/catagory_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="rc" value="dessert">
                            <button class="menu_button" type="submit"  name="submit">Dessert</button>
                        </form>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#">Cuisine</a>
                <ul>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="american">
                            <button class="menu_button" type="submit"  name="submit">American</button>
                        </form>
                    </li>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="indian">
                            <button class="menu_button" type="submit"  name="submit">Indian</button>
                        </form>
                    </li>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="chinese">
                            <button class="menu_button" type="submit"  name="submit">Chinese</button>
                        </form>
                    </li>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="japanese">
                            <button class="menu_button" type="submit"  name="submit">Japanese</button>
                        </form>
                    </li>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="italian">
                            <button class="menu_button" type="submit"  name="submit">Italian</button>
                        </form>
                    </li>
                    <li> 
                        <form action="view/cuisine_search.php" method="POST" target="_blank"> 
                            <input type="hidden" name="recepie_cuisine" value="mexican">
                            <button class="menu_button" type="submit"  name="submit">Mexican</button>
                        </form>
                    </li>
                </ul>
            </li>


            <li> 
                <a href="view/faq.php"  target="_blank">Faq</a>   
            </li>
            <li> 
                <a href="view/report.php"  target="_blank">Report</a>   
            </li>

            <li>
                <a href="view/signin.php"  target="_blank">Sign in</a>
            </li>
            <li>
                <a href="#"  target="_blank">Search   <i class="fa fa-search" aria-hidden="true"></i></a>
            </li>

        </ul>
    </div>
</div>