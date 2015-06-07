<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php'); 
 $nameErr =$product_name=$product_code=$product_qty=$product_price= $customer_id = $shipment_address=$date = " ";



    
		










  
	if(!$nameErr){
   $sql="INSERT INTO `order` (`id`, `product_name`,`product_code','product_qty','product_price`,'customer_id',shipment_address','date' ) VALUES
    (NULL, '$product_name',$product_code,$product_qty, $product_price,'$customer_id',$shipment_address,$date)";
  
  if($conn->query($sql) == TRUE)
    {
    echo "Inserted successfully";
  }
  else
    {
    echo "something is wrong";



    ?>
		



