<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
					<h1 class="carousel-heading">Customize Pizza</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="customize-page">

	<div class="row">
		<div class="column left">
			<div class="col-div">
			<div class="card">
				<img src="<?php echo $pizza['imagePath']; ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $pizza['pizzaName']; ?></h5>
					<p class="card-text"><?php echo $pizza['info']; ?></p>
				</div>
			</div>
			</div>
		</div>
		<div class="column right">
			<div class="col-div">


				<form action="<?php echo site_url('cart/add/'.$pizza['id']); ?>" method="get">
					<h4 class="form-title-head">Pizza</h4>
					<hr class="form-title">
					<div class="form-group row">
						<div class="col-sm-7">
							<input type="text" readonly class="form-control" id="pizzaname" name="pizza" value="<?php echo $pizza['pizzaName'];?>">
						</div>
					</div>
					<h4 class="form-title-head">Size</h4>
					<hr class="form-title">
					<div class="form-group row">
						<div class="col-sm-7">
						<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="size" id="small" value="<?php echo $pizza['smallPrice']; ?>" required>
								<label class="form-check-label" for="small"><?php echo $pizza['smallPrice']; ?> (Small)</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="size" id="medium" value="<?php echo $pizza['mediumPrice']; ?>" required>
								<label class="form-check-label" for="medium"><?php echo $pizza['mediumPrice']; ?> (Medium)</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="size" id="large" value="<?php echo $pizza['largePrice']; ?>" required>
								<label class="form-check-label" for="large"><?php echo $pizza['largePrice']; ?> (Large)</label>
							</div>
						</div>
					</div>
					<h4 class="form-title-head">Toppings</h4>
					<hr class="form-title">
					<div class="form-group row">
						<div class="col-sm-7">
							<?php foreach ($toppings as $topping) : ?>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="topping" name="topping[]" value="<?php echo $topping['id']; ?>">
								<label class="form-check-label" for="topping"><?php echo $topping['toppingName']; ?> - <?php echo $topping['price']; ?></label>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<h4 class="form-title-head">Sides</h4>
					<hr class="form-title">
					<div class="form-group row">
						<div class="col-sm-7">
							<?php foreach ($sides as $side) : ?>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="side" name="side[]" value="<?php echo $side['id']; ?>">
								<label class="form-check-label" for="side"><?php echo $side['sideName']; ?> - <?php echo $side['price']; ?></label>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<h4 class="form-title-head">Amount</h4>
					<hr class="form-title">
					<div class="form-group row">
						<div class="col-sm-7">
							<div class="form-check form-check-inline">
								<input class="form-control" type="number" min="1" max="50" value="1" name="amount"/>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-5">
							<button type="submit" class="btn order-btn">Add to cart</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
