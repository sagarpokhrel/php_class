<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <?php $color = array('black', 'pink', 'green');  ?>
        <?php array_pop ($color);  ?>
        <?php echo $color[1]; ?><br>
        
        <?php array_push ($color, "white", "gray", "purple")?>
        <pre><?php echo print_r ($color); ?></pre>
        Implode: <?php echo implode (" ", $color); ?> <br>
        <?php $explode = " Never give up in life" ;
        print_r (explode (" ", $explode ));?> <br>

    </body>

</html>


