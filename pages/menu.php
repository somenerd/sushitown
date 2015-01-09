

    <?php include('header.php'); ?>
    
    <div id="header">
    <header><h1><img src="img/sushi_town_logo.png" alt="Welcome to Sushi Town!" /></h1></header>
    </div>
 
    <br />
    <div class="clear"></div>
    <p>&nbsp;</p>
    
    <div id="main" class="leftcolumn">
    <nav>
        <ul>
            <li> <a href="index.php"><img src="img/home.png" alt="Home" /></a></li><br/>
            <li> <a href="about.php"><img src="img/about.png" alt="About" /></a></li><br/>
            <li> <a href="menu.php"><img src="img/menu.png" alt="Menu" /></a></li><br/>
            <li> <a href="testimonials.php"><img src="img/testimonials.png" alt="Testimonials" /></a></li><br/>
            <li> <a href="contact.php"><img src="img/contact.png" alt="Contact Us" /></a></li><br/>
            
           
        </ul>
    </nav>
    
    <br />

    
    <div id="main" class="rightcolumn">
    
    <p>
    <h1>Menu</h1></p> <p><h2>Whether you want to chow down or savor the flavor, our cuisine is sure to delight.</h2></p>
    <p>&nbsp;</p>
    <p>Kitchen Open Until 11:00 PM!</p>
    <p>&nbsp;</p>
    <!--<p><img src="img/skipjack-sushi-a.jpg" width="400px"; /></p>-->
    <div class="clear"></div>
    <p>Take your time and examine our menu. We'll be ready to take your order.</p>
    
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
    <p>&nbsp;</p>
    </div>
    <div class="clear"></div>
<?php include('footer.php'); ?>