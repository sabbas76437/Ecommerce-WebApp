<div class ="modal fade details-5" id="details-5" tabindex="-1" role="dialog" aria-labelledby="details-5" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class ="modal-content">
    <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden ="true">&times;</span>
      </button>
      <h4 class="modal-title text-center">Serum</h4>

    </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">

            <div class="center-block">
              <img src = "images/mim41.jpg" alt="Serum" class="details img-responsive" />
          </div>
        </div>
        <div class="col-sm-6">
          <h4>Details</h4>
            <p>This is a Serum by Myriad owned by Syeda Yousha Ali. There is a discount going on Stock it up as much as you can before its too late.
            </p>
            <hr />
            <p>Price: $22.99</p>
            <p>Brand: Myriad</p>
            <form action="add_cart.php" method="post">
              <div class="form-group">
                <div class="col-xs-3">
                  <label for="quantity" id="quantity-label">Quantity:</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" />
                </div><br /><br /><br />
                <div class="form-group">
                  <label for="size">Size:</label>
                  <select name="size" id="size" class="form-control">
                    <option value=" "></option>
                    <option value="2 oz">2 oz</option>
                    <option value="4 oz">4 oz</option>

                  </select>
                </div>
            </div>
            </form>
      </div>
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
    <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
    </div>
  </div>
  </div>
</div>
