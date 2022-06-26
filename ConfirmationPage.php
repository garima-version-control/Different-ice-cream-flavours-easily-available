<html>

<body>
  
  <center>
  <h1> <font color="Orange"> Neighbourhood Online Shopping </font> </h1>
  <br>
  <h1> Hi <?php echo $_GET["name"]; ?>, Thank you for placing your order. </h1>
  <img src="./ThankYou.jpg" alt=""> 
  <br>
  
  <h1> Your Order Confirmation: </h1>
  
  <h1> Potatos: <?php echo $_GET["potato-qty"]; ?> Kgs </h1>
  <h1> Tomatos: <?php echo $_GET["tomato-qty"]; ?> Kgs </h1>
  <h1> Capsicum: <?php echo $_GET["capsicum-qty"]; ?> Kgs </h1>
  <h1> <font color="red"> Total amount is: Rs. <?php echo ($_GET["potato-qty"]*30) + ($_GET["tomato-qty"]*40) + ($_GET["capsicum-qty"]*80) ?> </font> </h1>
  <h2> <font color="Blue"> Your order will be delivered at your door step within the next 1-2 hours</font> </h2>
  <h2> If you have any questions, please call: 9812345678 </h2>
    
  </center>
  
</body>
</html>