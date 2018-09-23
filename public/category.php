<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT.DS."header.php"); ?>
    <!-- Page Content -->
    <div class="container">
     <div class="row">
     
<?php include(TEMPLATE_FRONT.DS."side_nav.php"); ?>    
        <!-- Jumbotron Header -->
       
<div class="col-md-9">

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row">

         <?php get_products_in_cat_page();?>

        </div>
        <!-- /.row -->
        </div>
    </div>
</div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT.DS."footer.php"); ?>