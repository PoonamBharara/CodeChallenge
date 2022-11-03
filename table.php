<!DOCTYPE html>
<html>
    <head>
        <title>tables</title>
    </head>
    <body>
        <table>
            <caption>Tables 1 to 12 </caption>
            <tbody>
                

                    <?php
                    
                    for($i=1;$i<=10;$i++){

                        echo "<tr>";
                        for($j=1;$j<=12;$j++){
                            $p = 0;
                            $p = $i * $j;
                            
                            echo "<td>" .$p ."      ". "</td>";
                        }
                        echo "</tr>";
                        echo "<br>";
                    }

                    ?>

                    <style>
                        body{
                            position: relative;
                        }
                        table{
                            position: absolute;
                            left:30%;
                            top:10%;
                        }
                        td{
                            margin-left:15px;
                            background-color:skyblue;
                            padding:12px;
                        }
                        caption{
                            font-size:21px;
                            font-weight:800px;
                            color:black;
                            padding: 30px;
                        }
                    </style>
                
            </tbody>
        </table>
    </body>
</html>