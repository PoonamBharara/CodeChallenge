


<?php

//Write a PHP script to get the PHP version and configuration information.

//echo phpinfo();

    echo "PHP version: " . phpversion();

    echo "Configration value:   " . ini_get('post_max_size') . "<br>";

//Write a PHP script to display the following strings.

    echo "Tomorrow I \'ll learn PHP global variables." . "<br>";
    echo 'This is a bad command : del c:\\*.*';

//3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document. 

    $var = "PHP Tutorial";
?>
<!Doctype html>
<html>
    <head>
        <title><?php echo $var;?></title>
    </head>

    <body>
        <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source
          general-purpose scripting language. It is a cross-platform, HTML embedded 
          server-side scripting language and is especially suited for web development.
        </p>
        <p><a href="https://www.codecademy.com/resources/blog/php-code-challenges-for-beginners/">Go to the <?php echo $var?></a>



<!-- 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement. Go to the editor -->

        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
            }
        ?>
        <form action="Qn.php" method="post">
                <label>Name:</label>
                <input type="text" name="name"/>

                <button type="submit" name="submit">Submit</button>

                <h3><?php echo $name;?></h3>
        </form>

<!-- 5. Write a PHP script to get the client IP address. -->

        <?php
           echo $_SERVER['HTTP_USER_AGENT'];
            $browser = get_browser();
            print_r($browser);
        

// <!-- 6. Write a simple PHP browser detection script. Go to the editor -->

    $currentFileName = basename($_SERVER['PHP_SELF']);

//8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
    $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    $url = parse_url($url);
    echo '<br>' .'URL scheme:  '. $url['scheme'];
    echo '<br>' . 'URL host:   ' . $url['host'];
    echo '<br>' . 'URL path:  ' . $url['path'];

//9. Write a PHP script, which changes the color of the first character of a word. Go to the editor
// Sample string : PHP Tutorial
// Expected Output :
// PHP 

    $text = 'PHP Tutorial';
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    echo $text; 

//10. Write a PHP script, to check whether the page is called from 'https' or 'http'. 
    
    if(!empty($_SERVER['HTTPS'])){
        echo "<br>" ."HTTPS enabled";
    }else{
        echo "<br>"."HTTPS disabled";
    }
    $http = $_SERVER['HTTP'];
    echo "<br>". $http;

//11. Write a PHP script to redirect a user to a different page

  //Answer:  header("location:https://www.w3resource.com/");

 // 12. Write a simple PHP program to check that emails are valid.

    $email = "poonam@gmail.com";
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo $email ."email is validated";
    }else{
        echo "email is not validated"."<BR>";
    }
    
//13. Write a e PHP script to display string, values within a table.

     $a = "Salary of Mr. A";
     $b = "Salary of Mr. B";
     $c = "Salary of Mr. B";
?>
    <style>
        table, td{
            border:1px solid black; border-collapse:collapse;
        }

    </style>
    <table>
        <tr>
            <td ><?php echo $a;?></td>
            <td>1000</td>
        </tr>
        <tr>
            <td><?php echo $b;?></td>
            <td>1200</td>
        </tr>
        <tr>
            <td><?php echo $c;?></td>
            <td>1400</td>
        </tr>
        
    </table>


<?php

//14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). 

$allFiles = file('https://www.w3resource.com/php-exercises/php-basic-exercises.php');
foreach($allFiles as $lineNum => $line){
    //    echo "This is source code of the file:  ". $line;
    
}

//15. Write a PHP script to get last modified information of a file. 

    $currentFileNamee = basename($_SERVER['PHP_SELF']);

    echo "Filename is:  ". $currentFileNamee;
    $file_last_modified = filemtime($currentFileNamee);
    echo "<br>". "Last modified:  ". date("l, dS, Y, h:ia", $file_last_modified). "\n";

//  16. Write a PHP script to count number of lines in a file.

    $noOfFiles = count(file($currentFileNamee));
    echo "<br>". "Number of files: " . $noOfFiles;

 //17 Write a PHP script to print current PHP version.

   $php_version =  phpversion();
   echo "<br>". "PHP Version is: ".$php_version;

//18. Write a PHP script to delay the program execution for the given number of seconds. 

    //current time
    echo "<br>" ."Current time is: " .date('h:i:s') . "\n";
    //sleep for 5 seconds
    sleep(5);
    //wake up
    echo "Execution time is:  ".date('h:i:s') . "\n";


 //   19. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.
        echo "Prited string A01 to A05" . "<br>";
        $s = 'A01';

        for($n=0; $n<=5; $n++){
           echo "<br>" .$s . "<br>";
           ++$s; 
        }
//20. Write a PHP script to get the last occurred error. 

        echo $x;
        echo "<pre>";
        print_r(error_get_last());
        echo "</pre>";
    
// 21. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.     
  
        function ternary_check($n){
            $r = $n > 30
            ? "Greater than 30"
            : ($n > 20
            ? "Greater than 20"
            : ($n > 10
            ? "Greater than 10"
            :  "Input should atleast greater than 10"));
        echo $n. " : " .$r. "\n";
        }

        ternary_check(2);


//22. Write a PHP script to get the full URL. 

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo "<br>" .$fullurl;

// 23. Write a PHP script to compare the PHP version. Go to the editor
// Note : Use version_compare() function and PHP_VERSION constant.
        echo "<br>" .version_compare(PHP_VERSION, '7.2');
        echo "<br>"."my php version is  ". PHP_VERSION . "<br>";

//24. Write a PHP script to get the name of the owner of the current PHP script. 

 echo "\n"."Owner of the current php script:  " . get_current_user();


 //25. Write a PHP script to get the document root directory under which the current
 // script is executing, as defined in the server's configuration file. 


        $c = getenv('DOCUMENT_ROOT');
        echo "\n" .$c. "\n";
    ?>            
    </body>
</html>
