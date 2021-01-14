<!DOCTYPE html>
<html lang="nl">

<head> <!-- the structure of the page will be created here -->

    <!-- Importing the head to the main file -->
    <?php include_once "includes/head.php" ?>

</head>


<body> <!-- The content of the page -->

    <!-- Including the header for the page -->
    <?php include_once "includes/header.php" ?>


    <!-- Including the header for the page -->
    <?php include_once "includes/navigation.php" ?>

    <section> <!-- NON Static content -->
    
        <!-- Made an mistake in the code so i fixed it with this for now. -->
        <div id="section-1" class="quick-fix-for-deployment"></div>

        
        <div class="content-containter">

            <form action="includes/loginFunc.php" method="POST">
                <input type="text" name="name" placeholder="Naam *">
                <input type="password" name="password" placeholder="Password *">
                <input class="button-sumbit-forum" type="submit" value="LOGIN">
            </form>
                    
            <div>
                <h2>Hello world</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

        </div>
              
        <!-- Security banner -->
        <img  class="phone-devices-logo banner" src="media/images/banners/login/security-banner-phone.jpeg" alt="Security banner" />
        <img  class="pc-devices-logo banner" src="media/images/banners/login/security-banner-pc.jpeg" alt="Security banner" />
        
    <section>


    <!-- Including the footer to the webpage -->
    <?php include_once "includes/footer.php" ?>

    <!-- Put the scripts under here, this make the site from loading slower -->
    <script type="text/javascript" src="scripts/js/animations.js"></script> <!-- Script for smooth sliding the header up -->    
    
</body>

</html>