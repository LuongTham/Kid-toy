<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="admin.php?controller=product&action=add" class="btn btn-primary">Add product</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">product</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">NO</th>
					<th style="width:100px;">Picture</th>
					<th>Title</th>
					<th style="width:200px;">Category</th>
					<th style="width:100px;"></th>
				</tr>
				<?php $stt = isset($_GET["p"]) ? ($_GET["p"]-1)*$record_per_page : 0; ?>
				<?php foreach($data as $rows): ?>
				<?php $stt++;  ?>
				<tr>
					<td style="text-align:center;"><?php echo $stt; ?></td>
					<td style="text-align:center;">
						<?php if(file_exists("public/upload/product/".$rows->c_img)): ?>
							<img src="public/upload/product/<?php echo $rows->c_img; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td><?php echo $rows->c_name; ?></td>
					<td style="text-align:center;">
						<?php 
							//lay 1 ban ghi
							$category = model::get_a_record("select c_name from tbl_category_product where pk_category_product_id=$rows->fk_category_product_id");
							echo isset($category->c_name)?$category->c_name:"";
						 ?>
					</td>
					<td style="text-align:center;">
						<a href="admin.php?controller=product&action=edit&id=<?php echo $rows->pk_product_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=product&action=delete&id=<?php echo $rows->pk_product_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>
			<ul class="pagination">
				<li class="page"><a class="page-item" href="#">Trang</a></li>
				<?php for($i = 1; $i <= $num_page; $i++): ?>
				<li class="page"><a class="page-item" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>