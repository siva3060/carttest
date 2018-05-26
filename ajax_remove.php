<?php
// hii this is ramya
// Hii this is ramaya #2
ob_start();
session_start();
include('db.php');
	 if(isset($_SESSION['user_id']))
	 {
		 $pid=$_POST['remove'];
	    $id=$_SESSION['user_id'];
			  if($con)
			   {

					 $supcat_sql="DELETE FROM `add_to_cart` WHERE CustomerID=$id AND ProductId=$pid";
					$supcat_res=mysqli_query($con,$supcat_sql);

						if($supcat_res)
						{
							echo "1";
						}
						else{
							echo "2";
						}

				}
		   	else
			{
				echo "no connection";
			}
	 }
	elseif(isset($_SESSION['cart']))
	 {
	  $pid=$_POST['remove'];
	  $size=$_POST['size'];
	  $c = count($_SESSION['cart']);
		echo "<br><br>";

		echo $key = array_search($pid, array_column($_SESSION['cart'], 1));


		for($search_id=0;$search_id<$c;$search_id++)
		{

			if($_SESSION['cart'][$search_id][0] == $pid)
			{

				if($_SESSION['cart'][$search_id][1] == $size)
				{

					//unset($_SESSION['cart'][3]);
					//echo $key = array_search($size,array_column($_SESSION['cart'],1));

				}
			}

		}
		echo "After remove ".count($_SESSION['cart']);
		print_r($_SESSION['cart']);







	 }
	else{
			echo "no";
		}

?>
