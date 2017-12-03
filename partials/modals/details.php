<div class="modal fade" tabindex="-1" role="dialog" id="details-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Jeans</h4>
            </div>
            <form action="includes/actions/add_cart.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="assets/img/products/shirt1.jpg" alt="shirt" class=" img-responsive">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <h4>Details</h4>
                            <p>This shirt will look great on you</p>
                            <hr>
                            <p>Price: <strong>¢155</strong></p>
                            <p>Brand: <strong>Polo</strong></p>
                            <p>Available: <strong>3</strong></p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="qauntity">Quantity</label>
                                        <input type="number" class="form-control" id="qauntity" name="quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <select name="size" id="size" class="form-control">
                                            <option value="" disabled="" selected="">Select a Size</option>
                                            <option value="30">30</option>
                                            <option value="32">32</option>
                                            <option value="34">34</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning" type="submit">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        Add to Cart
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>