<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategoriler</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
								<?php
									foreach($kategoriler as $rs)
									{
									?>
									<h4 class="panel-title"><a href="<?=base_url() ?>home/kategori/<?=$rs->Id?>/<?=$rs->adi?>"><?=$rs->adi?></a></h4>
									<?php
									}
									?>
								</div>
								
							</div>
							
						</div><!--/category-products-->
					</div>
				</div>