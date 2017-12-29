<?php include "functions.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $string = "hello";$color=""; echo '<span  style="background: '.$color.'">'.$string.'</span>'; ?>
    <?php

    $a=20;$b=10;

    $result = ($a * $b > 100) &&  ($a-$b > 5);

    if($result){
        echo '<p> a string in php code.</p>';
    } ?>

    <?php if(10 > 20): ?>
        <p> a string in php code.</p>
    <?php else: ?>
        <p> a string in php code.12</p>
    <?php endif; ?>



    <?php if(20 > 10){ ?>
        <p> a string in php code.</p>
     <?php }// end if ?>

    <?php echo  sum(10,45); ?>
    <?php echo  sum(23,12); ?>
    <?php echo  sum(98,56); ?>
    <?php echo  sum(14,52); ?>
    <?php echo  sum(0,78); ?>
</body>
</html>