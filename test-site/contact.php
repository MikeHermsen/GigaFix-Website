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

            <!-- Sends the forum to the server -->
            <form action="includes/mail.php" method="POST">
                <input type="text" name="name" placeholder="Naam *">
                <input type="text" name="email" placeholder="Email *">
                <textarea name="message" placeholder="Laptop gaat niet meer aan" rows="6" cols="25"></textarea><br />
                <input class="button-sumbit-forum" type="submit" value="Send"><input class="button-sumbit-forum" type="reset" value="Clear">
            </form>
            
            <div>

                <h1>Contact</h1>
                
                <!-- This will show when the form was successfully sended -->
                <?php
                    $username = $_GET['username'];
                    if ( strlen($username) > 1 )
                    {
                        echo '<p>' . $username . ', Jouw vraag is met success verstuurd!<br>';
                    }

                    echo '<p>U kunt ook contact met ons opnemen via Google, Mail, Facebook, Messages, Whatsapp, Instagram en bellen.</p>';
                
                ?>
                
            </div>

        </div>

        <div class="content-containter">

            <div>
                <h2>Hello world</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>Hello world</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            
            </div>
            
        </div>

        <!-- contact our team -->
        <img  class="phone-devices-logo banner" src="media/images/banners/contact/contact-us-banner-phone.png" alt="banner placeholder" />
        <img  class="pc-devices-logo banner" src="media/images/banners/contact/contact-us-banner-pc.png" alt="banner placeholder" />
        
    <section>


    <!-- Including the footer to the webpage -->
    <?php include_once "includes/footer.php" ?>

    <!-- Put the scripts under here, this make the site from loading slower -->
    <script type="text/javascript" src="scripts/js/animations.js"></script> <!-- Script for smooth sliding the header up -->    
    
</body>

</html>