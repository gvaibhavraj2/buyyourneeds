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
				<img src="grocery/soaps/1.jpeg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="2">
				<img src="grocery/soaps/2.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<li id="3">
				<img src="grocery/soaps/3.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>White Grocery Bag</div>
			</li>
			<li id="4">
				<img src="grocery/soaps/4.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Yellow Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/1.jpeg" class="detail_images" width="340" height="310" alt="" />
				
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
				
				<img src="grocery/soaps/2.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
				
				<img src="grocery/soaps/3.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
				
				<img src="grocery/soaps/4.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
			
			<li id="5">
				<img src="grocery/soaps/5.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Green Bag</div>
			</li>
			
			<li id="6">
				<img src="grocery/soaps/6.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Simple  Bag</div>
			</li>
			
			<li id="7">
				<img src="grocery/soaps/7.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>WhiteGrocery Bag</div>
			</li>
			<li id="8">
				<img src="grocery/soaps/8.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/5.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f5" />
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
				
				<img src="grocery/soaps/6.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f6" />
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
				
				<img src="grocery/soaps/7.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>WhiteGrocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f7" />
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
				
				<img src="grocery/soaps/8.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f8" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			
			<!---->
			
			<li id="9">
				<img src="grocery/soaps/9.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">B</span><span class="price"></span>lue Shirt </div>
			</li>
			
			<li id="10">
				<img src="grocery/soaps/10.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Green Large </span> Shirt </div>
			</li>
			
			<li id="11">
				<img src="grocery/soaps/11.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="12">
				<img src="grocery/soaps/12.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-9">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/9.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Blue Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f9" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-10">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/10.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f10" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
                                   <div class="detail-view" id="detail-11">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/11.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Blue Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f9" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-12">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/12.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f10" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
<li id="13">
				<img src="grocery/soaps/13.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="14">
				<img src="grocery/soaps/14.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<li id="15">
				<img src="grocery/soaps/15.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>White Grocery Bag</div>
			</li>
			<li id="16">
				<img src="grocery/soaps/16.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Yellow Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-13">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/13.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
			<div class="detail-view" id="detail-14">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/14.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
			<div class="detail-view" id="detail-15">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/15.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
			<div class="detail-view" id="detail-16">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/16.jpg" class="detail_images" width="340" height="310" alt="" />
				
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
			
			<li id="17">
				<img src="grocery/soaps/17.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Green Bag</div>
			</li>
			
			<li id="18">
				<img src="grocery/soaps/18.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Simple  Bag</div>
			</li>
			
			<li id="19">
				<img src="grocery/soaps/19.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>WhiteGrocery Bag</div>
			</li>
			<li id="20">
				<img src="grocery/soaps/20.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-17">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/17.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f5" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-18">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/18.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f6" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-19">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/19.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>WhiteGrocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f7" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-20">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/20.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f8" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			
			<!---->
			
			<li id="21">
				<img src="grocery/soaps/21.JPG" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">B</span><span class="price"></span>lue Shirt </div>
			</li>
			
			<li id="22">
				<img src="grocery/soaps/22.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Green Large </span> Shirt </div>
			</li>
			
			<li id="23">
				<img src="grocery/soaps/23.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="24">
				<img src="grocery/soaps/24.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-21">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/21.JPG" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Blue Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f9" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-22">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/22.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f10" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
                                   <div class="detail-view" id="detail-23">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/23.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Blue Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f9" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-24">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/24.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f10" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
                         <li id="25">
				<img src="grocery/soaps/25.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Green Bag</div>
			</li>
			
			<li id="26">
				<img src="grocery/soaps/26.png" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Simple  Bag</div>
			</li>
			
			
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-25">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/25.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f5" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			<div class="detail-view" id="detail-26">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="grocery/soaps/26.png" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					<form method="post" action="cart_update.php">
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
Qty <input type="text" name="product_qty" value="1" size="3" />
                                        <input type="hidden" name="product_code" value="f6" />
					<button  class="add-to-cart-button">Add to Cart</button>
					<input type="hidden" name="type" value="add"/>
                               <?php echo'<input type="hidden" name="return_url" value="'.$current_url.'" />'?>
                                        </form>
				</div>
				
			</div>
			
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
    




