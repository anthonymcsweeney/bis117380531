<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
<body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>
<style>
.btn {
    border: none; /* Remove borders */
    color: white; /* Add a text color */
    padding: 14px 28px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

    .info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}
</style>

        <title>Enter Details</title>
    
 <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
    </head>
   
    
        <h1 class ="mainheading">Please enter your payment details</h1>
        
       
            <form action="Ebus3.php" method="POST">
                
               
                <br/>
                 <label for="name">Name:</label>
                    <input type="name" id="name" placeholder="Name" max length="16"> 
                    <br/>
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder= "Email">
                    <br/>
                <label for="user_pin">PIN:</label>
                <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                
                </br></br>
                <button class="btn success" type ="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
             
                
            </form>
            
            
        <br/>
        <button class="btn info"onClick ="validateDetails()">Validate</button>
            
       <div/>
        <script type ="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>