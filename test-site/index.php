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
    
        <div> <!-- This is the top banner with the button in it -->
            <div class="top-banner"> 
                <img class="pc-devices-logo" src="media/images/banners/index/homepage-banner-0-pc.jpeg" alt="GigaFix Homepage banner" />
                <img class="phone-devices-logo" src="media/images/banners/index/homepage-banner-0-phone.jpeg" alt="GigaFix Homepage banner" />
                <div class="banner-text">
                    
                    <h1>GigaFix Computer repair specialist</h1>
                    <a href="#section-2" class="fa fa-arrow-down"></a>
                    <span id="section-2"></span>

                </div>
            </div>
        </div>

        
        <div class="content-containter"> <!-- a quick explain about GigaFix -->
            
            <div>
                <h2>Home</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>GigaFix</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>Diensten</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

        </div>

        <!-- Homepage banner -->
        <img  class="phone-devices-logo banner" src="media/images/banners/index/homepage-banner-phone.jpeg" alt="Phone banner" />
        <img  class="pc-devices-logo banner" src="media/images/banners/index/homepage-banner-pc.jpeg" alt="PC Banner" />
        
        <div class="content-containter"> <!-- a quick overlook about the pages -->

            <div>
                <h2>Service</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            
            </div>
            
            <div>
                <h2>Contact</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

        </div>

        <div class="content-containter">

            <div>
                <h2>Regio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

            <div>
                <h2>Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, ducimus magnam quaerat.</p>
            </div>

        </div>

    <section>
    

    <!-- Including the footer to the webpage -->
    <?php include_once "includes/footer.php" ?>

    <!-- Put the scripts under here, this make the site from loading slower -->
    <script type="text/javascript" src="scripts/js/animations.js"></script> <!-- Script for smooth sliding the header up -->    
    
    <?php include_once 'includes/google-scripts.php';?>

</body>

</html>