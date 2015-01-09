

    <?php include('header.php'); ?>
    
    
    <header>
        <h1>
            <img src="img/sushi_town_logo.png" alt="Welcome to Sushi Town!" />
        </h1>
    </header>
     
    <div class="leftcolumn">
        <nav>
            <ul>
                <li> <a href="index.php"><img src="img/home.png" alt="Home"/></a></li>
                
                <li> <a href="about.php"><img src="img/about.png" alt="About" /></a></li>
                
                <li> <a href="menu.php"><img src="img/menu.png" alt="Menu" /></a></li>
                
                <li> <a href="testimonials.php"><img src="img/testimonials.png" alt="Testimonials" /></a></li>
                
                <li> <a href="contact.php"><img src="img/contact.png" alt="Contact Us" /></a></li>       
            </ul>
        </nav>
    </div>
    

    
    <div id="main" class="rightcolumn">
    
    
    <h1>Menu</h1> 

    <h2>Whether you want to chow down or savor the flavor, our cuisine is sure to delight.</h2>
    
    <p>Sushi Town takes great pride in serving the freshest, most delectable sushi, whether it's made from raw fish, cooked fish, vegetables, or tempura. In addition to our sushi, sashimi, and nigiri, we also offer a wide variety of appetizers, salads, and soups. We're confident we have something to please everyone in your group!</p>

    <p>Our kitchen is open until 11:00 PM, 7 days a week. Take your time and examine our menu. <br/>We'll always be ready to take your order.</p>
    
    <!--<p><img src="img/skipjack-sushi-a.jpg" width="400px"; /></p>-->
    
    
    
       <?php

        $x = simplexml_load_file("sushimenu.xml");

        foreach($x->children() as $category){
                echo "<h1>";
                echo ucfirst($category->getName()); //getName will take the actual word in the xml tag and display it
                echo "</h1>";
                echo "<h3>";
                echo $category->attributes();
                echo "</h3>";

                echo "<ul>";
                foreach($category->children() as $item){  //forCeption - gets the descendant children
                echo "<li>";
                echo ucfirst($item->name);
                echo "&nbsp; -  -   -  -   -   -   -   -    -   -   - &nbsp;";
                echo ucfirst($item->cost);
                echo "</li>";
                }
                echo "</ul>";
                echo "<p>&nbsp;</p>";
            }
        ?> 
       

    <!--<img src="img/menu1.png" width="700px"; />
    <img src="img/menu2.png" width="700px"; />
    <img src="img/menu3.png" width="700px"; />-->
    
    </div>
    <div class="clear"></div>
<?php include('footer.php'); ?>