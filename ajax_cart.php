<?php

ob_start();
session_start();
include('db.php');	
	 if(isset($_SESSION['user_id']))	
	 {		 
		 $pid=$_POST['proid'];	
	    $size=$_POST['size'];	
	    $id=$_SESSION['user_id'];
	  $date=date('Y-m-d H:i:s');	

	  if($con)
	   {
		  
		   $supcat_sql="SELECT * FROM  add_to_cart WHERE CustomerID=$id AND ProductId=$pid";
			$supcat_res=mysqli_query($con,$supcat_sql);
			$supcat_cnt=mysqli_num_rows($supcat_res);
				if($supcat_cnt>0)
				{
					echo "2";
				}
				else
				{
					
					echo $sql="INSERT INTO `add_to_cart` (`ProductId`, `CustomerID`,`products_size`, `addedOn`) VALUES ($pid,$id,'$size','$date')";
					$sqlqry=mysqli_query($con,$sql);
					   if($sqlqry)
					   {
						 
							echo '1';					
								 
					   }
					   	else{
								echo "not inserted";
							}
					 
				}
		   }
		   	else{
			echo "no connection";
		}
		 
		   
	
		}
		else{
				if(isset($_POST['proid']) && isset($_POST['size']))
				{
					
					 
						if(!isset($_SESSION['cart']))
						{
						 
						
						 $_SESSION['cart']=array();
						}
						if(count($_SESSION['cart'])<10)
						{
							
							if (in_array($_POST['proid'], $_SESSION['cart'])) 
							{
								echo "product already exist in cart session <br><br>";
							}
							else
							{
								
								 $pid=$_POST['proid']; 
								 $size=$_POST['size']; 
								
							
								// if(array_search($pid,$_SESSION['Cart']))
								// {
									// if(!array_search($size,$_SESSION[$pid]['size'])
									// {
										// array_push($_SESSION['cart'],array($pid,$size));
									// }
								// }
							
								
								
										
										$test=0;
										 $c=count($_SESSION['cart']);
										 if($c < 1)
										 {
											 
											array_push($_SESSION['cart'],array($pid,$size));
											
										 }
										 else
										 {
											 	
											 for($search_id=0;$search_id<$c;$search_id++)
											{
												
											if($pid == $_SESSION['cart'][$search_id][0])
												{
													if($size == $_SESSION['cart'][$search_id][1])
													{
														 $test=1;
														break;
													}
												}
											
										
											}
											echo "<br><br><br><br>";
											if($test==0){
												array_push($_SESSION['cart'],array($pid,$size));
											}
										 }
											print_r($_SESSION['cart']);
										
										
							}
						} 
				} 
			
			}

?>