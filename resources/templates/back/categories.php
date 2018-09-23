<div class="container-fluid">
<h1 class="page-header">
  Product Categories
</h1>
<div class="col-md-4">
    
    <form action="" method="post">
      <?php add_category(); ?>
       <h3><?php display_message(); ?></h3>
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group">
            
            <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">
        </div>      
    </form>
</div>
<div class="col-md-8">

    <table class="table">
            <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Remove Category</th>
        </tr>
            </thead>
    <tbody>
       <?php show_categories_in_admin(); ?>
    </tbody>

        </table>
</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
