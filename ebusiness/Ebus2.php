<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Shop.css" type="text/css">
        
<body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>
<style>
  #groupbox {
                        top:7em;
                        left:33em;
                        width:30em;
                        height:20em;
                        position:absolute;
                        border-style:groove;
        }

</style>
</head>
<body>

<ul>
   <li><a class="active" href="#home">Shop</a></li>
  <li><a href="EbusHomepage.html">Home</a></li>
  <li><a href="Contacts.html">Contact</a></li>
    <li style="float:right"><a href="../homepage.html">Exit</a></li>
</ul>


</style>

</head>
 <div id ="Logo">
        <img src="https://i.pinimg.com/originals/05/c2/1d/05c21d12200c0585f34374830e692576.jpg" width="225" heigth="65">
    </div>

    <body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    

        <title>Enter Details</title>
    
 <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
    </head>
   
    <center>
        <h1 class ="mainheading">Please enter your payment details</h1>
        </center>
         <div id ="groupbox">
       
            <form action="Ebus3.php" method="POST">
                
               
                <br/>
                 <label for="name">Name:</label>
                    <input type="name" id="name" placeholder="John Power" max length="16"> 
                    <br/>
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder= "john@example.com">
                    <br/>
                <label for="user_pin">PIN:</label>
                <input type ="password" id="user_pin" placeholder="****" maxlength="4">
                
                </br></br>
                <button class="btn success" type ="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
             
                
            </form>
            
            
        <br/>
        <button class="btn info"onClick ="validateDetails()">Validate</button>
        </div>
            
       <div/>
        <script type ="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>