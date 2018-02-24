<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        
        <button>Print Receipt</button>
        <a href="../homepage.html"><button>Return Home</button></a>
        
    </body>
</html>