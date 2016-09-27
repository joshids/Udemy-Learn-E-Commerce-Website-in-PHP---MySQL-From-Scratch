<?php
$con = mysqli_connect('localhost','root','','ecommerce');
//getting the categories
function getCategoryOptions(){
    global $con;
    $sql = "select * from category";
    $run = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];

        echo '<option value="'.$id.'">'.$title.'</option>';
    }
}

//getting the brands
function getBrandOptions(){
    global $con;
    $sql = "select * from brand";
    $run = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];

        echo '<option value="'.$id.'">'.$title.'</option>';
    }
}
?>