<?php
require_once './inc/functions.php';
require './inc/variable.php'; ?>
<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<body>






    <!--  ***********************************
          *            NameSpace            *
          *********************************** -->

    <?php
    include './namespace/learningspace.php';

    function double($a)
    {
        return $a + 2;
    }
    echo '<p>' . double(5) . '</p>';
    echo '<p>' . learningSpace\double(5) . '</p>';
    ?>







    <!--  ***********************************
          *       Include and Rquire        *
          *********************************** -->

    <!-- <?php // include './temmplates/nav.php' 
            ?>
    <h1><?php //echo $title; 
        ?></h1>
    <?php // para_print($description) 
    ?>
    <small><?php // echo $author; 
            ?></small> -->



</body>

</html>