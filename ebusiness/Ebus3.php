<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="Shop.css" type="text/css">
        <style>
       
        
          #groupbox {
                        top:7em;
                        left:32em;
                        width:30em;
                        height:30em;
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
    
        <body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>
        <title>RECEIPT</title>
    </head>
    <body>
         
             <center>
        <h2>RECEIPT</h2>
        </center>
        <div id ="groupbox">
                
        
        
       <?php  
        //Echo session varaibles that were set to the previous page
        // putting in variables 
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        
        <p class="name">
            <?php
            // carrying over username
            echo "Name: " . $_SESSION["name"] . ".";
            ?>
        </p>
        
        <p class="email">
            <?php
            // carrying over email
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        </p>
        
        <p class="total">
            <?php
            // carrying over total
            echo "Total: " . $_SESSION["totalPrice"] . ".";
            ?>
        </p>
        
        <a href="../homepage.html" class="buttonhome">Return Home</a> 
        </br>
        </br>
        <button onclick="myPrint()" class="buttonprint">Print Receipt</button>
        </div>
        
        <script>
        function myPrint() {
            window.print();
                }
        </script>
    </body>
</html>