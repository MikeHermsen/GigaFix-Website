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
                <p>Ons team bestaat uit studenten die u willen helpen met uw Computer/Laptop probleem, Hierbij zorgen wij voor een goede service met een lage prijs. Vraag nu het factuur op via Contact.</p>
            </div>

            <div>
                <h2>Samenwerking</h2>
                <p>Door meerderen studenten rondom de regio zijn wij aan het uitbreiden om een groter gebied te kunnen helpen met hun computer gerelateerde vragen.</p>
            
            </div>

        </div>
        
        <div id="section-4"></div>
        
        <!-- Team Banner -->
        <img  class="phone-devices-logo banner"     src="media/images/banners/about-us/team/team-banner-phone.jpeg" alt="Our team" />
        <img  class="tablet-devices-logo banner"    src="media/images/banners/about-us/team/team-banner-tablet.jpeg" alt="Our team" />
        <img  class="pc-devices-logo banner"        src="media/images/banners/about-us/team/team-banner-pc.jpeg" alt="Our team" />
        
        <div class="content-containter" id="section-5">

            <div>
                <h2>Mike Hermsen</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe numquam, tenetur, in delectus a quisquam eaque praesentium ad totam consequuntur eos error porro quos quasi asperiores? Vel similique illum odio!</p>
            </div>

            <div>
                <h2>Igor de Beijer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam quas tempore sunt. Repellendus ducimus laborum illum totam dolore. Temporibus explicabo voluptates consectetur iure dolor aperiam sit, <a href="https://igordebeijer.com/">Igordebeijer.com</a></p>
            
            </div>
            
            <div>
                <h2>Feedback</h2>
                <p>Laat ons u ervaring weten door die via google te delen, Wij stellen dit op prijs om daardoor beter te worden en beteren service te verlenen.</p>
            </div>

        </div>

        <!-- Feedback Banner -->
        <img  class="phone-devices-logo banner"     src="media/images/banners/about-us/feedback/feedback-banner-phone.jpeg" alt="Feedback banner" />
        <img  class="tablet-devices-logo banner"    src="media/images/banners/about-us/feedback/feedback-banner-tablet.jpeg" alt="banner placeholder" />
        <img  class="pc-devices-logo banner"        src="media/images/banners/about-us/feedback/feedback-banner-pc.jpeg" alt="banner placeholder" />
        
    <section>


    <!-- Including the footer to the webpage -->
    <?php include_once "includes/footer.php" ?>

    <!-- Put the scripts under here, this make the site from loading slower -->
    <script type="text/javascript" src="scripts/js/animations.js"></script> <!-- Script for smooth sliding the header up -->    
    
</body>

</html>