<div class="template-customer">
          <h1>Login</h1>
          <?php if(isset($_GET["act"])&&$_GET["act"]=="fail"){ ?>
          <p style="color:red">Login not successfull</p>
          <?php }else{ ?>
          <p>Login again</p>
          <?php } ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="">
                  <p class="title"><span>Login</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label>Password:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required="">
                  </div>
                  <input type="submit" class="button" value="Đăng nhập">
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span>Create Account</span></p>
                <p>Sign up for an account to buy faster. Track orders and shipping. Update our events and discounts.</p>
                <a href="index.php?controller=register" class="button">Registration</a> </div>
            </div>
          </div>
        </div>