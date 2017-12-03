<?php include 'html_blocks/header.php';?>


    <?php include 'html_blocks/navbar.php';?>

    <section class="page-title page-title -1 img-bg overlay pixelz-dark parallax">
        <div class="background-img-holder fadeIn " style="tranform:translate3d(0px,0px,0px);"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb12">DENAM</h2>
                    <p class="lead">The Best Delivery store in Cape Coast</p>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <h2 class="text-center">Featured Products</h2>

                    <div class="col-md-3">
                        <h4>Shirts</h4>
                        <img src="image/products/shirt1.jpg"  class="img-thumbnail"  alt="shirt"  style= "width:200px;  height:200px;"/>
                        <p  class="list-price text-danger">List Price <s>¢150</s></p>
                        <p class="price">Our Price: ¢100</p>
                        <button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                            Details
                        </button>
                    </div>

                    <div class="col-md-3">
                        <h4>Shoes</h4>
                        <img src="image/products/shirt2.jpg" alt="Shirts" class="img-thumbnail" style="width:200px; height:200px;"/>
                        <p  class="list-price text-danger">List Price <s>¢160</s></p>
                        <p class="price">Our Price: ¢90</p>
                        <button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                            Details
                        </button>
                    </div>

                    <div class="col-md-3">
                        <h4>T-Shirts</h4>
                        <img src="image/shirt1.jpg" alt="Shirts" class="img-thumbnail" style="width:200px; height:200px;"/>
                        <p  class="list-price text-danger">List Price <s>¢115</s></p>
                        <p class="price">Our Price: ¢111</p>
                        <button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                            Details
                        </button>
                    </div>

                    <div class="col-md-3">
                        <h4>T-Shirts</h4>
                        <img src="image/shirt1.jpg" alt="Shirts" class="img-thumbnail" style="width:200px; height:200px;"/>
                        <p  class="list-price text-danger">List Price <s>¢115</s></p>
                        <p class="price">Our Price: ¢111</p>
                        <button type="button" class="btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center" id="footer"> &copy; Albert @ Asare </footer>



<?php include 'partials/modals/details.php';?>
<?php include 'html_blocks/footer.php';?>
