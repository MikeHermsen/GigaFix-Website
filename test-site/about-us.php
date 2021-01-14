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


        <div class="content-containter" id="section-3"> <!-- Content about gigafix -->

            <div>
                <h2>Ons team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>Samenwerking</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            
            </div>

        </div>
        
        <div id="section-4"></div>
        
        <!-- Team Banner -->
        <img  class="phone-devices-logo banner" src="media/images/banners/about-us/team-banner-phone.jpeg" alt="Our team" />
        <img  class="pc-devices-logo banner" src="media/images/banners/about-us/team-banner-pc.jpeg" alt="Our team" />
        
        <div class="content-containter" id="section-5">

            <div>
                <h2>Mike Hermsen</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>Igor de Beijer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            
            </div>
            
            <div>
                <h2>Lorum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

        </div>

        <!-- Feedback Banner -->
        <img  class="phone-devices-logo banner" src="media/images/banners/about-us/feedback-banner-phone.jpeg" alt="Feedback banner" />
        <img  class="pc-devices-logo banner" src="media/images/banners/about-us/feedback-banner-pc.jpeg" alt="banner placeholder" />

    <section>


    <!-- Including the footer to the webpage -->
    <?php include_once "includes/footer.php" ?>

    <!-- Put the scripts under here, this make the site from loading slower -->
    <script type="text/javascript" src="scripts/js/animations.js"></script> <!-- Script for smooth sliding the header up -->    
    
</body>

</html>