
<?php

include 'header.php';
if(isset($_POST['submit_btn'])){
        try{
            $date = date('Y-m-d h:i:s a', time());
           

           
            $statement = $pdo->prepare("INSERT INTO category(category_name) VALUES (?)");
            $result=$statement->execute(array($_POST['category_name']));
                    
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
    }
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
      <label for="category">CATEGORY NAME</label>
      <input type="text" class="form-control " autocomplete="off" <?=$input_style?> name="category_name" onkeyup="this.value = this.value.toUpperCase();" id="name" required value=""/>
      
    </div>
  </div>


 
  
  <div class="col-md-12"></div>

  <div class="col-12">
   <center> <button class="btn btn-primary" type="submit" name="submit_btn" style="background-color: #ff0000;">Submit</button></center>
  </div>
</form>
</div>

            <div id="success_div" style="display: none;">
                <center><b class="blinking" style="font-size:22px;">Customer Added Successfully...</b><br>
                    <img src="img/success.gif" style="width: 250px;">
                    <br><a href="executive.php"><button class="btn btn-warning">Back to Customer List</button></a>
                    &nbsp;
                    <a href="executive-add.php"><button class="btn btn-success">Add New Customer Now</button></a>
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
                            url: 'apis/category-add.php',
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