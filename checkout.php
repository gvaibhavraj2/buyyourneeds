<?php
include_once("myaccount.php");
?>
</div>
</div>


<div id="products-wrapper">

 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
                require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
     $email_body = "";
      $email_body = $email_body . "Code , Qty <br>";
                $user=$_SESSION['user_name'];
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $product_qty = $cart_itm["qty"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM facewash WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		  
	
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
                 $cart_items ++;
		 $sql_insert = "INSERT INTO`orders`( `code`, `qty`, `cost` ,`username`)VALUES('$product_code',$product_qty,$subtotal,'$user')";
                mysqli_query($mysqli,$sql_insert) or die("Insertion Failed:");
              
   
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		echo '</span>';
		echo '</form>';
		echo '<p>Dear'.$user.' order has been placed billed to Rs.'.$currency.$total.'</p>Thankyou';
                
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>

    <?php include('inc/footer.php') ?>



