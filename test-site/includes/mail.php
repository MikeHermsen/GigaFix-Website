<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";

    // Hier kan je het scirpt maken die zorgt dat alle forums worden opgeslagen

    echo "Thank You!";

?>

<script type="text/javascript">location.href = '../contact.php?username=<?php echo $name ?>';</script>