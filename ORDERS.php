<?php

    @include 'config.php';

    if(isset($_POST['add_product'])){

        $order_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'.$product_image;

        if(empty($product_name) || empty($product_price) || empty($product_image)){
            $message[] = 'please fill out all';
        }else{
            $insert = "INSERT INTO product(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
            $upload = mysqli_query($conn,$insert);
            if($upload){
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                $message[] = 'new product added successfully';
            }else{
                $message[] = 'could not add the product';
            }
        }

    };

    if(isset($_GET['delete'])){
        $prod_id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM product WHERE prod_id = $prod_id");
        header('location:PRODUCTS.php');
    };

?>

<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BANANA MOVE | STAFF </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href= "staff.css">

</head>
<!----------------------------------------------------BODY----------------------------------------------------------------------------------------------------------------------->
<body>
    <div class="wrapper">
        <div class="menu-bar">
            <div class="container">
    
                <nav class="navbar sticky-top navbar-expand-md">
                    <a class="navbar-brand" href="STAFF.html"><img src="image/BM-LOGO1.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i> <!----icon---->
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ml-auto">
            
                        <li class="nav-item"> <!----------------------------ORDERS----------------------------->
                          <a class="nav-link" href="ORDERS.php">ORDERS</a>
                        </li>

                        <li class="nav-item"> <!----------------------------PRODUCTS----------------------------->
							<a class="nav-link" href="PRODUCTS.php">PRODUCTS</a>
						</li>
                      </ul>
                </nav>
            </div>
        </div> <!------------------------END OF MENU NAVIGATION BAR--------------------------------------------------------------------------------->

<!------------------------------PRODUCTS--------------------------------->
	<?php

	if(isset($message)){
	   foreach($message as $message){
		  echo '<span class="message">'.$message.'</span>';
	   }
	}

	?>
	   
	<div class="container">

	   <div class="admin-product-form-container">

		  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			 <h3>add a new product</h3>
			 <input type="text" placeholder="enter product name" name="product_name" class="box">
			 <input type="number" placeholder="enter product price" name="product_price" class="box">
			 <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
			 <input type="submit" class="btn" name="add_product" value="add product">
		  </form>

	   </div>

	   <?php

	   $select = mysqli_query($conn, "SELECT * FROM product");
	   
	   ?>
	   <div class="product-display">
		  <table class="product-display-table">
			 <thead>
			 <tr>
				<th>product image</th>
				<th>product name</th>
				<th>product price</th>
				<th>action</th>
			 </tr>
			 </thead>
			 <?php while($row = mysqli_fetch_assoc($select)){ ?>
			 <tr>
				<td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
				<td><?php echo $row['name']; ?></td>
				<td>₱<?php echo $row['price']; ?></td>

			 </tr>
		  <?php } ?>
		  </table>
	   </div>

	</div>
	
<!---------------END OF PRODUCTS------->	

</body>
</html>
