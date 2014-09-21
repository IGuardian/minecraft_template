<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <!-- Title: Start -->
        <title>
         <?php
           if($_GET['page']=='contact'){
           // Display title for Contact.
           echo 'Home > Contact Us';
           }elseif($_GET['page']=='about_us'){
           // Display title for about page.
           echo 'Home > About Us';
           }else{
           // Display title for main page.
           echo 'Home';
           }
         ?>
        </title>
        <!-- Title: End -->
        <!-- Meta: Start -->
        <meta name="description" content="Minecraft community website.">
        <meta name="author" content="Internet Guardians Community">
        <!-- Meta: End -->
        <!-- Style: Start -->
        <link rel="stylesheet" href="./stylesheets/main.css">
        <link rel="shortcut icon" href="./images/favicon.ico">   
        <!-- Style: End -->
  </head>
  <body>
        <div id="header">
           <img align="left" src="./images/Banner.png" alt="Banner">
           <img align="right" src="./style_images/background_header_sun.png">
        </div>
        <div id="nav">
         <?php
           if($_GET['page']=='contact'){
           // Display Nav for Contact.
           echo ' | ';
           echo '<a href="index.php" target="_self">Home</a>';
           echo ' | ';
           echo '<a href="index.php?page=about_us" target="_self">About Us</a>';
           echo ' | ';
           echo '<del>Contact</del>';
           echo ' | ';
           }elseif($_GET['page']=='about_us'){
           // Display Nav for about page.
           echo ' | ';
           echo '<a href="index.php" target="_self">Home</a>';
           echo ' | ';
           echo '<del>About Us</del>';
           echo ' | ';
           echo '<a href="index.php?page=contact" target="_self">Contact</a>';
           echo ' | ';
           }else{
           // Display Nav for main page.
           echo ' | ';
           echo '<del>Home</del>';
           echo ' | ';
           echo '<a href="index.php?page=contact" target="_self">About Us</a>';
           echo ' | ';
           echo '<a href="index.php?page=contact" target="_self">Contact</a>';
           echo ' | ';
           }
         ?>
        </div>
        <div id="content">
         <?php
           if($_GET['page']=='contact'){
           // Display Contact page.
           if(file_exists('./content/content_contact.php'))
           include './content/content_contact.php';
           }elseif($_GET['page']=='about_us'){
           // Display About Us page.
           if(file_exists('./content/content_about_us.php'))
           include './content/content_about_us.php';
           }else{
           // Display Home page.
           if(file_exists('./content/content_home.php'))
           include './content/content_home.php';
           }
         ?>
        </div>
        <div id="footer">
         <?php
           if(file_exists('./content/content_footer.php'))
           include './content/content_footer.php';
         ?>
        </div>
  </body>
</html>
