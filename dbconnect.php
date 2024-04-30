<?php

define('DB_HOST', 'tradebook-rds.csvm1om8pwkq.us-east-1.rds.amazonaws.com');
define('DB_NAME', 'tradebook');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'tradebook123');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));