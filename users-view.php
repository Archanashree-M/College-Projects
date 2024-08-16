<?php include 'header.php';
    $ids=$_GET['id'];
    $statement = $pdo->prepare("SELECT * FROM tbl_users e where e.id=".$ids);
    $statement->execute();
    $datas = $statement->fetchAll(PDO::FETCH_ASSOC);
    $totalData = $statement->rowCount();


if($totalData==1){  ?>
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
						      <h6 class="mb-0"><i class='bx bx-user-plus'></i> View User's Details</h6>
						  </div>
						  <div class="col-lg-4">
						      <a href="users.php"><button type="button" class="btn btn-info btn-sm"><i class="fadeIn animated bx bx-chevron-left-circle"></i> Back to All User's</button></a>
						  </div>
				</div>
				
				
				<div class="card">
					<div class="card-body">
					    <div style="padding-left: 15px;padding-right:15px; display: none;" id="register_process_div">
   <center> <img src="img/loading.gif" style="width: 250px;"><br><b class="blinking">Update Processing Please Wait...</b></center>
</div>
<div style="padding-left: 15px;padding-right:15px;" id="preloader_div">
   <center> <img src="img/loading.gif" style="width: 250px;"><br><b class="blinking">Loading Pls Wait...</b></center>
</div>

<?php if($_SESSION['ss_enterprises']['id']=="1" && $_SESSION['ss_user_type']=="1" || $_SESSION['ss_enterprises']['id']!="1" && $_GET['id']==$_SESSION['ss_enterprises']['id']){   ?>	

<div style="padding-left: 15px;padding-right:15px; display: none;" id="register_div" >

<form class="row g-3 needs-validation" method="post"  id="register_form">
    
  <input type="hidden" name="id" value="<?=$ids?>">
  <div class="col-md-8">
      <div class="row" >
  <div class="col-md-4"><b>Name:</b></div>
  <div class="col-md-8"><b><?=$datas[0]['name']?></b></div>
  
  <div class="col-md-4"><b>Mobile Number:</b></div>
  <div class="col-md-8"><b><?=$datas[0]['mobile']?></b></div>
  
  <div class="col-md-4"><b>Email ID:</b></div>
  <div class="col-md-8"><b><?=$datas[0]['email']?></b></div>
  
  <div class="col-md-4"><b>Password:</b></div>
  <div class="col-md-8"><b><?=$datas[0]['password']?></b></div>
  
  <div class="col-md-4"><b>City:</b></div>
  <div class="col-md-8"><b><?=$datas[0]['city']?></b></div>
  
  
  <?php if($datas[0]['role']==1){$role = "Admin";} if($datas[0]['role']==2){$role = "User";}?>
  <?php if($datas[0]['status']==1){$status = "Active";}if($datas[0]['status']==2){$status = "In-Active";}?>
  
  <div class="col-md-4"><b>Role:</b></div>
  <div class="col-md-8"><b><?=$role?></b></div>
  
  <div class="col-md-4"><b>Address:</b></div>
  <div class="col-md-8"><b><?=nl2br($datas[0]['address'])?></b></div>
  
  <div class="col-md-4"><b>Status:</b></div>
  <div class="col-md-8"><b><?=$status?></b></div>
  
 </div>
 

 
 
 </div>
 
<div class="col-md-4">
    <?php if ($datas[0]['profile']) { ?>
        <img src="<?=$datas[0]['profile']?>" style="height: 164px;
    padding: 5px 0px 0px 0px;
    width: 60%;
    border-radius: 13%;" alt="" width="300" height="250">
    <?php } else { ?>
    
    <?php } ?>
</div>
</form>
</div>

<?php } else { ?>

<div style="padding-left: 15px;padding-right:15px;"><center><b>Invalid Access</b></center></div>

<?php } ?>
            
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
    });    
</script>
<?php } include 'footer.php' ?>