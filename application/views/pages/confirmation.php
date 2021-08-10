<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
					<h1 class="carousel-heading">Confirm Order</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="customize-page">
	<div class="location">
		<div class="row">

			<div class="col-10 justify-content-center" style="margin-top: 30px; margin-left: 100px">
				<?php if ($deliveries) : ?>

					<?php if ($items) : ?>
						<table class="table table-bordered" style="color:#fbfbfa;">
							<thead class="thead-dark">
							<tr>
								<th scope="col">Pizza</th>
								<th scope="col">Size</th>
								<th scope="col">Amount</th>
								<th scope="col">Toppings</th>
								<th scope="col">Price (Rs.)</th>
								<th scope="col">Sides</th>
								<th scope="col">Price Rs.</th>
							</tr>
							</thead>
							<tbody>

							<?php foreach ($items as $item) : ?>
								<tr>
									<td><?php echo $item['pizza']?></td>
									<td><?php echo $item['size']?></td>
									<td><?php echo $item['amount']?></td>

									<td>
										<?php if ($item['toppings']) :?>
											<?php foreach ($item['toppings'] as $topping) : ?>
												<?php echo $topping['toppingName'] ?>,
											<?php endforeach; ?>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($item['toppings']) :?>
											<?php foreach ($item['toppings'] as $topping) : ?>
												<?php echo $topping['price']?>,
											<?php endforeach; ?>
										<?php endif; ?>
									</td>

									<td>
										<?php if ($item['sides']) :?>
											<?php foreach ($item['sides'] as $side) : ?>
												<?php echo $side['sideName'] ?>,
											<?php endforeach; ?>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($item['sides']) :?>
											<?php foreach ($item['sides'] as $side) : ?>
												<?php echo $side['price']?>,
											<?php endforeach; ?>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>

							</tbody>
						</table>
					<?php endif; ?>

					<br>

					<?php if ($combos) : ?>
						<table class="table table-bordered" style="color:#fbfbfa;">
							<thead class="thead-dark">
							<tr>
								<th scope="col">combo</th>
								<th scope="col">Price Rs.</th>
							</tr>
							</thead>
							<tbody>

							<?php foreach ($combos as $combo) : ?>
								<tr>
									<td><?php echo $combo['combo'] ?></td>
									<td><?php echo $combo['price'] ?></td>
								</tr>
							<?php endforeach; ?>

							</tbody>
						</table>
					<?php endif; ?>

					<br>
				<div style="text-align: center; margin-bottom: 20px;">
					<?php foreach ($totals as $total) : ?>
						<h5 style="color: #fbfbfa">Total Bill : <?php echo $total ?></h5>
					<?php endforeach; ?>

					<?php foreach ($deliveries as $delivery) : ?>
						<h5 style="color: #fbfbfa">Delivery Address : <?php echo $delivery['address'] ?></h5>
					<?php endforeach; ?>

					<br>

					<h5 class= "order-time"> Your order will arrive in : <?php echo $time ?></h5>

					<a href="<?php echo site_url('location/clear_cart'); ?>" class="btn confirm-btn">Continue</a>
					<?php endif; ?>
				</div>

			</div>

		</div>

	</div>
</div>
