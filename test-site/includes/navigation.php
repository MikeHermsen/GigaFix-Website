
    <?php
    $currentFileName = basename($_SERVER['PHP_SELF']);
    $i = 0;
        
    $pageLinks = array(
        ['index.php', 'HOME'],
        ['about-us.php', 'OVER ONS'],
        ['about-us.php#section-1', 'GigaFix'],
        ['about-us.php#section-2', 'Team'],
        ['about-us.php#section-3', 'FeedBack'],
        ['service.php', 'SERVICE'],
        ['contact.php','CONTACT'],
        ['login.php','LOGIN']);
    ?>
    
    <nav> <!-- Shows the links of the websites + the banner page -->

        <img class="nav-logo" height="50px" src="media/images/default/header-banner.png" alt="GigaFix banner" /> 
        
        <div class="navigation-links-container"> <!-- Page links for navigating to other pages -->

            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            
            <div class="dropdown">
                <button class="nav-link dropbtn <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></button>
                <div class="dropdown-content">
                    <a href="<?php echo $pageLinks[$i][0] ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
                    <a href="<?php echo $pageLinks[$i][0] ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
                    <a href="<?php echo $pageLinks[$i][0] ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
                </div>
            </div> 

            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>


        </div>


    </nav>

