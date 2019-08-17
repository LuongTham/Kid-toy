<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom: 5px;">
	<?php 
		//kiem tra, neu don hang chua giao thi hien thi button giao hang
		$check = model::get_a_record("select customer_id,trangthai from tbl_order where order_id=$order_id");
		if($check->trangthai == 0)
		{
	 ?>
		<a href="admin.php?controller=order_detail&act=sent&order_id=<?php echo $order_id; ?>" class="btn btn-primary">Shipping</a>&nbsp;
		<?php } ?>
		<a href="admin.php?controller=order" class="btn btn-danger">Return</a>&nbsp;
	</div>
	<?php 
		$customer = model::get_a_record("select * from tbl_customer where customer_id=".$check->customer_id);
	 ?>
	<div style="margin:bottom:5px;">Fullname: <?php echo $customer->hovaten; ?></div>
	<div style="margin:bottom:5px;">Adress: <?php echo $customer->diachi; ?></div>
	<div style="margin:bottom:5px;">Phone: <?php echo $customer->dienthoai; ?></div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Bill details</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color:white">
					<th style="width: 100px;">Picture</th>
					<th>Product Name</th>
					<th style="width: 100px;">Price</th>
					<th style="width: 100px;">Quantily</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
						//lay thong tin san pham
						$product = model::get_a_record("select * from tbl_product where pk_product_id=".$rows->fk_product_id);
				 ?>				 
				<tr>
					<td style="text-align: center;"><img src="public/upload/product/<?php echo $product->c_img; ?>" style="width:100px;"></td>
					<td><?php echo $product->c_name; ?></td>
					<td style="text-align: center;"><?php echo number_format($product->c_price); ?>đ</td>
					<td style="text-align: center;"><?php echo $rows->c_number; ?></td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="#">Page</a></li>
				<?php 
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?>
				<li <?php echo isset($_GET["p"])&&$_GET["p"]==$i ? "class='active'":""; ?> ><a href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>