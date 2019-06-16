<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9 padding-right">
				<h2 class="title text-center">Kategori Ürünleri</h2>
				<?php
				$say=0;
				foreach($veri as $rs)
				{
					
					if ($say==0)
					{
						echo '<div class="features_items">';
						echo '<div class="col-sm-4">';
					}
					
				?>
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=base_url() ?>uploads/<?=$rs->resim?>" alt="" />
										<h2><?=$rs->sfiyat?>TL</h2>
										<p><?=$rs->adi?></p>
										<a href="<?=base_url() ?>home/urun_detay<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><?=$rs->adi?></a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?=$rs->sfiyat?></h2>
											<p><?=$rs->adi?></p>
											<a href="<?=base_url() ?>home/sepete_ekle<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><?=$rs->adi?></a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Sepete Ekle</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Karşılaştır</a></li>
									</ul>
								</div>
							</div>
				    <?php
					$say=$say+1;
					if ($say==3)
					{
						echo '</div>';
						echo '</div>';
						$say=0;
						
					}
				
					
				}
				?>
			</div>
						
		</div><!--features_items-->
					
	</div>
  </div>
  </div>
</section>