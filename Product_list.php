                  <?php
              include 'ketnoi.php';
                $sql = "SELECT productid, image, price, discount, productname FROM product";
                $result = pg_query($connection,$sql);
                if (pg_num_rows($result) > 0) {
                // output data of each row
                while($row = pg_fetch_assoc($result)) {
                  $productid = $row['productid'];
                    $price = $row['price'];
                    $image = $row['image'];
                    $discount = $row['discount'];
                    $productname = $row['productname'];
             
              ?>
                  <div class="col-xs-6 col-md-3 col-sm-6 ">
                    <div class="product-grid" id="product-1168979">
                      <div class="image"> <a href="#"><img src="<?= $image; ?>" title="Sản phẩm ..." alt="Sản phẩm 2" class="img-responsive"></a> </div>
                      <div class="info">
                        <h3 class="name"><a href="#"><?= $productname; ?></a></h3>
                        <p class="price-box"> <span class="special-price"> <span class="price product-price"><?= $price; ?> $</span> </span> </p>
                        <div class="action-btn">
                          <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                            <a href="#" class="button">Chọn sản phẩm</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                      <?php }} 

           ?>