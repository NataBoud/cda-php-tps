<?php

// var_dump($GLOBALS);

// echo $GLOBALS['_SERVER']['USERDOMAIN'], PHP_EOL;
// echo $GLOBALS['_SERVER']['USERNAME'];
?>

<?= (isset($_GET['name']) ? $_GET['name'] : 'no name') ?>

<?= (isset($_POST['username']) ? $_POST['username'] : 'no username') ?>