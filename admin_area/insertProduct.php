<!DOCTYPE>
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
    </style>
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
                <td><input type="text" name="product_title" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Category</td>
                <td><input type="text" name="product_category" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Brand</td>
                <td><input type="text" name="product_brand" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Image</td>
                <td><input type="text" name="product_image" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Price</td>
                <td><input type="text" name="product_price" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Description</td>
                <td><input type="text" name="product_description" class="form-control"></td>
            </tr>
            <tr>
                <td class="form-label">Keywords</td>
                <td><input type="text" name="product_keywords" class="form-control"></td>
            </tr>
            <tr align="center">                
                <td colspan="2"><input type="submit" name="insert_product" value="Insert Product Now" /></td>
            </tr>
        </table>
    </form>        
</body>
</html>

<?php



?>