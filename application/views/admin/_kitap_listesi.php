<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kitaplar</h2>
						
						<a class="btn btn-success" href="<?=base_url() ?>admin/kitaplar/ekle"><i class="fa fa-user-plus"></i>
							Yeni Kitap Ekle</a>
							<br>
							<br>
							<?php if ($this->session->flashdata("sonuc"))
							{
								?>
						 <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> işlem :</strong> <?=$this->session->flashdata("sonuc")?>
                       </div>
					   <?php } ?>
						<div class="row">
						
							<div class="col-md-12">
							
						

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
					
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Kitap Adi</th>
											<th>Türü</th>
											<th>Kategoriler</th>
											<th>Alış Fiyatı</th>
											<th>Satış Fiyatı</th>
											<th>Durum</th>
											<th>Resim</th>
											<th>Galeri</th>
											<th>işlemler</th>
											
										</tr>
									</thead>
									
									<tbody>
									<?php
									foreach ($veri as $rs)
									{
									?>
										<tr>
											<td><?=$rs->adi?></td>
											<td><?=$rs->turadi?></td>
											<td><?=$rs->katadi?></td>
											<td><?=$rs->afiyat?></td>
											<td><?=$rs->sfiyat?></td>
											
											<td class="center">
												<span class= "label-success label label-default"><?=$rs->durum?></span>
											</td>
											
											<td class="center">
											 <a href="<?=base_url() ?>admin/kitaplar/resim_ekle/<?=$rs->Id?>">
											
												<?php
													if ($rs->resim==NULL)
													
												{?>
															<span class="btn btn-primary btn-xs"> Resim Ekle  </span>
												<?php
												}else
												{?>

												         <img height="40" widht="30" src="<?=base_url() ?>uploads/<?=$rs->resim?>">
												<?php
												}
												?>
												</a>
											</td>
											
											<td class="center">
												<a href="<?=base_url() ?>admin/kitaplar/resim_galeri_ekle/<?=$rs->Id?>"><img widht="30" height="40" src="<?=base_url() ?>assets/admin/img/image_gallery.png"></a>
											</td>
											
												
											<td class="center">
												<a class="btn btn-success" href="<?=base_url() ?>admin/kitaplar/goster/<?=$rs->Id?>">
												<i class="glyphicon glyphicon-zoom-in icon-white"></i>
														Göster
												</a>
												<a class="btn btn-info" href="<?=base_url() ?>admin/kitaplar/edit/<?=$rs->Id?>">
												<i class="glyphicon glyphicon-edit icon-white"></i>
														Düzenle
												</a>
												<a class="btn btn-danger" href="<?=base_url() ?>admin/kitaplar/delete/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizen emin misiniz?');">
												<i class="glyphicon glyphicon-trash icon-white"></i>
													    Sil
												</a>
											</td>
											
										</tr>
									<?php
									}
									?>	
											
										</tr>
									</tbody>
								</table>

								

							</div>
						</div>

					
						</div>

						

			</div>
		</div>
	</div>