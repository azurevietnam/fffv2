<?php
require_once 'require.php';
$mysql->loadarray("FROM SELECT * FROM  `v2_customer_information` WHERE status = 0 LIMIT 0,10")

?>