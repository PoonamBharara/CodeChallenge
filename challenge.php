<?php
        if(isset($_POST['submit'])){
            echo "hello";
                                
            $name = $_POST['name'];
?>
        <?php
             echo $name;
             }
        ?>
        
<!Doctype html>
<html>
    <head>
        <title>First Challenge</title>
    </head>
    <body>
        <h1><?php  echo "Hello World"; ?></h1>

        <?php
                //challange 1
                $mary = "Marry";
                $has = "Lamb";

                //challange 2
                echo "<h2>{$mary} had a little {$has}</h2>";

           
                //challange 3
                $string = "I am a String type";
                $dataDoubleType = 10.384; 
                $dataBoolean = True;
                $dataNullType = '';

            echo "The value is: {$string}  </br>The value is: {$dataDoubleType}  </br> The value is:{$dataBoolean}  </br> The value is :{$dataNullType}";

                //challange 4

                $current_month = "October";

                
                //challange 6

        ?>
        
            <form action="second.php" method="post">
                <label>Please Enter your name:</label>
                <input type="text" name="name"/>
                <button type="submit" name="submit">Submit</button>
            </form>

        <?php
            //challange 8

            function AreaOfRectangle($height, $width){

                $totalArea = $height * $width;
                $output =  "This rectangle is {$height} inches high and {$width} inchhes wide and has an area of {$totalArea} square inches ";
                echo $output;
                return $output; 
            }

            AreaOfRectangle(4,5);

            //challenge 9
        ?>
            <form action="second.php" method="post">
                <label>Height of the rechtange:</label>
                <input type="number" name="height"/>
                <label>Width of the rechtange:</label>
                <input type="number" name="width"/>
                <button type="submit" name="submit">Submit</button>
            </form>

        <?php
            
            //challenge 10
            //echo phpinfo();
            //echo "PHP version: " . phpversion();
            echo "Configration value:   " . ini_get('post_max_size') . "<br>";
            //echo "configration value: " . init_get('register_globals');
            $ipAddress = $_SERVER["REMOTE_ADDR"];
            echo "IP Address is: " . $ipAddress . "<br>";
           
            echo $_SERVER['HTTP_USER_AGENT'];
            $browser = get_browser();
            print_r($browser);
        ?>


    </body>
</html>