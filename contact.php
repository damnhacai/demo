<?php include 'header.php' ?>

<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		 <!-- contact-area-start -->
        <div class="contact-area mb-70">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        				<div class="contact-info">
        					<h3>Thông Tin Liên Hệ</h3>
        					<ul>
        						<li>
        							<i class="fa fa-map-marker"></i>
        							<span>Địa chỉ: </span>
        							12 Nam Từ Liêm, Hà Nội 							
        						</li>
        						<li>
        							<i class="fa fa-envelope"></i>
        							<span>Email: </span>
        							<a href="#">mailgg102@gmail.com</a>
        						</li>
        						<li>
        							<i class="fa fa-mobile"></i>
        							<span>Phone: </span>
        							(84) 982645294
        						</li>
        					</ul>
        				</div>
        			</div>
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        				<div class="contact-form">
        					<h3><i class="fa fa-envelope-o"></i>Form Liên Hệ</h3>
        					<p>Liên hệ với chúng tôi:</p>
        					<form id="contact-form" action="http://hngood.wap.sh/lienhe.html" method="post">
        						<div class="row">
        							<div class="col-lg-6">
        								<div class="single-form-3">
        									<input name="name" type="text" placeholder="Nhập Họ tên...">
        								</div>
        							</div>
        							<div class="col-lg-6">
        								<div class="single-form-3">
        									<input name="email" type="email" placeholder="Nhập Email...">
        								</div>
        							</div>
        							<div class="col-lg-12">
        								<div class="single-form-3">
        									<input name="subject" type="text" placeholder="Nhập Tiêu đề...">
        								</div>
        							</div>
        							<div class="col-lg-12">
        								<div class="single-form-3">
        									<textarea name="message" placeholder="Nhập Nội dung liên hệ"></textarea>
        									<button class="submit" type="submit">Gửi Liên hệ</button>
        								</div>
        							</div>
        						</div>
        					</form>
        					<p class="form-messege"></p>
        				</div>	
        			</div>
        		</div>
        	</div>
        </div>
        <!-- contact-area-end -->
        <!-- googleMap-area-start -->
        <div class="map-area mb-70">
        	<div class="container">
        		<div class="row">
        			<p>Xem bản đồ chỉ dẫn địa chỉ của chúng tôi:</p>
        			<div class="col-lg-12">
        				<div id="map" class="text-center">
        					<iframe src="https://www.google.com/maps/place/12/@20.990647,105.771746,17z/data=!3m1!4b1!4m5!3m4!1s0x3134530fec060e47:0x67ad15de9a3c1705!8m2!3d20.990641!4d105.7739366?hl=vi-VN" width="97%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!-- googleMap-end -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
		<script>
			/* Google Map js */
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.810332, 90.412518)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);

			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map.png',
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<?php include 'footer.php' ?>