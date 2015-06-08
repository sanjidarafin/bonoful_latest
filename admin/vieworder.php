

<?php require_once('connection.php'); ?>

  
<h1>View Orders </h1>
<?php
$sql = "SELECT * FROM customer, `order` WHERE customer.customer_id = order.customer_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
  echo '<table border="1" style="width:100%">
  <tr>
    <td>ID</td>
    <td>Customer Name</td>
    <td>Order List</td>		
    <td>Payment Method</td>		
    <td>Shipment Address</td>
    <td>Shipment Done</td>
    <td>Date</td>
   
  </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      
  $id = $row["id"];    
$customer_name = $row["customer_name"];
$orderlist = $row["orderlist"];
$payment_method = $row["payment_method"];
$shipment_address = $row["shipment_address"];
$shipment_done = $row["shipment_done"] ;
$date = $row["date"];

      
      echo '
  <tr>
    <td>'.$id.'</td>
    <td>'.$customer_name.'</td>		
    <td>'.$orderlist.'</td>
    <td>'.$payment_method.'</td>
    <td>'.$shipment_address.'</td>	
    <td>'.$shipment_done.'</td>		
    <td>'.$date.'</td>
  </tr>

';

    }
  echo '</table>';
  
} else {
    echo "0 results";
}
$conn->close();
?>
  

