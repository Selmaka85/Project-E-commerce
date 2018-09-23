

    <div class="container-fluid">

<div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders
</h1><br>
<h3 class="bg-success text-center"><?php display_message(); ?></h3>
</div>
<div class="row">
<table class="table table-hover">
    <thead>
      <tr>
           <th>ID</th>
           <th>Amount</th>
           <th>Transactions</th>
           <th>Currency</th>
           <th>Status</th>
           <th>Remove Order</th>   
    </thead>
    <tbody>
        <?php display_orders(); ?>
    </tbody>
</table>
</div>
</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

  