<?php
class C_hello extends CI_Controller{
    function index(){
        ?>
        <html>
            <head>
                <title>Hello World</title>
    </head>
    <body>
        <?php echo "hello world"; ?>
    </body>
    </html>
    <?php
    }
}