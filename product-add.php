
<?php

include 'header.php';
/*if(isset($_POST['submit_btn'])){
        try{
            $date = date('Y-m-d h:i:s a', time());
            if(isset($_FILES['p_image']) && $_FILES["p_image"]["name"]!=""){
    // Ensure $date is defined or initialize it if needed
    $date = date("Y-m-d"); // You might want to adjust the format according to your requirements
    
    $extension = pathinfo($_FILES["p_image"]["name"], PATHINFO_EXTENSION);
    // Generate a unique filename to avoid conflicts
    $image = uniqid(rand())."-".$date."-image." . $extension;
    $upload = move_uploaded_file($_FILES['p_image']['tmp_name'], 'product_image/' . $image);
    if($upload) {
        $upload_image = 'product_image/' . $image;   
    } else {
        // Handle the case if file upload fails
        $upload_image = '';
    }
}
else{
    // Handle if no file is uploaded
    $upload_image='';
}

           
            $statement = $pdo->prepare("INSERT INTO products(category_id,subcategory_id,product_name,actual_price,selling_price,p_image,description_1,quantity) VALUES (?,?,?,?,?,?,?,?)");
            $result=$statement->execute(array($_POST['category'],$_POST['subcategory'],$_POST['product_name'],$_POST['actual_price'],$_POST['selling_price'],$upload_image,$_POST['description_1'],$_POST['quantity']));
                    
                    if($result){
                        
                        $message = '';


                        echo $message;


                        unset($_POST);      
                    }else{
                        $warning="Something went wrong try again...";
                        echo $warning;
                    }  
                }catch(Exception $e){
                    $error=$e;

                          echo $error;


                }   
    }*/
?>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
<style type="text/css">
  .required::after {
   content: " * ";
   color: red;
   width: 1.5em;
   margin-right: 1.5em;
}
.form-control:focus {
    outline: none !important;
    border-bottom:2px solid green;border-left:3px solid green;border-right:3px solid green;
    box-shadow: 0 0 10px #719ECE;
    background: #fed700;
  }
</style>
<div class="page-wrapper">
			<div class="page-content" style="background: #FFFFFF">
			    <div class="row" style="margin: 0px 1px 15px 2px;">
						  <div class="col-lg-8">
						      <h6 class="mb-0"><i class='bx bx-user-plus'></i> Add New Products</h6>
						  </div>
						  <div class="col-lg-4">
						      <a href="executive.php"><button type="button" class="btn btn-info btn-sm"><i class="fadeIn animated bx bx-chevron-left-circle"></i> Back to All Products</button></a>
						  </div>
				</div>
				
				
				<div class="card">
					<div class="card-body">
					    <div style="padding-left: 15px;padding-right:15px; display: none;" id="register_process_div">
   <center> <img src="img/loading.gif" style="width: 250px;"><br><b class="blinking">Registration Inprocess Pls Wait...</b></center>
</div>
<div style="padding-left: 15px;padding-right:15px;" id="preloader_div">
   <center> <img src="img/loading.gif" style="width: 250px;"><br><b class="blinking">Loading Pls Wait...</b></center>
</div>
<div style="padding-left: 15px;padding-right:15px; display: none;" id="register_div" >
<!--  <center style="padding: 10px;"><b style="font-size: 16px;color: #afa300;">Verification Submit Form</b></center>-->

<form class="row g-3 needs-validation" method="post"  id="register_form">
  <!--<center style="padding: 10px;"><b style="font-size: 14px;color: #3e4095;">Fill Personal Information Details</b></center>-->

  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">PRODUCT NAME</label>
      <input type="text" class="form-control " autocomplete="off" <?=$input_style?> name="product_name" onkeyup="this.value = this.value.toUpperCase();" id="name" required value=""/>
      
    </div>
  </div>


  <div class="col-md-4">
    <div class="form-outline"  >
      <label for="category">CATEGORY</label>
  
    <select name="category" class="form-control" id="category" style="background: #fed700;">
    <?php 

     $statements = $pdo->prepare("SELECT * FROM `category` WHERE status='1'");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;


    foreach($query as $data){ ?>
    <option value="<?=$data['id']?>"><?=$data['category_name']?></option>
    <?php } ?>
  </select>
   </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">SUBCATEGORY</label>
  <select name="subcategory" class="form-control" id="subcategory" style="background: #fed700;" >
                <option value="">Select Subcategory</option>
 <?php 

     $statements = $pdo->prepare("SELECT * FROM `subcategory` WHERE status='1'");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;


    foreach($query as $data){ ?>
    <option value="<?=$data['id']?>"><?=$data['subcategory_name']?></option>
    <?php } ?>


   -->
</select>
</div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">ACTUAL PRICE</label>
      <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="password"  name="actual_price" value=""/>
      
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">SELLING PRICE</label>
      <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="city"  name="selling_price" value="" onkeyup="this.value = this.value.toUpperCase();"/>
      
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">DESCRIPTION</label>
      <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="employee_code"  name="description_1" onkeyup="this.value = this.value.toUpperCase();" required=""/>

      
      
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">PRODUCT IMAGE</label>
      <input type="file" class="form-control" autocomplete="off" <?=$input_style?> id="employee_code"  name="p_image" onkeyup="this.value = this.value.toUpperCase();" required=""/>
      
          </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <label for="category">QUANTITY</label>
           <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="district"  name="quantity" onkeyup="this.value = this.value.toUpperCase();" required=""/>
          
    
     
      <!--<select name="district" id="district" class="form-control" <?=$input_style?> required="">-->
      <!--      <option value="">District  <span style="text-fill-color: red;">*</span></option>-->
      <!--      <option value="Salem">Salem</option>-->
      <!--    <option value="Dharmapuri">Dharmapuri</option>-->
      <!--  </select>-->
    </div>
  </div>
  
  <div class="col-md-12"></div>

  <div class="col-12">
   <center> <button class="btn btn-primary" type="submit" name="submit_btn" style="background-color: #ff0000;">Submit</button></center>
  </div>
</form>
</div>

            <div id="success_div" style="display: none;">
                <center><b class="blinking" style="font-size:22px;">Product Added Successfully...</b><br>
                    <img src="img/success.gif" style="width: 250px;">
                    <br><a href="executive.php"><button class="btn btn-warning">Back to Products List</button></a>
                    &nbsp;
                    <a href="executive-add.php"><button class="btn btn-success">Add New Product Now</button></a>
                    </center>
            </div>
            
					</div>
			    </div>
				
			</div>
	</div>
<script>

$(document).ready(function(){
            $('#success_div').hide();
            $('#register_process_div').hide();
            $('#register_div').hide();
            $('#preloader_div').show();
            
            $(function() {
                setTimeout(function() {
                    $('#register_div').show();
                    $('#preloader_div').hide();
                }, 500);
            });
            
            
            $('#register_form').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('type', 'employee_add');
                //var phone = $('#mobile').val();
                        $('#register_process_div').show();
                        $('#register_div').hide();
                        $('#success_div').hide();
                    $.ajax({
                            url: 'apis/product-add.php',
                            type: 'post',
                            dataType: 'json',
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                          enctype: 'multipart/form-data',
                            success: function (response) {
                                console.log(response);
                                if(response['status']==200){
                                    $('#register_div').hide();
                                    $('#register_form').trigger("reset");
                                    $('#register_process_div').hide();
                                    $('#success_div').show();
                                    success(response['message']);
                                }else{
                                    //alert('something went wrong pls try again...');
                                    $('#register_process_div').hide();
                                    $('#register_div').show();
                                    warning(response['message']);
                                };
                            }
                        });
            });
});
	
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result).width(250).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}	
	
</script>
<?php include 'footer.php' ?>