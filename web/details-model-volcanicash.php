<div class ="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class ="modal-content">
    <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden ="true">&times;</span>
      </button>
      <h4 class="modal-title text-center">Volcanic Ash</h4>

    </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">

            <div class="center-block">
              <img src = "images/volcanicash.jpg" alt="Volcanic Ash" class="details img-responsive" />
          </div>
        </div>
        <div class="col-sm-6">
          <h4>Details</h4>
            <p>This is a Volcanic Ash product by Myriad owned by Syeda Yousha Ali. There is a discount going on Stock it up as much as you can before its too late.
            </p>
            <hr />
            <p>Price: $24.99</p>
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
                    <option value="16 oz">16 oz</option>
                    <option value="24 oz">24 oz</option>

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
  <!--  <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>-->
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FM29NJ2SAT96C">
<table>
<tr><td><input type="hidden" name="on0" value="Volcanic Ash">Volcanic Ash</td></tr><tr><td><select name="os0">
	<option value="16 oz">16 oz $19.99 USD</option>
	<option value="24 oz">24 oz $24.99 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

    </div>
  </div>
  </div>
</div>
