<?php

 include ('new-config.php');
 include ('header.php'); 
 
?>

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row mb-8">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                            <!-- List -->
                            <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                <li><div class="dropdown-title">Browse Categories</div></li>
<?php


$statements = $pdo->prepare("SELECT category_name from category where status='1'");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;


    foreach($query as $data){

?>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                        <?=$data['category_name']?><span class="text-gray-25 font-size-12 font-weight-normal"> </span>
                                    </a>

                                    <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                            <!-- Menu List -->
                                            <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                            <!-- End Menu List -->
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </li>
                                <!--<li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
                                        Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
                                        Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
                                        Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
                                        Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
                                        Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                            <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
                                        Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
                                        Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav9Collapse" data-target="#sidebarNav9Collapse">
                                        TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav9Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav9" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Audio Speakers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav10Collapse" data-target="#sidebarNav10Collapse">
                                        Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                    </a>

                                    <div id="sidebarNav10Collapse" class="collapse" data-parent="#sidebarNav">
                                        <ul id="sidebarNav10" class="list-unstyled dropdown-list">
                                            
                                            <li><a class="dropdown-item" href="#">Game Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li> -->
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="mb-6">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                        <label class="custom-control-label" for="brandAdidas">Adidas
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                        <label class="custom-control-label" for="brandNewBalance">New Balance
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandNike">
                                        <label class="custom-control-label" for="brandNike">Nike
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                        <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="brandTnf">
                                        <label class="custom-control-label" for="brandTnf">The North Face
                                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- End Checkboxes -->

                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapseBrand">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brandGucci">
                                            <label class="custom-control-label" for="brandGucci">Gucci
                                                <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brandMango">
                                            <label class="custom-control-label" for="brandMango">Mango
                                                <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->

                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">Show more</span>
                                    <span class="link-collapse__active">Show less</span>
                                </a>
                                <!-- End Link -->
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>

                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="categoryTshirt">
                                        <label class="custom-control-label" for="categoryTshirt">Black <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="categoryShoes">
                                        <label class="custom-control-label" for="categoryShoes">Black Leather <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="categoryAccessories">
                                        <label class="custom-control-label" for="categoryAccessories">Black with Red <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="categoryTops">
                                        <label class="custom-control-label" for="categoryTops">Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="categoryBottom">
                                        <label class="custom-control-label" for="categoryBottom">Spacegrey <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                    </div>
                                </div>
                                <!-- End Checkboxes -->

                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapseColor">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="categoryShorts">
                                            <label class="custom-control-label" for="categoryShorts">Turquoise <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="categoryHats">
                                            <label class="custom-control-label" for="categoryHats">White <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="categorySocks">
                                            <label class="custom-control-label" for="categorySocks">White with Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->

                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false" aria-controls="collapseColor">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">Show more</span>
                                    <span class="link-collapse__active">Show less</span>
                                </a>
                                <!-- End Link -->
                            </div>
                            <div class="range-slider">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                <!-- Range Slider -->
                                <input class="js-range-slider" type="text"
                                data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                data-type="double"
                                data-grid="false"
                                data-hide-from-to="true"
                                data-prefix="$"
                                data-min="0"
                                data-max="3456"
                                data-from="0"
                                data-to="3456"
                                data-result-min="#rangeSliderExample3MinResult"
                                data-result-max="#rangeSliderExample3MaxResult">
                                <!-- End Range Slider -->
                                <div class="mt-1 text-gray-111 d-flex mb-4">
                                    <span class="mr-0dot5">Price: </span>
                                    <span>$</span>
                                    <span id="rangeSliderExample3MinResult" class=""></span>
                                    <span class="mx-0dot5"> — </span>
                                    <span>$</span>
                                    <span id="rangeSliderExample3MaxResult" class=""></span>
                                </div>
                                <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                            </div>
                            <ul class="list-unstyled">
<?php

$statements = $pdo->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 5");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;
foreach($query as $data){

?>
                                <li class="mb-4">
                                    <a href="preview.php?id=<?=$data['id']?>">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="preview.php?id=<?=$data['id']?>" class="d-block width-75">
                                                <img class="img-fluid" src="<?=$data['p_image']?>" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="preview.php?id=<?=$data['id']?>"><?=$data['product_name']?></a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold">
                                                <del class="font-size-11 text-gray-9 d-block"><?=$data['actual_price']?></del>
                                                <ins class="font-size-15 text-red text-decoration-none d-block"><?=$data['selling_price']?></ins>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </li>
    <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-wd-9gdot5">
                        <!-- Recommended Products -->
                        <div class="mb-6 d-none d-xl-block">
                            <div class="position-relative">
                                <div class="border-bottom border-color-1 mb-2">
                                    <h3 class="d-inline-block section-title section-title__full mb-0 pb-2 font-size-22">Recommended Products</h3>
                                </div>
                                <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                                    data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                                    data-slides-show="5"
                                    data-slides-scroll="1"
                                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                    data-arrow-left-classes="fa fa-angle-left right-1"
                                    data-arrow-right-classes="fa fa-angle-right right-0"
                                    data-responsive='[{
                                      "breakpoint": 1400,
                                      "settings": {
                                        "slidesToShow": 4
                                      }
                                    }, {
                                        "breakpoint": 1200,
                                        "settings": {
                                          "slidesToShow": 4
                                        }
                                    }, {
                                      "breakpoint": 992,
                                      "settings": {
                                        "slidesToShow": 3
                                      }
                                    }, {
                                      "breakpoint": 768,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }, {
                                      "breakpoint": 554,
                                      "settings": {
                                        "slidesToShow": 2
                                      }
                                    }]'>

<?php

$statements = $pdo->prepare("SELECT products.*,category_name FROM `products` inner join category on products.category_id=category.id WHERE products.status='1' and products.product_type='3' limit 7");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;

?>

<?php
    foreach($query as $data){
?>

                                    <div class="js-slide products-group">
                                        <div class="product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                                    <a href="preview.php?id=<?=$data['id']?>">
                                                    <div class="product-item__body pb-xl-2">

                                                        <div class="mb-2"><a href="preview.php?id=<?=$data['id']?>" class="font-size-12 text-gray-5"><?=$data['category_name']?></a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="preview.php?id=<?=$data['id']?>" class="text-blue font-weight-bold"><?=$data['product_name']?></a></h5>
                                                        <div class="mb-2">
                                                            <a href="preview.php?id=<?=$data['id']?>" class="d-block text-center"><img class="img-fluid" src="<?=$data['p_image']?>" style="height:169px;" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">RS.<?=$data['selling_price']?></div>

                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <span id="items_<?=$data['id']?>" onclick="Quick_AddToCart(<?=$data['id']?>)" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="preview.php?id=<?=$data['id']?>" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                        </div>
                                                    </div>
                                                </a>
   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <?php  } ?>      
                            </div>
                        </div>
                        <!-- End Recommended Products -->
                        <!-- Shop-control-bar Title -->


<!-- beginning of shop -->
                        <div class="flex-center-between mb-3">
                            <h3 class="font-size-25 mb-0">Shop</h3>
                            <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                        </div>
                        <!-- End shop-control-bar Title -->
                        <!-- Shop-control-bar -->
                        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                            <div class="d-xl-none">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                                    aria-controls="sidebarContent1"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarContent1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </div>
                            <div class="px-3 d-none d-xl-block">
                                <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-th"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-align-justify"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                <i class="fa fa-th-list"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <form method="get">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="one" selected>Default sorting</option>
                                        <option value="two">Sort by popularity</option>
                                        <option value="three">Sort by average rating</option>
                                        <option value="four">Sort by latest</option>
                                        <option value="five">Sort by price: low to high</option>
                                        <option value="six">Sort by price: high to low</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                                <form method="POST" class="ml-2 d-none d-xl-block">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select max-width-120"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                        <option value="one" selected>Show 20</option>
                                        <option value="two">Show 40</option>
                                        <option value="three">Show All</option>
                                    </select>
                                    <!-- End Select -->
                                </form>
                            </div>
                            <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                                <form method="post" class="min-width-50 mr-1">
                                    <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                                </form> of 3
                                <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                            </nav>
                        </div>
                        <!-- End Shop-control-bar -->
                        <!-- Shop Body -->
                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">

                                <ul class="row list-unstyled products-group no-gutters">
                                    <?php

$statements = $pdo->prepare("SELECT products.*,category_name FROM `products` inner join category on products.category_id=category.id WHERE products.status='1'");
     $results = $statements->execute();
     $query = $statements->fetchAll(PDO::FETCH_ASSOC);
     $totals = $statements->rowCount(); 
$i=1;
foreach($query as $data){

?>
                                    <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                        <a href="preview.php?id=<?=$data['id']?>">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a href="preview.php?id=<?=$data['id']?>" class="font-size-12 text-gray-5"><?=$data['category_name']?></a></div>
                                                    <h5 class="mb-1 product-item__title"><a href="preview.php?id=<?=$data['id']?>" class="text-blue font-weight-bold"><?=$data['product_name']?></a></h5>
                                                    <div class="mb-2">
                                                        <a href="preview.php?id=<?=$data['id']?>" class="d-block text-center"><img class="img-fluid" src="<?=$data['p_image']?>" alt="Image Description" style="height:200px;width:150px;"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">RS.<?=$data['selling_price']?></div>
                                                            <div class="text-gray-100" style="font-size: 11px;"><del>RS.<?=$data['actual_price']?></del></div>

                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <span id="items_<?=$data['id']?>" onclick="Quick_AddToCart(<?=$data['id']?>)" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                <!-- Brand Carousel -->
                
                <!-- End Brand Carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
        <!-- End Sidebar Navigation -->

        <!-- Go to Top -->
        
   <script src="jquery.min.js"></script>



<script>
function Quick_AddToCart(pro_id){
         
         console.log('Cart Added Succesfully');
    <?php if(isset($_SESSION['ecom_website'])){ ?>
        console.log('Cart Added Succesfullyyy');
            $.ajax({
                    url: 'add_cart.php',
                    type: 'post',
                    dataType: 'json',
                    data: {pro_id:pro_id,type:'add_cart'},
                    success: function (response) {
                       console.log(response);

                        if(response['error']=='false'){
                            $('#items_'+pro_id).empty();
                            $('#items_'+pro_id).append('<span class="btn btn-info btn-sm" style="background: green;"><i class="fi-rs-shopping-cart mr-5" style="color: white;"></i>Added</span>');
                            
                           // $('#cart_items_count').text(response['cart_count']);
                           // product_addons_cart();
                            //alert(response['message']);
                            alert(response['message']);
                           // $('#addon_loader').hide();
                            
                        }else{
                           // alert(response['message']);
                           alert(response['message']);
                          //  $('#addon_loader').hide();
                        }
                    }
                });
     <?php }else{ echo "window.alert('Please Login!!!!!!');"; 
        echo "window.location.href='a.php';"; 
    }?>
        
    }
</script>

<?php

 include ('new-config.php');
 include ('footer.php'); 
 
?>
    </body>
</html>

