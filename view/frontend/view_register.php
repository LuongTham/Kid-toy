<div class="template-customer">
          <h1>Registration account</h1>
          <?php 
            if(isset($_GET["act"])&&$_GET["act"]=="success")
            {
           ?>
           <p style="color:red;">You have successfully registered!</p>
           <?php }else{ ?>
          <p>If you do not have an account, register now to receive preferential information and offers from the store.</p>
          <?php } ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="">
                  <p class="title"><span>Registration account</span></p>
                  <div class="form-group">
                    <label>Full name:</label>
                    <input type="text" name="hovaten" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="text" name="email" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="diachi" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Phone:</label>
                    <input type="text" name="dienthoai" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Password:<b id="req">*</b></label>
                    <input type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="button" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span>Login</span></p>
               <p>Sign up for an account to buy faster. Track orders and shipping. Update our events and discounts.</p>
                <a href="index.php?controller=login" class="button">Login</a> </div>
            </div>
          </div>
        </div>