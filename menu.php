<!DOCTYPE html>
<?php 
	$conn = mysqli_connect('localhost','root','','bananamove_db');
	
	if(isset($_POST['add_to_cart'])){

		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_image = $_POST['product_image'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
		$product_image_folder = 'uploaded_img/'.$product_image;
	}
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BANANA MOVE | Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href= "menu.css">

</head>
<!----------------------------------------------------BODY----------------------------------------------------------------------------------------------------------------------->
<body>
    <div class="wrapper">
        <div class="menu-bar">
            <div class="container">
    
                <nav class="navbar sticky-top navbar-expand-md">
                    <a class="navbar-brand" href="HOME.html"><img src="image/BM-LOGO1.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i> <!----icon---->
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ml-auto">
            
                        <li class="nav-item"> <!----------------------------HOME----------------------------->
							<a class="nav-link active" href="HOME.html">HOME </a>
						  </li>
  
						  <li class="nav-item"> <!----------------------------MENU----------------------------->
							  <a class="nav-link" href="MENU.html">MENU</a>
						  </li>
						  
						  <li class="nav-item dropdown"> <!----------------------------SERVICE----------------------------->
							  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								SERVICE
							  </a>
							  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="shipping.html">shipping</a>
								<a class="dropdown-item" href="payment.html">payment</a>
						  </div>
						  </li>
  
						  <li class="nav-item"> <!----------------------------FEEDBACK----------------------------->
							<a class="nav-link" href="Feedback.html">FEEDBACK</a>
						  </li>
			  
						  <li class="nav-item"> <!----------------------------CONTACT----------------------------->
							  <a class="nav-link" href="contact.html">CONTACT</a>
						  </li>

						 <a class="nav-link" href="orderform.html" id="next" type = "submit">
						<li class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></li></a>
                      </ul>
                </nav>
            </div>
        </div> <!------------------------END OF MENU NAVIGATION BAR--------------------------------------------------------------------------------->
<!-----------------------RETURNS------------------------->

<?php 
	$select = mysqli_query($conn, "SELECT * FROM `product`");
?>

<?php
	while($row = mysqli_fetch_assoc($select)){
		if(mysql_num_rows($select) > 0){
		$row = mysql_num_rows($select);

?>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<input type="hidden" id="product_name" value="<?php echo $row['name']; ?>">
				<input type="hidden" id="product_price" value="<?php echo $row['price']; ?>">
				<input type="hidden" id="product_image" src="uploaded_img/<?php echo $row['image']; ?>">
			</form>
<?php 
		}
	}; 
?>

<div class="container">
	<div id="root"></div>
	<div class="sidebar">
		<div class="head"><p>My Cart</p></div>
		<div id="cartItem">Your cart is empty</div>
		<div class="foot">
			<h3>Total</h3>
			<h2 id="total">₱ 0.00</h2>
		</div>
	</div>
</div>
<script>
	const product = [
		{
			id: 0,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 1,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 2,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 3,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 4,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 5,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 6,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		},
		{
			id: 7,
			image: document.getElementById("product_image").src,
			title: document.getElementById("product_name").value,
			price: document.getElementById("product_price").value,
		}
		
	];
	const categories = [...new Set(product.map((item)=>
		{return item}))]
		let i=0;
	document.getElementById('root').innerHTML = categories.map((item)=>
	{
		var {image, title, price} = item;
		return(
			`<div class='box'>
				<div class='img-box'>
					<img class='images' src=${image}></img>
				</div>
			<div class='bottom'>
			<p>${title}</p>
			<h2>₱ ${price}</h2>`+
			"<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
			`</div>
			</div>`
		)
	}).join('')

	var cart =[];
	function addtocart(a){
		cart.push({...categories[a]});
		displaycart();
	}
	function delElement(a){
		cart.splice(a, 1);
		displaycart();
	}

	function displaycart(){
		let j = 0, total=0;
		document.getElementById("count").innerHTML=cart.length;
		if(cart.length==0){
			document.getElementById('cartItem').innerHTML = "Your cart is empty";
			document.getElementById("total").innerHTML = "₱ "+0+".00";
		}
		else{
			document.getElementById("cartItem").innerHTML = cart.map((items)=>
			{
				var {image, title, price} = items;
				total=total+price;
				document.getElementById("total").innerHTML = "₱ "+total+".00";
				sessionStorage.setItem("price", total);
				<!--sessionStorage.setItem("title", title);-->
				return(
					`<div class='cart-item'>
					<div class='row-img'>
						<img class='rowimg' src=${image}>
					</div>
					<p>${title}</p>
					<h2>₱ ${price}</h2>`+
					"<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
	
				);
			}).join('');
		}
	}
	

</script>

<!--------------------------------------------footer--------------------------------------------------->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>Services</h4>
				<ul>
					<li><a href="payment.html">Payment</a></li>
					<li><a href="shipping.html">Shipping</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Banana Move</h4>
				<ul>
					<li><a href="Aboutus.html">About Us</a></li>
					<li><a href="Feedback.html">Feedback</a></li>
				
				</ul>
			</div>
			<div class="footer-col">
				<h4>Menu</h4>
				<ul>
					<li><a href="menu.html">Products</a></li>
				
				</ul>
			</div>
		 
		 <div class="footer-col">
				<h4>Social Media</h4>
				<ul>
					<li><a href="https://www.instagram.com/banana.move/">Instagram</a></li>
				</ul>
			</div>
		 <div class = "developers">
		 
		 <h6> Developed by Cacanindin, Delloro, Fronda, Ibong & Legaspi</h6>
		
  	 	
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
</body>
</html>



