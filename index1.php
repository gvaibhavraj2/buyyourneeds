<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Ajax Shopping Cart: Created By Zeeshan Rasool on http://www.99points.info -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajax Shopping Cart : Super Shopping Cart With JQuery and PHP : 99Points.info </title>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery.livequery.js"></script>

<link href="css.css" rel="stylesheet" />

<script type="text/javascript">

$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('.add-to-cart-button').click(function(){
		
		var thisID 	  = $(this).parent().parent().attr('id').replace('detail-','');
		
		var itemname  = $(this).parent().find('.item_name').html();
		var itemprice = $(this).parent().find('.price').html();
		
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			var Height = $('#cart_wrapper').height();
			$('#cart_wrapper').css({height:Height+parseInt(45)});
			
			$('#cart_wrapper .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
		}
		
	});	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#cart_wrapper').html('Total Charges: $'+totalCharge);
		
		return false;
		
	});	
	
	// this is for 2nd row's li offset from top. It means how much offset you want to give them with animation
	var single_li_offset 	= 200;
	var current_opened_box  = -1;
	
	$('#wrap li').click(function() {
	
		var thisID = $(this).attr('id');
		var $this  = $(this);
		
		var id = $('#wrap li').index($this);
		
		if(current_opened_box == id) // if user click a opened box li again you close the box and return back
		{
			$('#wrap .detail-view').slideUp('slow');
			return false;
		}
		$('#cart_wrapper').slideUp('slow');
		$('#wrap .detail-view').slideUp('slow');
		
		// save this id. so if user click a opened box li again you close the box.
		current_opened_box = id;
		
		var targetOffset = 0;
		
		// below conditions assumes that there are four li in one row and total rows are 4. How ever if you want to increase the rows you have to increase else-if conditions and if you want to increase li in one row, then you have to increment all value below. (if(id<=3)), if(id<=7) etc
		
		if(id<=3)
			targetOffset = 0;
		else if(id<=7)
			targetOffset = single_li_offset;
		else if(id<=11)
			targetOffset = single_li_offset*2;
		else if(id<=15)
			targetOffset = single_li_offset*3;
		
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: targetOffset}, 800,function(){
			
			$('#wrap #detail-'+thisID).slideDown(500);
			return false;
		});
		
	});
	
	$('.close a').click(function() {
		
		$('#wrap .detail-view').slideUp('slow');
		
	});
	
	$('.closeCart').click(function() {
		
		$('#cart_wrapper').slideUp();
		
	});
	
	$('#show_cart').click(function() {
		
		$('#cart_wrapper').slideToggle('slow');
		
	});
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}

function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}

</script>
</head>

<body>



<div align="left" style="min-height:800px;">
	
	<div id="cart_wrapper" align="center">
	
		<form action="#" id="cart_form" name="cart_form">
		
			<div class="cart-info"></div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit" id="Submit">CheckOut</button>
		
		</form>
	</div>
	
	<div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">View Cart</a>
		
		<ul>
			<li id="1">
				<img src="product_img/1.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Red Grocery Bag</div>
			</li>
			
			<li id="2">
				<img src="product_img/2.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<li id="3">
				<img src="product_img/3.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>White Grocery Bag</div>
			</li>
			<li id="4">
				<img src="product_img/4.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Yellow Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/1.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Red Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
				
			</div>
			<div class="detail-view" id="detail-2">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/2.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">70.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-3">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/3.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>White Grocery Bag</label>
					<br clear="all" />
					

					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">50.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-4">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/4.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Yellow Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">90.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="5">
				<img src="product_img/5.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Green Bag</div>
			</li>
			
			<li id="6">
				<img src="product_img/6.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Simple  Bag</div>
			</li>
			
			<li id="7">
				<img src="product_img/7.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>WhiteGrocery Bag</div>
			</li>
			<li id="8">
				<img src="product_img/8.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>Reusable Grocery Bag</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/5.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-6">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/6.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-7">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/7.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>WhiteGrocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-8">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/8.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Reusable Grocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="9">
				<img src="product_img/9.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">B</span><span class="price"></span>lue Shirt </div>
			</li>
			
			<li id="10">
				<img src="product_img/10.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Green Large </span> Shirt </div>
			</li>
			
			<li id="11">
				<img src="product_img/11.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div>WhiteGrocery Bag</div>
			</li>
			
			<li id="12">
				<img src="product_img/12.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Black Large </span> Shirt </div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-9">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/9.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Blue Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-10">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/10.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-11">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/11.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>WhiteGrocery Bag</label>
					<br clear="all" />
					
					<p>
						shopping bag, shopping, bag, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-12">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/12.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Black Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="13">
				<img src="product_img/13.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Red Large </span> Shirt </div>
			</li>
			
			<li id="14">
				<img src="product_img/14.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Green Large </span> Shirt </div>
			</li>
			
			<li id="15">
				<img src="product_img/15.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Blue Large </span> Shirt </div>
			</li>
			
			<li id="16">
				<img src="product_img/16.jpg" class="items" height="100" alt="" />
				
				<br clear="all" />
				<div><span class="name">Fancy Large </span> Shirt </div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-13">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/13.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Red Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-14">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/14.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Green Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-15">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/15.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Blue Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping, shirts, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-16">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="product_img/16.jpg" class="detail_images" width="340" height="310" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Fancy Large Shirt </label>
					<br clear="all" />
					
					<p>
						shopping shirts, shopping, merchandise, consumerism, gift:
					
						<br clear="all" /><br clear="all" />
						$<span class="price">80.00</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Add to Cart</button>
					
				</div>
				
			</div>
			
			<br clear="all" />
		</ul>
		<br clear="all" />
	</div>
	
		
</div>

<div class="footer">
		
</div>
<!-- 

Ajax Shopping Cart: Created By Zeeshan Rasool on http://www.99points.info for more tutorials visit http://www.99points.info 

-->
</body>
</html>
