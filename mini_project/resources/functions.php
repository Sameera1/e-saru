<?php

//helper functions
function set_message($msg){
    
    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    } else {
        $msg = " ";
    }
    
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
    
    header("Location: $location ");
    
}

function query($sql){
    
    global $connection;
    
    return mysqli_query($connection, $sql);
    
}

function confirm($result){
    
    global $connection;
    
    if(!$result){
        
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

function escape_string($string){
    
    global $connection;
    
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    
    return mysqli_fetch_array($result);
    
}

//**************front end functions********************

//get products

function get_products(){
    
    $query = query(" SELECT * FROM products");
    confirm($query);
    
    while($row = fetch_array($query)){
        
       $products = <<<DELIMETER
       
             <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">Rs.{$row['product_price']}</h4>
                                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                 <a class="btn btn-success" target="_blank" href="cart.php?add={$row['product_id']}">Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
       
       DELIMETER;
        
        echo $products;
        
    }
}

function get_categories(){
    
     $query = query("SELECT * FROM categories");
   confirm($query);
    
    while($row = fetch_array($query)) {
      
        $categories_links = <<<DELIMETER
       
         <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>    
       
       DELIMETER;
        
        echo $categories_links;
    }
    
}

function get_products_in_cat_page(){
    
    $query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']). " ");
    confirm($query);
    
    while($row = fetch_array($query)){
        
       $products = <<<DELIMETER
       
              <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
       
DELIMETER;
        
        echo $products;
        
    }
}

function get_products_in_shop_page(){
    
    $query = query(" SELECT * FROM products");
    confirm($query);
    
    while($row = fetch_array($query)){
        
       $products = <<<DELIMETER
       
              <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
       
DELIMETER;
        
        echo $products;
        
    }
}

function login_user(){
    
    if(isset($_POST['submit'])){
        
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);
        
        $query = query("SELECT * FROM users WHERE user_name = '{$username}' AND password = '{$password}' ");
        confirm($query);
        
        if(mysqli_num_rows($query) == 0 ){
            set_message("Your username or password is wrong");
            redirect("login.php");
        }else{
            redirect("admin");
        }
        
    }
    
}

function send_message(){
    
    if(isset($_POST['submit'])){
        echo "It works";
    }
    
}

?>