<?php
ob_start();
session_start();
include 'new-config.php';
$cus_id = $_SESSION['ecom_website']['id'];


error_log("New API CALLING sssssss");


if($_POST['type']=="add_cart"){ 
try{    

    error_log("New API CALLING");
    



    $pro_id = $_POST['pro_id'];
    
   
     $statement = $pdo->prepare("INSERT INTO `tbl_cart` (`product_id`,`customer_id`,`status`,`order_status`) VALUES (?,?,?,?)");
      $result=$statement->execute(array($pro_id,$cus_id,1,1));
      
    if($result){

        $response['error']=false;
        $response['message']='This product is added to the cart Successfully';
         
        }else{  

        $response['error']=true;
        $response['message']="Something Went Wrong";  
    }

   
}catch(Exception $e){
    $response['error']=true;
    $response['message']='Something Went Wrong :'.$e;
    
   echo json_encode($response);    
}  

echo json_encode($response); 

}else{
    $response['error']=true;
    $response['message']='Invalid API Call :';
     echo json_encode($response);
     
}

?>