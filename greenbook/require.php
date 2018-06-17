<?php

#incorporate mysql connect script
require ('connect_db.php');
#display version and host
if (mysqli_ping($dbc)) {
    echo 'Mysql Server' . mysqli_get_server_info($dbc) .
    ' on ' . mysqli_get_host_info($dbc);
}
?>
