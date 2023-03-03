<?php

    @include 'config.php';

    $prod_id = $_GET['edit'];

    if(isset($_POST['update_product'])){

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'.$product_image;

        if(empty($product_name) || empty($product_price) || empty($product_image)){
            $message[] = 'please fill out all!';    
        }else{

            $update_data = "UPDATE product SET name='$product_name', price='$product_price', image='$product_image'  WHERE prod_id = '$prod_id'";
            $upload = mysqli_query($conn, $update_data);

            if($upload){
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                header('location:product.php');
            }else{
                $$message[] = 'please fill out all!'; 
            }

        }
    };

?>

<html>
    <body>

        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<span class="message">'.$message.'</span>';
                }
            }
        ?>

        <div class="container">


            <div class="admin-product-form-container centered">

                <?php
                    
                    $select = mysqli_query($conn, "SELECT * FROM product WHERE prod_id = '$prod_id'");
                    while($row = mysqli_fetch_assoc($select)){

                ?>
                
                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">update the product</h3>
                    <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
                    <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
                    <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
                    <input type="submit" value="update product" name="update_product" class="btn">
                    <a href="PRODUCTS.php" class="btn">go back!</a>
                </form>

                <?php }; ?>

            </div>

        </div>

    </body>
</html>