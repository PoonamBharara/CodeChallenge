<!Doctype html>
<html>
    <head>
        <tittle>Welcome</tittle>
    </head>
    <body>
        
                    
    <?php
                if(isset($_POST['submit'])){                    
                  $name = $_POST['name'];
                  if(isset($_POST['height']) || isset($_POST['width'])){
                    $height = $_POST['height'];  
                    $width = $_POST['width'];             
                    }
                }

                function AreaOfRectangle($height, $width){

                    $totalArea = $height * $width;
                    $output =  "This rectangle is {$height} inches high and {$width} inchhes wide and has an area of {$totalArea} square inches ";
                    echo $output;
                    return $output; 
                }
    ?>
        

        <h1><?php echo "Hi, your name is " .$name; ?></h1>
        <h1><?php AreaOfRectangle($height, $width);?></h1>
    </body>
</html>