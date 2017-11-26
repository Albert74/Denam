<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-Content">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Jeans</h4>
    </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
           <div class="col-sm-6">
           <div class="center-block"></div>
           <img src="images/products/shirt1.jpg" alt="shirt" class="details img-responsive">
         </div>
       </div>
         <div class="col-sm-6">
           <h4>Details</h4>
           <p> This shirt will look great on you</p>
           <hr>
           <p> Price: ¢155</p>
           <p> Brand: Polo</p>
           <form action="add_cart.php" method="post">
             <div class="form-group">
               <div class="col-xs-3">
                 <label for="qauntity">Quantity:</label>
                 <input type="text" class="form-control" id="quantity" name="quantity">
               </div><div class="col-xs-9"></div>
                <p>Available:3 </p>
           </div><br><br>
           <div class="form-group">
             <label for="size">Size</label>
             <select name="size" id="size" class="form-control">
               <option vlaue=""></option>
               <option vlaue="30">30</option>
               <option vlaue="32">32</option>
               <option vlaue="34">34</option>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn-btn-default" data-dismiss="modal">Close</button>
        <buttton class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-art">Add to cart</span>
      </div>
  </div>
    </div>
  </div>
