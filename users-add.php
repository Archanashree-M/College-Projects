<?php include 'header.php' ?>
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
    background: #f7f7ff;
  }
</style>




	<div class="page-wrapper">
			<div class="page-content" style="background: #f7f7ff;">
			    <div class="row" style="margin: 0px 1px 15px 2px;">
						  <div class="col-lg-8">
						      <h6 class="mb-0"><i class='bx bx-user-plus'></i> Add New User (Back Office)</h6>
						  </div>
						  <div class="col-lg-4">
						      <a href="users.php"><button type="button" class="btn btn-info btn-sm"><i class="fadeIn animated bx bx-chevron-left-circle"></i> Back to All User's</button></a>
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
      <input type="text" class="form-control " autocomplete="off" <?=$input_style?> name="name" onkeyup="this.value = this.value.toUpperCase();" id="name" required value=""/>
      <label for="validationCustom01" class="form-label required">Name</label>
      <div class="invalid-feedback">Please Provide valid name.<br></div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <input type="number" class="form-control" autocomplete="off" <?=$input_style?> name="mobile" id="mobile"  required value="" />
      <label for="validationCustom02" class="form-label required">Mobile Number</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a father name.<br></div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="form-outline">
      <input type="email" class="form-control" autocomplete="off" <?=$input_style?> name="email" id="email"  required value=""/>
      <label for="validationCustom02" class="form-label required">Email Id</label>
      <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Please provide a father name.<br></div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="password"  name="password" value=""/>
      <label for="validationCustom06" class="form-label required"> Password</label>
      <div class="invalid-feedback">Please provide a aadhar no.</div>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="city"  name="city" value="" onkeyup="this.value = this.value.toUpperCase();"/>
      <label for="validationCustom06" class="form-label required"> City </label>
      <div class="invalid-feedback">Please provide a aadhar no.</div>
    </div>
  </div>
  
 <div class="col-md-4">
    <div class="input-group">
      <select name="status" id="status" class="form-control" <?=$input_style?> required="">
            <option value="Active">Active</option>
          <option value="In-Active">In-Active</option>
        </select>
        <div class="invalid-feedback">Please select gender.</div>
    </div>
  </div>
  
  <div class="col-md-8">
    <div class="form-outline">
      <textarea class="form-control" autocomplete="off" rows="4" <?=$input_style?>  id="address" name="address" required="" onkeyup="this.value = this.value.toUpperCase();"></textarea>
      <label for="validationCustom06" class="form-label required">Address </label>
      <div class="invalid-feedback">Please provide a address.</div>
    </div>
    <br>
        <div class="form-outline">
      <input ="text" class="form-control " autocomplete="off" <?=$input_style?> id="employee_code"  name="employee_code" onkeyup="this.value = this.value.toUpperCase();" required=""/>
       <label for="validationCustom06" class="form-label required">Employee Code </label>
     </div>
  </div>
  
  <div class="col-md-4" >
    <label for="validationCustom06" class="form-label">Profile Image </label>
      <input type="file" onchange="readURL(this);" class="form-control" <?=$input_style?> name="profile_img" id="profile_img"/>
      <center><img id="blah" src="img/default.png" style="width: 150px;padding:10px;"></center>
    </div>
    <!-- <div class="col-md-4" > -->
     
    <!--</div>-->
    
  <!--<div class="col-md-4">-->
  <!--  <div class="form-outline">-->
  <!--    <input type="text" class="form-control" autocomplete="off" <?=$input_style?> id="employee_code"  name="employee_code" onkeyup="this.value = this.value.toUpperCase();" required=""/>-->
  <!--    <label for="validationCustom06" class="form-label required"> Employee Code</label>-->
  <!--    <div class="invalid-feedback">Please provide Emloyee Code.</div>-->
  <!--  </div>-->
  <!--</div>-->
  
  <div class="col-md-12"></div>

  <div class="col-12">
   <center> <button class="btn btn-primary" type="submit">Submit</button></center>
  </div>
</form>
</div>

            <div id="success_div" style="display: none;">
                <center><b class="blinking" style="font-size:22px;">User Created Successfully...</b><br>
                    <img src="img/success.gif" style="width: 250px;">
                    <br><a href="users.php"><button class="btn btn-warning">Back to User List</button></a>
                    &nbsp;
                    <a href="users-add.php"><button class="btn btn-success">Add New User Now</button></a>
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
                formData.append('type', 'user_add');
                var phone = $('#mobile').val();
                        $('#register_process_div').show();
                        $('#register_div').hide();
                        $('#success_div').hide();
                    $.ajax({
                            url: 'apis/user-add.php',
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