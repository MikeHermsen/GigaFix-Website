
        <?php
        $currentFileName = basename($_SERVER['PHP_SELF']);
        $i = 0;
            
        $pageLinks = array(
            ['index.php', 'HOME'],
            ['about-us.php', 'OVER ONS'],
            ['service.php', 'SERVICE'],
            ['contact.php','CONTACT'],
            ['login.php','LOGIN']);
        ?>
            
        <div id="container-side-nav">

            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>
            <a href="<?php echo $pageLinks[$i][0] ?>" class="nav-link <?php if ($currentFileName == $pageLinks[$i][0]) {echo 'active-nav-link"';} else {echo ' default-nav-link"';} ?>"> <?php echo $pageLinks[$i][1]; $i++; ?></a>

        </div>