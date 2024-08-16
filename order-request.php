<?php include 'header.php' ?>
	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			    <div class="row" style="margin: 0px 1px 15px 2px;">
						  <div class="col-lg-8">
						      <h6 class="mb-0"><i class='bx bx-category'></i> View Order Request</h6>
						  </div>
						  
				</div>		  
			    <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th data-sortable='false'>
											<i class="fa fa-check"></i>
											<input type="checkbox" class="checkbox" id="select_all" />
										</th>
										<th>S.No</th>
										<th>Customer Name</th>
										<th>Product Category</th>
										<th>Product Sub-Category</th>
										<th>Product Name</th>
										<th>Quantity</th>
										<th>Selling Price</th>
										<th>Total Price</th>
										<th>Status</th>
									</tr>
								</thead>
							
								
							</table>
						</div><br>
                        <div class="row">
                        	<div class="col-md-4">
									<div class="form-outline"  >
									<label for="category">CATEGORY</label>

									    <select name="update_status" class="form-control" id="update_status" style="background: #fed700;">
									        <option value="2">Order Confirmed</option>
											<option value="3">Out For Delivery</option>
											<option value="4">Delivered</option>
									    </select>
									</div>
							</div>
							<div class="col-md-4">
								<label for="category">Action</label><br>
								<button class="btn btn-primary btn-sm" onclick="updatestatusTo();">Update Status</button>
							</div>
                        </div>

						
					</div>
				</div>
			</div>
		</div>
		
<script type="text/javascript">
$(document).ready(function(){
    
    
	    
	    
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
      });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});

    
 function updatestatusTo(){
      var updatestatus=$('#update_status').val();
       var checkValues = $('input[name=checkboxlist]:checked').map(function(){
                return $(this).val();
            }).get();
            

            console.log(checkValues);
            console.log(updatestatus);

        var ids = [];
        ids = checkValues;
            /*if(updatestatus!=''){
             if(checkValues!=""){
                */
          $.ajax({
        url: 'order_status_update_api.php',
        type: 'post',
        data: {order_id:ids,updatestatus:updatestatus},
        dataType: 'json',
        success: function(response)
        {
           //alert(response);
           console.log("result: "+response);
           alert(response);
           getData();
            /*if(response==1)
            {
           alert('Status Updated SuccessFully !!'); 
           location.reload();
            }
            else{
               alert('Failed To Assign !!');
               location.reload();
            }*/
        }

    });
               
       /* }*/
           /* else{
                alert('No Value Selected');
            }
            }else{
                alert('Select Updated Status Name');
            }*/
}
 
</script>		
<script>
  $(document).ready(function() {
    getData();

			    
			    

			    
			
});
function delete_executives(id){
            var result = confirm("Confirm want to delete this File Details?");
            if (result) {
                    $.ajax({
                    type: 'POST',
                    url: 'api/delete.php',
                    data: {type:'delete_executives',delete_id:id},                  
                    success: function(response) {
                        console.log(response); 
                        getDatas();
                    }
                });
            }
         }    




     function getData(){			   
	var dataTable = $('#example2').DataTable( {									     
		"processing": true,
		"order":[[0,'asc']],
		"serverSide": true,
        "destroy":true,
        "ajax":{
			url :"data-tables/order-data-table.php", // json datasource
			data: {type:'get_customer_table'},
			type: "post",  // method  , by default get
			error: function(){  // error handling
				$(".example2-error").html("");
				$("#example2").append('<tbody class="example2-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
				$("#example2_processing").css("display","none");
			}
		}
	});
    }
</script>		
<?php include 'footer.php' ?>