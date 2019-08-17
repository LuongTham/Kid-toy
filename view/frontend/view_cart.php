<div class="template-cart">
          <form action="index.php?controller=cart&act=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Picture </th>
                    <th class="name">Name</th>
                    <th class="price">Retail price</th>
                    <th class="quantity">Quantily</th>
                    <th class="price">Into money</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
                  //duyet cac phan tu trong $_SESSION["cart"]
                  foreach($_SESSION["cart"] as $rows):
               ?>
                  <tr>
                    <td><img src="public/upload/product/<?php echo $rows["c_img"]; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product_detail&id=<?php echo $rows["pk_product_id"]; ?>"><?php echo $rows["c_name"]; ?></a></td>
                    <td> <?php echo number_format($rows["c_price"]); ?>₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"]; ?>" name="product_<?php echo $rows["pk_product_id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format($rows["c_price"]*$rows["number"]); ?>₫</b></p></td>
                    <td><a href="index.php?controller=cart&act=delete&id=<?php echo $rows["pk_product_id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                <?php endforeach; ?> 
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&act=destroy" class="button pull-left">Delete all</a> <a href="index.php" class="button pull-right black">Continue Shopping</a>
                      <input type="submit" class="button pull-right" value="Cập nhật"></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <div class="total-cart"> Total payment: 
            <?php echo number_format($this->cart_total()); ?>₫ <br>
            <?php if(count($_SESSION["cart"]) > 0): ?><a href="index.php?controller=checkout" class="button black">Payment</a> <?php endif; ?> </div>
        </div>