<?php
include('db.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppe Bootstarp Website Template | Buy :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		
		x=document.getElementById("rem").value;
		y=document.getElementById("size").value;
		
			$.post("ajax_remove.php",{"remove":x,"size":y},function(output,status)
			{
				alert(output);
				document.getElementById('error').innerHTML=output;
				if(output==1)
				{
					$('.message'+x).fadeOut('slow', function(c){
					$('.message'+x).remove();
					});
				}
				
		});
	});	  
});
function remove(x,y)
{
	
	document.getElementById("rem").value=x;
	
	document.getElementById("size").value=y;
}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- header_top -->
<?php include 'header.php';?>
  <div class="cartNavBar" style="    background-color: #f4f4f4;">
	<div class="fnl-ship-header" style="    padding: 15px 0;background-color: #f4f4f4;">
		<div class="fnl-ship-prcssindicator">
			<div class="fnl-payment-ordstat ga-section" ga-section-name="orderStatus" ga-section-id="1" style="    display: flex;    padding: 10px;margin:auto;width: 916px;">
				<div class="status-bar" style="       padding-right: 1pc;">
				
					<i class="fa fa-shopping-bag"></i>
					<a href="/cart"> SHOPPING BAG</a>
				</div>
				<div class="sp-prcssindicator-strip" style="    width: 25%;border-top: 1px solid #939393;position: relative;top: 13px;"></div>
				<div class="status-bar" style="     color: #939393;   padding-left: 1pc;    padding-right: 1pc;">
					<i class="fa fa-map-marker"></i>
					<a href="/checkout/multi/deliveryaddress/add">
						SHIPPING</a>
				</div>

				<div class="sp-prcssindicator-strip"  style="    width: 25%;border-top: 1px solid #939393;position: relative;top: 13px;"></div>

				<div class="status-bar-active" style="  color: #939393;   padding-left: 1pc;">
					<i class="fa fa-credit-card"></i>
					<a href="/checkout/multi/payment/add">
						PAYMENT</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- content -->
<input id="rem" type="text">
<input id="size" type="text">
<div class="container">
<div class="main">
	<div class="shoping_bag">
<div id="error"></div>
				<?php 
					if($_SESSION['user_email'])
						{
							
							$id=$_SESSION['user_id'];
							 $supcat_sql="SELECT * FROM  add_to_cart WHERE CustomerID=$id";
								$supcat_res=mysqli_query($con,$supcat_sql);
								$supcat_cnt=mysqli_num_rows($supcat_res);
								 if($_SESSION['cart'])
								{
									
									sessionon();
								}									
									if($supcat_cnt>0)
									{
										?>
										<h4><img src="images/bag1.png">my shopping bag / <span> <?=$supcat_cnt?> item</span></h4>
											<ul class="s_art">
												<li><img src="images/art1.png"></li>
												<li><span> <?=$supcat_cnt?>  item</span></li>
											</ul>
											<div class="clearfix"></div>
										</div>
	
		<?php
										$total=0;
										while($row=mysqli_fetch_array($supcat_res))
										{
											 $pid=$row['ProductId'];
											

											 $cats_sql="select * from products where  ProductId=$pid ";
												$cats_res=mysqli_query($con,$cats_sql);
												$cats_cnt=mysqli_num_rows($cats_res)-1;
												$cats_row=mysqli_fetch_array($cats_res);
													$pics=explode(",",$cats_row['Picture']);
													?>    
															<div class="message<?=$cats_row['ProductId']?> shoping_bag1 ">
																<div class="shoping_left">
																	<div class="shoping1_of_1">
																		<img src="admin/uploads/products/<?=$pics[0]?>"  class="img-responsive" alt="" />
																	</div>
																	<div class="shoping1_of_2">
																		<h4><a href="details.php?prodid=<?=$cats_row['ProductId']?>"><?=$cats_row['ProductName'];?></a> </h4>
																		<span>size <b><?=$row['products_size']?></b>&nbsp;&nbsp; qty <b>1</b> | code :1175</span>
																		<ul class="s_icons">
																			<!--li><a href="#"><img src="images/s_icon1.png" alt=""></a></li>
																			<li><a href="#"><img src="images/s_icon2.png" alt=""></a></li-->
																			<li><a href="#aaa"  class="alert-close" onclick="remove(<?=$cats_row['ProductId']?>,<?=$row['products_size']?>)"><img src="images/s_icon3.png" alt=""></a></li>
																		</ul>
																	</div>
																	<div class="clearfix"></div>
																</div>
																<div class="shoping_right">
																	<p><!--35% off &nbsp;--><span> Rs. <?php echo $mrp=$cats_row['MSRP']?></span></p>
																</div>
																<div class="clearfix"></div>
															</div>	
												<?php 
													$total=$mrp+$total;
										} 
									}
									else
									{
										
										?>
									<h3>shopping cart empty</h3>
										<?php
									}
						}
						else if(isset($_SESSION['cart']))
						{
							
							$subttl=0;
							$prdcnt=count($_SESSION['cart']);
							$vls=$_SESSION['cart'];
			foreach ($vls as $value) {
							$cats_sql="select * from products where ProductId=$value[0]";
							$cats_res=mysqli_query($con,$cats_sql);
							$cats_cnt=mysqli_num_rows($cats_res);
							$cats_row=mysqli_fetch_array($cats_res);
							$pics=explode(",",$cats_row['Picture']);
							 $subttl+=$cats_row['MSRP'];
							 $pid=$cats_row['ProductId'];
							?>           


								<div class="message<?=$cats_row['ProductId']?> shoping_bag1 ">
									<div class="shoping_left">
										<div class="shoping1_of_1">
											<img src="admin/uploads/products/<?=$pics[0]?>"  class="img-responsive" alt="" />
										</div>
										<div class="shoping1_of_2">
											<h4><a href="details.php?prodid=<?=$cats_row['ProductId']?>"><?=$cats_row['ProductName'];?></a> </h4><br><br>
											
											<span>size <b><?=$value[1]?></b>&nbsp;&nbsp; qty <b>1</b> | code :1175</span>
											<ul class="s_icons">
												<li><a href="#sessionremove"  class="alert-close" onclick="remove(<?=$cats_row['ProductId']?>,'<?=$value[1]?>')"><img src="images/s_icon3.png" alt=""></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="shoping_right">
										<p><!--35% off &nbsp;--><span> Rs. <?php echo $mrp=$cats_row['MSRP']?></span></p>
									</div>
									<div class="clearfix"></div>
								</div>
								
								
								

							<?php
							$total=$mrp+$total;
									
									
									
									
									
									}




/*							foreach($vls as $catid => $catids)
							{
							$cats_sql="select * from products where ProductId=$catids";
							$cats_res=mysqli_query($con,$cats_sql);
							$cats_cnt=mysqli_num_rows($cats_res);
							$cats_row=mysqli_fetch_array($cats_res);
							$pics=explode(",",$cats_row['Picture']);
							 $subttl+=$cats_row['MSRP'];
							 $cats_row['ProductId'];
							?>           


								<div class="message<?=$cats_row['ProductId']?> shoping_bag1 ">
									<div class="shoping_left">
										<div class="shoping1_of_1">
											<img src="admin/uploads/products/<?=$pics[0]?>"  class="img-responsive" alt="" />
										</div>
										<div class="shoping1_of_2">
											<h4><a href="details.php?prodid=<?=$cats_row['ProductId']?>"><?=$cats_row['ProductName'];?></a> </h4><br><br>
											
											<span>size <b><?=$row['products_size']?></b>&nbsp;&nbsp; qty <b>1</b> | code :1175</span>
											<ul class="s_icons">
												<!--li><a href="#"><img src="images/s_icon1.png" alt=""></a></li>
												<li><a href="#"><img src="images/s_icon2.png" alt=""></a></li-->
												<li><a href="#qqq"  class="alert-close" onclick="remove(<?=$cats_row['ProductId']?>)"><img src="images/s_icon3.png" alt=""></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="shoping_right">
										<p><!--35% off &nbsp;--><span> Rs. <?php echo $mrp=$cats_row['MSRP']?></span></p>
									</div>
									<div class="clearfix"></div>
								</div>
								
								
								

							<?php
							$total=$mrp+$total;
							}
*/
							/*******************************************************/
							
						}
						else{
							
					?>
					
					
					<h3>shopping cart empty2222222</h3><a href=""></a>
				<p>if items in your wishlit are missing, <a href="">login to your account</a> to view them</p>
						<?php }?>
	
	
	

	<div class="shoping_bag1">
		<div class="shoping_left">
			<!--h2><a href="#"><img src="images/gift.jpg">gift wrap </a> <span> for rs. 25</span></h2-->
		</div>
		<div class="shoping_right">
			<p>sub total &nbsp;<span> Rs.<?=$total?></span></p>
			<!--p>vat collected &nbsp;<span> Rs. 91</span></p-->
			<p>delivery &nbsp;
			
			<?php if($total > 500){?>
			<a href="#">free</a>&nbsp;<span> Rs. 0</span>
			<?php } else { ?>
			&nbsp;<span> Rs. 50</span>
			<?php 
			$total=$total+50;
			}?>
			</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<!--div class="shoping_bag1">
		<div class="shoping_left">
			<h2><a href="#"><img src="images/login.jpg">login </a> <span> to apply coupons</span></h2>
		</div>
		<div class="shoping_right">
			<p>coupon discount &nbsp;<span class="color"> Rs. 0</span></p>
		</div>
		<div class="clearfix"></div>
	</div-->
	<div class="shoping_bag2">
		<div class="shoping_left">
			<a class="btn1" href="checkout.php">place order</a>
		</div>
		<div class="shoping_right">
			<p class="tot">total &nbsp;<span class="color"> Rs. <?=$total?></span></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!-- footer_top -->
<div class="footer_top">
 <div class="container">
	<div class="span_of_4">
		<div class="span1_of_4">
			<h4>Shop</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
			</ul>	
		</div>
		<div class="span1_of_4">
			<h4>help</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>				
			<h4 class="top">company name</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>	
		</div>
		<div class="span1_of_4">
			<h4>account</h4>
			<ul class="f_nav">
				<li><a href="#">login</a></li>
				<li><a href="#">create an account</a></li>
				<li><a href="#">create wishlist</a></li>
				<li><a href="#">my shopping bag</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">create wishlist</a></li>
			</ul>
			<h4 class="top">style zone</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>				
		</div>
		<div class="span1_of_4">
			<h4>popular</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">men</a></li>
				<li><a href="#">women</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">brands</a></li>
			</ul>			
		</div>
		<div class="clearfix"></div>
		</div>
		<!-- start span_of_2 -->
		<div class="span_of_2">
		<div class="span1_of_2">
			<h5>need help? <a href="#">contact us <span> ></span> </a> </h5>
			<p>(or) Call us: +91-70-45022088</p>
		</div>
		<div class="span1_of_2">
			<h5>follow us </h5>
			<div class="social-icons">
				     <ul>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
					</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
  </div>
</div>
<!-- footer -->
<div class="footer">
 <div class="container">
	<div class="copy">
		<p class="link">&copy; All rights reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
	</div>
 </div>
</div>
</body>
</html>
<?php

		function sessionon()
		{	
			$vls=$_SESSION['cart'];
			include('db.php');
			if($con)
			{
				foreach ($vls as $value) 
				{
					
				$cats_sql="select * from products where ProductId=$value[0]";
				$cats_res=mysqli_query($con,$cats_sql);
				 $cats_cnt=mysqli_num_rows($cats_res);
				$cats_row=mysqli_fetch_array($cats_res);
				$pid= $value[0];
				$size=$value[1];
				$id=$_SESSION['user_id'];
				$date=date('Y-m-d');
				
				$supcat_sql="SELECT * FROM  add_to_cart WHERE CustomerID=$id AND ProductId=$pid";
				$supcat_res=mysqli_query($con,$supcat_sql);
				$supcat_cnt=mysqli_num_rows($supcat_res);
				
					if($supcat_cnt>0)
					{ 	}
					else
					{												
					 $sql="INSERT INTO `add_to_cart` (`ProductId`, `CustomerID`,`products_size`, `addedOn`) VALUES ($pid,$id,'$size','$date')";
					 $sqlqry=mysqli_query($con,$sql);
					   if($sqlqry)
					   {					 
							
					   }
					  
					}		
				
				}
			}
		}
		function sessionremove()
		{
			echo "in sessionremove";
		}


?>