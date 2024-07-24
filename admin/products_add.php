<?php

include "connection.php";

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $regular_price = $_POST['regular_price'];
    $sale_price = $_POST['sale_price'];
    $sleeves_length = $_POST['sleeves_length'];
    $quality = $_POST['quality'];
    $length = $_POST['length'];
    $neck_type = $_POST['neck_type'];
    $pattern = $_POST['pattern'];
    $fabric = $_POST['fabric'];
    $color = implode(',', $_POST['color']);
    $category = $_POST['category'];
    $size_s = $_POST['size_s'];
    $size_m = $_POST['size_m'];
    $size_l = $_POST['size_l'];
    $size_xl = $_POST['size_xl'];
    $size_xxl = $_POST['size_xxl'];
    $size_xxxl = $_POST['size_xxxl'];
    $tag_option = $_POST['tag_option'];


    $file_name = $_FILES['product_image']['name'];
    $tmp_name = $_FILES['product_image']['tmp_name'];
    $file_path = "./img/" . uniqid() . "-" . $file_name;
    move_uploaded_file($tmp_name, $file_path);

    $file_name1 = $_FILES['image_gallery']['name'];
    $tmp_name1 = $_FILES['image_gallery']['tmp_name'];
    $file_path1 = "./img/" . uniqid() . "-" . $file_name1;
    move_uploaded_file($tmp_name1, $file_path1);

    $file_name2 = $_FILES['size_chart']['name'];
    $tmp_name2 = $_FILES['size_chart']['tmp_name'];
    $file_path2 = "./img/" . uniqid() . "-" . $file_name2;
    move_uploaded_file($tmp_name2, $file_path2);


    $insert_query = "INSERT INTO products (product_name,product_description,regular_price,sale_price,sleeves_length,quality,length,neck_type,pattern,fabric,color,category,product_image,size_chart,size_s,size_m,size_l,size_xl,size_xxl,size_xxxl,tag_option) VALUES ('$product_name',' $product_description',' $regular_price',' $sale_price',' $sleeves_length',' $quality',' $length','$neck_type','$pattern','$fabric','$color','$category',' $file_path',' $file_path1',' $file_path2', '$size_s',' $size_m',' $size_l',' $size_xl',' $size_xxl',' $size_xxl','$tag_option')";

    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        header("location:products.php");
    } else {

        echo "gggggggggggggggggggggggggggggggggggggg";

    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo1.jpg" type="image/x-icon" fa-solid="#fff">

    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #f8f9fa;
            margin: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: whitesmoke;
            color: black;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: width 0.3s;
        }

        .logo {
            width: 150px;
            height: 140px;
            margin-bottom: 20px;
        }

        .nav {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .nav-item {
            width: 100%;
            position: relative;
        }

        .nav-link {
            display: block;
            color: black;
            padding: 15px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s, border-radius 0.3s;
            border-radius: 5px;
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            font-size: 19px;
        }

        .nav-link:hover {
            background-color: #a53860;
            color: whitesmoke;
        }

        .dropdown-toggle::after {
            float: right;
        }

        .dropdown-menu {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: white;
            color: #a53860;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .dropdown-item {
            padding: 10px;
            color: #a53860;
            text-decoration: none;
            display: block;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            font-size: 19px;
        }

        .dropdown-item:hover {
            background-color: #f9f9f9;
            color: #a53860;
        }

        .nav-item.active .dropdown-menu {
            display: block;
        }

        .container-fluid {
            margin-top: 20px;
            width: 85%;
            display: flex;
            margin-left: 280px;
        }

        .form-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 100%;
        }

        .form-section h4 {
            margin-bottom: 20px;
            font-size: 1.25rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .color-options,
        .category-options,
        .size-options,
        .tags-options {
            display: flex;
            flex-wrap: wrap;
        }

        .color-option,
        .category-option,
        .size-option,
        .tag-option {
            margin-right: 15px;
            margin-bottom: 10px;
        }

        .color-option input,
        .category-option input,
        .size-option input,
        .tag-option input {
            margin-right: 5px;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .form-section h2 {
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            ;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="dashbord.php"><img src="../img/1-png-removebg-preview.png" alt="Logo" class="logo"></a>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="dashbord.php">Dashboard</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="masterDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Master</a>
                <ul class="dropdown-menu" aria-labelledby="masterDropdown">
                    <li><a class="dropdown-item" href="category.php">Category</a></li>
                    <li><a class="dropdown-item" href="colors.php">Color</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                    <li><a class="dropdown-item" href="products.php">Product list</a></li>
                    <li><a class="dropdown-item" href="products_add.php">Add Product</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="oders.php">Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="user_register.php">Users</a></li>
        </ul>
    </div>

    <div class="container-fluid">

        <div class="form-section">
            <h2>Add New Product</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="product_name" placeholder="Type here"
                        required>
                </div>
                <div class="mb-4">
                    <label for="product_description" class="form-label">Product Description</label>
                    <textarea placeholder="Type here" id="editor" name="product_description" class="form-control"
                        rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="regular_price">Regular Price</label>
                    <input type="number" class="form-control" name="regular_price" id="regularPrice"
                        placeholder="Type here" required>
                </div>
                <div class="form-group">
                    <label for="sale_price">Sale Price</label>
                    <input type="number" class="form-control" name="sale_price" id="salePrice" placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="sleeves_length">Sleeves Length</label>
                    <input type="text" class="form-control" name="sleeves_length" id="sleevesLength"
                        placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="quality">Quality</label>
                    <input type="text" class="form-control" name="quality" id="quality" placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="length">Length</label>
                    <input type="text" class="form-control" name="length" id="length" placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="neck_type">Neck Type</label>
                    <input type="text" class="form-control" name="neck_type" id="neckType" placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="pattern">Pattern</label>
                    <input type="text" class="form-control" name="pattern" id="pattern" placeholder="Type here">
                </div>
                <div class="form-group">
                    <label for="fabric">Fabric</label>
                    <input type="text" class="form-control" name="fabric" id="fabric" placeholder="Type here">
                </div>
            </form>
        </div>

        <div class="form-section">
            <h4>Additional Information</h4>
            <form id="additionalForm">
                <div class="form-group">
                    <label for="color">Color</label>
                    <div class="color-options">
                        <label class="color-option"><input type="checkbox" name="color[]" value="Maroon"> Maroon</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Multi"> Multi</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Blue"> Blue</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Pink"> Pink</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Black"> Black</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Black and White"> Black
                            and White</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Brown"> Brown</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Green"> Green</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Lavender">
                            Lavender</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Peach"> Peach</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Purple"> Purple</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="Red"> Red</label>
                        <label class="color-option"><input type="checkbox" name="color[]" value="White"> White</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_image">Product Image (size: 266x266px)</label>
                    <input type="file" class="form-control" name="product_image" id="productImage">
                </div>
                <div class="form-group">
                    <label for="image_gallery">Image Gallery</label>
                    <input type="file" class="form-control" name="image_gallery" id="imageGallery" multiple>
                </div>
                <div class="form-group">
                    <label for="size_chart">Size Chart Image</label>
                    <input type="file" class="form-control" name="size_chart" id="sizeChart">
                </div>
                <div class="form-group">
                    <label class="form-label">Categories</label>
                    <div class="category-options">
                        <label for="top" class="category-option"><input type="radio" name="category" value="top">
                            TOP</label>
                        <label for="kurti" class="category-option"><input type="radio" name="category" value="kurti">
                            KURTI</label>
                        <label for="nayra_kurti" class="category-option"><input type="radio" name="category"
                                value="nayra_kurti"> NYRA KURTIS</label>
                        <label for="gowns" class="category-option"><input type="radio" name="category" value="gowns">
                            GOWN and DRESSES</label>
                        <label for="co_ord_set" class="category-option"><input type="radio" name="category"
                                value="co_ord_set"> CO-ORD SET</label>
                        <label for="pairs" class="category-option"><input type="radio" name="category" value="pairs">
                            PAIRES</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Size</label>
                    <div class="size-options">
                        <div class="size-option">
                            <label for="size_s">S</label>
                            <input type="number" class="form-control" name="size_s" id="sizeS" placeholder="Stock">
                        </div>
                        <div class="size-option">
                            <label for="size_m">M</label>
                            <input type="number" class="form-control" name="size_m" id="sizeM" placeholder="Stock">
                        </div>
                        <div class="size-option">
                            <label for="size_l">L</label>
                            <input type="number" class="form-control" name="size_l" id="sizeL" placeholder="Stock">
                        </div>
                        <div class="size-option">
                            <label for="size_xl">XL</label>
                            <input type="number" class="form-control" name="size_xl" id="sizeXL" placeholder="Stock">
                        </div>
                        <div class="size-option">
                            <label for="size_xxl">XXL</label>
                            <input type="number" class="form-control" name="size_xxl" id="sizeXXL" placeholder="Stock">
                        </div>
                        <div class="size-option">
                            <label for="size_xxxl">XXXL</label>
                            <input type="number" class="form-control" name="size_xxxl" id="sizeXXXL"
                                placeholder="Stock">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tag_option" class="form-label">Tags</label>

                    <div class="tags-options">
                        <label class="tag-option"><input type="checkbox" name="tag_option[]" value="NEW ARRIVALS"> NEW
                            ARRIVALS</label>
                        <label class="tag-option"><input type="checkbox" name="tag_option[]" value="TRENDY COLLECTION">
                            TRENDY COLLECTION</label>
                        <label class="tag-option"><input type="checkbox" name="tag_option[]" value="FEATURE PRODUCT">
                            FEATURE PRODUCT</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit" name="submit">Add Product</button>

            </form>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <!-- <script>
        ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
            console.error(error);
        });

</body>

</html>