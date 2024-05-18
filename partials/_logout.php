<?php
    session_start();
    echo "Logging out. Please wait...";
    session_destroy(); // For logging out.
    header("Location: /STUDDISCUSS");
?>
