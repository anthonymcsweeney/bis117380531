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
        <h2>RECEIPT</h2>
                
         <?php
        // Echo session variables that were set on previous page
        $fullname = $_POST['name'];
        $email = $_POST['email'];
        echo "Total Price: $" . $_SESSION["totalPrice"] . ".</br></br></br>"; 
        echo "Name: $fullname </br></br></br> Email: $email" 
        ?>
        </br>
        <button>Print Receipt</button>
        <a href="../homepage.html"><button>Return Home</button></a>
        
    </body>
</html>