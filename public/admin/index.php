<?php require_once('../../resources/config.php'); ?>
<?php include_once(TEMPLATE_BACK.'/header.php'); ?>
<?php
if(!isset($_SESSION['username'])){
    redirect('../../public');
}
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
           
                <!-- /.row -->
<?php
                
if($_SERVER['REQUEST_URI'] == "/Project%20E-commerce/public/admin/" || $_SERVER['REQUEST_URI'] == "/Project%20E-commerce/public/admin/index.php"){
    include_once(TEMPLATE_BACK.'/admin_content.php');
} 
                
if(isset($_GET['orders'])){
    include_once (TEMPLATE_BACK."/orders.php");
}          
if(isset($_GET['categories'])){
    include_once (TEMPLATE_BACK."/categories.php");
}
if(isset($_GET['products'])){
    include_once (TEMPLATE_BACK."/products.php");
}
if(isset($_GET['add_products'])){
    include_once (TEMPLATE_BACK."/add_product.php");
} 
if(isset($_GET['users'])){
    include_once (TEMPLATE_BACK."/users.php");
}
if(isset($_GET['add_user'])){
    include_once (TEMPLATE_BACK."/add_user.php");
} 
if(isset($_GET['edit_user'])){
    include_once (TEMPLATE_BACK."/edit_user.php");
}
        
if(isset($_GET['reports'])){
    include_once (TEMPLATE_BACK."/reports.php");
} 
?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include(TEMPLATE_BACK.'/footer.php'); ?>
