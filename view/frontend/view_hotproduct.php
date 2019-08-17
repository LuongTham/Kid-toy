<div class="special-collection">
			  <div class="tabs-container">
				<div class="clearfix">
				  <h2>Hot Product</h2>
				</div>
			  </div>
			  <div class="tabs-content row">
				<div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
				  <div class="clearfix"> 
				<?php foreach($hotproduct as $rows): ?>
					<!-- box product -->
					<div class="col-xs-6 col-md-2 col-sm-6 ">
					  <div class="product-grid" id="product-1168979">
						<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" title="<?php echo $rows->c_name; ?>" alt="<?php echo $rows->c_name; ?>" class="img-responsive"></a> </div>
						<div class="info">
						  <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><?php echo $rows->c_name; ?></a></h3>
						  <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->c_price); ?> VNĐ </span> </span> </p>
						  <div class="action-btn">
							<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
							  <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="button">Add to Cart</a>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<!-- end box product --> 
					<?php endforeach; ?>
					 

				  </div>
				</div>
			  </div>
			</div>