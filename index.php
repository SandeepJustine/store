<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					<div class="headin">
						<div class="headin-content">

							<!-- Headein : Headin -->

							<div class="slider-container">
								<div class="slider">
									<div class="slide">
									<img src="images/dell.png" alt="Affordable Electronics" class="slide-image">
									<div class="headin-headin">
										<div class="lean-title">
											<p>Affordable Electronics.</p>
											<p>Best of Cool.</p>
										</div>
									</div>
									</div>
									<div class="slide">
									<img src="images/note-8.png" alt="Innovative Gadgets" class="slide-image">
									<div class="headin-headin">
										<div class="lean-title">
										<p>Innovative Gadgets.</p>
										<p>Top Quality Guaranteed.</p>

										</div>
									</div>
									</div>
									<div class="slide">
									<img src="images/pc-box.png" alt="Exclusive Discounts" class="slide-image">
									<div class="headin-headin">
										<div class="lean-title">
										<p>Exclusive Discounts.</p>
										<p>Shop and Save Big.</p>
										</div>
									</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<br></br>
					<div class="ux-headin">
                        <div class="ux-title">
                            <p><span>Store.</span> The best way to buy the products you love.</p>
                        </div>
                    </div>
					<!--<div class="ux-content">
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/note-8.png" alt="Phones">
                                </div>
                                <div class="ux-name">Phones</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/dell.png" alt="Laptops">
                                </div>
                                <div class="ux-name">Laptops</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/pc-box.png" alt="Desktops">
                                </div>
                                <div class="ux-name">Desktops</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/smart-watch.png" alt="Smart Watches">
                                </div>
                                <div class="ux-name">Smart Watches</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/headphone.png" alt="Earphones">
                                </div>
                                <div class="ux-name">Earphones</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/power-bank.png" alt="Powerbanks">
                                </div>
                                <div class="ux-name">Powerbanks</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/case.png" alt="Phone Cases">
                                </div>
                                <div class="ux-name">Phone Cases</div>
                            </div>
                        </a>
                        <a href="">
                            <div class="ux-box">
                                <div class="ux-logo">
                                    <img src="images/speaker.png" alt="Speakers">
                                </div>
                                <div class="ux-name">Speakers</div>
                            </div>
                        </a>
                    </div>-->
					<div class="ux-content">
						<a href="categories.php?category=Smart Phones">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/note-8.png" alt="Phones">
								</div>
								<div class="ux-name">Phones</div>
							</div>
						</a>
						<a href="categories.php?category=Laptops">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/dell.png" alt="Laptops">
								</div>
								<div class="ux-name">Laptops</div>
							</div>
						</a>
						<a href="categories.php?category=Desktop PC">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/pc-box.png" alt="Desktop PC">
								</div>
								<div class="ux-name">Desktops</div>
							</div>
						</a>
						<a href="categories.php?category=Smart Watches">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/smart-watch.png" alt="Smart Watches">
								</div>
								<div class="ux-name">Smart Watches</div>
							</div>
						</a>
						<a href="categories.php?category=Earphones">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/headphone.png" alt="Earphones">
								</div>
								<div class="ux-name">Earphones</div>
							</div>
						</a>
						<a href="categories.php?category=Powerbanks">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/power-bank.png" alt="Powerbanks">
								</div>
								<div class="ux-name">Powerbanks</div>
							</div>
						</a>
						<a href="categories.php?category=Phone Cases">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/case.png" alt="Phone Cases">
								</div>
								<div class="ux-name">Phone Cases</div>
							</div>
						</a>
						<a href="categories.php?category=Speakers">
							<div class="ux-box">
								<div class="ux-logo">
									<img src="images/speaker.png" alt="Speakers">
								</div>
								<div class="ux-name">Speakers</div>
							</div>
						</a>
					</div>


		            <h2>Monthly Top Sellers</h2>
					<div class="product-slider-container">
						<div class="product-slider">
							<?php
								$month = date('m');
								$conn = $pdo->open();

								try {
									$stmt = $conn->prepare("
										SELECT *, SUM(quantity) AS total_qty 
										FROM details 
										LEFT JOIN sales ON sales.id = details.sales_id 
										LEFT JOIN products ON products.id = details.product_id 
										WHERE MONTH(sales_date) = '$month' 
										GROUP BY details.product_id 
										ORDER BY total_qty DESC 
										LIMIT 10
									");
									$stmt->execute();
									foreach ($stmt as $row) {
										$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
										echo "
											<div class='productscroll-item'>
												<div class='productscroll-image'>
													<img src='".$image."' alt='".$row['name']."'>
												</div>
												<div class='productscroll-details'>
													<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
													<p class='productscroll-price'>&#36; ".number_format($row['price'], 2)."</p>
												</div>
											</div>
										";
									}
								} catch (PDOException $e) {
									echo "There is some problem in connection: " . $e->getMessage();
								}

								$pdo->close();
							?>
						</div>
						<button class="slider-prev">&#10094;</button>
						<button class="slider-next">&#10095;</button>
					</div>
					<h2>Featured Product</h2>
					<div class="product-slider-container">
						<div class="product-scrollable">
							<?php
								$conn = $pdo->open();

								try {
									$stmt = $conn->prepare("SELECT * FROM products");
									$stmt->execute();
									foreach ($stmt as $row) {
										$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
										echo "
											<div class='productscroll-item'>
												<div class='productscroll-image'>
													<img src='".$image."' alt='".$row['name']."'>
												</div>
												<div class='productscroll-details'>
													<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
													<p class='productscroll-price'>&#36; ".number_format($row['price'], 2)."</p>
												</div>
											</div>
										";
									}
								} catch (PDOException $e) {
									echo "There is some problem in connection: " . $e->getMessage();
								}

								$pdo->close();
							?>
						</div>
					</div>


	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
		  <!-- Lean -->

		  <section>
				<div class="lean">
					<div class="lean-all">
						<div class="lean-contain">

							<!-- Lean : Content -->

							<div class="lean-content">
								<div class="box-title">
									<p>Best Site to Buy Products Online</p>
								</div>
								<div class="lean-name">
									<p>Get One year garantee for each product</p>
								</div>
								<div class="lean-button">
									<a href="">
										<button>About Us</button>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>