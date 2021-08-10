<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
					<h1 class="carousel-heading">Combo Deals</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="menu-section">
	<h2 class="menu-title">COMBO DEALS</h2>
	<hr class="menu-line">

	<div class="pizza-section">
		<div class="row row-cols-1 row-cols-md-3">
			<?php foreach ($combos as $combo) : ?>
				<div class="col mb-4">
					<div class="card h-100">
						<img src="<?php echo base_url();?>assets/images/combo.jpg" class="card-img-top" alt="pizza">
						<div class="card-body">
							<h5 class="card-title"><?php echo $combo['combo_name']; ?></h5>
							<p class="card-text"><?php echo $combo['info']; ?></p>
							<p class="card-text"><?php echo $combo['price']; ?></p>
							<form action="<?php echo site_url('cart/add_combo/'.$combo['id']); ?>" method="get">
								<div class="form-group row">
									<div class="col-sm-5">
										<button type="submit" class="btn order-btn">Order</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
