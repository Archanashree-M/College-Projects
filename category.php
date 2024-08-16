<?php include 'header.php' ?>
	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			    <div class="row" style="margin: 0px 1px 15px 2px;">
						  <div class="col-lg-8">
						      <h6 class="mb-0"><i class='bx bx-category'></i> View Products</h6>
						  </div>
						  <div class="col-lg-4">
						      <a href="category-add.php"><button type="button" class="btn btn-warning btn-sm"><i class='bx bx-user-plus'></i> Add New Category</button></a>
						  </div>
				</div>		  
			    <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Category Name</th>
										<th>Status</th>
										
									</tr>
								</thead>
							
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<script>
    $(document).ready(function() {
    getData();
 function getData(){			   
	var dataTable = $('#example2').DataTable( {									     
		"processing": true,
		"order":[[0,'asc']],
		"serverSide": true,
        "destroy":true,
        "ajax":{
			url :"data-tables/category-data-table.php", // json datasource
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
  function getDatas(){			   
	var dataTable = $('#example2').DataTable( {									     
		"processing": true,
		"order":[[0,'asc']],
		"serverSide": true,
        "destroy":true,
        "ajax":{
			url :"data-tables/category-data-table.php", // json datasource
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