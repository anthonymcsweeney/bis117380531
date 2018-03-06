
<!DOCTYPE html>
<html>
    <head>
        
                <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Shop.css" type="text/css">
<style>

   
        #groupbox {
                        top:7em;
                        left:33em;
                        width:30em;
                        height:27em;
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

    <body style="background-image:url('http://adoptusanimalrescue.org/wp-content/uploads/2012/10/Blue-fade-background.jpg')">
    




        
        <title>Select Product</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css/">
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <div id ="Logo">
        <img src="https://i.pinimg.com/originals/05/c2/1d/05c21d12200c0585f34374830e692576.jpg" width="225" heigth="65">
    </div>
    </head>
    
    <body>
        <center>
            <h2>Select a Product</h2>
            </center>
            
            <div id ="groupbox">
            <br/>
            
            <form method="POST" action="Ebus2.php">
                
                <label for="salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                </label>
                
                <br/>
                
                <label for="cloud9">
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>                
                
                <br/>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                
                <br/>
                
                <label for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>

                <br/>                
                <br/>
                <br/>
                
                <label for="subTotal">
                    Sub Total
                    <input type="text" id="subTotal" name="subTotal" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                
                <label for="discountAmt">
                    Discount @ 5%
                    <input type="text" id="discountAmt" name="discountAmt" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
               
                <label for="vatAmt">
                    VAT @ 10%
                    <input type="text" id="vatAmt" name="vatAmt" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
               
                <label for="totalPrice">
                    Total
                    <input type="text" id="totalPrice" name="totalPrice" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                
                <button type="submit" id="btnProceed" class="btn success" disabled>Add to Shopping Cart</button>
              
            </form>
            
            <br/>
            <button onClick="calcSub()"  class="btn warning">Calculate Cost</button>
            
            <a role="button" href="Ebus1.php" class="btn danger">Clear Choice</a>
            </div>
     
        
    </body>
</html>
       