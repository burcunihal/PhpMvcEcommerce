<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=base_url() ?>uploads/<?=$veri[0]->resim?>" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?=base_url() ?>uploads/<?=$veri[0]->resim?>" alt=""></a>
										  
										</div>
										<?php
										foreach($veriler as $rs)
										{
										?>
										<div class="item">
										  <a href=""><img src="<?=base_url() ?>uploads/<?=$rs->resim?>" alt=""></a>
										  
										</div>
										<?php
										}
										?>
										
									</div>
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2><?=$veri[0]->adi?></h2>
								
								<span>
									<span><?=$veri[0]->sfiyat?>TL</span>
									<label>ADET:</label>
									<input type="text" value="<?=$veri[0]->adet?>" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
									Sepete Ekle
									</button>
								</span>
								
								<h4><p><b>Durum:</b><?=$veri[0]->durum?></p></h4>
								<h4><p><b>Yazar:</b><?=$veri[0]->yazar?></p></h4>
								<h4><p><b>Sayfa Sayisi:</b><?=$veri[0]->sayfa_sayisi?></p></h4>
								<p><b>Kategori: </b> <?=$veri[0]->katadi?></p>
								<p><b>Türü:   </b> <?=$veri[0]->turadi?></p>
							
								<p><?=$veri[0]->kisaaciklama?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Detay</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
						
								<li class="active"><a href="#reviews" data-toggle="tab">Yorum Yazın</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-10">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
										
											    <p><?=$veri[0]->aciklama?></p>
												
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										
										<button type="button" class="btn btn-default pull-right">
											GÖNDER
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>