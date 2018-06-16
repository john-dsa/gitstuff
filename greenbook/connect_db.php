<?php
#connect to the database
$dbc = mysqli_connect
('localhost', 'db_user', '1qazXSW@', 'newdb')
or die
(mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');
 ?>
