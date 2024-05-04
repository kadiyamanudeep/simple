<?php
require_once './inc/functions.php';
require './inc/variable.php'; ?>
<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<body>


    <!--  ***********************************
          *       Include and Rquire        *
          *********************************** -->

    <?php include './temmplates/nav.php' ?>
    <h1><?php echo $title; ?></h1>
    <?php para_print($description) ?>
    <small><?php echo $author; ?></small>



</body>

</html>