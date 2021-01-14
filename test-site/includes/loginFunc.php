<?php 


    $name = $_POST['name'];
    $password = $_POST['password'];
    echo "Configuring password";
    

    // Dit is inderdaad niet hoe het werkt maar is een prototype
    if ( $password == 'test' )
    {
        $rederict_site = 'http://jan.hoeheddegedagedaan.nl/';
    } else {
        $rederict_site = '../login.php';
    }

?>

<script type="text/javascript">location.href = <?php echo '"' . $rederict_site . '"'; ?>;</script>
