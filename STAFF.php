<!DOCTYPE html>
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
            
                        <li class="nav-item"> <!----------------------------HOME----------------------------->
                          <a class="nav-link" href="ORDERS.html">ORDERS</a>
                        </li>

                        <li class="nav-item"> <!----------------------------MENU----------------------------->
                            <a class="nav-link" href="INVENTORY.html">INVENTORY</a>
                        </li>

                        <li class="nav-item"> <!----------------------------FEEDBACK----------------------------->
							<a class="nav-link" href="PRODUCTS.html">PRODUCTS</a>
						</li>
                      </ul>
                </nav>
            </div>
        </div> <!------------------------END OF MENU NAVIGATION BAR--------------------------------------------------------------------------------->

<!------------------------------SHIPPING--------------------------------->
	<div class= "ship-container">
		<!------------header--------->
		<div class="container-title">
			<br/><br/><br/>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3>ADD NEW PRODUCT<h3>
                <input type="text" placeholder="Enter product name" name="product_name" class="box">
                <input type="number" placeholder="Enter product price" name="product_price" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" class="btn" name="add_product" value="add_product">
            </form>
		</div>
	
<!---------------END OF SHIPPING------->	

</body>
</html>
