<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100"
				 src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
					<h1 class="carousel-heading">Cart</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="customize-page">
	<div>
		<h2 class="cart-title"> Order Receipt </h2>
		<hr class="cart-rule">
		<div class="cart-content">
			<?php if ($items) : ?>
				<?php foreach ($items as $item) : ?>
					<h3>Item</h3>
					<p> <?php echo $item['pizza'] ?> - Price = <?php echo $item['size'] ?></p>
					<p>Amount - <?php echo $item['amount'] ?></p>

					<?php if ($item['toppings']) : ?>
						<h5> Toppings </h5>
						<?php foreach ($item['toppings'] as $topping) : ?>
							<p> <?php echo $topping['toppingName'] ?> - Price = Rs.<?php echo $topping['price'] ?></p>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php if ($item['sides']) : ?>
						<h5> Side </h5>
						<?php foreach ($item['sides'] as $side) : ?>
							<p> <?php echo $side['sideName'] ?> - Price = Rs.<?php echo $side['price'] ?></p>
						<?php endforeach; ?>
					<?php endif; ?>
					<a href="<?php echo site_url('cart/remove_pizza/' . $item['id']); ?>" class="btn order-btn"><span><i class="far fa-trash-alt"></i></span></a>
					<br/>
					<br/>
					<hr class="cart-rule">
					<br/>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if ($combos) : ?>
				<?php foreach ($combos as $combo) : ?>
					<h5> Combo </h5>
					<p> <?php echo $combo['combo'] ?> - Price = Rs.<?php echo $combo['price'] ?> </p>
					<a href="<?php echo site_url('cart/remove_combo/' . $combo['id']); ?>" class="btn order-btn"><span><i class="far fa-trash-alt"></i></span></a>
					<br/>
					<br/>
					<hr class="cart-rule">
					<br/>
				<?php endforeach; ?>
			<?php endif; ?>

			<a href="<?php echo base_url('index.php/location/index'); ?>" class="btn confirm-btn">Confirm Order - Total - Rs.<?php echo $total ?></a>

		</div>

	</div>
</div>
