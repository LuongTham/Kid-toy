<!-- header -->
	<header id="header">
	<!-- top header -->
	<div class="top-header">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
		  <div class="col-xs-12 col-sm-6 col-md-6 customer">
		  	<?php 
		  	//kiem tra, neu user da dang nhap thi hien thi thong tin user
		  	if(isset($_SESSION["customer_email"]))
		  	{
		   ?>
		   Hello <?php echo $_SESSION["customer_email"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?controller=login&act=logout">Logout</a>
		   <?php }else{ ?>
		  <a href="index.php?controller=login"><i class="fa fa-user"></i> Login</a> <a href="index.php?controller=register"><i class="fa fa-user-plus"></i> Registration </a> 
			<?php } ?>
		  </div>
		</div>
	  </div>
	</div>
	<!-- end top header --> 
	<!-- middle header -->
	<div class="mid-header">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.php"> <img src="public/frontend/100/047/633/themes/517833/assets/logo221b1.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
		<div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
		  <script type="text/javascript">
			  function search(){
				key = document.getElementById("key").value;
				location.href="index.php?controller=search&key="+key;
				return false;
			  }
			</script>
		  <form method="post" action="">
			<input type="text" value="" placeholder="Enter keywords to search..." id="key" class="input-control">
			<button  type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
		  </form>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
		  <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> <?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):""; ?> </span> Product <i class="fa fa-caret-down"></i></a>
			<div class="content-mini-cart">
			  <div class="has-items">
				<ul class="list-unstyled">
				<?php if(isset($_SESSION["cart"])): ?>
					<?php foreach($_SESSION["cart"] as $rows): ?>
				  <li class="clearfix" id="item-1853038">
					<div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows["pk_product_id"]; ?>"> <img alt="<?php echo $rows["c_name"]; ?>" src="public/upload/product/<?php echo $rows["c_img"]; ?>" title="<?php echo $rows["c_name"]; ?>" class="img-responsive"> </a> </div>
					<div class="info">
					  <h3><a href="index.php?controller=product_detail&id=5"><?php echo $rows["c_name"]; ?></a></h3>
					  <p><?php echo number_format($rows["number"]*$rows["c_price"]); ?>₫</p>
					</div>
					<div> <a href="index.php?controller=cart&act=delete&id=<?php echo $rows["pk_product_id"]; ?>"> <i class="fa fa-times"></i></a> </div>
				  </li>
				 	<?php endforeach; ?>
				 <?php endif; ?>
				</ul>
				<a href="index.php?controller=checkout" class="button">Payment</a> </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- end middle header --> 
	<!-- bottom header -->
	<div class="bottom-header">
	  <div class="container">
		<div class="clearfix">
		  <ul class="main-nav hidden-xs hidden-sm list-unstyled">
			<li class="active"><a href="index.php">Home</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<?php 
					//lay tat ca ban ghi trong tbl_category_product
					$category = model::list_all("select * from tbl_category_product order by pk_category_product_id desc");
					foreach($category as $rows):
				 ?>
	            <li><a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></a></li>
	        	<?php endforeach; ?>
	          </ul>
			</li>
			<li ><a href="index.php?controller=news">News</a></li>
			<li ><a href="index.php?controller=cart">Shopping Cart</a></li>
			<li ><a href="index.php?controller=lienhe">Contact</a></li>
		  </ul>
		  <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
		  <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
			<li class="active"><a href="index.php">Home</a></li>
			<li ><a href="#">Intoduction</a></li>
			<li ><a href="index.php?controller=tintuc">News</a></li>
			<li ><a href="index.php?controller=lienhe">Contact</a></li>
		  </ul>
		</div>
	  </div>
	</div>
	<!-- end bottom header -->
	</header>
	<!-- end header -->
