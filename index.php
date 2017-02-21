<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Functions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php 
        /* Write your PHP here */

        /* Functions in PHP also look similar to functions in JS. To create a function in php, you need to use the 'function' keyword. PHP functions can also take paramenters and the are also able to return info. Global and local vars still work the same way in php as they do in JS. */
        function greetUser() {
            print_r('<br>Hello!<br>');
        }

        /* In PHP you also need to call the function before it can run.*/
        greetUser();

        /*Example of a php function that takes in parameters and returns a value.*/
        function totalCost($a, $b, $c) {
            $sum = $a + $b + $c;
            return $sum; // Returns send a value outside of a function so that it can be accessed and used.
        }

        echo ('<br>Your total for today is, $' . totalCost(25, 14, 6) . '.00');


        
        ?> 

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
