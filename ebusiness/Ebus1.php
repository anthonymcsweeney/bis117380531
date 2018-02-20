
 <!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="../mystylesheer.css" type="text/css/">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
             
  
            <h3>Select a Product</h3>
            
            <br/>
            
            <form class="form" method="POST" action="Ebus2.php">
              
              <label for="Salesforce">
                <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Service @ $300
              </label>
              
                <br/>
               <label for"cloud 9">
                   <input type="radio" id="cloud 9" name="product" onClick="disablebtnProceed()"/>
                   Cloud 9 @ $200
               </label>
             
              <br/>
              <label for"gmail">
                   <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                   Gmail 9 @ $400
               </label>
               <br><br><br>
              
              
              <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" name="total" value="0.00" readonly/>
              </label>
              
              <br><br>
              
               <label for = "discount">
                Discount @ 5%:
                <input type = "text" id ="discount" name ="discount" valu ="0.00" readonly/>
                
              <br><br>
            
                <label for = "vat">
              Vat @ 10%:
                <input type = "text" id ="vat" name ="vat" valu ="0.00" readonly/>
                
                <br><br>
                
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br><br>
            <button onClick="calcSub()">Calculate Cost</button>
            <a class="button" role="button" href="Ebus1.php">Clear Choice</a>
            
    
    </body>
</html>
       