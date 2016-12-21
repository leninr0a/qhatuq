@extends('layouts.qhatuq')
@section('content')

	<!-- Slider Principal -->
	<div class="row without-margin"> 
	  <div class="col-md-12 without-padding"> 
	    <div id="Slider" class="carousel slide height-slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#Slider" data-slide-to="0" class="active"></li>
	        <li data-target="#Slider" data-slide-to="1"></li>
	        <li data-target="#Slider" data-slide-to="2"></li>
	        <li data-target="#Slider" data-slide-to="3"></li>
	        <li data-target="#Slider" data-slide-to="4"></li>
	        <li data-target="#Slider" data-slide-to="5"></li>
	        <li data-target="#Slider" data-slide-to="6"></li>
	      </ol>

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img src="img/1.png" alt="Chania">
	        </div>

	        <div class="item">
	          <img src="img/2.png" alt="Chania">
	        </div>

	        <div class="item">
	          <img src="img/3.png" alt="Flower">
	        </div>

	        <div class="item">
	          <img src="img/4.png" alt="Flower">
	        </div>

	        <div class="item">
	          <img src="img/5.png" alt="Camara">
	        </div>

	        <div class="item">
	          <img src="img/6.png" alt="Camara">
	        </div>

	        <div class="item">
	          <img src="img/7.png" alt="Camara">
	        </div>
	      </div>

	      <!-- Left and right controls -->
	      <a class="left carousel-control" href="#Slider" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#Slider" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div>
	  </div>
	</div>

	<div id="mainBody" class="container">
		<div class="row">
			<!-- Categoria de tiendas -->
			<div id="sideBar" class="col-sm-3 col-md-3">
				<div class="card">
					<h3 class="card-header">Categoría de tiendas</h3>
					<div class="card-block">
						<ul class="card-text">
							<li><a href="#">Deportivas (245)</a></li>
							<li><a href="#">Electrónicas (80)</a></li>
							<li><a href="#">Ropa (130)</a></li>
							<li><a href="#">Cosméticos (186)</a></li>
							<li><a href="#">Lencería (45)</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Tiendas y productos -->
			<div id="products" class="col-sm-9 col-md-9">
				<!-- Carousel de productos -->
				<div class="content-slide">
					<h4 class="subtitle">Características de los productos</h4>
					<div class="row">
						<div id="myCarousel" class="carousel slide height-slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">

								<!-- Primer grupo de 4 productos -->
								<div class="item active">
									<ul class="list-products">
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/b1.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/b2.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/b3.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/b4.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<!-- Segundo grupo de 4 productos -->
								<div class="item">
									<ul class="list-products">
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/1.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/2.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div> 
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/3.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													<div class="right text-black">$222.00</div>
												</div>
											</div>
										</li>
										<li class="col-sm-3 col-md-3">
											<div class="product">
												<a href="#">
													<img src="img/products/4.jpg" alt="">
												</a>
												<div class="caption">
													<h5>Nombre del producto</h5>
													<a class="btn btn-default" href="">VER</a>
													
												</div>
											</div> 
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Ultimas tiendas -->
				<div class="last-shop">
					<h4 class="subtitle">Últimos tiendas</h4>
					<ul>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<div class="ih-item square effect13 left_to_right">
									<a href="#">
						        		<img src="img/products/6.jpg" alt="img">
						        		<div class="info">
						          			<h3>Nombre del producto</h3>
						          			<p class="text-white">Lorem is simply dumit test, lorem is empty dummit test.</p>
						        		</div>
						        	</a>
						        </div>
								<div class="caption">
									<!-- <h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p> -->
									<a class="btn btn-default" href=""><i class="fa fa-search" aria-hidden="true"></i></a>
									<a class="btn btn-default" href="">Add to <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="btn btn-primary" href="">$222.00</a>
								</div>
							</div>
						</li>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<a href="#">
									<img src="img/products/7.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p>
									<a class="btn btn-default" href="">VER</a>
									<div class="right text-black">$222.00</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<a href="#">
									<img src="img/products/8.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p>
									<a class="btn btn-default" href="">VER</a>
									<div class="right text-black">$222.00</div>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<a href="#">
									<img src="img/products/9.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p>
									<a class="btn btn-default" href="">VER</a>
									<div class="right text-black">$222.00</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<a href="#">
									<img src="img/products/10.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p>
									<a class="btn btn-default" href="">VER</a>
									<div class="right text-black">$222.00</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4 col-md-4">
							<div class="product">
								<a href="#">
									<img src="img/products/11.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Nombre del producto</h5>
									<p>Lorem is simply dumit test.</p>
									<a class="btn btn-default" href="">VER</a>
									<div class="right text-black">$222.00</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop