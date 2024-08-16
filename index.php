<?php include 'header.php' ?>
<?php
$statement1 = $pdo->prepare("SELECT * FROM `products` where `status`=1");
$statement2 = $pdo->prepare("SELECT * FROM `subcategory` where `status`=1");
$statement3 = $pdo->prepare("SELECT * FROM `category` where `status`=1");
$statement4 = $pdo->prepare("SELECT * FROM `registration` where `status`=1");
$statement5 = $pdo->prepare("SELECT * FROM `tbl_cart` where `status`=1");

$statement1->execute();
$statement2->execute();
$statement3->execute();
$statement4->execute();
$statement5->execute();
$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
$result3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
$result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
$result5 = $statement5->fetchAll(PDO::FETCH_ASSOC);
$products_count = $statement1->rowCount();
$subcategory_count = $statement2->rowCount();
$category_count = $statement3->rowCount();
$registration_count = $statement4->rowCount();
$orders_count = $statement5->rowCount();




?>
		<!--start page wrapper -->
		<div class="page-wrapper">

			<div class="page-content">
			    <!--super admin 1-->
	    <div id='super-admin1' >
	
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
				   <div class="col" >
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Products</p>
									<h4 class="my-1 text-info" style="font-size: 40px;"><?=$products_count?></h4>
									<p class="mb-0 font-13"><!--Overall Project 100%--></p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="fa-solid fa-user-secret"></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-warning">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Categories</p>
									<h4 class="my-1 text-warning" style="font-size: 40px;"><?=$category_count?></h4>
									<p class="mb-0 font-13"><!--Overall Project 100%--></p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="fa-solid fa-folder-open"></i><!--<i class='bx bxs-cart'></i>-->
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Subcategories</p>
								   <h4 class="my-1 text-success" style="font-size: 40px;"><?=$subcategory_count?></h4>
								   <p class="mb-0 font-13"><!--+5.4% from last week--></p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><!--<i class='bx bxs-wallet'></i>--><i class="bi bi-file-earmark-check"></i><!--<i class="fa-solid fa-folder-bookmark"></i>-->
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Customers</p>
								   <h4 class="my-1 text-danger" style="font-size: 40px;"><?=$registration_count?></h4>
								   <p class="mb-0 font-13"><!---4.5% from last week--></p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class="bi bi-file-earmark-excel"></i></div>
						   </div>
					   </div>
					</div>
				  </div>
				  
				   <div class="col" >
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Orderss</p>
									<h4 class="my-1 text-info" style="font-size: 40px;"><?=$orders_count?></h4>
									<p class="mb-0 font-13"><!--Overall Project 100%--></p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="fa-solid fa-user-secret"></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				  	   
			
				  <br>
			
				</div>
     
        </div>
			    <!--super admin 2-->
        
        
        
        
  

				
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	<?php include 'footer.php' ?>
	
	
	<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Top Oil Reserves"
	},
	axisY: {
		title: "Reserves(MMbbl)"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "MMbbl = one million barrels",
		dataPoints: [      
			{ y: 300878, label: "Venezuela" },
			{ y: 266455,  label: "Saudi" },
			{ y: 169709,  label: "Canada" },
			{ y: 158400,  label: "Iran" },
			{ y: 142503,  label: "Iraq" },
			{ y: 101500, label: "Kuwait" },
			{ y: 97800,  label: "UAE" },
			{ y: 80000,  label: "Russia" }
		]
	}]
});
chart.render();

}
</script>