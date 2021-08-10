<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				 alt="First slide">
			<div class="carousel-content">
				<div class="content">
					<h1 class="carousel-heading">Enter Location</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="customize-page">
	<div class="location">
		<div class="row">
			<div class="col-11 d-flex justify-content-center" style="margin-left: 60px">
				<form action="<?php echo site_url('location/set_delivery'); ?>" method="get">
					<h4 class="form-title-head" style="color: #fbfbfa">Give your delivery location.</h4>
					<hr class="form-location-title">
					<div class="form-group row">
						<div class="col-sm-12">
							<label class="form-check-label" for="address" style="color: #fbfbfa">Address</label>
							<input type="text"  class="form-control" id="address" name="address" placeholder="No54, Main Street, Colombo" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label class="form-check-label" for="phone_no" style="color: #fbfbfa">Mobile No</label>
							<input type="tel"  class="form-control" id="phone_no" name="phone_no" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" placeholder="077 123 3455" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-7">
							<button type="submit" class="btn order-btn">Confirm Delivery</button>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>
</div>
