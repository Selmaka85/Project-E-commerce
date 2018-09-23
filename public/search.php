<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT.DS."header.php"); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        <!-- categories -->
<?php include(TEMPLATE_FRONT.DS."side_nav.php"); ?>           
        <!-- end of categories -->      
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                       <!-- Carouse -->
<?php include(TEMPLATE_FRONT.DS."slider.php"); ?>                  
                       <!-- end of carouse slider -->
                    </div>
                </div>
                <div class="row">
                <?php search_products(); ?>
                </div> <!-- row ends here -->
            </div>
        </div>
    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT.DS."footer.php"); ?>
  