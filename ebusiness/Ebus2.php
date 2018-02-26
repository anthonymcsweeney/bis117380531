<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
<body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>


        <title>Enter Details</title>
    
 <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
    </head>
   
    
        <h1 class ="mainheading">Please enter your payment details</h1>
        
       
            <form action="Ebus3.php" method="POST">
                
               
                <br/>
                 <label for="user_name">Name:</label>
                    <input type="name" id="user_name" placeholder="user name" max length="16"> 
                    <br/>
                    <label for="user_email">Email:</label>
                    <input type="email" id="user_email" placeholder= "user email">
                    <br/>
                <label for="user_pin">PIN:</label>
                <br/>
                <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                
                </br>
                
                <button type ="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            
        <br/>
            <button onClick ="validateDetails()">Validate</button>
       <div/>
        <script type ="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>