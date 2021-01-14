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
                <img class="pc-devices-logo"        src="media/images/banners/index/top-homepage-banner/homepage-banner-pc/homepage-banner-1-pc.jpeg" alt="GigaFix Homepage banner for pc" />
                <img class="tablet-devices-logo"    src="media/images/banners/index/top-homepage-banner/homepage-banner-tablet/homepage-banner-0-tablet.jpeg" alt="GigaFix Homepage banner for tablet" />
                <img class="phone-devices-logo"     src="media/images/banners/index/top-homepage-banner/homepage-banner-phone/homepage-banner-1-phone.jpeg" alt="GigaFix Homepage banner for phone" />

                <div class="banner-text">
                    
                    <h1><strong>GigaFix Computer repair specialist<strong></h1>
                    <a href="#section-2" class="fa fa-arrow-down"></a>
                    <span id="section-2"></span>

                </div>
            </div>
        </div>

        
        <div class="content-containter"> <!-- a quick explain about GigaFix -->

            <div>
                <h2>GigaFix</h2>
                <p>Op het aangegeven tijdstip krijg je je apparaat terug - allemaal netjes en gerepareerd! Zorg ervoor dat u het daarna voor uw eigen plezier gebruikt.</p>
            </div>

            <div>
                <h2>Dienst</h2>
                <p>We weten hoe vaak het onhandig is om uw apparaten bij ons te brengen. Daarom kunnen we bij u thuis of op kantoor langskomen.</p>
            </div>

            <div>
                <h2>Werk techniek</h2>
                <p>We behandelen elk afzonderlijk computerprobleem of project alsof het ons eigen probleem is, wat resulteert in efficiënte resultaten en een redelijke prijs (aangezien we alles eerder dan op schema afmaken en er niet achter blijven)</p>
            </div>

        </div>

        <!-- Homepage banner -->
        <img  class="phone-devices-logo banner"     src="media/images/banners/index/homepage-banner/homepage-banner-phone.jpeg" alt="random banner for phone" />
        <img  class="tablet-devices-logo banner"    src="media/images/banners/index/homepage-banner/homepage-banner-tablet.jpeg" alt="random banner for tablet" />
        <img  class="pc-devices-logo banner"        src="media/images/banners/index/homepage-banner/homepage-banner-pc.jpeg" alt="random banner for pc" />
        
        <div class="content-containter"> <!-- a quick overlook about the pages -->

            <div>
                <h2>Service</h2>
                <p>In tegenstelling tot de meeste andere leveranciers van technische ondersteuning en technische reparaties, Zullen we nooit van u te profiteren en u astronomische kosten te laten betalen! Ons prijsbeleid is altijd eerlijk en evenwichtig!</p>
            
            </div>
            
            <div>
                <h2>Traag?</h2>
                <p>Is uw computer traag? Zorg voor een opgeruimde pc. Zo houdt u overzicht en uw computer zal programma’s sneller opstarten. Wij schonen uw apparaat graag voor u op en zorgen dat hij virusvrij is. Wij leveren wij ook virusscanners voor 1 of meerdere computers.</p>
            </div>

        </div>

        <div class="content-containter">

            <div>
                <h2>Upgrade!</h2>
                <p>Na een aantal jaar heeft iedere pc merkbaar last van slijtage. De systeemkast wordt erg heet, de harde schijf blijft maar ratelen en programma’s starten tergend langzaam op. Tijd om je hardware te upgraden! Vraag naar de mogelijkheden om uw pc beter en sneller te maken wij geven graag advies en inzicht in de kosten zodat u makkelijk kunt kiezen wat u gaat doen.</p>
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