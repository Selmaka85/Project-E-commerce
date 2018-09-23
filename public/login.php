<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT.DS."header.php"); ?>
    <!-- Page Content -->
       <!-- container -->
    <div class="container">
      <header>
          <h1 class="text-center">Login</h1>
            <h1 class="text-center bg-warning text-danger"><?php display_message(); ?></h1>
        <div class="col-sm-4 col-sm-offset-5">
            <?php login_user(); ?><br><hr>
            <form class="" action="" method="post">
                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control" placeholder="Username"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control" placeholder="Password"></label>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  
    </header>
        </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT.DS."footer.php"); ?>