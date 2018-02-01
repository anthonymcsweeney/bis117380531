<!DOCTYPE html>
<html>
   <head>
       <title>Select Product</title>
       
       <!--jQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type= "text/javascript" src="cost-calu.js"></script>
       
       
       
      <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
   <li><a class="active" href="#home">Ebusiness 1</a></li>
  <li><a href="Ebus2.php">Ebusiness 2</a></li>
 
    <li style="float:right"><a href="../homepage.html">Homepage</a></li>
</ul>


<body>
 
       
       </head>
       
       <body>
           
           <h4>Select a Product</h4>
           
           <br/>
           
           <form method="POST" action="Ebus2.php"
           <label for="saleforce">
               <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
               SalesForce @ $100
               </label>
               
               </br>
               
               <label for"aws">
                   <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                   AWS @ $300
               </label>
               
               <br/>
               <br/>
               
               <label for="subtotal">
                   Sub Total
                   <input tyoe="text" id="subtotal" value="0.00" readonly/>
               </label>
               
               <br/>
               
               <button type="submit" id="btnProceed" disable>Add to Shopping Cart</button>
               
               </form>
<br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       
        
        </body>
</html>
 
       