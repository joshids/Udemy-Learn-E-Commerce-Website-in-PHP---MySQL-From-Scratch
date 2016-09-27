<!DOCTYPE>
<?php
    include('functions/product.php');
?>
<html>
<head>    
    <title>Inserting Product</title>
    <style>
        .form-label{
            text-align:right;
            font-weight: bolder;
            padding-left: 15px;
            padding-right: 15px;
        }
        .form-control{
            border: 0px;
            padding-left: 5px;
            margin: 0px 15px 0px 15px;
        }
        .form-control[type='file']{
            padding-left: 0px;
    </style>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
    <form action="insertProduct.php" method="post" enctype="multipart/form-data">
        <table align="center" border="2" bgcolor="orange">
            <tr align="center">
                <td colspan="2">
                    <h2>Insert new product here</h2>
                </td>
            </tr>
            <tr>
                <td class="form-label">Title</td>
                <td><input type="text" name="product_title" class="form-control" size="60" required></td>
            </tr>
            <tr>
                <td class="form-label">Category</td>
                <td>
                    <select name="product_category" class="form-control" required>
                        <option value="">Select a categoy</option>
                        <?php
                            getCategoryOptions(); 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="form-label">Brand</td>
                <td>                    
                    <select name="product_brand" class="form-control" required>
                        <option value="">Select a brand</option>
                        <?php
                            getBrandOptions(); 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="form-label">Image</td>
                <td><input type="file" name="product_image" class="form-control" required></td>
            </tr>
            <tr>
                <td class="form-label">Price</td>
                <td>
                    <input type="text" name="product_price" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td class="form-label">Description</td>
                <td>
                    <textarea cols="20" rows="20" name="product_description" class="form-control" ></textarea>
                </td>
            </tr>
            <tr>
                <td class="form-label">Keywords</td>
                <td><input type="text" name="product_keywords" class="form-control" size="50" required></td>
            </tr>
            <tr align="center">                
                <td colspan="2"><input type="submit" name="insert_product" value="Insert Product Now" /></td>
            </tr>
        </table>
    </form>        
</body>
</html>

<?php

if(isset($_POST['insert_product'])){
    //get text data from the fields
    $title = $_POST['product_title'];
    $categoryId = $_POST['product_category'];
    $brandId = $_POST['product_brand'];
    $price = $_POST['product_price'];
    $desc = $_POST['product_description'];
    $keywords  = $_POST['product_keywords'];

    //getting the image from the field
    $productImage = $_FILES['product_image']['name'];
    $productImage_tmp = $_FILES['product_image']['tmp_name'];

    $sql = "";
}

?>