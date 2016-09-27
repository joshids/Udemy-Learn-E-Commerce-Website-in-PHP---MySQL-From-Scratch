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

?>
