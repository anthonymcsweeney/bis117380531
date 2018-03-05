<?php
//start the session
session_start();
?>


<html>
    <head>
        
        
<body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    
</body>
<style>

 #Logo {
            top:4em;
            left:2em;
            position: absolute;
        }
        
 button[type=submit]:disabled {
                           background-color: grey;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
       button[type=submit]:enabled {
                          background-color:#46a049;
                          color: White;
       }

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

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

  #groupbox {
                        top:7em;
                        left:33em;
                        width:30em;
                        height:20em;
                        position:absolute;
                        border-style:groove;
        }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #b4b4b4;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #787878
}

.active {
    background-color: #33CEFF;
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
                    <input type="text" id="name" placeholder="John Power" name = "name" max length="16"> 
                    <br/>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name = "email"  placeholder= "john@example.com">
                    <br/>
                <label for="pin">PIN:</label>
                <input type ="password" id="user_pin" placeholder="****" maxlength="4">
                
                </br></br>
                <button class="btn success" type ="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
             
                
            </form>
            
            
        <br/>
        <button class="btn info" onClick="validateDetails()">Validate</button>
        
         </div>   
       
        <script type ="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["totalPrice"] = $_POST["totalPrice"];
         $_SESSION["email"] = $_POST["email"];
          $_SESSION["name"] = $_POST["name"];
        ?>
        
        
       
    </body>
</html>