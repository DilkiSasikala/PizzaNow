<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
				<h1 class="carousel1-heading">Welcome</h1>
				<p class="carousel1-content">Where food speaks with your palate.</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326333/pexels-photo-326333.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="Second slide">
			<div class="carousel-content">
				<div class="content">
					<p class="carousel1-content" style="font-style: italic; font-family: 'Merienda One'">"Every pizza is a personal pizza if you try hard and believe in yourself."</p>
					<h6 class="quote">Bill Murray</h6>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326311/pexels-photo-326311.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="Third slide">
			<div class="carousel-content">
				<div class="content">
					<p class="carousel1-content" style="font-style: italic; font-family: 'Merienda One'">“Anyone who says that money cannot buy happiness has clearly never spent their money on pizza.”</p>
					<h6 class="quote">Andrew W.K.</h6>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="info-bar">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 d-flex justify-content-center">
				<i class="fas fa-pizza-slice fa-7x"></i>
			</div>
			<div class="col-sm-4 d-flex justify-content-center">
				<i class="fas fa-store fa-7x"></i>
			</div>
			<div class="col-sm-4 d-flex justify-content-center">
				<i class="fas fa-motorcycle fa-7x"></i>
			</div>
		</div>
	</div>
</div>

<div class="menu-section">
<h2 class="menu-title">MENU</h2>
	<hr class="menu-line">

	<div class="pizza-section">
			<div class="row row-cols-1 row-cols-md-3">
				<?php foreach ($pizzas as $pizza) : ?>
				<div class="col mb-4">
					<div class="card h-100">
						<img src="<?php echo $pizza['imagePath']; ?>" class="card-img-top" alt="pizza">
						<div class="card-body">
							<h5 class="card-title"><?php echo $pizza['pizzaName']; ?></h5>
							<p class="card-text"><?php echo $pizza['info']; ?></p>
							<a href="<?php echo base_url('index.php/home/customize/'.$pizza['slug']); ?>" class="btn order-btn">Order</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
	</div>
</div>
