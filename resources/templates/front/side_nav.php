 <div class="col-md-3">
             <p class="lead">Bitica's Shop</p>
             <div class="list-group">   
              <div class="well">
                    <h4>Produc Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form><!--search form-->
                    <!-- /.input-group -->
                </div>           
      <?php get_categories(); ?>
      <br> 
      
    </div> 
</div>






