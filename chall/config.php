<?php

    session_start();

    $flug = "FLAG{DamnThisGuyCantCodeForShit}";

    $db = new SQLite3('../ihack.db');

    if (isset($_GET['version'])) {
        $version = $db->querySingle('SELECT SQLITE_VERSION()');
        echo "SQLite version is " . $version . "\n";
    }
?>