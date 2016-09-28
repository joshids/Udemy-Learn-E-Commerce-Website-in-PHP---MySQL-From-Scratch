<?php

$con = mysqli_connect('localhost','root','','ecommerce');
//getting the categories
function getCategories(){
    global $con;
    $sql = "select * from category";
    $run = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];

        echo '<li><a href="#">'.$title.'</a> </li>';
    }
}

//getting the brands
function getBrands(){
    global $con;
    $sql = "select * from brand";
    $run = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];

        echo '<li><a href="#">'.$title.'</a> </li>';
    }
}

function getProducts(){
    global $con;
    $sql = 'select * from products order by RAND() LIMIT 0, 6';

    $run = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $categoryId = $row['category_id'];
        $brandId = $row['brand_id'];
        $price = $row['price'];
        $image = $row['image'];
        echo "
            <div id='single_product'>
                <h3>$title</h3>
                <image src='admin_area/product_images/$image' width='180px' height='180' />
                <p><b>$ $price</b></p>
                <a href='details.php?pro_id=$id' style='float:left'>Details</a>
                <a href='index.php?pro_id=$id'><button style='float: right'> Add to cart</button></a>    
            </div>
        ";

        //echo '<li><a href="#">'.$title.'</a> </li>';
    }
}
?>
