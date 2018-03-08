<html>
<body>
         <link rel="stylesheet" href="Shop.css" type="text/css">
         
                 <style>
       
        
          #groupbox3 {
                        top:7em;
                        left:32em;
                        width:30em;
                        height:17em;
                        position:absolute;
                        border-style:groove;
        }
        
     
</style>
    <ul>
    
    <body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')"</body>
   <li style="float:left"><a class="active" href="#home">Contacts</a></li>
 <li style="float:right" ><a href="../homepage.html">Exit</a></li>
     <li style="float:right"><a href="../ebusiness/Ebus1.php">Shop</a></li>
        <li style="float:right"><a href="../ebusiness/AboutUs.html">Abouts Us</a></li>
   <li style="float:right" ><a href="../ebusiness/EbusHomepage.html">Home</a></li>
   
 
</ul>
<div id ="groupbox3">
<center>
<h2>Submit Form</h2>
</center>

Welcome: <?php echo $_GET["name"]; ?><br>
From: <?php echo $_GET["country"]; ?><br>
Your commit was recieved as: <?php echo $_GET["subject"]; ?><br>
</div>

   
   

</body>
</html>