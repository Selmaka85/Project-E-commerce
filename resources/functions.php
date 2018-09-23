<?php
//helper functions
//this functions will help you to implement functionalities on both, back and front end

function redirect($location){
    header("Location: $location");
}

function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

function confirm($result){
    global $connection;
if(!$result){
    die("QUERY FAILED".mysqli_error($connection));
    }
}

function set_message($message){
    if(!empty($message)){
        $_SESSION['message']=$message;
    }else{
       $message="";
    }
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function escape_value($string){
global $connection;
return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}


/*********************FRONT END FUNCTIONS*********************/

// get products function

if (!function_exists("get_products")) {
function get_products(){
    
// we used already built function query from the helper functions section 
$query = query("SELECT * FROM products");   
confirm($query);
        while($row = fetch_array($query)){
//when you use delimeter make sure you don`t have space after first delimiter and before second delimeter
        $products = <<<DELIMETER
<div class="col-sm-4 col-lg-4 col-md-4">
   <div class="thumbnail">
       <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
       <div class="caption">
        <h4 class="pull-right">&#163;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        <a class="btn btn-primary" target="_blank" href="cart.php?add={$row['product_id']}">Add to cart</a>
       </div>
   </div></div>
DELIMETER;
echo $products;
    }    
}

function get_categories(){ 
$query=query("SELECT * FROM categories");
confirm($query);
while($row=fetch_array($query)){
$category_links = <<<DELIMETER
 <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
 
DELIMETER;
    echo $category_links;
}
} 
}

if (!function_exists("get_products_in_cat_page")) {
function get_products_in_cat_page(){
    
// we used already built function query from the helper functions section 
$query = query("SELECT * FROM products WHERE product_category_id=".escape_value($_GET['id'])."");   
confirm($query);
        while($row = fetch_array($query)){
//when you use delimeter make sure you don`t have space after first delimiter and before second delimeter
        $products = <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
   <div class="thumbnail">
       <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
       <div class="caption">
        <h4 class="pull-right">&#163;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Buy Now!</a>
       </div>
   </div></div>
DELIMETER;
echo $products;
    }    
}
}

if (!function_exists("get_products_in_shop_page")) {
function get_products_in_shop_page(){
    
// we used already built function query from the helper functions section 
$query = query("SELECT * FROM products");
        while($row = fetch_array($query)){
//when you use delimeter make sure you don`t have space after first delimiter and before second delimeter
        $products = <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
   <div class="thumbnail">
       <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
       <div class="caption">
        <h4 class="pull-right">&#163;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Buy Now!</a>
       </div>
   </div></div>
DELIMETER;
echo $products;
    }    
}
}

if (!function_exists("login_user")) {
function login_user(){
    if(isset($_POST['submit'])){
        $username=escape_value($_POST['username']);
        $password=escape_value($_POST['password']);
        $query=query("SELECT * FROM users WHERE username='{$username}' AND password='{$password}' ");
        confirm($query);
        if(mysqli_num_rows($query)==0){
            set_message("Your Password or Username is wrong");
            redirect("login.php");
        }else{
            $_SESSION['username']=$username;
            redirect("admin");
        }
       }
     }   
   }

if(!function_exists("search_products")){
    function search_products(){
         if(isset($_POST['submit'])){   
            $search = $_POST['search'];
            $query = query("SELECT * FROM products WHERE post_tags LIKE '%$search%' ");
           confirm($query);

            $count = mysqli_num_rows($query);

            if($count == 0) {

                echo "<h1> NO RESULT</h1>";

            } else {

    while($row =$row = fetch_array($query)) {
        $products = <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
   <div class="thumbnail">
       <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
       <div class="caption">
        <h4 class="pull-right">&#163;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Buy Now!</a>
       </div>
   </div></div>
DELIMETER;
echo $products;
                }
            }
         
         }
    } }

if (!function_exists("contact_us")){
 function contact_us(){
     if(isset($_POST['submit'])){
         $to       = "someEmailaddress@yahoo.com";
         $username = $_POST['name'];
         $email    = $_POST['email'];
         $subject  = $_POST['subject'];
         $message  = $_POST['message'];
    $headers = "From:{$username} {$email}";
    $result= mail($to, $subject, $message, $headers);
    if(!$result){
        set_message("Sorry, we could not send your message!");
        redirect("contact.php");
    }else{
        set_message("Your message has ben sent!");
    }
   }
 }
}

if(!function_exists("show_paypal")){
    function show_paypal(){
        if(isset($_SESSION['item_quantity'])&& ($_SESSION['item_quantity']>=1)){
        $paypal_button=<<<DELIMETER
             <input type="image" name="upload"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
DELIMETER;
        return $paypal_button;
    }

    }
  }

function last_id(){
    global $connection;
    return mysqli_insert_id($connection);
    
}

/************************BACK END FUNCTIONS*********************/

function display_orders(){
    
$query=query("SELECT * FROM orders");
confirm($query);
while($row=fetch_array($query)){
$orders=<<<DELIMETER
<tr>
        <td>{$row['order_id']}</td>
        <td>{$row['order_amount']}</td>
        <td>{$row['order_transaction']}</td>
        <td>{$row['order_currency']}</td>
        <td>{$row['order_status']}</td>
        <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></td>
</tr>
DELIMETER;

echo $orders;
}    
}
/************************* CATEGORIES IN ADMIN ******************/
function show_categories_in_admin() {
$category_query = query("SELECT * FROM categories");
confirm($category_query);
while($row = fetch_array($category_query)) {
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];
$category = <<<DELIMETER
<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
DELIMETER;
echo $category;
    }
}



function add_category() {
if(isset($_POST['add_category'])) {
$cat_title = escape_value($_POST['cat_title']);
if(empty($cat_title) || $cat_title == " ") {
echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";
} else {
$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");
    }
    }
}


function display_users() {
$category_query = query("SELECT * FROM users");
confirm($category_query);
while($row = fetch_array($category_query)) {
$user_id = $row['id'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];
$user = <<<DELIMETER
<tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
    <td>{$password}</td>
     <td>{$email}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
DELIMETER;
echo $user;
    }
}



function add_user() {
if(isset($_POST['add_user'])) {
$username   = escape_value($_POST['username']);
$email      = escape_value($_POST['email']);
$password   = escape_value($_POST['password']);
$query = query("INSERT INTO users (username, email, password ) VALUES('{$username}','{$email}','{$password}')");
confirm($query);
set_message("USER CREATED");
redirect("index.php?users");
}
}

function get_reports(){
$query = query(" SELECT * FROM reports");
confirm($query);
while($row = fetch_array($query)) {
$report = <<<DELIMETER
        <tr>
             <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
DELIMETER;
echo $report;
        }
}



function add_product() {
if(isset($_POST['publish'])) {
$product_title          = escape_value($_POST['product_title']);
$product_category_id    = escape_value($_POST['product_category_id']);
$product_price          = escape_value($_POST['product_price']);
$product_description    = escape_value($_POST['product_description']);
$short_desc             = escape_value($_POST['short_desc']);
$product_quantity       = escape_value($_POST['product_quantity']);
$product_image          = $_FILES['file']['name'];
$image_temp_location    = $_FILES['file']['tmp_name'];

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);
$query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
redirect("index.php?products");
        }
}



function show_categories_add_product_page(){
$query = query("SELECT * FROM categories");
confirm($query);
while($row = fetch_array($query)) {
$categories_options = <<<DELIMETER
 <option value="{$row['cat_id']}">{$row['cat_title']}</option>
DELIMETER;
echo $categories_options;
     }
}


function display_image($picture) {
global $upload_directory;
return $upload_directory  . DS . $picture;
}


function show_product_category_title($product_category_id){
$category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
confirm($category_query);
while($category_row = fetch_array($category_query)) {
return $category_row['cat_title'];
}
}



function get_products_in_admin(){
$query = query(" SELECT * FROM products");
confirm($query);
while($row = fetch_array($query)) {
$category = show_product_category_title($row['product_category_id']);
$product_image = display_image($row['product_image']);
$product = <<<DELIMETER
        <tr>
            <td>{$row['product_id']}</td>
            <td>
             <a href="index.php?edit_product&id={$row['product_id']}"><p>{$row['product_title']}</p></a>
            <div>
            <img width='100' src="{$row['product_image']}" alt="">
            </div>
            </td>
            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
DELIMETER;
echo $product;
        }
}

?>