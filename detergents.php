<?php

include('inc/header1.php'); 
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    ?>

</br>
</br>
</br>
</br>		
<ul>
			<li id="1">
				<img src="grocery/detergents/1.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="2">
				<img src="grocery/detergents/2.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<li id="3">
				<img src="grocery/detergents/3.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>White Grocery Bag</div>
			</li>
			<li id="4">
				<img src="grocery/detergents/4.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Yellow Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/1.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Red Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f1" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
				
			</div>
			<div class="detail-view" id="detail-2">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/2.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">70.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f2" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-3">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/3.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>White Grocery Bag</label>
					<br clear="all" />
					

					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">50.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f3" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-4">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/4.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Yellow Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">90.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f4" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			
			<li id="5">
				<img src="grocery/detergents/5.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="6">
				<img src="grocery/detergents/6.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<li id="7">
				<img src="grocery/detergents/7.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>White Grocery Bag</div>
			</li>
			<li id="8">
				<img src="grocery/detergents/8.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Yellow Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/5.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Red Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f1" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
				
			</div>
			<div class="detail-view" id="detail-6">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/6.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">70.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f2" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-7">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/7.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>White Grocery Bag</label>
					<br clear="all" />
					

					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">50.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f3" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-8">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/detergents/8.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Yellow Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">90.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f4" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			
			<!---->
			
			 
			</div>
				
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    



<?php include('inc/footer.php') ?>
