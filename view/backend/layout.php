<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <!-- load ckeditor -> ckeditor.com -->
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="admin.php?controller=category_product">Category</a></li>
            <li class="active"><a href="admin.php?controller=product">Product</a></li>
            <li class="active"><a href="admin.php?controller=order">Shopping Cart</a></li>
            <li class="active"><a href="admin.php?controller=user">Manage user</a></li>
            <li class="active"><a href="admin.php?controller=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="container" style="margin-top:70px;">
   	<?php 
        //kiem tra xem duong dan controller co ton tai khong, neu co ton tai thi load file do ra
        if(file_exists($controller))
          include $controller;//include "controller/backend/controller_user.php"
     ?>
   </div>

</body>
</html>