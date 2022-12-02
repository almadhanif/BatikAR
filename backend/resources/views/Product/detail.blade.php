<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spesifikasi Produk</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/s_product.css') }}">
    <link rel="icon" href="{{ asset('images/iconhead.png') }}" type="image/gif" sizes="5x5" />

</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg py-2 sticky-top shadow-sm" style="background-color: #FFFAF0;">
		<div class="container">
		    <a class="navbar-brand" href="#"><img class="image-fluid" width="50%" src="{{ asset('images/logo/logo.png') }}" alt="logo"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		    	<div class="input-group mx-auto">
					<input type="text" class="form-control" placeholder="search" aria-label="Recipient's username" aria-describedby="button-addon2">
					<button class="btn btn-dark" type="button" id="button-addon2"><i class='bx bx-search'></i></button>
				</div>
			    <ul class="navbar-nav ms-auto">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="index.html"><b>Home</b></a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#">Product</a>
			        </li>
			        <li class="nav-item">
			  			<a class="nav-link me-4" href="#" >
			  				<i class=' text-dark bx bx-cart'></i>
			  				<span class="badge text-warning rounded-circle position-absolute p-0">2</span>
			  			</a>
					</li>
					@guest
						<li class="nav-item text-light ms-1 me-1">
							<a class="nav-link btn btn-sm" style="background-color: #1E1E1E; color: #FFD700;" href="{{ route('register') }}">
								Sign Up
							</a>
						</li>
						<li><br></li>
						<li class="nav-item text-light ms-1 me-1">
							<a class="nav-link btn btn-sm text-dark" style="background-color: #FFD700;" href="{{ route('login') }}">
								Login
							</a>
						</li>
					@else
						<li class="nav-item">
							<a href="#" class="nav-link">{{ auth()->user()->name }}</a>
						</li>
					@endguest
			    </ul>
		    </div>
		 </div>
	</nav>
	<!-- nav end -->
	<!-- spek produk -->
	<section class="container sproduct my-4 pt-4">
		<div class="row mt-4 p-4">
			<div class="col-lg-4 col-md-12 col-12">
				<!-- <img class="image-fluid w-100 pb-1" src="assets/img/image1.jpg" id="MainImg" alt=""> -->
				<div id="carouselExampleControlsNoTouching" class="carousel slide pb-2" data-bs-touch="false">
					<div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{ asset('images/model/model1.png') }}" class="w-75" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('images/model/model1_1.png') }}" class="w-75" alt="...">
					    </div>
					    <!-- <div class="carousel-item">
					      <img src="assets/img/model/spec1.png" class="w-75" alt="...">
					    </div> -->
					</div>
					  <button class="carousel-control-prev text-secondary" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next text-secondary" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-12 mb-3">
				<h6 class="py-0 mb-2">Home/Dress</h6>
				<h3 class="mb-2">Men's Fashion</h3>
				<h5>Harga 50.000</h5>
				<select class="my-3" id="">
					<option value="">Select Size</option>
					<option value="">XXL</option>
					<option value="">XL</option>
					<option value="">L</option>
					<option value="">M</option>
				</select>
				<input type="number" value="1">
				<a href="#" class="btn btn-dark btn-cart m-0"><i class='bx bx-cart'></i></a>
				<a class="btn btn-dark p-2" style="color: #FFD700;" href="#popup" id="button">AR VIEW</a>
				<!-- start popup -->
				<div id="popup">
					<div class="window">
						<a class="close-button p-1" href="#">X</a>
						{{-- <img src="assets/img/bar2.jpeg" width="75%" class="pt-2" alt=""> --}}
						<img src="{{ asset('images/bar2.jpeg') }}" width="75%" class="pt-2" alt="">
						<div class="mt-2">
							<span><b>Please Download Snapchat First!</b></span>
						</div>
					</div>
				</div>
				<!-- end popup -->
			</div>
			<div class="col-lg-5 col-md-12 col-12 mb-3 px-auto">
				<h4 class="mb-3">Product detail</h4>
				<p class="mb-2">
					<b>FIT BATIK</b> ready stock
				</p>
				<table>
					<tr><td>Kondisi : Baru</td></tr>
					<tr><td>Jenis : batik</td></tr>
					<tr><td>Bahan : Katun</td></tr>
					<tr><td>Kategori : Baju</td></tr>
				</table>
				<br>
				<p>
					<b>CATATAN*</b>
					<table>
					<tr><td>1. Ilustrasi gambar digunakan untuk membantu visualisasi kain setelah dijahit</td></tr>
					<tr><td>2. Variasi warna kain akan sedikit berbeda dari hasil foto akibat efek cahaya pada saat pemotretan</td> </tr>
					<tr><td>3. Hasil akhir setelah dijahit dapat berbeda karena faktor ukuran badan dari sudut pandang penjahit</td> </tr>
				</table>
				</p>
				
			</div>
		</div>
	</section>
	<!-- produk end -->

	<section class="my-5 pb-4" id="relate">
		<div class="container">
			<h3 class="text-center m-0">Related Product</h3>
			<hr class="mx-auto mb-5">
			<div class="row">
				<div class="col-lg-3 col-6">
    				<div class="card card-body p-3 ">
						<div class="product">
							<a href="#"><img class="image-fluid position-center" src="{{ asset('images/img1.png') }}" width="100%" alt="ini gambar 1"></a>
							<h3 class="judul mt-3">Baju Batik</h3>
							<div class="rating">
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
							</div>
							<p class="sale m-0 mt-3">Terjual 500 produk</p>
							<div>
								<a href="#" class="badge text-bg-warning">Baju</a>
							</div>
							<div class="detail d-flex justify-content-between align-items-center mt-4">
								<p class="price m-0"><b>Harga 50.000</b></p>
								
							</div>
							<div class="detail d-flex align-items-center mt-3">
								<a href="#" class="btn btn-dark text-warning me-1 p-2">BUY</i></a>
								<a href="#" class="btn btn-dark btn-cart m-0"><i class='bx bx-cart'></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-6 mb-4">
    				<div class="card card-body p-3 ">
						<div class="product">
							<a href="#"><img class="image-fluid position-center" src="{{ asset('images/model/model2.png') }}" width="100%" alt="ini gambar 1"></a>
							<h3 class="judul mt-3">Batik Lengan Panjang</h3>
							<div class="rating">
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
								<i class='bx bxs-star' ></i>
							</div>
							<p class="sale m-0 mt-3">Terjual 500 produk</p>
							<div>
								<a href="#" class="badge text-bg-warning">Baju</a>
							</div>
							<div class="detail d-flex justify-content-between align-items-center mt-4">
								<p class="price m-0"><b>Harga 50.000</b></p>
								
							</div>
							<div class="detail d-flex align-items-center mt-3">
								<a href="#" class="btn btn-dark text-warning me-1 p-2">BUY</i></a>
								<a href="#" class="btn btn-dark btn-cart m-0"><i class='bx bx-cart'></i></a>
							</div>
						</div>
					</div>
				</div>

    			<div class="col-lg-3 col-6">
    				<div class="card card-body p-3 ">
    					<a href="#"><img class="image-fluid position-center" src="{{ asset('images/model/model3.png') }}" width="100%" alt="ini gambar 1"></a>
    					<h3 class="judul mt-3">Baju Lengan Pendek</h3>
    					<div class="rating">
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    					</div>
    					<p class="sale m-0 mt-3">Terjual 500 produk</p>
    					<div>
    						<a href="#" class="badge text-bg-warning">Baju</a>
    					</div>
    					<div class="detail d-flex justify-content-between align-items-center mt-4">
    						<p class="price m-0"><b>Harga 50.000</b></p>
    						
    					</div>
    					<div class="detail d-flex align-items-center mt-3">
    						<a href="#" class="btn btn-dark text-warning me-1 p-2">BUY</i></a>
    						<a href="#" class="btn btn-dark btn-cart m-0"><i class='bx bx-cart'></i></a>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-3 col-6">
    				<div class="card card-body p-3 ">
    					<a href="#"><img class="image-fluid position-center" src="{{ asset('images/tas_1.png') }}" width="100%" alt="ini gambar 1"></a>
    					<h3 class="judul mt-3">Tas Batik</h3>
    					<div class="rating">
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    						<i class='bx bxs-star' ></i>
    					</div>
    					<p class="sale m-0 mt-3">Terjual 500 produk</p>
    					<div>
    						<a href="#" class="badge text-bg-warning">Tas</a>
    					</div>
    					<div class="detail d-flex justify-content-between align-items-center mt-4">
    						<p class="price m-0"><b>Harga 50.000</b></p>
    						
    					</div>
    					<div class="detail d-flex align-items-center mt-3">
    						<a href="#" class="btn btn-dark text-warning me-1 p-2">BUY</i></a>
    						<a href="#" class="btn btn-dark btn-cart m-0"><i class='bx bx-cart'></i></a>
    					</div>
    				</div>
    			</div>
			</div>
		</div>
	</section>

    <footer>
    	<div class="container pt-5">
    		<div class="mark-custom">
    			<div class="row row-content text-warning">
    			<div class="col-md-6">
    				<img src="{{ asset('images/logo/logo3.png') }}" class="mb-3" width="" alt="logo umkm">
    			</div>
    			<div class="col-md-3">
    				<h3 class="mb-3 text-warning">Navigation</h3>
    				<ul class="p-0" style="list-style-type: none;">
					    <li><a href="#">Home</a></li>
						<li class="mt-3"><a href="#">Product</a></li>
					</ul>
    			</div>
    			<div class="col-md-3" style="color: #FFD700;">
    				<h3 class="mb-3">Address</h3>
    				<p>Jl. Magelang Km55</p>
    			</div>
    		</div>
    		<div class="row row-copy">
    			<div class="col-md-6">
    				<p style="color: #FFD700;">Copyright 2021 &#64Hackathon AMICTA</p>
    			</div>
    			<div class="col-md-6 text-end">
    				<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
    				<a href="#"><i class='bx bxl-facebook-square' ></i></a>
    			</div>
    		</div>
    		</div>
    		
    	</div>
    </footer> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<!-- <script src="assets/style/script.js"></script> -->
</body>
</html>