<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <?php
        $name = array('Sagar','Nitish','Rabin');
        echo $name[1]; //this is a single line comment for php
        ?><br>

        <!--  This section is html comment 
        for the multiple lines-->

        <?php $food = array('Momo', 12, 15, array('Asian', 'French', 'German') );
        echo $food [2];
        ?> <br>
        <?php echo $food[3][2];  ?>
        <?php $food[55] = "Mango"; ?> <br>
        <?php $food[500] = "Banana"; ?> <br>
        <pre>
            <?php echo print_r ($food) ?> <br>
        </pre>

        <?php  $cuisine = array("Italian"=>"Pizza", "Indian"=>"Samosa", "Nepali"=>"Momo")  ?>
        <?php echo $cuisine[Nepali] . " is " . $name[0]. "'s" . " favourite" . " food" ; ?> <br>
        <pre><?php echo print_r ($cuisine); ?> </pre>
    

    </body>

</html>


